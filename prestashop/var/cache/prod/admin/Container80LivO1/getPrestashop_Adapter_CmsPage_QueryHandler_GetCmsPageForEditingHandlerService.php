<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_CmsPage_QueryHandler_GetCmsPageForEditingHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.cms_page.query_handler.get_cms_page_for_editing_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\CMS\Page\QueryHandler\GetCmsPageForEditingHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.cms_page.query_handler.get_cms_page_for_editing_handler'] = new \PrestaShop\PrestaShop\Adapter\CMS\Page\QueryHandler\GetCmsPageForEditingHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->link, ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language->id);
    }
}
