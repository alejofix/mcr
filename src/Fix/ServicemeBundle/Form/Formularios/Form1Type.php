<?php

    namespace Fix\ServicemeBundle\Form\Formularios;

    use Doctrine\ORM\EntityRepository;
    use Symfony\Bridge\Doctrine\Form\Type\EntityType;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\IntegerType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\Form\FormEvent;
    use Symfony\Component\Form\FormEvents;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    use Symfony\Component\Validator\Constraints\Ip;
    use Symfony\Component\Validator\Constraints\Length;
    use Symfony\Component\Validator\Constraints\NotBlank;

    class Form1Type extends AbstractType {

        /**
         * {@inheritdoc}
         */
        public function buildForm(FormBuilderInterface $builder, array $options) {

            $builder->add('cuenta', IntegerType::class, array(
                'label' => 'Cuenta de Suscriptor',
                'attr' => array('placeholder' => 'Agregar número Cuenta ', 'class' => 'form-control', 'autofocus' => 'autofocus'),
                'constraints' => array(
                    new NotBlank(array('message' => 'información Requerida')),
                    new Length(array(
                        'min' => 4,
                        'max' => 8,
                        'minMessage' => 'número Cuenta - mínimo {{ limit }} Caracteres',
                        'maxMessage' => 'número Cuenta - máximo {{ limit }} Caracteres'
                    ))
                )
            ));

            $builder->add('datos', TextType::class, array(
                'label' => 'IP Nagra',
                'attr' => array('placeholder' => 'Informar Dirección IP Nagra', 'class' => 'form-control'),
                'constraints' => array(
                    new NotBlank(array('message' => 'información Requerida')),
                    new Ip(array('message' => 'Esta no es una Dirección IP Valida'))
                )
            ));

            $builder->add('razon', EntityType::class, array(
                'label' => '¿Muestra icono Funcionalidad Grabaciones?',
                'attr' => array('class' => 'form-control'),
                'class' => 'FixServicemeBundle:Formulariosrazon',
                'query_builder' => function(EntityRepository $er) {
                    $qb = $er->createQueryBuilder('t');
                    return $qb->where($qb->expr()->eq('t.estado', ':estado'))
                        ->andWhere('t.tipo = 1')
                        ->setParameter('estado', 1)
                        ;
                },
                'choice_label' => 'nombre',
                'placeholder' => 'Seleccione una Opción',
                'constraints' => array(
                    new NotBlank(array('message' => 'información Requerida')),
                )
            ));

            $builder->add('referencia', ChoiceType::class, array(
                'label' => '¿Muestra icono Funcionalidad TimeShift?',
                'attr' => array('placeholder' => 'Agregar Detalle', 'class' => 'form-control'),
                'choices' => array(
                    'SI MUESTRA ÍCONO TIMESHIFT' => 'SI MUESTRA ÍCONO TIMESHIFT',
                    'NO MUESTRA ÍCONO TIMESHIFT' => 'NO MUESTRA ÍCONO TIMESHIFT',
                ),
                'placeholder' => 'Seleccione una Opción',
                'constraints' => array(
                    new NotBlank(array('message' => 'información Requerida')))
            ));

            $builder->add('detalle', ChoiceType::class, array(
                'label' => 'Canales en los que se evidencia el Problema',
                'attr' => array('placeholder' => 'Agregar Datos', 'class' => 'form-control'),
                'choices' => array(
                    'TODOS LOS CANALES' => 'TODOS LOS CANALES',
                    'ALGUNOS CANALES' => 'ALGUNOS CANALES',
                ),
                'placeholder' => 'Seleccione una Opción',
                'constraints' => array(
                    new NotBlank(array('message' => 'información Requerida')))
            ));

            if($options['_motivo'] == 1):

                $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {

                    dump($event->getData());
                });

            endif;


        }

        /**
         * {@inheritdoc}
         */
        public function configureOptions(OptionsResolver $resolver) {
            $resolver->setDefaults(array(
                'data_class' => 'Fix\ServicemeBundle\Entity\Formularios',
                'allow_extra_fields' => true,
                '_motivo' => null
            ));
        }

        /**
         * {@inheritdoc}
         */
        public function getBlockPrefix() {
            return 'formulario';
        }
    }