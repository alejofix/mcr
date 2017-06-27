<?php

namespace Fix\ServicemeBundle\Form\Formularios;

use Doctrine\ORM\EntityRepository;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

use \Symfony\Component\Validator\Constraints as Assert;


class DiezType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

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

        $builder->add('referencia', ChoiceType::class, array(
            'label' => 'Marca TV',
            'attr' => array('placeholder' => 'Agregar marca TV', 'class' => 'form-control'),
            'choices' => array(
                'HYUNDAI' => 'HYUNDAI',
                'LG' => 'LG',
                'PANASONIC' => 'PANASONIC',
                'PHILIPS' => 'PHILIPS',
                'SAMSUNG' => 'SAMSUNG',
                'SONY' => 'SONY',
                'TOSHIBA' => 'TOSHIBA',
                'OTRO' => 'OTRO'
            ),
            'placeholder' => 'Seleccione una Opción',
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')))
        ));

        $builder->add('detalle', TextType::class, array(
            'label' => 'Modelo TV',
            'attr' => array('placeholder' => 'Agregar modelo TV', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')),
                new Assert\Length(array(
                    'min' => 2,
                    'max' => 20,
                    'minMessage' => 'Por favor ingresar una Referencia válida',
                    'maxMessage' => 'Por favor ingresar una Referencia válida'

                ))
            )

        ));
        $builder->get('detalle')->addModelTransformer(new CallbackTransformer(function($data) {
            return mb_strtoupper($data);
        }, function($data) {
            return mb_strtoupper($data);
        }));

        // Imprescindible:razon
        $builder->add('razon', EntityType::class, array(
            'label' => 'Síntoma',
            'attr' => array('class' => 'form-control'),
            'class' => 'FixServicemeBundle:Formulariosrazon',
            'query_builder' => function(EntityRepository $er) {
                $qb = $er->createQueryBuilder('t');
                return $qb->where($qb->expr()->eq('t.estado', ':estado'))
                    ->andWhere('t.tipo = 10')
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
