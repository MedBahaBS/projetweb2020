<?php

namespace ClubBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Range;

class DonsearchType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', 'choice', array('choices' => array('Argent', 'Equipement','required'=>false)))

            ->add('somme', 'choice', array('choices' => array('100','200','300','400','500','600','700','800','900','1000','1100')))

            ->add('transmission', 'choice', array('choices' => array('auto', 'manuelle')) );

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
