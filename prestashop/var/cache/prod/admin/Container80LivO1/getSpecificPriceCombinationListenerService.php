<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSpecificPriceCombinationListenerService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Product\EventListener\SpecificPriceCombinationListener' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Product\EventListener\SpecificPriceCombinationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\EventListener\\SpecificPriceCombinationListener'] = new \PrestaShopBundle\Form\Admin\Sell\Product\EventListener\SpecificPriceCombinationListener(($container->privates['PrestaShopBundle\\Form\\FormCloner'] ??= new \PrestaShopBundle\Form\FormCloner()), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $container->load('getCombinationRepositoryService')));
    }
}
