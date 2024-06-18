<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Contact_RepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.contact.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Support\ContactRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.contact.repository'] = new \PrestaShop\PrestaShop\Adapter\Support\ContactRepository();
    }
}