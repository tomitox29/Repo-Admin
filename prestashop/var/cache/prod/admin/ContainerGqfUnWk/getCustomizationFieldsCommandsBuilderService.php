<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomizationFieldsCommandsBuilderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\CustomizationFieldsCommandsBuilder' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\CustomizationFieldsCommandsBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\CommandBuilder\\Product\\CustomizationFieldsCommandsBuilder'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\CustomizationFieldsCommandsBuilder();
    }
}
