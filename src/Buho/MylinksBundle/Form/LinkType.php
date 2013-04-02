<?php

namespace Buho\MylinksBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LinkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('uri')
            ->add('description')
            ->add('tags')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Buho\MylinksBundle\Entity\Link'
        ));
    }

    public function getName()
    {
        return 'buho_mylinksbundle_linktype';
    }
}
