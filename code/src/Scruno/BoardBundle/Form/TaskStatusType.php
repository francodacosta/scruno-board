<?php

namespace Scruno\BoardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TaskStatusType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('position')
            ->add('isComplete')
            ->add('isDefault')
            ->add('isStopped')
            ->add('isInProgress')
            ->add('isBlocked')
            ->add('showInBoard')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Scruno\BoardBundle\Entity\TaskStatus'
        ));
    }

    public function getName()
    {
        return 'scruno_boardbundle_taskstatustype';
    }
}
