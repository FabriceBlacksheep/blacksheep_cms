<?php

namespace ContainerI5yuEQu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JS3aGxService extends App_KernelPrpdDebugContainer
{
    /**
     * Gets the private '.service_locator.jS3a_Gx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jS3a_Gx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fileTypeService' => ['privates', 'Artgris\\Bundle\\FileManagerBundle\\Service\\FileTypeService', 'getFileTypeServiceService', true],
        ], [
            'fileTypeService' => 'Artgris\\Bundle\\FileManagerBundle\\Service\\FileTypeService',
        ]);
    }
}
