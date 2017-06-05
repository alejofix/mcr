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
    use Symfony\Component\Validator\Constraints\Length;
    use Symfony\Component\Validator\Constraints\NotBlank;

    class UnoType extends AbstractType {

        /**
         * {@inheritdoc}
         */
        public function buildForm(FormBuilderInterface $builder, array $options) {

            $builder->add('cuenta', IntegerType::class, array(
                'label' => 'Cuenta',
                'constraints' => array(
                    new NotBlank(),
                    new Length(array('min' => 5, 'max' => 8))
                )
            ));

            $builder->add('razon', EntityType::class, array(
                'label' => 'Razon',
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
                    new NotBlank()
                )
            ));

            $builder->add('referencia', TextType::class, array(
                'label' => 'Referencia',
                'empty_data' => null
            ));
            $builder->add('detalle', TextType::class, array(
                'label' => 'Detalle',
                'empty_data' => null
            ));
            $builder->add('datos', TextareaType::class, array(
                'label' => 'Datos',
                'attr' => array('rows' => 8),
                'constraints' => array(
                    new NotBlank()
                )
            ));

            $builder->add('submit', SubmitType::class, array());

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
