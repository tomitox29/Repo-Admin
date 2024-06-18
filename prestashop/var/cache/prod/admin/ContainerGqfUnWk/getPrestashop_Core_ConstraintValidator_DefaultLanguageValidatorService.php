<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_ConstraintValidator_DefaultLanguageValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.constraint_validator.default_language_validator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\ConstraintValidator\DefaultLanguageValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.constraint_validator.default_language_validator'] = new \PrestaShop\PrestaShop\Core\ConstraintValidator\DefaultLanguageValidator(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("PS_LANG_DEFAULT"));
    }
}
