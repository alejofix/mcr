<?php

namespace Fix\ServicemeBundle\Form;

use Fix\ServicemeBundle\Entity\Servicecoreferencia;
use Fix\ServicemeBundle\FixServicemeBundle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use \Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;


class ServicecoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('aviso', TextType::class, array(
            'label' => 'Aviso',
            'attr' => array('placeholder' => 'Agregar Aviso', 'class' => 'form-control', 'autofocus' => 'autofocus'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')),
                new Assert\Length(array(
                    'min' => 3,
                    'max' => 10,
                    'minMessage' => 'número Aviso - mínimo {{ limit }} Caracteres',
                    'maxMessage' => 'número Aviso - máximo {{ limit }} Caracteres'

                ))
            )
        ));

        $builder->add('referencia', EntityType::class, array(
            'label' => 'Referencia',
            'attr' => array('class' => 'form-control'),
            'class' => 'FixServicemeBundle:Servicecoreferencia',
            'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('u')
                        ->where('u.estado = :only')
                        ->setParameter('only', '1');
                },
            'choice_label' => 'getNombre',
            'placeholder' => 'Seleccione una Opción',
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')))
        ));

        $builder->add('sintoma', TextType::class, array(
            'label' => 'Síntoma',
            'attr' => array('placeholder' => "Autocompletar o 16 Caracteres máximo Incluidos espacios", 'name' => "typeahead_local", 'class' =>"form-control typeahead",
                'data-local' => "Falla Telefonía,Lentitud @,Lentitud Página,Sin Página,Sin Internet,Sin Facebook,Sin Señal,Sin señal 3Play,Sin Canales,Sin Youtube,Fallo @ IntNal"),

            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')),
                new Assert\Length(array(
                    'min'        => 5,
                    'max'        => 16,
                    'minMessage' => 'Síntoma permitido - mínimo {{ limit }} Caracteres',
                    'maxMessage' => 'Síntoma permitido - máximo {{ limit }} Caracteres'
                )))
        ));

        $builder->add('afectacion', TextType::class, array(
            'label' => 'Afectación',
            'attr' => array('placeholder' => "Autocompletar o 27 Caracteres máximo Incluidos espacios", 'name' => "typeahead_local", 'class' =>"form-control typeahead",
                'data-local' => "Afecta Todas las Regionales,Bogotá Bidireccional,Bogotá Unidireccional,Ciudad,CMTS,Nodo,Nodos,Regional Antioquia,Regional Centro,Regional Eje Cafetero,Regional Norte,Regional Occidente,Regional Oriente,SoftSwitch"),

            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')),
                new Assert\Length(array(
                    'min'        => 5,
                    'max'        => 27,
                    'minMessage' => 'Afectación permitida - mínimo {{ limit }} Caracteres',
                    'maxMessage' => 'Afectación permitida - máximo {{ limit }} Caracteres'
                )))
        ));

        $builder->add('detalle', EntityType::class, array(
            'label' => 'Detalle',
            'attr' => array('class' => 'form-control'),
            'class' => 'FixServicemeBundle:Servicecodetalle',
            'query_builder' => function (EntityRepository $er){
                return $er->createQueryBuilder('u')
                    ->where('u.estado = :only')
                    ->setParameter('only', '1');
            },
            'choice_label' => 'getNombre',
            'placeholder' => 'Seleccione una Opción',
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'Dato Imprescindible')))
        ));


    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fix\ServicemeBundle\Entity\Serviceco'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'serviceco';
    }


}
