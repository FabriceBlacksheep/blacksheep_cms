<?php

namespace App\Form;

use App\Entity\Agence;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\Dropzone\Form\DropzoneType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;
// FileType
use Symfony\Component\Form\Extension\Core\Type\FileType;
// vich uploader
use Vich\UploaderBundle\Form\Type\VichFileType;
// use Vich\UploaderBundle\Form\Type\VichImageType;
use Vich\UploaderBundle\Form\Type\VichImageType;


class AgenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'required' => true,
                'label' => 'Nom',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('idLocpro', null, [
                'required' => true,
                'label' => 'ID Locpro',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            // type agence
            ->add('type', ChoiceType::class, [
                'required' => true,
                'label' => 'Type',
                'attr' => [
                    'class' => 'form-control',
                ],
                'multiple' => false,
                'expanded' => false,
                'choices'  => [
                  'Agence propre' => 'Agence propre',
                  'Franchise' => 'Franchise',
                ],
            ])

            ->add('description',CKEditorType::class)


            // add visuel FileType
            ->add('visuel', FileType::class, [
                'data_class' => null,
                'mapped' => false,
                'required' => false,
                'label' => 'Visuel',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])







            // ->add('visuel', DropzoneType::class, [
            //     // show uploaded file

            //     'data_class' => null,
            //     'label' => 'Visuel',
            //     'attr' => [
            //         'id' => 'dropzoneImg',
            //         'class' => 'form-control',
            //         'placeholder' => 'Glisser déposer ou cliquer pour ajouter une image',
            //     ],
            // ])


            ->add('localisation', null, [
                'required' => true,
                'label' => 'Localisation',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('telephone',null, [
                'required' => true,
                'label' => 'Téléphone',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('horaires',null, [
                'required' => true,
                'label' => 'Horaires',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
        ;


        // Data transformer
        $builder->get('type')
            ->addModelTransformer(new CallbackTransformer(
                function ($typeArray) {
                     // transform the array to a string
                     return count($typeArray)? $typeArray[0]: null;
                },
                function ($typeString) {
                     // transform the string back to an array
                     return [$typeString];
                }
        ));




    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Agence::class,
        ]);


    }
}
