<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Import_FieldsProvider_StoreContactService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.import.fields_provider.store_contact' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Import\EntityField\Provider\StoreContactFieldsProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.import.fields_provider.store_contact'] = new \PrestaShop\PrestaShop\Core\Import\EntityField\Provider\StoreContactFieldsProvider(($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
