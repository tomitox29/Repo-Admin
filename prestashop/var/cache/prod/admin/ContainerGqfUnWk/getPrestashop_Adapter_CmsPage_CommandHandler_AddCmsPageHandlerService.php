<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_CmsPage_CommandHandler_AddCmsPageHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.cms_page.command_handler.add_cms_page_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\AddCmsPageHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.cms_page.command_handler.add_cms_page_handler'] = new \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\AddCmsPageHandler();
    }
}
