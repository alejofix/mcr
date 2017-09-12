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
    use Symfony\Component\Form\FormInterface;
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
                $builder->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'onPreSubmit']);
                $builder->addEventListener(FormEvents::SUBMIT, [$this, 'onSubmit']);
            endif;


        }

        /**
         * Agrega los elementos correspondientes para el campo
         *
         * @param FormInterface $builder
         * @param $option
         */
        protected function addElement(FormInterface $builder, $option) {

            if($option == 'TODOS LOS CANALES'):

                $builder->add('informaciontres', ChoiceType::class, array(
                    'label' => '¿Cuando se evidencia la falla?',
                    'attr' => array('placeholder' => 'Agregar Datos', 'class' => 'form-control'),
                    'choices' => array(
                        'TODO EL DÍA' => 'TODO EL DÍA',
                        'EN HORAS DE LA TARDE DESPUÉS DE LAS 13:00' => 'EN HORAS DE LA TARDE',
                        'EN HORAS DE LA NOCHE DESPUÉS DE LAS 18:00' => 'EN HORAS DE LA NOCHE',
                        'EN LA MADRUGADA' => 'EN LA MADRUGADA'
                    ),
                    'placeholder' => 'Seleccione una Opción',
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')))
                ));

            elseif($option == 'ALGUNOS CANALES'):

                $builder->add('informacionuno', TextType::class, array(
                    'label' => 'Canales',
                    'attr' => array('placeholder' => 'Ej.  106,108,606 ...', 'class' => 'form-control'),
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')))
                ));

                $builder->add('informaciondos', TextType::class, array(
                    'label' => 'Programas',
                    'attr' => array('placeholder' => 'Ej. Día a Día, Muy buenos Días, The Simpsons ...', 'class' => 'form-control'),
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')))
                ));

                $builder->add('informaciontres', TextType::class, array(
                    'label' => 'Hora de Inicio de Programa',
                    'attr' => array('placeholder' => 'Ej. 8:00, 10:00 ...', 'class' => 'form-control'),
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')))
                ));

            endif;
        }

        /**
         * Se genera la populacion correspondiente cuando se genera el evento submit
         *
         * @param FormEvent $event
         */
        public function onSubmit(FormEvent $event) {

            $form = $event->getForm();
            $data = $event->getData();

            $this->addElement($form, $data->getDetalle());
        }

        public function onPreSubmit(FormEvent $event) {

            $form = $event->getForm();
            $data = $event->getData();

            $this->addElement($form, $data['detalle']);
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