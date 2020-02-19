<?php

namespace cantineBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class menuType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Jour_Menu',ChoiceType::class,array('choices'=>['lundi'=>'lundi',' mardi'=>' mardi','mercredi'=>'mercredi','jeudi'=>'jeudi','vendredi'=>'vendredi']))
            ->add('entree',EntityType::class,array('class'=>'cantineBundle:plat','choice_label'=>function($plat){if($plat->getType()=='Entree'&&$plat->getStatus()=="non reserve"){return $plat->getNomPlat();}},'multiple'=>false))
            ->add('platprincipal',EntityType::class,array('class'=>'cantineBundle:plat','choice_label'=>function($plat){if($plat->getType()=='plat principal'&&$plat->getStatus()=="non reserve"){return $plat->getNomPlat();}},'multiple'=>false))
            ->add('dessert',EntityType::class,array('class'=>'cantineBundle:plat','choice_label'=>function($plat){if($plat->getType()=='Dessert'&&$plat->getStatus()=="non reserve"){return $plat->getNomPlat();}},'multiple'=>false))
            ->add('Ajouter',SubmitType::class);


}/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'cantineBundle\Entity\menu'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cantinebundle_menu';
    }


}
