<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8IESKP1Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.8IESKP1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8IESKP1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.8IESKP1.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.8IESKP1": it needs an instance of "App\\Entity\\Category" but this type has been excluded in "config/services.yaml".'],
        ], [
            'category' => 'App\\Entity\\Category',
        ]);
    }
}
