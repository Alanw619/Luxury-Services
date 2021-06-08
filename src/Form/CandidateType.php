<?php

namespace App\Form;

use App\Entity\Candidate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('adress')
            ->add('country')
            ->add('nationality')
            ->add('passport')
            ->add('curriculum_vitae')
            ->add('profil_picture')
            ->add('current_location')
            ->add('date_of_birth', DateType::class,[
                'widget'=>'single_text',
                'format' => 'yyyy-MM-dd',
            ])
            ->add('experience')
            // ->add('info_admin_candidate')
            // ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
