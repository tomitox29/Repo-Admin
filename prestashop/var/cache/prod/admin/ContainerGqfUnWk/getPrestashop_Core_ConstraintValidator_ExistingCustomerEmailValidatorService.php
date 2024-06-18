<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_ConstraintValidator_ExistingCustomerEmailValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.constraint_validator.existing_customer_email_validator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\ConstraintValidator\ExistingCustomerEmailValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.constraint_validator.existing_customer_email_validator'] = new \PrestaShop\PrestaShop\Core\ConstraintValidator\ExistingCustomerEmailValidator(($container->services['prestashop.adapter.customer.customer_data_source'] ??= new \PrestaShop\PrestaShop\Adapter\Customer\CustomerDataSource()));
    }
}
