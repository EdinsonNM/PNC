<?php

namespace App\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConflictoDeInteresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('razonsocial1')
            ->add('ruc')
            ->add('razonsocial2')
            ->add('inicio')
            ->add('fin')
            ->add('razonsocial3')
            ->add('descripcion')
            //->add('vinculo')
            ->add('vinculo','entity', array('class'=>'App\WebBundle\Entity\TipoVinculo', 'property'=>'nombre', ))
            //->add('evaluador')
            ->add('evaluador','entity', array('class'=>'App\WebBundle\Entity\Evaluador', 'property'=>'nombres', ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\WebBundle\Entity\ConflictoDeInteres'
        ));
    }

    public function getName()
    {
        return 'app_webbundle_conflictodeinterestype';
    }
}
