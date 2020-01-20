<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\CallbackTransformer;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class,[
                'label'=>'Add the Title of the Article'
            ])
            ->add('featuredImage',TextType::class,[
                'label'=>'Upload the featured Image'
            ])
            ->add('content',TextareaType::class,[
                'label'=>'Article Content'
            ])
            ->add('status')
            ->add('category',EntityType::class,[
                'class' => Category::class,
                'choice_label' => 'name'
            ])
            ->add('tags')
            ->add('metaTitle')
            ->add('metaDescription')
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
