<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_NotExposedService extends App_KernelProdContainer
{
    /*
     * Gets the public 'api_platform.action.not_exposed' shared service.
     *
     * @return \ApiPlatform\Action\NotExposedAction
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['api_platform.action.not_exposed'] = new \ApiPlatform\Action\NotExposedAction();
    }
}
