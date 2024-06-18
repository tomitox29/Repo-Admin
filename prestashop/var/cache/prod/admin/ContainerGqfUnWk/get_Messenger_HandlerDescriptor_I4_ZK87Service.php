<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_I4_ZK87Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.I4.zK87' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.I4.zK87'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor((new \PrestaShop\PrestaShop\Adapter\Product\QueryHandler\GetProductForEditingHandler(($container->privates['PrestaShop\\PrestaShop\\Core\\Util\\Number\\NumberExtractor'] ?? $container->load('getNumberExtractorService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Category\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Repository\\StockAvailableRepository'] ?? $container->load('getStockAvailableRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\VirtualProduct\\Repository\\VirtualProductFileRepository'] ?? $container->load('getVirtualProductFileRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Repository\\ProductImageRepository'] ?? $container->load('getProductImageRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Attachment\\AttachmentRepository'] ?? $container->load('getAttachmentRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Tax\\TaxComputer'] ?? $container->load('getTaxComputerService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->getInt("PS_COUNTRY_DEFAULT"), ($container->privates['PrestaShop\\PrestaShop\\Adapter\\SEO\\RedirectTargetProvider'] ?? $container->load('getRedirectTargetProviderService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\ProductImagePathFactory'] ?? $container->load('getProductImagePathFactoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Product\\SpecificPrice\\Repository\\SpecificPriceRepository'] ?? $container->load('getSpecificPriceRepositoryService')), ($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration()), ($container->services['PrestaShop\\PrestaShop\\Core\\Category\\NameBuilder\\CategoryDisplayNameBuilder'] ?? $container->load('getCategoryDisplayNameBuilderService'))))->handle(...), ['method' => 'handle']);
    }
}