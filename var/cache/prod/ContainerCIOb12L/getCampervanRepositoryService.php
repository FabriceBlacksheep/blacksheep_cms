<?php

namespace ContainerCIOb12L;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampervanRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CampervanRepository' shared autowired service.
     *
     * @return \App\Repository\CampervanRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CampervanRepository'] = new \App\Repository\CampervanRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
