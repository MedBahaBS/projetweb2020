<?php

namespace CourBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
class coursType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('niveau')
                ->add('matiere',EntityType::class,array(
            'class' => 'ScolariteBundle:Matiere',
            'choice_label'=>'nom',
            'multiple'=>false
        ))
                ->add('nomchapitre')
               ->add('nomchapitre')
               ->add('email',EmailType::class)
            ->add('lien', FileType::class, [
                'label' => 'Brochure (PDF file)',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
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

              ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CourBundle\Entity\cours'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'courbundle_cours';
    }


}
