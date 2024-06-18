<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchAndResetTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Type\SearchAndResetType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\SearchAndResetType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['prestashop.router'] ?? $container->load('getPrestashop_RouterService'));

        if (isset($container->privates['PrestaShopBundle\\Form\\Admin\\Type\\SearchAndResetType'])) {
            return $container->privates['PrestaShopBundle\\Form\\Admin\\Type\\SearchAndResetType'];
        }

        return $container->privates['PrestaShopBundle\\Form\\Admin\\Type\\SearchAndResetType'] = new \PrestaShopBundle\Form\Admin\Type\SearchAndResetType($a);
    }
}
