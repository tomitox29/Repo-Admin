<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAttributeGroupValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\AttributeGroup\Validate\AttributeGroupValidator' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\AttributeGroup\Validate\AttributeGroupValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\AttributeGroup\\Validate\\AttributeGroupValidator'] = new \PrestaShop\PrestaShop\Adapter\AttributeGroup\Validate\AttributeGroupValidator(($container->services['PrestaShop\\PrestaShop\\Adapter\\Shop\\Repository\\ShopRepository'] ?? self::getShopRepositoryService($container)));
    }
}