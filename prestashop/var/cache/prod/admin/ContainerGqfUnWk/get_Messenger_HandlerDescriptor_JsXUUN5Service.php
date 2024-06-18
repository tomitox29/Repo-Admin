<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_JsXUUN5Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.jsXUUN5' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.jsXUUN5'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.cms_page.command_handler.bulk_disable_cms_page'] ??= new \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\BulkDisableCmsPageHandler())->handle(...), ['method' => 'handle']);
    }
}
