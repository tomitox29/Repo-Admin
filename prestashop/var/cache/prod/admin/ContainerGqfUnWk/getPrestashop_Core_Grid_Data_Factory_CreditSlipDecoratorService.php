<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Data_Factory_CreditSlipDecoratorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.data.factory.credit_slip_decorator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Data\Factory\CreditSlipGridDataFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.data.factory.credit_slip_decorator'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\CreditSlipGridDataFactory(($container->services['prestashop.core.grid.data.factory.credit_slip'] ?? $container->load('getPrestashop_Core_Grid_Data_Factory_CreditSlipService')), ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}