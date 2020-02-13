<?php

namespace ClubBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DonType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('club',EntityType::class,array(
            'class'=>'ClubBundle:Club',
            'choice_label'=>'nom',
            'multiple'=>false
        ))
            ->add('type',ChoiceType::class, [
                'choices' => [
                    'Argent' => 'Argent',
                    'Equipement' => 'Equipement',
                ]
            ])
            ->add('Somme')

            ->add('Ajouter Club',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ClubBundle\Entity\Don'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'clubbundle_don';
    }


}
