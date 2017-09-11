<?php

namespace KunicMarko\ColorPickerBundle\Tests\DependencyInjection;

use KunicMarko\ColorPickerBundle\DependencyInjection\ColorPickerExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

class ColorPickerExtensionTest extends AbstractExtensionTestCase
{
    public function testLoadsFormServiceDefinitionWhenColorPickerBundleIsRegistered()
    {
        $this->container->setParameter('kernel.bundles', ['ColorPickerBundle' => 'whatever']);
        $this->load();
        $this->assertContainerBuilderHasService(
            'color_picker.form.color_picker',
            'KunicMarko\ColorPickerBundle\Form\Type\ColorPickerType'
        );
    }

    protected function getContainerExtensions()
    {
        return [new ColorPickerExtension()];
    }
}
