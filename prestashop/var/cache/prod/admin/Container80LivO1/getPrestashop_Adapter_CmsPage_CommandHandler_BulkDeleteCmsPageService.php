<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_CmsPage_CommandHandler_BulkDeleteCmsPageService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.cms_page.command_handler.bulk_delete_cms_page' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\BulkDeleteCmsPageHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.cms_page.command_handler.bulk_delete_cms_page'] = new \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\BulkDeleteCmsPageHandler();
    }
}