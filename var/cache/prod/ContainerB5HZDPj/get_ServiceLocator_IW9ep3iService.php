<?php

namespace ContainerB5HZDPj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IW9ep3iService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.iW9ep3i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iW9ep3i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contentRepository' => ['privates', 'App\\Repository\\ContentRepository', 'getContentRepositoryService', true],
        ], [
            'contentRepository' => 'App\\Repository\\ContentRepository',
        ]);
    }
}
