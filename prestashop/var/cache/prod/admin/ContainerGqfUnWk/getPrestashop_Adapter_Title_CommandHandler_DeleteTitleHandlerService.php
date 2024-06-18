<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Title_CommandHandler_DeleteTitleHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.title.command_handler.delete_title_handler' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Title\CommandHandler\DeleteTitleHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.title.command_handler.delete_title_handler'] = new \PrestaShop\PrestaShop\Adapter\Title\CommandHandler\DeleteTitleHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Title\\Repository\\TitleRepository'] ?? $container->load('getTitleRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Image\\Uploader\\TitleImageUploader'] ??= new \PrestaShop\PrestaShop\Adapter\Image\Uploader\TitleImageUploader()));
    }
}