<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerGroupValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Adapter\Customer\Group\Validate\CustomerGroupValidator' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Customer\Group\Validate\CustomerGroupValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Adapter\\Customer\\Group\\Validate\\CustomerGroupValidator'] = new \PrestaShop\PrestaShop\Adapter\Customer\Group\Validate\CustomerGroupValidator(($container->services['PrestaShop\\PrestaShop\\Adapter\\Shop\\Repository\\ShopRepository'] ?? self::getShopRepositoryService($container)));
    }
}
