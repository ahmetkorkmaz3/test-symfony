<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home-page.html.twig */
class __TwigTemplate_c081e8e3814e6fa5740635de57363e55d234a7eb9763688c404fdf2562465a23 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home-page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home-page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home-page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <!-- User Login ise Formu Göster yapılacak -->

    <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
            <div class=\"col-md-8\">
                <h1 class=\"text-success\">Post Ekle</h1>
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["post_form"]) || array_key_exists("post_form", $context) ? $context["post_form"] : (function () { throw new RuntimeError('Variable "post_form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["post_form"]) || array_key_exists("post_form", $context) ? $context["post_form"] : (function () { throw new RuntimeError('Variable "post_form" does not exist.', 12, $this->source); })()), 'widget');
        echo "
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["post_form"]) || array_key_exists("post_form", $context) ? $context["post_form"] : (function () { throw new RuntimeError('Variable "post_form" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>


    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 20
            echo "        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 mb-2\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 25), "html", null, true);
            echo "
                        </div>
                        <div class=\"card-body\">
                            <blockquote class=\"blockquote mb-0\">
                                <p>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "text", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
                                <footer class=\"blockquote-footer\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 30), "html", null, true);
            echo "</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  111 => 29,  104 => 25,  97 => 20,  93 => 19,  84 => 13,  80 => 12,  76 => 11,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}


{% block body %}
    <!-- User Login ise Formu Göster yapılacak -->

    <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
            <div class=\"col-md-8\">
                <h1 class=\"text-success\">Post Ekle</h1>
                {{ form_start(post_form) }}
                {{ form_widget(post_form) }}
                {{ form_end((post_form)) }}
            </div>
        </div>
    </div>


    {% for post in posts %}
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 mb-2\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            {{ post.user }}
                        </div>
                        <div class=\"card-body\">
                            <blockquote class=\"blockquote mb-0\">
                                <p>{{ post.text }}</p>
                                <footer class=\"blockquote-footer\">{{ post.user }}</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}", "home-page.html.twig", "/var/www/test.symfony.com/public_html/templates/home-page.html.twig");
    }
}
