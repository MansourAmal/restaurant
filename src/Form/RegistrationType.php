<?php
// src/Form/RegistrationType.php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options): void
{
$builder
->add('fname', TextType::class, [
'label' => 'First Name',
    'attr' => ['placeholder' => 'First Name'],
])
->add('lname', TextType::class, [
'label' => 'Last Name',
    'attr' => ['placeholder' => 'Last Name'],
])
->add('email', EmailType::class, [
'label' => 'Email',
    'attr' => ['placeholder' => 'Email'],
])
->add('phone', TelType::class, [
'label' => 'Phone Number',
    'attr' => ['placeholder' => 'Phone Number'],
])
->add('password', PasswordType::class, [
'label' => 'Password',
    'attr' => ['placeholder' => 'Password'],
]);
}

public function configureOptions(OptionsResolver $resolver): void
{
$resolver->setDefaults([
    'data_class' => Utilisateur::class

]);
}
}
