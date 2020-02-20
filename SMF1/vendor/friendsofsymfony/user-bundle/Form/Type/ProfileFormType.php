<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class ProfileFormType extends AbstractType
{
    /**
     * @var string
     */
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->buildUserForm($builder, $options);

        $constraintsOptions = array(
            'message' => 'fos_user.current_password.invalid',
        );

        if (!empty($options['validation_groups'])) {
            $constraintsOptions['groups'] = array(reset($options['validation_groups']));
        }

        $builder->add('current_password', PasswordType::class, array(
            'label' => 'form.current_password',

            'translation_domain' => 'FOSUserBundle',
            'mapped' => false,
            'constraints' => array(
                new NotBlank(),
                new UserPassword($constraintsOptions),
            ),
            'attr' => array(
                'autocomplete' => 'current-password',
            ),
        ))->add('nom',TextType::class)
            ->add('pays', TextType::class)
            ->add('ville', TextType::class)
            ->add('adresse', TextType::class)
            ->add('tel', TextType::class)
            ->add('sexe', ChoiceType::class, array('choices'  => [
                'Sexe' =>[
                'Homme' => 'homme',
                'Femme' => 'femme',
            ]],'required' => true))
            ->add('nivexper', ChoiceType::class, array('choices'  =>
                ['Niveau d\'expérience' => [
                    '1Ans' => '1ans',
                    '2Ans' => '2ans',
                    '3Ans' => '3ans',
                    '4Ans' => '4ans',
                ]],'required' => true ))

            ->add('nivetud', ChoiceType::class, array('choices'  =>
                ['Niveau d\'étude' => [
                    'Bac+2(DEUG , BTS , DUT , DEUST)' => 'Bac+2(DEUG , BTS , DUT , DEUST)',
                    'Bac+3(Licence, licence professionnelle)' => 'Bac+3(Licence, licence professionnelle)',
                    'Bac+4(Maîtrise, master 1)' => 'Bac+4(Maîtrise, master 1)',
                    'Bac+5(diplôme d\'ingénieur)' => 'Bac+5(diplôme d\'ingénieur)',
                ]],'required' => true))


        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'csrf_token_id' => 'profile',
        ));
    }

    // BC for SF < 3.0

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fos_user_profile';
    }

    /**
     * Builds the embedded form representing the user.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('email', EmailType::class, array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
        ;
    }
}
