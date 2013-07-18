<?php

namespace App\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConcursoCronogramaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('fechaini')
            ->add('fechafin')
            ->add('fechacrea')
            ->add('fechamodifica')
            //->add('user')
            ->add('terminal')
            ->add('TS')
            ->add('fechaamplia')
            //->add('concurso')
            ->add('concurso','entity', array('class'=>'App\WebBundle\Entity\Concurso', 'property'=>'nombre', ))
            //->add('etapaevaluacion')
            ->add('etapaevaluacion','entity', array('class'=>'App\WebBundle\Entity\EtapaEvaluacion', 'property'=>'nombre', ))
            //->add('responsable')
            ->add('responsable','entity', array('class'=>'App\WebBundle\Entity\Responsable', 'property'=>'nombre', ))
                ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\WebBundle\Entity\ConcursoCronograma'
        ));
    }

    public function getName()
    {
        return 'app_webbundle_concursocronogramatype';
    }
}
