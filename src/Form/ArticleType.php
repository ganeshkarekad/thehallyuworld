<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
                'label'=>'Add the Title of the Article',
                'attr'=>[
                  'class' => 'form-control input-sm',
                  'placeholder' => 'Enter the title of the article'
                ]
            ])
            ->add('featuredImage',HiddenType::class,[
                'label'=>'Upload the featured Image'
            ])
            ->add('content',TextareaType::class,[
                'label'=>'Article Content',
                'required' => false,
                'attr'=>[
                  'class' => 'form-control input-sm',
                ]
            ])
            ->add('status',ChoiceType::class,
            ['label'=>'Article Status',
            'attr'=>[
              'class' => 'form-control input-sm',
            ],
              'choices' => ['Submitted'=>'Submitted','Published' => 'published','Disapproved' => 'disapproved']
            ])
            ->add('category',EntityType::class,[
                'class' => Category::class,
                'choice_label' => 'name',
                'attr'=>[
                  'class' => 'form-control input-sm',
                ]
            ])
            // ->add('tags',TextType::class,[
            //   'label' => 'Add Tags',
            //   'required' => false,
            //   'attr'=>[
            //     'class' => 'form-control input-sm',
            //     'placeholder' => 'Seperate tags by ,'
            //   ]
            // ])
            ->add('metaTitle',TextType::class,[
              'label' => 'Meta Title',
              'attr'=>[
                'class' => 'form-control input-sm',
                'placeholder' => "Leave empty if you're not sure of what this is!"
              ]
            ])
            ->add('metaDescription',TextType::class,[
              'label' => 'Meta Description',
              'required' => false,
              'attr'=>[
                'class' => 'form-control input-sm',
                'placeholder' => "Leave empty if you're not sure of what this is!"
              ]
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
