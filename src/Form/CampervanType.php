<?php

namespace App\Form;

use App\Entity\Campervan;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\Dropzone\Form\DropzoneType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class CampervanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            // idLocpro is a foreign key
            ->add('idLocpro')
            ->add('modele')
            ->add('description',CKEditorType::class)
            ->add('options')
            ->add('visiteVirtuelle')
            ->add('visuel', DropzoneType::class, array('data_class' => null))
            ->add('lienDescriptif')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Campervan::class,
        ]);
    }
}
