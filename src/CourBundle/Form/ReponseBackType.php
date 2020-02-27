<?php

namespace CourBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ReponseBackType extends AbstractType
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
