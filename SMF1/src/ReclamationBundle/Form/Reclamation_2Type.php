<?php

namespace ReclamationBundle\Form;

/*use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrue;*/
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
/*use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;*/


class Reclamation_2Type extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('phone',TextType::class, array('required' => true))
            ->add('description',TextareaType::class)
            ->add('natureReclamation', ChoiceType::class,  array('choices' =>
                ['Choisir la nature de réclamation' => ['Retard' => 'Retard',
                    'Travail Mal Fait' => 'Travail Mal Fait', 'Absence'=>'Absence' ,
                    'Payement'=>'Payement','Autre'=>'Autre' ]],'required' => true ))

        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ReclamationBundle\Entity\Reclamation',
            'allow_extra_fields' => true,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'reclamationbundle_reclamation';
    }


}
