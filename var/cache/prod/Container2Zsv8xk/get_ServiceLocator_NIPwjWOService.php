<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NIPwjWOService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.NIPwjWO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NIPwjWO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'adresseRepository' => ['privates', 'App\\Repository\\AdresseRepository', 'getAdresseRepositoryService', true],
            'agenceRepository' => ['privates', 'App\\Repository\\AgenceRepository', 'getAgenceRepositoryService', true],
        ], [
            'adresseRepository' => 'App\\Repository\\AdresseRepository',
            'agenceRepository' => 'App\\Repository\\AgenceRepository',
        ]);
    }
}
