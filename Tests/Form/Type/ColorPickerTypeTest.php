<?php

namespace KunicMarko\ColorPickerBundle\Tests\Form\Type;

use KunicMarko\ColorPickerBundle\Form\Type\ColorPickerType;
use Symfony\Component\Form\Test\TypeTestCase;

class ColorPickerTypeTest extends TypeTestCase
{
    public function testBuildForm()
    {
        $formBuilder = $this->getMockBuilder('Symfony\Component\Form\FormBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $type = new ColorPickerType();
        $type->buildForm($formBuilder, []);
    }

    public function testSubmitValidData()
    {
        $data = '#556b2f';
        $form = $this->factory->create('KunicMarko\ColorPickerBundle\Form\Type\ColorPickerType');
        $form->submit($data);
        $this->assertTrue($form->isSynchronized());
    }

    public function testGetParent()
    {
        $form = new ColorPickerType();

        $parentRef = $form->getParent();

        $isFQCN = class_exists($parentRef);

        $this->assertTrue($isFQCN, sprintf('Unable to ensure %s is a FQCN', $parentRef));
    }
}
