<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Form_Extension_DataListService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.form.extension.data_list' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Extension\DataListExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.form.extension.data_list'] = new \PrestaShopBundle\Form\Extension\DataListExtension();
    }
}