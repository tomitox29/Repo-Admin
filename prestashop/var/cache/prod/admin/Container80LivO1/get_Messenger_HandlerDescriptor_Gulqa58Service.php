<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_Gulqa58Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.gulqa58' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.gulqa58'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.cms_page_category.command_handler.toggle_cms_page_category_status_handler'] ??= new \PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler\ToggleCmsPageCategoryStatusHandler())->handle(...), ['method' => 'handle']);
    }
}