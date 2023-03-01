<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManagerControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Artgris\Bundle\FileManagerBundle\Controller\ManagerController' shared autowired service.
     *
     * @return \Artgris\Bundle\FileManagerBundle\Controller\ManagerController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController'] = $instance = new \Artgris\Bundle\FileManagerBundle\Controller\ManagerController(($container->privates['Artgris\\Bundle\\FileManagerBundle\\Service\\FilemanagerService'] ?? $container->load('getFilemanagerServiceService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController', $container));

        return $instance;
    }
}
