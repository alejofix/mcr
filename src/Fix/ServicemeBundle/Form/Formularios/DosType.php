<?php

namespace Fix\ServicemeBundle\Form\Formularios;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use \Symfony\Component\Validator\Constraints as Assert;


class DosType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        /*
         * INICIO FORMULARIO
         */
        // Imprescindible:cuenta
        $builder->add('cuenta', IntegerType::class, array(
            'label' => 'Cuenta',
            'attr' => array('placeholder' => 'Agregar número Cuenta ', 'class' => 'form-control', 'autofocus' => 'autofocus'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')),
                new Assert\Length(array(
                    'min' => 4,
                    'max' => 8,
                    'minMessage' => 'número Cuenta - mínimo {{ limit }} Caracteres',
                    'maxMessage' => 'número Cuenta - máximo {{ limit }} Caracteres'

                ))
            )
        ));
        // Imprescindible:razon
        $builder->add('razon', EntityType::class, array(
            'label' => 'Razon',
            'attr' => array('class' => 'form-control'),
            'class' => 'FixServicemeBundle:Formulariosrazon',
            'query_builder' => function(EntityRepository $er) {
                $qb = $er->createQueryBuilder('t');
                return $qb->where($qb->expr()->eq('t.estado', ':estado'))
                    ->orderBy('t.nombre', 'ASC')
                    ->setParameter('estado', 1)
                    ;
            },
            'choice_label' => 'nombre',
            'placeholder' => 'Seleccione una Opción',
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')),
            )
        ));


        /**
         *  Opción REFERENCIA :     indicativo hacia un objeto - CH, DECO, MODEM, FIRMWARE ETC...
         *  puede ser un choice
         */
        $builder->add('referencia', TextType::class, array(
            'label' => 'Referencia',
            'attr' => array('placeholder' => 'Agregar Referencia', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')))
        ));

        /**
         *  Opción DETALLE :        información suplementaria - UN MENSAJE DE ERROR, UNA ALERTA, UN VALOR...
         *   puede ser un choice
         */
        $builder->add('detalle', TextType::class, array(
            'label' => 'Detalle',
            'attr' => array('placeholder' => 'Agregar Detalle', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')))
        ));

        /**
         *  Opción INFORMACION UNO :
         */
        $builder->add('informacionuno', TextareaType::class, array(
            'label' => 'Información 1',
            'attr' => array('placeholder' => 'Agregar Información 1', 'class' => 'form-control', 'rows' => 2),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')),
                new Assert\Length(array(
                    'min' => 14,
                    'max' => 140,
                    'minMessage' => 'Información - mínimo {{ limit }} Caracteres',
                    'maxMessage' => 'Información - máximo {{ limit }} Caracteres'

                ))
            )

        ));

        /**
         *  Opción INFORMACION DOS :
         */
        $builder->add('informaciondos', TextareaType::class, array(
            'label' => 'Información 2',
            'attr' => array('placeholder' => 'Agregar Información 2', 'class' => 'form-control', 'rows' => 2),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')),
                new Assert\Length(array(
                    'min' => 14,
                    'max' => 140,
                    'minMessage' => 'Información - mínimo {{ limit }} Caracteres',
                    'maxMessage' => 'Información - máximo {{ limit }} Caracteres'

                ))
            )

        ));

        /**
         *  Opción INFORMACION TRES :
         */
        $builder->add('informaciontres', TextareaType::class, array(
            'label' => 'Información 3',
            'attr' => array('placeholder' => 'Agregar Información 3', 'class' => 'form-control', 'rows' => 2),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')),
                new Assert\Length(array(
                    'min' => 14,
                    'max' => 140,
                    'minMessage' => 'Información - mínimo {{ limit }} Caracteres',
                    'maxMessage' => 'Información - máximo {{ limit }} Caracteres'

                ))
            )

        ));

        /**
         *  Opción DATO :  representación representación simbólica -- 1, 0 - si, no ..etc
         *  puede ser un choice
         */
        $builder->add('datos', TextType::class, array(
            'label' => 'Datos',
            'attr' => array('placeholder' => 'Agregar Datos', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')))
        ));

        // Imprescindible:submit
        $builder->add('submit', SubmitType::class, array(
            'label' => 'Guardar',
            'attr' => array('class' => 'btn btn-gray')
        ));
        /*
         * FIN FORMULARIO
         */
        //strtoupper
        $builder->get('referencia')->addModelTransformer(new CallbackTransformer(function($data) {
            return mb_strtoupper($data);
        }, function($data) {
            return mb_strtoupper($data);
        }));
        $builder->get('detalle')->addModelTransformer(new CallbackTransformer(function($data) {
            return mb_strtoupper($data);
        }, function($data) {
            return mb_strtoupper($data);
        }));
        $builder->get('datos')->addModelTransformer(new CallbackTransformer(function($data) {
            return mb_strtoupper($data);
        }, function($data) {
            return mb_strtoupper($data);
        }));


    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fix\ServicemeBundle\Entity\Formularios'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'formulario';
    }


}
