<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\IntegerType;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      if( empty($options['data']->getId()) ) {

        $builder
          ->add('firstName', TextType::class)
          ->add('lastName', TextType::class)
          ->add('age', TextType::class)
          ->add('email', EmailType::class)
          ->add('password', RepeatedType::class,
            [
              'type' => PasswordType::class,
              'first_options' => ['label' => 'password'],
              'second_options' => ['label' => "confirm password"]
            ])
          ->add('signUp', SubmitType::class);
      }else{
        $builder
          ->add('pseudo',TextType::class)
          ->add('firstName', TextType::class)
          ->add('lastName', TextType::class)
          ->add('age', IntegerType::class)
          ->add('email', EmailType::class)
          ->add('password', RepeatedType::class,
            [
              'type' => PasswordType::class,
              'first_options' => ['label' => 'password'],
              'second_options' => ['label' => "confirm password"]
            ])

          ->add('signUp', SubmitType::class);
      }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
      /*  $resolver->setDefaults([
            'data_class' => User::class,
        ]);*/
    }
}
