<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_SearchEngine_CommandHandler_DeleteSearchEngineHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.search_engine.command_handler.delete_search_engine_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\SearchEngine\CommandHandler\DeleteSearchEngineHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.search_engine.command_handler.delete_search_engine_handler'] = new \PrestaShop\PrestaShop\Adapter\SearchEngine\CommandHandler\DeleteSearchEngineHandler();
    }
}
