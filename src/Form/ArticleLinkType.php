<?php

namespace App\Form;

use App\Entity\ArticleLink;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleLinkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('iTunes')
            ->add('appleMusic')
            ->add('googlePlay')
            ->add('saavn')
            ->add('youTube')
            ->add('ytMusic')
            ->add('gaana')
            ->add('wynk')
            ->add('updatedAt')
            ->add('article')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ArticleLink::class,
        ]);
    }
}
