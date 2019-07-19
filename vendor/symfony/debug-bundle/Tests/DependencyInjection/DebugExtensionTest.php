<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\DebugBundle\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\DebugBundle\DependencyInjection\DebugExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use Symfony\Component\VarDumper\Caster\ReflectionCaster;

class DebugExtensionTest extends TestCase
{
    public function testLoadWithoutConfiguration()
    {
        $container = $this->createContainer();
        $container->registerExtension(new DebugExtension());
        $container->loadFromExtension('debug', []);
        $this->compileContainer($container);

        $expectedTags = [
            [
                'id' => 'dump',
                'template' => '@Debug/Profiler/dump.html.twig',
                'priority' => 240,
            ],
        ];

        $this->assertSame($expectedTags, $container->getDefinition('data_collector.dump')->getTag('data_collector'));
    }

    public function testUnsetClosureFileInfoShouldBeRegisteredInVarCloner()
    {
        if (!method_exists(ReflectionCaster::class, 'unsetClosureFileInfo')) {
            $this->markTestSkipped('Method not available');
        }

        $container = $this->createContainer();
        $container->registerExtension(new DebugExtension());
        $container->loadFromExtension('debug', []);
        $this->compileContainer($container);

        $definition = $container->getDefinition('var_dumper.cloner');

        $called = false;
        foreach ($definition->getMethodCalls() as $call) {
            if ('addCasters' !== $call[0]) {
                continue;
            }

            $argument = $call[1][0] ?? null;
            if (null === $argument) {
                continue;
            }

            if (['Closure' => ReflectionCaster::class.'::unsetClosureFileInfo'] === $argument) {
                $called = true;
                break;
            }
        }

        $this->assertTrue($called);
    }

    private function createContainer()
    {
        $container = new ContainerBuilder(new ParameterBag([
            'kernel.cache_dir' => __DIR__,
            'kernel.charset' => 'UTF-8',
            'kernel.debug' => true,
            'kernel.bundles' => ['DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle'],
        ]));

        return $container;
    }

    private function compileContainer(ContainerBuilder $container)
    {
        $container->getCompilerPassConfig()->setOptimizationPasses([]);
        $container->getCompilerPassConfig()->setRemovingPasses([]);
        $container->compile();
    }
}
