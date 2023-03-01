<?php

namespace ContainerB5HZDPj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Command_MappingListClassesService extends App_KernelProdContainer
{
    /*
     * Gets the private 'vich_uploader.command.mapping_list_classes' shared service.
     *
     * @return \Vich\UploaderBundle\Command\MappingListClassesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['vich_uploader.command.mapping_list_classes'] = $instance = new \Vich\UploaderBundle\Command\MappingListClassesCommand(($container->privates['vich_uploader.metadata_reader'] ?? $container->load('getVichUploader_MetadataReaderService')));

        $instance->setName('vich:mapping:list-classes');

        return $instance;
    }
}
