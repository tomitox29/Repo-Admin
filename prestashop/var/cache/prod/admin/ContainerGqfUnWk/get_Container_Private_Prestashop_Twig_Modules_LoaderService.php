<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Twig_Modules_LoaderService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.twig.modules.loader' shared autowired service.
     *
     * @return \PrestaShopBundle\Twig\Locator\ModuleTemplateLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.twig.modules.loader'] = new \PrestaShopBundle\Twig\Locator\ModuleTemplateLoader(['PrestaShop' => '', 'Product' => '/Admin/Product', 'Twig' => '/Admin/TwigTemplateForm', 'AdvancedParameters' => '/Admin/Configure/AdvancedParameters', 'ShopParameters' => '/Admin/Configure/ShopParameters'], ($container->services['prestashop.adapter.module.repository.module_repository'] ??= new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository(\dirname(__DIR__, 5), (\dirname(__DIR__, 5).'/modules/')))->getActiveModulesPaths());
    }
}
