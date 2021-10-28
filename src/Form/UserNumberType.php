<?php

namespace App\Form;

use App\Entity\UserNumber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserNumberType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number', IntegerType::class, [
                'label' => false,
                'attr' => [
                    'min' => 1,
                    'max' => 5,
                    'placeholder' => '0',
                    'class' => 'rounded border-0 input'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Check',
                'attr' => [
                    'class' => 'check btn mt-4 rounded-pill'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UserNumber::class,
        ]);
    }
}
