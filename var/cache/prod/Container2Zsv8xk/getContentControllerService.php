<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContentControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ContentController' shared autowired service.
     *
     * @return \App\Controller\ContentController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ContentController'] = $instance = new \App\Controller\ContentController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\ContentController', $container));

        return $instance;
    }
}
