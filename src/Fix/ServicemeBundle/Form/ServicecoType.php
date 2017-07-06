<?php

namespace Fix\ServicemeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use \Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



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
