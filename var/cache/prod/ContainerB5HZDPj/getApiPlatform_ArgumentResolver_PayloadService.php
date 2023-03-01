<?php

namespace ContainerB5HZDPj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_ArgumentResolver_PayloadService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.argument_resolver.payload' shared service.
     *
     * @return \ApiPlatform\Symfony\Bundle\ArgumentResolver\PayloadArgumentResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService());

        if (isset($container->privates['api_platform.argument_resolver.payload'])) {
            return $container->privates['api_platform.argument_resolver.payload'];
        }

        return $container->privates['api_platform.argument_resolver.payload'] = new \ApiPlatform\Symfony\Bundle\ArgumentResolver\PayloadArgumentResolver($a, ($container->privates['api_platform.serializer.context_builder.filter'] ?? $container->getApiPlatform_Serializer_ContextBuilder_FilterService()));
    }
}
