<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddTaxRulesGroupHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler\AddTaxRulesGroupHandler' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler\AddTaxRulesGroupHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\TaxRulesGroup\\CommandHandler\\AddTaxRulesGroupHandler'] = new \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\CommandHandler\AddTaxRulesGroupHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\TaxRulesGroup\\Repository\\TaxRulesGroupRepository'] ?? $container->load('getTaxRulesGroupRepositoryService')));
    }
}
