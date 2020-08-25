<?php

namespace App\Form;

use App\Entity\Garden;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class GardenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'plant',
            TextType::class,
            [
                "label" => "Plante"
            ]
        );

        $builder->add(
            'dayPlant',
            DateType::class,
            [
                "label" => "Jour de plantation"
            ]
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Garden::class,
        ]);
    }
}
