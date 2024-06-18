<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Form_Extension_DisablingSwitchExtensionService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.form.extension.disabling_switch_extension' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Extension\DisablingSwitchExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.form.extension.disabling_switch_extension'] = new \PrestaShopBundle\Form\Extension\DisablingSwitchExtension(($container->services['.container.private.form.event_listener.add_disabling_switch_listener'] ?? $container->load('get_Container_Private_Form_EventListener_AddDisablingSwitchListenerService')));
    }
}
