<?php

namespace Fix\ServicemeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use \Symfony\Component\Form\Extension\Core\Type\EmailType;
use \Symfony\Component\Form\Extension\Core\Type\PasswordType;
use \Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use \Symfony\Component\Form\Extension\Core\Type\DateType;
use \Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use \Symfony\Component\Form\Extension\Core\Type\TextType;


class UsuariosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usuario', TextType::class)
            ->add('nombres', TextType::class)
            ->add('apellidos', TextType::class)
            ->add('genero', ChoiceType::class)
            ->add('fechaNacimiento', DateType::class, array('label' => 'Fecha Nacimiento'))
            ->add('correo', EmailType::class)
            ->add('contrasena', PasswordType::class, array('label' => 'Contraseña'))
            ->add('documentoTipo')
            ->add('documentoNumero')
            ->add('telefonoFijo')
            ->add('telefonoMovil')
            ->add('cargo')
            ->add('role', ChoiceType::class, 
                    array('choices' => array(
                        'ROLE_ADMIN' => 'Administrador',
                        'ROLE_MCR' => 'Analista',
                        'ROLE_INV' => 'Invitado'
                    ), 'placeholder' => 'Seleccione una Opción')
                 )
            ->add('activo')
            ->add('guardar', SubmitType::class, array('label' => 'Crear Usuario'))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fix\ServicemeBundle\Entity\Usuarios'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'usuario';
    }


}
