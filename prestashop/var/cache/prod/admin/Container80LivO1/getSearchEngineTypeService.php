<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchEngineTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Configure\ShopParameters\SearchEngines\SearchEngineType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\ShopParameters\SearchEngines\SearchEngineType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Configure\\ShopParameters\\SearchEngines\\SearchEngineType'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\SearchEngines\SearchEngineType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages());
    }
}