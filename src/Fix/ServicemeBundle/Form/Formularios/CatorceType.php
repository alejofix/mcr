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

class CatorceType extends AbstractType {


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

        $builder->add('detalle', ChoiceType::class, array(
            'label' => '¿Puede ingresar a Claro Vídeo?',
            'attr' => array('placeholder' => 'Agregar Detalle', 'class' => 'form-control'),
            'choices' => array(
                'SI' => 'SI INGRESA A CLARO VIDEO',
                'NO' => 'NO INGRESA A CLARO VIDEO',
            ),
            'placeholder' => 'Seleccione una Opción',
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')))
        ));

        $builder->add('datos', ChoiceType::class, array(
            'label' => '¿La falla se presenta desde la instalación?',
            'attr' => array('placeholder' => 'Agregar Detalle', 'class' => 'form-control'),
            'choices' => array(
                'SI' => 'SI FALLA DESDE LA INSTALACIÓN',
                'NO' => 'NO FALLA DESDE LA INSTALACIÓN',
            ),
            'placeholder' => 'Seleccione una Opción',
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')))
        ));

        $builder->add('referencia', ChoiceType::class, array(
            'label' => '¿Al oprimir la tecla Guía se muestra el logo de los canales (RCN y CARACOL)?',
            'attr' => array('placeholder' => 'Agregar Detalle', 'class' => 'form-control'),
            'choices' => array(
                'SI' => 'SI MUESTRA LOGO DE CANALES',
                'NO' => 'NO MUESTRA LOGO DE CANALES',
            ),
            'placeholder' => 'Seleccione una Opción',
            'constraints' => array(
                new Assert\NotBlank(array('message' => 'información Requerida')))
        ));

        // Imprescindible:razon
        $builder->add('razon', EntityType::class, array(
            'label' => 'Indique el estado de la Conexión TSTV',
            'attr' => array('class' => 'form-control'),
            'class' => 'FixServicemeBundle:Formulariosrazon',
            'query_builder' => function(EntityRepository $er) {
                $qb = $er->createQueryBuilder('t');
                return $qb->where($qb->expr()->eq('t.estado', ':estado'))
                    ->andWhere('t.tipo = 14')
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