<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_LoaderService extends App_KernelProdContainer
{
    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService());

        if (isset($container->services['routing.loader'])) {
            return $container->services['routing.loader'];
        }
        $b = new \Symfony\Component\Config\Loader\LoaderResolver();

        $c = ($container->services['kernel'] ?? $container->get('kernel', 1));

        $d = new \Symfony\Component\HttpKernel\Config\FileLocator($c);
        $e = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()), 'prod');

        $b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($d, 'prod'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($d, 'prod'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($d, 'prod'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($d, 'prod'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($d, 'prod'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ]), 'prod'));
        $b->addLoader(new \ApiPlatform\Symfony\Routing\ApiLoader($c, ($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), $a, $container, $container->parameters['api_platform.formats'], $container->parameters['api_platform.resource_class_directories'], false, true, true, false, false, NULL));
        $b->addLoader($e);
        $b->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($d, $e));
        $b->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($d, $e));
        $b->addLoader(new \Symfony\Component\Routing\Loader\Psr4DirectoryLoader($d));

        return $container->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($b, ['utf8' => true], []);
    }
}
