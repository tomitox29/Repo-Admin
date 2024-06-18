<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_ConstraintValidator_CleanHtmlValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.constraint_validator.clean_html_validator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\ConstraintValidator\CleanHtmlValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.constraint_validator.clean_html_validator'] = new \PrestaShop\PrestaShop\Core\ConstraintValidator\CleanHtmlValidator(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getBoolean("PS_ALLOW_HTML_IFRAME"));
    }
}
