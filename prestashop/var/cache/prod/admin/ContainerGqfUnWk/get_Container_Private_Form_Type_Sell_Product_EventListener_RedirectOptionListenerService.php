<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Form_Type_Sell_Product_EventListener_RedirectOptionListenerService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.form.type.sell.product.event_listener.redirect_option_listener' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Product\EventListener\RedirectOptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.form.type.sell.product.event_listener.redirect_option_listener'] = new \PrestaShopBundle\Form\Admin\Sell\Product\EventListener\RedirectOptionListener();
    }
}
