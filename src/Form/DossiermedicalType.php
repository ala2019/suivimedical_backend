<?php

namespace App\Form;

use App\Entity\Dossiermedical;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DossiermedicalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Num_dossier')
            ->add('Nom_patient')
            ->add('Prenom_patient')
            ->add('Date_naissance')
            ->add('Age')
            ->add('Sexe')
            ->add('Poids')
            ->add('Type_diabete')
            ->add('Deligation_residence')
            ->add('Email')
            ->add('Telephone1')
            ->add('Telephone2')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Dossiermedical::class,
        ]);
    }
}
