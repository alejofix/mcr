<?php

    namespace Fix\ServicemeBundle\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\IntegerType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\FormBuilderInterface;
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


            $builder
                ->add('cuenta')
                ->add('fecha')
                ->add('referencia')
                ->add('detalle')
                ->add('informacionuno')
                ->add('informaciondos')
                ->add('informaciontres')
                ->add('datos')
                ->add('tipo')
                ->add('razon')
            ;
        }

        /**
         * {@inheritdoc}
         */
        public function configureOptions(OptionsResolver $resolver) {
            $resolver->setDefaults(array(
                'data_class' => 'Fix\ServicemeBundle\Entity\Formularios',
                'allow_extra_fields' => true
            ));
        }

        /**
         * {@inheritdoc}
         */
        public function getBlockPrefix() {
            return 'formulario';
        }
    }