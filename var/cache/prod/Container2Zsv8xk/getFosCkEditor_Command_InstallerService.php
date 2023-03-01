<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosCkEditor_Command_InstallerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'fos_ck_editor.command.installer' shared service.
     *
     * @return \FOS\CKEditorBundle\Command\CKEditorInstallerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['fos_ck_editor.command.installer'] = $instance = new \FOS\CKEditorBundle\Command\CKEditorInstallerCommand(new \FOS\CKEditorBundle\Installer\CKEditorInstaller());

        $instance->setName('ckeditor:install');

        return $instance;
    }
}
