<?php

namespace ScolariteBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('note1')->add('note2')
            ->add('matiere',EntityType::class,array(
                'class' => 'ScolariteBundle:Matiere',
                'choice_label'=>'nom',
                'multiple'=>false
            ))
            ->add('eleve',EntityType::class,array(
                'class' => 'EventsBundle:User',
                'choice_label'=>'username',
                'multiple'=>false
            ))
            ->add('classe',EntityType::class,array(
                'class' => 'GestionBundle:Classe',
                'choice_label'=>'libelle',
                'multiple'=>false
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ScolariteBundle\Entity\Note'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'scolaritebundle_note';
    }


}
