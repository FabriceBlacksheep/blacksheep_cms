<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssuranceRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\AssuranceRepository' shared autowired service.
     *
     * @return \App\Repository\AssuranceRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AssuranceRepository'] = new \App\Repository\AssuranceRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
