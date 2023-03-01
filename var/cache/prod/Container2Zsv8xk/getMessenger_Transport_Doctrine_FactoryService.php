<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_Doctrine_FactoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'messenger.transport.doctrine.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Bridge\Doctrine\Transport\DoctrineTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.transport.doctrine.factory'] = new \Symfony\Component\Messenger\Bridge\Doctrine\Transport\DoctrineTransportFactory(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
