<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRelatedProductsCommandsBuilderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\RelatedProductsCommandsBuilder' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\RelatedProductsCommandsBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\CommandBuilder\\Product\\RelatedProductsCommandsBuilder'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\RelatedProductsCommandsBuilder();
    }
}