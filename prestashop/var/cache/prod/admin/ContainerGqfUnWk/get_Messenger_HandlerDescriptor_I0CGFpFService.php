<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_I0CGFpFService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.i0CGFpF' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.i0CGFpF'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.cms_page_category.command_handler.delete_cms_page_category_handler'] ??= new \PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler\DeleteCmsPageCategoryHandler())->handle(...), ['method' => 'handle']);
    }
}
