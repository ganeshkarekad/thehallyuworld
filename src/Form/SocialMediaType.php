<?php

namespace App\Form;

use App\Entity\SocialMedia;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SocialMediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('facebook')
            ->add('twitter')
            ->add('instagram')
            ->add('site')
            ->add('tiktok')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('isVisible')
            ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SocialMedia::class,
        ]);
    }
}
