<?php
/**
 * Created by PhpStorm.
 * User: Marko Kunic
 * Date: 9/8/17
 * Time: 11:53 PM
 */

namespace KunicMarko\ColorPickerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ColorPickerType extends AbstractType
{
    public function getParent()
    {
        return TextType::class;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'attr' => array(
                'class' => 'form-control colorpicker'
            ),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'color_picker';
    }
}
