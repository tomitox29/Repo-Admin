<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Module_LinkBlock_RepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.module.link_block.repository' shared service.
     *
     * @return \PrestaShop\Module\LinkList\Repository\LinkBlockRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.module.link_block.repository'] = new \PrestaShop\Module\LinkList\Repository\LinkBlockRepository(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_', ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(false, ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context())->getContextShopID()), ($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? self::getMultistoreFeatureService($container))->isUsed(), ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context()), ($container->services['prestashop.module.link_block.adapter.object_model_handler'] ??= new \PrestaShop\Module\LinkList\Adapter\ObjectModelHandler()));
    }
}
