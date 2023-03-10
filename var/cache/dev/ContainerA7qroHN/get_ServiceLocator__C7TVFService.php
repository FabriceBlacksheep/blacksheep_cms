<?php

namespace ContainerA7qroHN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__C7TVFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..C7T_vF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..C7T_vF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'campervan' => ['privates', '.errored..service_locator..C7T_vF.App\\Entity\\Campervan', NULL, 'Cannot autowire service ".service_locator..C7T_vF": it needs an instance of "App\\Entity\\Campervan" but this type has been excluded in "config/services.yaml".'],
            'campervanRepository' => ['privates', 'App\\Repository\\CampervanRepository', 'getCampervanRepositoryService', true],
        ], [
            'campervan' => 'App\\Entity\\Campervan',
            'campervanRepository' => 'App\\Repository\\CampervanRepository',
        ]);
    }
}
