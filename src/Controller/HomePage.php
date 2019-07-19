<?php


namespace App\Controller;


use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class HomePage extends AbstractController
{


    /**
     * @Route("/", name="home_page")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function home_page(Request $request)
    {

        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();

        $post = new Post();

        $post_form = $this->createFormBuilder($post)
            ->add('text', TextType::class, [
                'label' => 'Mesaj'
            ])
            ->add('user', IntegerType::class, [
                'label' => 'Kullanıcı'
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Paylaş'
            ])
            ->getForm();

        $post_form->handleRequest($request);

        if($post_form->isSubmitted() && $post_form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $post = $post_form->getData();
            $em->persist($post);
            $em->flush();

            $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();

            return $this->render('home-page.html.twig', [
                "posts" => $posts,
                "post_form" => $post_form->createView(),
            ]);
        }

        return $this->render("home-page.html.twig", [
            "posts" => $posts,
            "post_form" => $post_form->createView(),
        ]);
    }

}