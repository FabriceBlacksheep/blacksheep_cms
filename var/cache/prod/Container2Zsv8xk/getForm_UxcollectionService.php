<?php

namespace Container2Zsv8xk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_UxcollectionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'form.ux-collection' shared service.
     *
     * @return \Arkounay\Bundle\UxCollectionBundle\Form\UxCollectionType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.ux-collection'] = new \Arkounay\Bundle\UxCollectionBundle\Form\UxCollectionType();
    }
}
