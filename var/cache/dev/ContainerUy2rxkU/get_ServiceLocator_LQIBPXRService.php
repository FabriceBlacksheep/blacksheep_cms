<?php

namespace ContainerUy2rxkU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LQIBPXRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lQIBPXR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lQIBPXR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'assurance' => ['privates', '.errored..service_locator.lQIBPXR.App\\Entity\\Assurance', NULL, 'Cannot autowire service ".service_locator.lQIBPXR": it needs an instance of "App\\Entity\\Assurance" but this type has been excluded in "config/services.yaml".'],
        ], [
            'assurance' => 'App\\Entity\\Assurance',
        ]);
    }
}
