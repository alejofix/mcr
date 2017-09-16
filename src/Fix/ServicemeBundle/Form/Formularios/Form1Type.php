<?php

    namespace Fix\ServicemeBundle\Form\Formularios;

    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\EntityRepository;
    use Symfony\Bridge\Doctrine\Form\Type\EntityType;

    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\IntegerType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\Form\CallbackTransformer;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormEvent;
    use Symfony\Component\Form\FormEvents;
    use Symfony\Component\Form\FormInterface;

    use Symfony\Component\OptionsResolver\OptionsResolver;

    use Symfony\Component\Validator\Constraints\Ip;
    use Symfony\Component\Validator\Constraints\Length;
    use Symfony\Component\Validator\Constraints\NotBlank;

    use Symfony\Component\Form\Extension\Core\Type\TextareaType;

    class Form1Type extends AbstractType {

        /**
         * Contenedor de la conexion a la base de datos
         */
        private $entityManager;

        private $motivo;

        /**
         * inyeccion por servicio de la conexion a la base de datos
         * @param EntityManager $entityManager
         */
        function __construct(EntityManager $entityManager) {

            $this->entityManager = $entityManager;
        }

        /**
         * {@inheritdoc}
         */
        public function buildForm(FormBuilderInterface $builder, array $options) {

            $this->motivo = $options['_motivo'];
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

            /*
             *  formulario id/1
             *  NAGRA VALIDACIÓN ICONOS DE FUNCIONALIDADES
             */
            if($options['_motivo'] == 1){

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

            }

            /*
             *  formulario id/2
             *  RENDIMIENTO CABLE MÓDEM
             */
            elseif ($options['_motivo'] == 2){

                $builder->add('razon', EntityType::class, array(
                    'label' => 'Tipo de Uso',
                    'attr' => array('class' => 'form-control'),
                    'class' => 'FixServicemeBundle:Formulariosrazon',
                    'query_builder' => function(EntityRepository $er) {
                        $qb = $er->createQueryBuilder('t');
                        return $qb->where($qb->expr()->eq('t.estado', ':estado'))
                            ->andWhere('t.tipo = 2')
                            ->setParameter('estado', 1)
                            ;
                    },
                    'choice_label' => 'nombre',
                    'placeholder' => 'Seleccione una Opción',
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                    )
                ));

                $builder->add('detalle', TextType::class, array(
                    'label' => 'Uptime',
                    'attr' => array('placeholder' => 'Ingresa el  Uptime que encuentras en Diagnosticador', 'class' => 'form-control'),
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')))
                ));
                $builder->get('detalle')->addModelTransformer(new CallbackTransformer(function($data) {
                    return mb_strtoupper($data);
                }, function($data) {
                    return mb_strtoupper($data);
                }));

                $builder->add('referencia', ChoiceType::class, array(
                    'label' => 'Plan',
                    'attr' => array('placeholder' => 'Agregar Detalle', 'class' => 'form-control'),
                    'choices' => array(
                        '1 MEGA' => '1 MEGA',
                        '5 MEGAS' => '5 MEGAS',
                        '10 MEGAS' => '10 MEGAS',
                        '20 MEGAS' => '20 MEGAS',
                        '50 MEGAS' => '50 MEGAS'
                    ),
                    'placeholder' => 'Seleccione una Opción',
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')))
                ));

            }
            /*
             *  formulario id/3
             *  RESET FÍSICO TELEVISIÓN
             */
            elseif ($options['_motivo'] == 3){

                $builder->add('razon', EntityType::class, array(
                    'label' => 'Opción Reset Físico',
                    'attr' => array('class' => 'form-control'),
                    'class' => 'FixServicemeBundle:Formulariosrazon',
                    'query_builder' => function(EntityRepository $er) {
                        $qb = $er->createQueryBuilder('t');
                        return $qb->where($qb->expr()->eq('t.estado', ':estado'))
                            ->andWhere('t.tipo = 3')
                            ->setParameter('estado', 1)
                            ;
                    },
                    'choice_label' => 'nombre',
                    'placeholder' => 'Seleccione una Opción',
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                    )
                ));

                $builder->add('referencia', EntityType::class, array(
                    'label' => 'Modelo Decodificador RR',
                    'attr' => array('class' => 'form-control'),
                    'class' => 'FixServicemeBundle:Decodificadores',
                    'query_builder' => function(EntityRepository $er) {
                        $qb = $er->createQueryBuilder('t');
                        return $qb
                            ->where($qb->expr()->eq('t.estado', ':estado'))
                            ->setParameter('estado', 1)
                            ;
                    },
                    'choice_label' => 'referencia',
                    'placeholder' => 'Seleccione una Opción',
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                    )
                ));

            }

            /*
             *  formulario id/4
             *  INSATISFACCIÓN DE VISITA
             */
            elseif ($options['_motivo'] == 4){

                $builder->add('referencia', IntegerType::class, array(
                    'label' => 'No. Orden',
                    'attr' => array('placeholder' => 'Llamada de Servicio | Orden de Trabajo', 'class' => 'form-control'),
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                        new Length(array(
                            'min' => 4,
                            'max' => 9,
                            'minMessage' => 'No. Orden - mínimo {{ limit }} Caracteres',
                            'maxMessage' => 'No. Orden - máximo {{ limit }} Caracteres'

                        ))
                    )
                ));

                $builder->add('razon', EntityType::class, array(
                    'label' => 'Tipo de Orden',
                    'attr' => array('class' => 'form-control'),
                    'class' => 'FixServicemeBundle:Formulariosrazon',
                    'query_builder' => function(EntityRepository $er) {
                        $qb = $er->createQueryBuilder('t');
                        return $qb->where($qb->expr()->eq('t.estado', ':estado'))
                            ->andWhere('t.tipo = 4')
                            ->setParameter('estado', 1)
                            ;
                    },
                    'choice_label' => 'nombre',
                    'placeholder' => 'Seleccione una Opción',
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                    )
                ));

                $builder->add('detalle', ChoiceType::class, array(
                    'label' => 'Motivo de Insatisfacción',
                    'attr' => array('placeholder' => 'Agregar Detalle', 'class' => 'form-control'),
                    'choices' => array(
                        'EL SERVICIO NO SE ENTREGO FUNCIONANDO' => 'EL SERVICIO NO SE ENTREGO FUNCIONANDO',
                        'SERVICIO FALLA DESPUÉS DE LA VISITA' => 'SERVICIO FALLA DESPUÉS DE LA VISITA',
                        'INCONFORMIDAD POR ESTÉTICA DEL TRABAJO' => 'INCONFORMIDAD POR ESTÉTICA DEL TRABAJO'
                    ),
                    'placeholder' => 'Seleccione una Opción',
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')))
                ));

            }

            /*
             *  formulario id/5
             *  SERIALES CHIP ID
             */
            elseif ($options['_motivo'] == 5){

                $builder->add('referencia', TextType::class, array(
                    'label' => 'Serial STB CHIP ID que aparece en TV',
                    'attr' => array('placeholder' => 'Ingrese Serial', 'class' => 'form-control'),
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                        new Length(array(
                            'min' => 7,
                            'max' => 20,
                            'minMessage' => 'Serial - mínimo {{ limit }} Caracteres',
                            'maxMessage' => 'Serial - máximo {{ limit }} Caracteres'

                        ))
                    )
                ));
                $builder->get('referencia')->addModelTransformer(new CallbackTransformer(function($data) {
                    return mb_strtoupper($data);
                }, function($data) {
                    return mb_strtoupper($data);
                }));

                $builder->add('detalle', TextType::class, array(
                    'label' => 'Serial CHIP ID que aparece en el Sticker del DECO',
                    'attr' => array('placeholder' => 'Ingrese Serial', 'class' => 'form-control'),
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                        new Length(array(
                            'min' => 7,
                            'max' => 20,
                            'minMessage' => 'Serial - mínimo {{ limit }} Caracteres',
                            'maxMessage' => 'Serial - máximo {{ limit }} Caracteres'

                        ))
                    )
                ));
                $builder->get('detalle')->addModelTransformer(new CallbackTransformer(function($data) {
                    return mb_strtoupper($data);
                }, function($data) {
                    return mb_strtoupper($data);
                }));

                $builder->add('razon', EntityType::class, array(
                    'label' => ' ',
                    'attr' => array('class' => 'hidden'),
                    'class' => 'FixServicemeBundle:Formulariosrazon',
                    'query_builder' => function(EntityRepository $er) {
                        $qb = $er->createQueryBuilder('t');
                        return $qb->where($qb->expr()->eq('t.estado', ':estado'))
                            ->andWhere('t.tipo = 5')
                            ->orderBy('t.nombre', 'ASC')
                            ->setParameter('estado', 1)
                            ;
                    },
                    'choice_label' => 'nombre',
                ));

            }

            /*
             *  formulario id/6
             *  CANAL NO DISPONIBLE 1
             */
            elseif ($options['_motivo'] == 6){

                $builder->add('razon', EntityType::class, array(
                    'label' => 'Tiempo con el deco desconectado',
                    'attr' => array('class' => 'form-control'),
                    'class' => 'FixServicemeBundle:Formulariosrazon',
                    'query_builder' => function(EntityRepository $er) {
                        $qb = $er->createQueryBuilder('t');
                        return $qb->where($qb->expr()->eq('t.estado', ':estado'))
                            ->andWhere('t.tipo = 6')
                            ->setParameter('estado', 1)
                            ;
                    },
                    'choice_label' => 'nombre',
                    'placeholder' => 'Seleccione una Opción',
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                    )
                ));

                $builder->add('informacionuno', TextareaType::class, array(
                    'label' => 'Motivo por el cual lo tenía Desconectado',
                    'attr' => array('placeholder' => 'Ej. No tenía Televisor, No lo Usaba, se fue de Viaje … ', 'class' => 'form-control', 'rows' => 2),
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                        new Length(array(
                            'min' => 10,
                            'max' => 50,
                            'minMessage' => 'Información - mínimo {{ limit }} Caracteres',
                            'maxMessage' => 'Información - máximo {{ limit }} Caracteres'
                        ))
                    )

                ));
                $builder->get('informacionuno')->addModelTransformer(new CallbackTransformer(function($data) {
                    return mb_strtoupper($data);
                }, function($data) {
                    return mb_strtoupper($data);
                }));

                $builder->add('referencia', EntityType::class, array(
                    'label' => 'Modelo Decodificador RR',
                    'attr' => array('class' => 'form-control'),
                    'class' => 'FixServicemeBundle:Decodificadores',
                    'query_builder' => function(EntityRepository $er) {
                        $qb = $er->createQueryBuilder('t');
                        return $qb
                            ->where($qb->expr()->eq('t.estado', ':estado'))
                            ->setParameter('estado', 1)
                            ;
                    },
                    'choice_label' => 'referencia',
                    'placeholder' => 'Seleccione una Opción',
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                    )
                ));

            }

            /*
             *  formulario id/7
             *  CANAL NO DISPONIBLE 2
             */
            elseif ($options['_motivo'] == 7){

                $builder->add('razon', EntityType::class, array(
                    'label' => '¿Dónde visualiza la placa?',
                    'attr' => array('class' => 'form-control'),
                    'class' => 'FixServicemeBundle:Formulariosrazon',
                    'query_builder' => function(EntityRepository $er) {
                        $qb = $er->createQueryBuilder('t');
                        return $qb->where($qb->expr()->eq('t.estado', ':estado'))
                            ->andWhere('t.tipo = 7')
                            ->setParameter('estado', 1)
                            ;
                    },
                    'choice_label' => 'nombre',
                    'placeholder' => 'Seleccione una Opción',
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                    )
                ));

                $builder->add('detalle', TextType::class, array(
                    'label' => 'Canales Afectados',
                    'attr' => array('placeholder' => 'Máximo tres frecuencias Separadas por (,)', 'class' => 'form-control'),
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                        new Length(array(
                            'min' => 3,
                            'max' => 14,
                            'minMessage' => 'Ingrese mínimo una Frecuencia ',
                            'maxMessage' => 'Ingrese máximo tres Frecuencias '
                        ))
                    )

                ));
                $builder->get('detalle')->addModelTransformer(new CallbackTransformer(function($data) {
                    return mb_strtoupper($data);
                }, function($data) {
                    return mb_strtoupper($data);
                }));

                $builder->add('referencia', EntityType::class, array(
                    'label' => 'Modelo Decodificador RR',
                    'attr' => array('class' => 'form-control'),
                    'class' => 'FixServicemeBundle:Decodificadores',
                    'query_builder' => function(EntityRepository $er) {
                        $qb = $er->createQueryBuilder('t');
                        return $qb
                            ->where($qb->expr()->eq('t.estado', ':estado'))
                            ->setParameter('estado', 1)
                            ;
                    },
                    'choice_label' => 'referencia',
                    'placeholder' => 'Seleccione una Opción',
                    'constraints' => array(
                        new NotBlank(array('message' => 'información Requerida')),
                    )
                ));

            }




                    /*
                     * formularios Ajax
                     *  FormEvents::
                     */
                    if($options['_motivo'] == 1):
                        $builder->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'onPreSubmit']);
                        $builder->addEventListener(FormEvents::SUBMIT, [$this, 'onSubmit']);
                    endif;


        }



        /**
         * Agrega los elementos correspondientes para el campo Ajax
         *
         * @param FormInterface $builder
         * @param $option
         */

        protected function addElement(FormInterface $builder, $option) {

            if($option == 'TODOS LOS CANALES'):

                $this->getSelectField($builder, 'informaciontres', '¿Cuando se evidencia la falla?');

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

        private function getSelectField(FormInterface $builder, $name = null, $label = null) {

            return $builder->add($name, ChoiceType::class, array(
                'label' => $label,
                'attr' => array('placeholder' => 'Seleccionar Datos', 'class' => 'form-control'),
                'choices' => $this->getOptionsQuery($this->motivo, $name),
                'placeholder' => 'Seleccione una Opción',
                'constraints' => array(
                    new NotBlank(array('message' => 'información Requerida')))
            ));
        }


        /**
         * Genera la consulta de los datos para retornarlos
         * al campo respectivo
         * 
         * @param null $motivo
         * @return array
         */
        private function getOptionsQuery($motivo = null, $field = null) {

            $qb = $this->entityManager->createQueryBuilder();
            $query = $this->entityManager->getRepository('FixServicemeBundle:SelectFields')
                ->createQueryBuilder('s')
                ->where($qb->expr()->eq('s.isActive', 1))
                ->andWhere($qb->expr()->eq('s.field', ':field'))
                ->andWhere($qb->expr()->eq('s.type', ':motivo'))
                ->orderBy('s.name', 'ASC')
                ->setParameter('field', $field)
                ->setParameter('motivo', $motivo)
                ->getQuery()
                ->getResult()
            ;

            return $this->setFormatOptionsQuery($query);
        }

        /**
         * Genera el formato de los datos para ser retornados para la implementacion
         *
         * @param array $array
         * @return array
         */
        private function setFormatOptionsQuery($array = array()) {

            if(is_array($array) AND count($array) > 1):
                $list = array();
                foreach ($array AS $object):
                    $list[$object->getName()] = $object->getName();
                endforeach;
                return $list;
            endif;
            return array();
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