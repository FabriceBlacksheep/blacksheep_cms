<?php

namespace ContainerB5HZDPj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'FOS\\CKEditorBundle\\Form\\Type', 4 => '', 5 => 'Vich\\UploaderBundle\\Form\\Type'], [0 => 'App\\Form\\AgenceType', 1 => 'App\\Form\\CampervanType', 2 => 'App\\Form\\CategoryType', 3 => 'App\\Form\\ChangePasswordFormType', 4 => 'App\\Form\\ContentType', 5 => 'App\\Form\\RegistrationFormType', 6 => 'App\\Form\\ResetPasswordRequestFormType', 7 => 'App\\Form\\UserType', 8 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 9 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 10 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 11 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 12 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 13 => 'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType', 14 => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType', 15 => 'Vich\\UploaderBundle\\Form\\Type\\VichFileType', 16 => 'Vich\\UploaderBundle\\Form\\Type\\VichImageType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\PasswordHasher\\Type\\FormTypePasswordHasherExtension', 8 => 'Symfony\\Component\\Form\\Extension\\PasswordHasher\\Type\\PasswordTypePasswordHasherExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ??= new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter($container->getEnv('default::SYMFONY_IDE'))));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
