<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSqlRequestSettingsTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\RequestSql\SqlRequestSettingsType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\RequestSql\SqlRequestSettingsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\RequestSql\\SqlRequestSettingsType'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\RequestSql\SqlRequestSettingsType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages());
    }
}