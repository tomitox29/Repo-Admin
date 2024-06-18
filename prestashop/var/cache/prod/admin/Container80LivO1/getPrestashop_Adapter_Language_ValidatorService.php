<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Language_ValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.language.validator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Language\LanguageValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.language.validator'] = new \PrestaShop\PrestaShop\Adapter\Language\LanguageValidator();
    }
}
