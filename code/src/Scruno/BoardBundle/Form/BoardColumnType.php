<?php

namespace Scruno\BoardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BoardColumnType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('position')
            ->add('status')
            ->add('isDefault')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Scruno\BoardBundle\Entity\BoardColumn'
        ));
    }

    public function getName()
    {
        return 'scruno_boardbundle_boardcolumntype';
    }
}
