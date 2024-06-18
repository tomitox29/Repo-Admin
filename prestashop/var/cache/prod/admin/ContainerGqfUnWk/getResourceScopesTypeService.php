<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResourceScopesTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\AdvancedParameters\AdminAPI\ResourceScopesType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\AdvancedParameters\AdminAPI\ResourceScopesType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository'] ?? $container->load('getModuleRepositoryService'));

        if (isset($container->privates['PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\AdminAPI\\ResourceScopesType'])) {
            return $container->privates['PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\AdminAPI\\ResourceScopesType'];
        }

        return $container->privates['PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\AdminAPI\\ResourceScopesType'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\AdminAPI\ResourceScopesType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages(), ($container->privates['PrestaShopBundle\\ApiPlatform\\Scopes\\CachedApiResourceScopesExtractor'] ?? $container->load('getCachedApiResourceScopesExtractorService')), $a);
    }
}