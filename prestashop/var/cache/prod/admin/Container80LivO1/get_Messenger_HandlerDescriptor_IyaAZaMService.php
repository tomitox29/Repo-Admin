<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_IyaAZaMService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.IyaAZaM' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.IyaAZaM'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler\BulkDeleteImageTypeHandler(($container->services['PrestaShopBundle\\Entity\\Repository\\ImageTypeRepository'] ?? $container->load('getImageTypeRepositoryService'))))->handle(...), ['method' => 'handle']);
    }
}
