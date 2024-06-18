<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_WXKl_YBService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.wXKl.YB' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.wXKl.YB'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Adapter\CartRule\CommandHandler\EditCartRuleHandler(($container->privates['PrestaShop\\PrestaShop\\Adapter\\CartRule\\Repository\\CartRuleRepository'] ?? $container->load('getCartRuleRepositoryService')), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\CartRule\\CartRuleActionFiller'] ??= new \PrestaShop\PrestaShop\Adapter\CartRule\CartRuleActionFiller())))->handle(...), ['method' => 'handle']);
    }
}