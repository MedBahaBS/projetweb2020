<?php

namespace CourBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ReponseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commantaire')
            ->add('noteserier',NumberType::class,[
            ])
            ->add('lienrep', FileType::class, [
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
            ->add('reponse', EntityType::class,array(
                'class'=>'CourBundle:serie',
                'choice_label'=>'nomserie'))

            ->add('submit',SubmitType::class,[
            'label' =>'repondre',
            'attr' =>[
                'class' => 'btn btn-primary py-3 px-5',

            ]
        ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CourBundle\Entity\Reponse'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'courbundle_reponse';
    }


}
