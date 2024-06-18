<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocaleNumberTransformerService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Core\Localization\Number\LocaleNumberTransformer' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Number\LocaleNumberTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Core\\Localization\\Number\\LocaleNumberTransformer'] = new \PrestaShop\PrestaShop\Core\Localization\Number\LocaleNumberTransformer(($container->services['prestashop.core.localization.locale.context_locale'] ?? $container->load('getPrestashop_Core_Localization_Locale_ContextLocaleService')));
    }
}