<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Webservice_CommandHandler_EditWebserviceKeyHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.webservice.command_handler.edit_webservice_key_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Webservice\CommandHandler\EditWebserviceKeyHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.webservice.command_handler.edit_webservice_key_handler'] = new \PrestaShop\PrestaShop\Adapter\Webservice\CommandHandler\EditWebserviceKeyHandler();
    }
}
