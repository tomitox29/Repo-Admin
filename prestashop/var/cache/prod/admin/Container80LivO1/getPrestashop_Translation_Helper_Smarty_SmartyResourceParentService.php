<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Translation_Helper_Smarty_SmartyResourceParentService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.translation.helper.smarty.smarty_resource_parent' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Helper\Smarty\SmartyResourceParent
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.translation.helper.smarty.smarty_resource_parent'] = new \PrestaShop\TranslationToolsBundle\Translation\Helper\Smarty\SmartyResourceParent();
    }
}
