<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Localization_Rtl_ProcessorFactoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.localization.rtl.processor_factory' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\RTL\StyleSheetProcessorFactory
     *
     * @deprecated Since PrestaShop\PrestaShop 9: The "prestashop.core.localization.rtl.processor_factory" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('PrestaShop\\PrestaShop', '9', 'The "prestashop.core.localization.rtl.processor_factory" service is deprecated. You should stop using it, as it will be removed in the future.');

        return $container->services['prestashop.core.localization.rtl.processor_factory'] = new \PrestaShop\PrestaShop\Core\Localization\RTL\StyleSheetProcessorFactory(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()));
    }
}
