<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_OrderReturn_Validator_OrderReturnValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.order_return.validator.order_return_validator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\OrderReturn\Validator\OrderReturnValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.order_return.validator.order_return_validator'] = new \PrestaShop\PrestaShop\Adapter\OrderReturn\Validator\OrderReturnValidator();
    }
}
