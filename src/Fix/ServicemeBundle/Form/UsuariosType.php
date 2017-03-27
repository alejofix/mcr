<?php

namespace Fix\ServicemeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuariosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usuario')
            ->add('nombres')
            ->add('apellidos')
            ->add('genero')
            ->add('fechaNacimiento')
            ->add('correo', 'email')
            ->add('contrasena', 'password')
            ->add('documentoTipo')
            ->add('documentoNumero')
            ->add('telefonoFijo')
            ->add('telefonoMovil')
            ->add('cargo')
            ->add('role', 'choice', 
                    array('choices' => array('ROLE_ADMIN' => 'Administrator', 'ROLE_MCR' => 'Usuario MCR', 'ROLE_INV' => 'Invitado'), 
                    'placeholder' => 'Seleccione una Opción'))
            ->add('activo', 'checkbox')
            ->add('fechaCreado')
            ->add('Crear', 'sumbit', array('label' => 'Crear Usuario'))
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
