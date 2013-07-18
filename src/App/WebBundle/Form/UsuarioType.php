<?php

namespace App\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codusuario')
            ->add('nombre')
            ->add('nombrecorto')
            ->add('loguin')
            ->add('password')
            ->add('estado')
            ->add('modoaceso')
            ->add('fecharegistro')
            ->add('ultimoacceso')
            ->add('cambiapass')
            ->add('email')
            ->add('tipodocumento')
            ->add('nrodocumento')
            ->add('nombres')
            ->add('apellidos')
            ->add('fechacrea')
            ->add('fechamodifica')
            //->add('user')
            ->add('terminal')
            ->add('TS')
            //->add('perfil')
            ->add('perfil','entity', array('class'=>'App\WebBundle\Entity\Perfil', 'property'=>'nombre', ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\WebBundle\Entity\Usuario'
        ));
    }

    public function getName()
    {
        return 'app_webbundle_usuariotype';
    }
}
