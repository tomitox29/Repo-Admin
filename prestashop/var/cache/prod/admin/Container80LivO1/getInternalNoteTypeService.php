<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInternalNoteTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Order\InternalNoteType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Order\InternalNoteType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Order\\InternalNoteType'] = new \PrestaShopBundle\Form\Admin\Sell\Order\InternalNoteType(($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
