<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssuranceTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\AssuranceType' shared autowired service.
     *
     * @return \App\Form\AssuranceType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\AssuranceType'] = new \App\Form\AssuranceType();
    }
}
