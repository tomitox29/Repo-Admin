<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTextWithRecommendedLengthTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Type\TextWithRecommendedLengthType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Type\TextWithRecommendedLengthType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Type\\TextWithRecommendedLengthType'] = new \PrestaShopBundle\Form\Admin\Type\TextWithRecommendedLengthType();
    }
}