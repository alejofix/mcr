<?php

namespace Fix\ServicemeBundle\Form\Formularios;

use Doctrine\ORM\EntityRepository;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;

use Symfony\Component\OptionsResolver\OptionsResolver;

use \Symfony\Component\Validator\Constraints as Assert;


class TreceType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

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


        $builder->add('razon', EntityType::class, array(
            'label' => 'Confirme Si la respuesta es Correcta',
            'attr' => array('class' => 'hidden'),
            'class' => 'FixServicemeBundle:Formulariosrazon',
            'query_builder' => function (EntityRepository $er) {
                $qb = $er->createQueryBuilder('t');
                return $qb->where($qb->expr()->eq('t.estado', ':estado'))
                    ->andWhere('t.tipo = 13')
                    ->orderBy('t.nombre', 'ASC')
                    ->setParameter('estado', 1);
            },
            'choice_label' => 'nombre',
        ));


        $builder->add('informacionuno', ChoiceType::class, array(
            'label' => '¿ Cuáles son los servicios principales que tiene Contratados ?',
            'attr' => array('class' => 'col-sm-4 control-label'),
            'choices' => array(
                'SI' => 'SI',
                'NO' => 'NO',
            ),
            'expanded' => true,
            'multiple' => false,
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')))
        ));
        $builder->add('informaciondos', ChoiceType::class, array(
            'label' => '¿ En qué mes realizó su último Traslado ?',
            'attr' => array('class' => 'col-sm-4 control-label'),
            'choices' => array(
                'SI' => 'SI',
                'NO' => 'NO',
            ),
            'expanded' => true,
            'multiple' => false,
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')))
        ));
        $builder->add('informaciontres', ChoiceType::class, array(
            'label' => '¿ Cuál fue el valor de su última factura ?',
            'attr' => array('class' => 'col-sm-4 control-label'),
            'choices' => array(
                'SI' => 'SI',
                'NO' => 'NO',
            ),
            'expanded' => true,
            'multiple' => false,
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')))
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