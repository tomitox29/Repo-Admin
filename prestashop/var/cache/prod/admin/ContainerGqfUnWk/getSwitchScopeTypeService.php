<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwitchScopeTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\AdvancedParameters\AdminAPI\SwitchScopeType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\AdvancedParameters\AdminAPI\SwitchScopeType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\AdminAPI\\SwitchScopeType'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\AdminAPI\SwitchScopeType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages());
    }
}
