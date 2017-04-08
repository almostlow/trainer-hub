<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Training;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class TrainingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'constraints' => [
                    new NotBlank()
                ],
                'label' => 'Pavadinimas'
            ])
            ->add('price', MoneyType::class, [
                'label' => 'Kaina'
            ])
            ->add('description', TextareaType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(array(
                        'max' => 255
                    )),

                ],
                'label' => 'Aprašymas'
            ]);

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Training::class
        ]);
    }
}
