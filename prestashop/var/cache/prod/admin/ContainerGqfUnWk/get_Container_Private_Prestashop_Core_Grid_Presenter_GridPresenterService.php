<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Core_Grid_Presenter_GridPresenterService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.core.grid.presenter.grid_presenter' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Presenter\GridPresenter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.core.grid.presenter.grid_presenter'] = new \PrestaShop\PrestaShop\Core\Grid\Presenter\GridPresenter(($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)));
    }
}