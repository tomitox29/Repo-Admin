<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_DXnKOUService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.dXn_kOU' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.dXn_kOU'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Adapter\Country\QueryHandler\GetCountryForEditingHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Country\\Repository\\CountryRepository'] ?? self::getCountryRepositoryService($container))))->handle(...), ['method' => 'handle']);
    }
}