<?php

namespace EventsBundle\Form;



use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre',TextType::class, array('attr' => array('placeholder' => 'Entrer le titre ici')))
            ->add('description', TextareaType::class, array('attr' => array('placeholder' => 'Entrer le description ici')))
            ->add('date')
            ->add('nbParticipantMax')
            ->add('lieu', TextType::class ,array('attr' => array('placeholder' => 'Entrer le lieu ici')))
            ->add('frais')
            ->add('datefin')
            ->add('categorie',EntityType::Class,array(
                'class'=>'EventsBundle:Categorie',
                'choice_label'=>'libelle',
                'multiple'=>false
            ))
            ->add('Ajouter', SubmitType::class);

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EventsBundle\Entity\Evenement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'eventsbundle_evenement';
    }


}
