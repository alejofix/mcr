<?php

namespace Fix\ServicemeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\CallbackTransformer;

use \Symfony\Component\Form\Extension\Core\Type\EmailType;
use \Symfony\Component\Form\Extension\Core\Type\PasswordType;
use \Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use \Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
#use \Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
            'attr' => array('placeholder' => 'Agregar Usuario RR', 'class' => 'form-control', 'autofocus' => 'autofocus'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')),
                new Assert\Length(array(
                        'min'        => 5,
                        'max'        => 10,
                        'minMessage' => 'Usuario permitido - mínimo {{ limit }} Caracteres',
                        'maxMessage' => 'Usuario permitido - máximo {{ limit }} Caracteres'
                        )))
        ));
        $builder->get('usuario')->addModelTransformer(new CallbackTransformer(function($data) {
            return mb_strtoupper($data);
        }, function($data) {
            return mb_strtoupper($data);
        }));

        $builder->add('nombres', TextType::class, array(
            'label' => 'Nombres',
            'attr' => array('placeholder' => 'Agregar Nombres', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')))
        ));

        $builder->add('apellidos', TextType::class, array(
            'label' => 'Apellidos',
            'attr' => array('placeholder' => 'Agregar Apellidos', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')))
        ));

        $builder->add('genero', ChoiceType::class, array(
            'label' => 'Género',
            'attr' => array('class' => 'form-control'),
            'choices' => array(
                'Femenino' => '0',
                'Masculino' => '1'),
                    'placeholder' => 'Seleccione una Opción',
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')))
        ));

        $builder->add('fechaNacimiento', BirthdayType::class, array(
            'label' => 'Fecha de Nacimiento',
            'attr' => array('class' => 'form-control'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')))
        ));

        $builder->add('correo', EmailType::class, array(
            'label' => 'Correo',
            'attr' => array('placeholder' => 'Agregar Correo electrónico', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\Email(array('message' => '¡Caramba!  \'{{ value }}\' No es un dato Correo')),
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')))
        ));

        $builder->add('contrasena', PasswordType::class, array(
            'label' => 'Contraseña',
            'attr' => array('placeholder' => 'Agregar Contraseña de fácil Recordación', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')),
                new Assert\Length(array(
                    'min'        => 6,
                    'max'        => 18,
                    'minMessage' => 'Seguridad permitida - mínimo {{ limit }} Caracteres',
                    'maxMessage' => 'Seguridad permitida - máximo {{ limit }} Caracteres'
                    )))
        ));

        $builder->add('documentoTipo', ChoiceType::class, array(
            'label' => 'Tipo Documento',
            'attr' => array('class' => 'form-control'),
            'choices' => array(
                'Cédula de Ciudadanía' => 'CC',
                'Tarjeta de identidad' => 'TI',
                'Cédula de Extranjería' => 'CE'),
                    'placeholder' => 'Seleccione una Opción',
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')))
        ));

        $builder->add('documentoNumero', TextType::class, array(
            'label' => 'Número Documento',
            'attr' => array('placeholder' => 'Agregar Número de Identificación', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')),
                new Assert\Type(array(
                    'type' => 'numeric',
                    'message' => '¡Caray!... Se requiere un dato Numérico'
                )))
        ));

        $builder->add('telefonofijo', TextType::class, array(
            'label' => 'Teléfono Fijo',
            'attr' => array('placeholder' => 'Agregar Número de Teléfono Fijo', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\Type(array(
                    'type' => 'numeric',
                    'message' => '¡Caray!... Se requiere un dato Numérico'
                )))
        ));

        $builder->add('telefonoMovil', TextType::class, array(
            'label' => 'Teléfono Fijo',
            'attr' => array('placeholder' => 'Agregar Número de Teléfono Móvil', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\Type(array(
                    'type' => 'numeric',
                    'message' => '¡Caray!... Se requiere un dato Numérico'
                )))
        ));

        $builder->add('cargo', TextType::class, array(
            'label' => 'Cargo',
            'attr' => array('placeholder' => "Agregar Cargo", 'name' => "typeahead_local", 'class' =>"form-control typeahead",
                'data-local' => "Analista,Asesor,Auditor,Auxiliar,BackOffice,Coordinador,DataMarshall,Director,Especialista,Experto,Formador,Gerente,Gestor,HelpDesk,Jefe,Líder,Programador,Representante,Supervisor,Torre Control,Workforce Management"),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')))
        ));

        $builder->add('role', ChoiceType::class, array(
            'label' => 'Role',
            'attr' => array('class' => 'form-control'),
            'choices' => array(
                'Administrador' => 'ROLE_ADMIN',
                'Mejoramiento' => 'ROLE_MCR',
                'Service Desk' => 'ROLE_SD',
                'Experto' => 'ROLE_EXP',
                'Invitado' => 'ROLE_INV'),
                    'placeholder' => 'Seleccione una Opción',
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')))
        ));

        $builder->add('empresa', EntityType::class, array(
            'label' => 'Empresa',
            'attr' => array('class' => 'form-control'),
            'class' => 'FixServicemeBundle:Empresas',
                'query_builder' => function (EntityRepository $er)
                    {
                        return $er->createQueryBuilder('u')
                            ->where('u.estado = :only')
                            ->setParameter('only', '1');
                    },
                'choice_label' => 'getNombre',
                'placeholder' => 'Seleccione una Opción',
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')))
        ));

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
