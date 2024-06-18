<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCountryTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Improve\International\Locations\CountryType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Improve\International\Locations\CountryType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Improve\\International\\Locations\\CountryType'] = new \PrestaShopBundle\Form\Admin\Improve\International\Locations\CountryType(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? self::getMultistoreFeatureService($container))->isActive(), ($container->services['.container.private.prestashop.core.form.choice_provider.zone_by_id'] ??= new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\ZoneByIdChoiceProvider()));
    }
}
