<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Grid_Action_Row_AccessibilityChecker_DeleteOrderReturnStatesService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.grid.action.row.accessibility_checker.delete_order_return_states' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\DeleteOrderReturnStatesAccessibilityChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.grid.action.row.accessibility_checker.delete_order_return_states'] = new \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\DeleteOrderReturnStatesAccessibilityChecker();
    }
}
