<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSqlRequestTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\RequestSql\SqlRequestType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\RequestSql\SqlRequestType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\RequestSql\\SqlRequestType'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\RequestSql\SqlRequestType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages());
    }
}
