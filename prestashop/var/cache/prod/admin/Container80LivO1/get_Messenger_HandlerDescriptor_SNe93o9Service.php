<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_SNe93o9Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.SNe93o9' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.SNe93o9'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.cms_page.command_handler.edit_cms_page_handler'] ??= new \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\EditCmsPageHandler())->handle(...), ['method' => 'handle']);
    }
}
