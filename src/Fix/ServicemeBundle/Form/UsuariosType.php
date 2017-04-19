<?php

namespace Fix\ServicemeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Doctrine\ORM\EntityRepository;

use \Symfony\Component\Form\Extension\Core\Type\EmailType;
use \Symfony\Component\Form\Extension\Core\Type\PasswordType;
use \Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use \Symfony\Component\Form\Extension\Core\Type\DateType;
use \Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use \Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
#
use \Symfony\Component\Validator\Constraints as Assert;
use \Symfony\Bridge\Doctrine\Form\Type\EntityType;


class UsuariosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('usuario', TextType::class, array(
            'label' => 'Usuario',
            'attr' => array('placeholder' => 'Agregar Usuario', 'autofocus' => 'autofocus'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Es un campo Requerido')))
        ));

        $builder->add('nombres', TextType::class, array(
            'label' => 'Nombre',
            'attr' => array('placeholder' => 'Agregar Nombres'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Es un campo Requerido')))
        ));

        $builder->add('apellidos', TextType::class, array(
            'label' => 'Apellidos',
            'attr' => array('placeholder' => 'Agregar Apellidos'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Es un campo Requerido')))
        ));

        $builder->add('genero', ChoiceType::class, array(
            'label' => 'Género',
            'choices' => array('Femenino' => '0', 'Masculino' => '1'),
            'placeholder' => 'Seleccione una Opción',
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Es un campo Requerido')))
        ));

        $builder->add('fechaNacimiento', BirthdayType::class, array(
            'label' => 'Fecha de Nacimiento',
        ));

        $builder->add('correo', EmailType::class, array(
            'label' => 'Correo',
            'attr' => array('placeholder' => 'Agregar Correo electrónico'),
            'constraints' => array(
                new Assert\Email(array('message' => 'Dirección de Correo electrónico no Válida')),
                new Assert\NotBlank(array('message' => 'Es un campo Requerido'))
                )
        ));
		
		
        $builder

          #  ->add('correo', EmailType::class, array('label' => 'Correo'))
            ->add('contrasena', PasswordType::class, array('label' => 'Contraseña'))
            ->add('documentoTipo', ChoiceType::class,
                    array( 'choices' => array(
                        'Cédula de Ciudadanía' => 'CC',
                        'Tarjeta de identidad' => 'TI',
                        'Cédula de Extranjería' => 'CE'), 
                            'placeholder' => 'Seleccione una Opción',
                            'label' => 'Tipo Documento'
                       ))
            ->add('documentoNumero', TextType::class, array('label' => 'Número Documento'))
            ->add('telefonoFijo', TextType::class, array('label' => 'Teléfono Fijo'))
            ->add('telefonoMovil', TextType::class, array('label' => 'Teléfono Móvil'))
            ->add('cargo', TextType::class, array('label' => 'Cargo'))
            ->add('role', ChoiceType::class, 
                    array('choices' => array(
                        'Administrador' => 'ROLE_ADMIN',
                        'Mejoramiento' => 'ROLE_MCR',
                        'Service Desk' => 'ROLE_SD',
                        'Experto' => 'ROLE_EXP',
                        'Invitado' => 'ROLE_INV'),
                            'placeholder' => 'Seleccione una Opción',
                            'label' => 'Role'
                        ))
            ->add('empresa', EntityType::class, array(
                    'class' => 'FixServicemeBundle:Empresas',
                    'query_builder' => function (EntityRepository $er) 
                        {
                        return $er->createQueryBuilder('u')
                            ->where('u.estado = :only')
                            ->setParameter('only', '1');
                        },
                        'choice_label' => 'getNombre',
                        'placeholder' => 'Seleccione una Opción',
                        'label' => 'Empresa'
                        ))
           #->add('guardar', SubmitType::class, array('label' => 'Crear Usuario'))
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
