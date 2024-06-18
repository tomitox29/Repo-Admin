<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Factory_CmsPageCategoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.factory.cms_page_category' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\GridFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.factory.cms_page_category'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($container->services['prestashop.core.grid.definition.factory.cms_page_category'] ?? $container->load('getPrestashop_Core_Grid_Definition_Factory_CmsPageCategoryService')), ($container->services['prestashop.core.grid.data_provider.cms_page_category'] ?? $container->load('getPrestashop_Core_Grid_DataProvider_CmsPageCategoryService')), ($container->services['prestashop.core.grid.filter.cms_page_form_factory'] ?? $container->load('getPrestashop_Core_Grid_Filter_CmsPageFormFactoryService')), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)));
    }
}
