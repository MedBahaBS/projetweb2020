<?php

namespace EventsBundle\Form;



use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RechercheEvenementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre',TextType::class,
            array('attr' => array('placeholder' => 'Titre'),
                'required' => false)
        )
            ->add('date', DateType::class, ['required'=>false])
            ->add('lieu', TextType::class ,
                array('attr' => array('placeholder' => 'Lieu'),
                    'required'=>false)
            )
            ->add('categorie',EntityType::Class,array(
                'class'=>'EventsBundle:Categorie',
                'choice_label'=>'libelle',
                'multiple'=>false,
                'required'=>false
            ))
            ->add('club',EntityType::Class,array(
                'class'=>'ClubBundle:Club',
                'choice_label'=>'Nom',
                'multiple'=>false,
                'required' => false
            ))
        ->add('Chercher', SubmitType::class);

    }
    /**
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
