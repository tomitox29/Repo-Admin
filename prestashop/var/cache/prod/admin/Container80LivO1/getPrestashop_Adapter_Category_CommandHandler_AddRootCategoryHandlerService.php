<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Category_CommandHandler_AddRootCategoryHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.category.command_handler.add_root_category_handler' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Category\CommandHandler\AddRootCategoryHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.category.command_handler.add_root_category_handler'] = new \PrestaShop\PrestaShop\Adapter\Category\CommandHandler\AddRootCategoryHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Image\\Uploader\\CategoryImageUploader'] ?? $container->load('getCategoryImageUploaderService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Category\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')));
    }
}
