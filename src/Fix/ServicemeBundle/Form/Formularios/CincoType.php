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


class CincoType extends AbstractType {

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

        $builder->add('referencia', TextType::class, array(
            'label' => 'Serial STB CHIP ID que aparece en TV',
            'attr' => array('placeholder' => 'Ingrese Serial', 'class' => 'form-control'),
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')),
                new Assert\Length(array(
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
                new Assert\NotBlank(array('message' => 'información Requerida')),
                new Assert\Length(array(
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