<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_PlaceholderService extends App_KernelProdContainer
{
    /*
     * Gets the public 'api_platform.action.placeholder' shared service.
     *
     * @return \ApiPlatform\Action\PlaceholderAction
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['api_platform.action.placeholder'] = new \ApiPlatform\Action\PlaceholderAction();
    }
}
