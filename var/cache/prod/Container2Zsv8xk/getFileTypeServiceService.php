<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileTypeServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Artgris\Bundle\FileManagerBundle\Service\FileTypeService' shared autowired service.
     *
     * @return \Artgris\Bundle\FileManagerBundle\Service\FileTypeService
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->privates['Artgris\\Bundle\\FileManagerBundle\\Service\\FileTypeService'])) {
            return $container->privates['Artgris\\Bundle\\FileManagerBundle\\Service\\FileTypeService'];
        }
        $b = ($container->privates['twig'] ?? $container->load('getTwigService'));

        if (isset($container->privates['Artgris\\Bundle\\FileManagerBundle\\Service\\FileTypeService'])) {
            return $container->privates['Artgris\\Bundle\\FileManagerBundle\\Service\\FileTypeService'];
        }

        return $container->privates['Artgris\\Bundle\\FileManagerBundle\\Service\\FileTypeService'] = new \Artgris\Bundle\FileManagerBundle\Service\FileTypeService($a, $b);
    }
}
