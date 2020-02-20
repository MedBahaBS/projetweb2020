<?php

namespace GestionBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class ReclamationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)

    {
        $builder->add ('Classe',EntityType::class,array(
            'class'=>'GestionBundle:Classe',
            'choice_label'=>'libelle',
            'multiple'=>false

        ))
            ->add('dateReclamation')

            ->add('typeReclamation',ChoiceType::class, [
                'choices'  => [
                    'Absence' => 'Absence',
                    'Retard' => 'Retard',
                    'Menu' => 'Menu',

                ],
            ])
            ->add('contenuReclamation');

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionBundle\Entity\Reclamation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestionbundle_reclamation';
    }


}
