<?php

namespace ContainerB5HZDPj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_SwaggerUi_ActionService extends App_KernelProdContainer
{
    /*
     * Gets the public 'api_platform.swagger_ui.action' shared service.
     *
     * @return \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiAction
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['api_platform.swagger_ui.action'] = new \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiAction(($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService()), ($container->privates['twig'] ?? $container->load('getTwigService')), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['serializer'] ?? $container->getSerializerService()), ($container->privates['api_platform.openapi.factory'] ?? $container->load('getApiPlatform_Openapi_FactoryService')), ($container->privates['api_platform.openapi.options'] ?? $container->load('getApiPlatform_Openapi_OptionsService')), new \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiContext(true, false, true, false, false, false, NULL, []), $container->parameters['api_platform.formats'], '', '', false);
    }
}
