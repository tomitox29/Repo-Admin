<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNumberTypeExtensionService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Extension\NumberTypeExtension' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Extension\NumberTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Extension\\NumberTypeExtension'] = new \PrestaShopBundle\Form\Extension\NumberTypeExtension(($container->privates['PrestaShop\\PrestaShop\\Core\\Localization\\Number\\LocaleNumberTransformer'] ?? $container->load('getLocaleNumberTransformerService')));
    }
}
