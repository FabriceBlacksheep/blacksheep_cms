<?php

namespace ContainerB5HZDPj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_MappingInfoCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\InfoCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\InfoCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }
}
