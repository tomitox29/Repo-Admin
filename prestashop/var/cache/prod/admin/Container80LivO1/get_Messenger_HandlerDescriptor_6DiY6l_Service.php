<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_6DiY6l_Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.6DiY6l.' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.6DiY6l.'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Adapter\Feature\CommandHandler\DeleteFeatureValueHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\Repository\\FeatureValueRepository'] ?? $container->load('getFeatureValueRepositoryService'))))->handle(...), ['method' => 'handle']);
    }
}
