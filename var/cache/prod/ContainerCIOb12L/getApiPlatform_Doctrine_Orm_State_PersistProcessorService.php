<?php

namespace ContainerCIOb12L;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_State_PersistProcessorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.doctrine.orm.state.persist_processor' shared service.
     *
     * @return \ApiPlatform\Doctrine\Common\State\PersistProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.doctrine.orm.state.persist_processor'] = new \ApiPlatform\Doctrine\Common\State\PersistProcessor(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
