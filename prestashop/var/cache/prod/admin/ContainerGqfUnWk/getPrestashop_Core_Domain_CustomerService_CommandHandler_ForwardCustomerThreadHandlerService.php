<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Domain_CustomerService_CommandHandler_ForwardCustomerThreadHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.domain.customer_service.command_handler.forward_customer_thread_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler\ForwardCustomerThreadHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.domain.customer_service.command_handler.forward_customer_thread_handler'] = new \PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler\ForwardCustomerThreadHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext(), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}
