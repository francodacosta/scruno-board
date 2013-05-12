<?php

namespace Scruno\BoardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('created')
            ->add('changed')
            ->add('complexity')
            ->add('type')
            ->add('owner')
            ->add('backlog')
            ->add('status')
            ->add('position')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Scruno\BoardBundle\Entity\Task'
        ));
    }

    public function getName()
    {
        return 'scruno_boardbundle_tasktype';
    }
}
