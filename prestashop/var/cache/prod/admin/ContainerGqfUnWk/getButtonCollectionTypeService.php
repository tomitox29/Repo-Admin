<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getButtonCollectionTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Type\ButtonCollectionType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\ButtonCollectionType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Type\\ButtonCollectionType'] = new \PrestaShopBundle\Form\Admin\Type\ButtonCollectionType();
    }
}
