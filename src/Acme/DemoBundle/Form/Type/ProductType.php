<?php

namespace Acme\DemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name', 'text');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\\DemoBundle\\Entity\\Product',
            'label' => ' '
        ));
    }

    public function getName() {
        return 'product';
    }

}
