<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGridPositionUpdaterService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Grid\Position\GridPositionUpdater' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Position\GridPositionUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Core\\Grid\\Position\\GridPositionUpdater'] = new \PrestaShop\PrestaShop\Core\Grid\Position\GridPositionUpdater(($container->services['prestashop.core.grid.position.update_handler.doctrine_position_update_handler'] ?? $container->load('getPrestashop_Core_Grid_Position_UpdateHandler_DoctrinePositionUpdateHandlerService')));
    }
}
