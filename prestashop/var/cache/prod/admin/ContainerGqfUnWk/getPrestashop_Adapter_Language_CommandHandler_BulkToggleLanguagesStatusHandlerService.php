<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Language_CommandHandler_BulkToggleLanguagesStatusHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.language.command_handler.bulk_toggle_languages_status_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Language\CommandHandler\BulkToggleLanguagesStatusHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.language.command_handler.bulk_toggle_languages_status_handler'] = new \PrestaShop\PrestaShop\Adapter\Language\CommandHandler\BulkToggleLanguagesStatusHandler(($container->services['prestashop.adapter.file.robots_text_file_generator'] ??= new \PrestaShop\PrestaShop\Adapter\File\RobotsTextFileGenerator()));
    }
}
