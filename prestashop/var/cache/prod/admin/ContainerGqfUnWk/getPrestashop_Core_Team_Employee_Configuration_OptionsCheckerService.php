<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Team_Employee_Configuration_OptionsCheckerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.team.employee.configuration.options_checker' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Team\Employee\Configuration\OptionsChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.team.employee.configuration.options_checker'] = new \PrestaShop\PrestaShop\Core\Team\Employee\Configuration\OptionsChecker(($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? self::getMultistoreFeatureService($container)), ($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context()));
    }
}
