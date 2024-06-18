<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductMultipleShopsAssociatedAccessibilityCheckerService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\ProductMultipleShopsAssociatedAccessibilityChecker' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\ProductMultipleShopsAssociatedAccessibilityChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShop\\PrestaShop\\Core\\Grid\\Action\\Row\\AccessibilityChecker\\ProductMultipleShopsAssociatedAccessibilityChecker'] = new \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\ProductMultipleShopsAssociatedAccessibilityChecker(($container->services['.container.private.prestashop.adapter.shop.context'] ??= new \PrestaShop\PrestaShop\Adapter\Shop\Context()));
    }
}
