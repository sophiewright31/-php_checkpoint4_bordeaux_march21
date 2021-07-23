<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Color;
use App\Entity\Style;
use App\Entity\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('brand')
            ->add('size')
            ->add('picture')
            ->add('buyingYear')
            ->add('availability')
            ->add('location')
            ->add('type', EntityType::class, [
                'class' => Type::class,
                'choice_label' => 'name',
                'multiple'=> false,
                'expanded' => false,
            ])
            ->add('styles', EntityType::class, [
                'class' => Style::class,
                'choice_label' => 'name',
                'multiple'=> true,
                'expanded' => false,
            ])
            ->add('colors', EntityType::class, [
                'class' => Color::class,
                'choice_label' => 'name',
                'multiple'=> true,
                'expanded' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
