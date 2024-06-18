<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Module_LinkBlock_ChoiceProvider_CmsCategoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.module.link_block.choice_provider.cms_category' shared service.
     *
     * @return \PrestaShop\Module\LinkList\Form\ChoiceProvider\CMSCategoryChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.module.link_block.choice_provider.cms_category'] = new \PrestaShop\Module\LinkList\Form\ChoiceProvider\CMSCategoryChoiceProvider(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_', ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguage()->id, ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context())->getContextListShopID());
    }
}