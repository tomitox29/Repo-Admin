<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_SystemInformationService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.system_information' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\System\SystemInformation
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.system_information'] = new \PrestaShop\PrestaShop\Adapter\System\SystemInformation(($container->services['prestashop.adapter.hosting_information'] ??= new \PrestaShop\PrestaShop\Adapter\Hosting\HostingInformation()), ($container->services['prestashop.adapter.mailing_information'] ??= new \PrestaShop\PrestaShop\Adapter\Mail\MailingInformation()), ($container->services['prestashop.adapter.shop_information'] ?? $container->load('getPrestashop_Adapter_ShopInformationService')));
    }
}