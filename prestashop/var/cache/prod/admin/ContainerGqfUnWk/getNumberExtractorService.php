<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNumberExtractorService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Core\\Util\\Number\\NumberExtractor'] = new \PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor(($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)));
    }
}