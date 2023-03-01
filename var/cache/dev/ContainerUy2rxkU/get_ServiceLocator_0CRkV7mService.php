<?php

namespace ContainerUy2rxkU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0CRkV7mService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0CRkV7m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0CRkV7m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.0CRkV7m.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.0CRkV7m": it needs an instance of "App\\Entity\\Category" but this type has been excluded in "config/services.yaml".'],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
        ], [
            'category' => 'App\\Entity\\Category',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
        ]);
    }
}
