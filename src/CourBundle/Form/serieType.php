<?php

namespace CourBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class serieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('lien', FileType::class, [
            'label' => 'Brochure (PDF file)',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
                    'maxSize' => '10000k',
                    'mimeTypes' => [
                        'application/pdf',
                        'application/x-pdf',
                    ],
                    'mimeTypesMessage' => 'Please upload a valid PDF document',
                ])
            ],
        ])

            ->add('nomserie')
            ->add('description')
            ->add('cour', EntityType::class,array(
                'class'=>'CourBundle:cours',
                'choice_label'=>'nomchapitre'))

           ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CourBundle\Entity\serie'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'courbundle_serie';
    }


}
