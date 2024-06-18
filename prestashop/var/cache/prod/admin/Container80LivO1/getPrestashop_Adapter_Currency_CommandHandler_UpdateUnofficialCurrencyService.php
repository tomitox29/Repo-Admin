<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Currency_CommandHandler_UpdateUnofficialCurrencyService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.currency.command_handler.update_unofficial_currency' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\EditUnofficialCurrencyHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.currency.command_handler.update_unofficial_currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\EditUnofficialCurrencyHandler(($container->services['prestashop.core.localization.cldr.locale_repository'] ?? self::getPrestashop_Core_Localization_Cldr_LocaleRepositoryService($container)), ($container->services['prestashop.core.admin.lang.repository'] ?? self::getPrestashop_Core_Admin_Lang_RepositoryService($container))->findAll(), ($container->services['prestashop.adapter.currency.command_handler.command_validator'] ?? $container->load('getPrestashop_Adapter_Currency_CommandHandler_CommandValidatorService')), ($container->services['prestashop.core.localization.currency.pattern_transformer'] ??= new \PrestaShop\PrestaShop\Core\Localization\Currency\PatternTransformer()));
    }
}
