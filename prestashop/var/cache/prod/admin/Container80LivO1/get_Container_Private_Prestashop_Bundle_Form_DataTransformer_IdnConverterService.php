<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Bundle_Form_DataTransformer_IdnConverterService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.bundle.form.data_transformer.idn_converter' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\DataTransformer\IDNConverterDataTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.bundle.form.data_transformer.idn_converter'] = new \PrestaShopBundle\Form\DataTransformer\IDNConverterDataTransformer(($container->privates['PrestaShop\\PrestaShop\\Core\\Util\\InternationalizedDomainNameConverter'] ??= new \PrestaShop\PrestaShop\Core\Util\InternationalizedDomainNameConverter()));
    }
}
