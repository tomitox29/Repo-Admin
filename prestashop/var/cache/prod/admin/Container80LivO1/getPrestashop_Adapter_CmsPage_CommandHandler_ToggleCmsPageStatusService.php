<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_CmsPage_CommandHandler_ToggleCmsPageStatusService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.cms_page.command_handler.toggle_cms_page_status' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\ToggleCmsPageStatusHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.cms_page.command_handler.toggle_cms_page_status'] = new \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\ToggleCmsPageStatusHandler();
    }
}
