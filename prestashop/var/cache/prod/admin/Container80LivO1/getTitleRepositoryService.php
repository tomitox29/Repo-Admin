<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTitleRepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Title\Repository\TitleRepository' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Title\Repository\TitleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Adapter\\Title\\Repository\\TitleRepository'] = new \PrestaShop\PrestaShop\Adapter\Title\Repository\TitleRepository(($container->services['PrestaShop\\PrestaShop\\Adapter\\Title\\Validate\\TitleValidator'] ??= new \PrestaShop\PrestaShop\Adapter\Title\Validate\TitleValidator()));
    }
}
