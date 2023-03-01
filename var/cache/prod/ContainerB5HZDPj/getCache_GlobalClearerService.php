<?php

namespace ContainerB5HZDPj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_GlobalClearerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($container->services['cache.app'] ?? $container->load('getCache_AppService')), 'cache.system' => ($container->services['cache.system'] ?? $container->load('getCache_SystemService')), 'cache.validator' => ($container->privates['cache.validator'] ?? $container->getCache_ValidatorService()), 'cache.serializer' => ($container->privates['cache.serializer'] ?? $container->getCache_SerializerService()), 'cache.annotations' => ($container->privates['cache.annotations'] ?? $container->getCache_AnnotationsService()), 'cache.property_info' => ($container->privates['cache.property_info'] ?? $container->getCache_PropertyInfoService()), 'cache.messenger.restart_workers_signal' => ($container->privates['cache.messenger.restart_workers_signal'] ?? $container->load('getCache_Messenger_RestartWorkersSignalService')), 'doctrine.result_cache_pool' => ($container->privates['doctrine.result_cache_pool'] ?? $container->getDoctrine_ResultCachePoolService()), 'doctrine.system_cache_pool' => ($container->privates['doctrine.system_cache_pool'] ?? $container->getDoctrine_SystemCachePoolService()), 'cache.property_access' => ($container->privates['cache.property_access'] ?? $container->getCache_PropertyAccessService()), 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? $container->load('getCache_ValidatorExpressionLanguageService')), 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? $container->getCache_SecurityExpressionLanguageService()), 'cache.security_is_granted_attribute_expression_language' => ($container->services['cache.security_is_granted_attribute_expression_language'] ?? $container->getCache_SecurityIsGrantedAttributeExpressionLanguageService()), 'api_platform.cache.metadata.resource' => ($container->privates['api_platform.cache.metadata.resource'] ?? $container->getApiPlatform_Cache_Metadata_ResourceService()), 'api_platform.cache.metadata.property' => ($container->privates['api_platform.cache.metadata.property'] ?? $container->getApiPlatform_Cache_Metadata_PropertyService()), 'api_platform.cache.metadata.resource_collection' => ($container->privates['api_platform.cache.metadata.resource_collection'] ?? $container->getApiPlatform_Cache_Metadata_ResourceCollectionService())]);
    }
}
