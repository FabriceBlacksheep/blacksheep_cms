<?php

namespace ContainerB5HZDPj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_EntityValueResolverService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.entity_value_resolver' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.entity_value_resolver'] = new \Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver(($container->services['doctrine'] ?? $container->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage());
    }
}
