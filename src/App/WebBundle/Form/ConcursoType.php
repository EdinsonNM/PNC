<?php

namespace App\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConcursoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('fechaini')
            ->add('fechafin')
            ->add('presentacion')
            ->add('objetivos')
            ->add('requisitos')
            ->add('participantes')
            ->add('beneficios')
            ->add('categorias')
            ->add('premiootorgar')
            ->add('medallas')
            ->add('cuota')
            ->add('informacion')
            ->add('anio')
            ->add('estadoemp')
            ->add('estadopy')
            ->add('estado')
            ->add('terminoacepta')
            ->add('incpuntaje')
            ->add('evaluacriterio')
            ->add('informeretro')
            ->add('calificacion')
            ->add('prefijo')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\WebBundle\Entity\Concurso'
        ));
    }

    public function getName()
    {
        return 'app_webbundle_concursotype';
    }
}
