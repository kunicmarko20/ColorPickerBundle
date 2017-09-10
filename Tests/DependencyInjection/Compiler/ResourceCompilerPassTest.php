<?php

namespace KunicMarko\ColorPickerBundle\Tests\DependencyInjection\Compiler;

use KunicMarko\ColorPickerBundle\DependencyInjection\Compiler\ResourceCompilerPass;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ResourceCompilerPassTest extends TestCase
{
    /**
     * @var ResourceCompilerPass
     */
    private $compilerPass;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->compilerPass = new ResourceCompilerPass();
    }

    public function testTwigResource()
    {
        $containerBuilder = $this->createContainerBuilderMock();

        $containerBuilder
            ->expects($this->once())
            ->method('hasParameter')
            ->will($this->returnValue(
                [$parameter = 'twig.form.resources', true]
            ));

        $containerBuilder
            ->expects($this->once())
            ->method('getParameter')
            ->with($this->identicalTo($parameter))
            ->will($this->returnValue([]));

        $containerBuilder
            ->expects($this->once())
            ->method('setParameter')
            ->with(
                $this->identicalTo($parameter),
                $this->identicalTo(['@ColorPicker/Form/color_picker_widget.html.twig'])
            );

        $this->compilerPass->process($containerBuilder);
    }

    /**
     * @return ContainerBuilder|\PHPUnit_Framework_MockObject_MockObject
     */
    private function createContainerBuilderMock()
    {
        return $this->getMockBuilder(ContainerBuilder::class)
            ->disableOriginalConstructor()
            ->setMethods(['hasParameter', 'getParameter', 'setParameter'])
            ->getMock();
    }
}
