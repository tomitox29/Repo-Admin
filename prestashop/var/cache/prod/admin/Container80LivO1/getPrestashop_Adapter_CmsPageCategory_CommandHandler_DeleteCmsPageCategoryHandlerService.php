<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_CmsPageCategory_CommandHandler_DeleteCmsPageCategoryHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.cms_page_category.command_handler.delete_cms_page_category_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler\DeleteCmsPageCategoryHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.cms_page_category.command_handler.delete_cms_page_category_handler'] = new \PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler\DeleteCmsPageCategoryHandler();
    }
}