<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateCombinationStockAvailableCommandsBuilderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\UpdateCombinationStockAvailableCommandsBuilder' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\UpdateCombinationStockAvailableCommandsBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\CommandBuilder\\Product\\Combination\\UpdateCombinationStockAvailableCommandsBuilder'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\UpdateCombinationStockAvailableCommandsBuilder('modify_all_shops_');
    }
}