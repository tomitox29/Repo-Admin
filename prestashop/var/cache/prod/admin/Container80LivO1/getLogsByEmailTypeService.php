<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLogsByEmailTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Logs\LogsByEmailType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Logs\LogsByEmailType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\Logs\\LogsByEmailType'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Logs\LogsByEmailType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getLanguages());
    }
}