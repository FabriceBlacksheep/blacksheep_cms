<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YhUMMoPService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.yhUMMoP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yhUMMoP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'campervanRepository' => ['privates', 'App\\Repository\\CampervanRepository', 'getCampervanRepositoryService', true],
        ], [
            'campervanRepository' => 'App\\Repository\\CampervanRepository',
        ]);
    }
}
