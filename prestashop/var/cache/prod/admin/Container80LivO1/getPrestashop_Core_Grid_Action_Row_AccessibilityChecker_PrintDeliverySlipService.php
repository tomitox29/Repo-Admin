<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Action_Row_AccessibilityChecker_PrintDeliverySlipService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.action.row.accessibility_checker.print_delivery_slip' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\PrintDeliverySlipAccessibilityChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.action.row.accessibility_checker.print_delivery_slip'] = new \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\PrintDeliverySlipAccessibilityChecker();
    }
}
