<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartRuleRepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Adapter\CartRule\Repository\CartRuleRepository' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\CartRule\Repository\CartRuleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Adapter\\CartRule\\Repository\\CartRuleRepository'] = new \PrestaShop\PrestaShop\Adapter\CartRule\Repository\CartRuleRepository(new \PrestaShop\PrestaShop\Adapter\CartRule\Validate\CartRuleValidator(), ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), 'ps_');
    }
}
