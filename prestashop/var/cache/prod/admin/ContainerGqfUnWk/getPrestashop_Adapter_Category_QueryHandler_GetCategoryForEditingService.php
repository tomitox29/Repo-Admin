<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Category_QueryHandler_GetCategoryForEditingService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.category.query_handler.get_category_for_editing' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Category\QueryHandler\GetCategoryForEditingHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.category.query_handler.get_category_for_editing'] = new \PrestaShop\PrestaShop\Adapter\Category\QueryHandler\GetCategoryForEditingHandler(($container->services['prestashop.core.image.parser.image_tag_source_parser'] ??= new \PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParser()), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\SEO\\RedirectTargetProvider'] ?? $container->load('getRedirectTargetProviderService')));
    }
}