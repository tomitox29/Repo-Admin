<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContextLanguageProviderInterfaceService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Language\ContextLanguageProviderInterface' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Language\ContextLanguageProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Core\\Language\\ContextLanguageProviderInterface'] = new \PrestaShop\PrestaShop\Adapter\Language\ContextLanguageProvider(($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container)));
    }
}
