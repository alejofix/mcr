<?php

namespace Fix\ServicemeBundle\Form\Formularios;

use Doctrine\ORM\EntityRepository;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

use \Symfony\Component\Validator\Constraints as Assert;


class CuatroType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {


        $builder->add('cuenta', IntegerType::class, array(
            'label' => 'Cuenta de Suscriptor',
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

        $builder->add('referencia', IntegerType::class, array(
            'label' => 'No. Orden',
            'attr' => array('placeholder' => 'Llamada de Servicio | Orden de Trabajo', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')),
                 new Assert\Length(array(
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
                new Assert\NotBlank(array('message' => 'información Requerida')),
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