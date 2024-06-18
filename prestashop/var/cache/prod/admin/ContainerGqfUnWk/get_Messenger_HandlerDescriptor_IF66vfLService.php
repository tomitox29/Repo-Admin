<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_IF66vfLService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.IF66vfL' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.IF66vfL'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Adapter\Country\CommandHandler\DeleteCountryHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Country\\Repository\\CountryRepository'] ?? self::getCountryRepositoryService($container))))->handle(...), ['method' => 'handle']);
    }
}
