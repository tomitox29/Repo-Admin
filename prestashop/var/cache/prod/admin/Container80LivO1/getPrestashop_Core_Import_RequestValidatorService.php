<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Import_RequestValidatorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.import.request_validator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Import\Validator\ImportRequestValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.import.request_validator'] = new \PrestaShop\PrestaShop\Core\Import\Validator\ImportRequestValidator();
    }
}
