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

class AgenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('idLocpro')
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
            // add dropzone


            ->add('visuel', DropzoneType::class, array('data_class' => null))
            ->add('localisation')
            ->add('telephone')
            ->add('horaires')
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
