<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_Rwk3kZlService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.Rwk3kZl' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.Rwk3kZl'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryHandler\GetImageSettingsForEditingHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Admin\\ImageConfiguration'] ?? $container->load('getImageConfigurationService'))))->handle(...), ['method' => 'handle']);
    }
}
