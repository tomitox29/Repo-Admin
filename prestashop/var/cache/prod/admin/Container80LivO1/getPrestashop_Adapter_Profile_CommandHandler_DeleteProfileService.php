<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Profile_CommandHandler_DeleteProfileService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.profile.command_handler.delete_profile' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Profile\CommandHandler\DeleteProfileHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.profile.command_handler.delete_profile'] = new \PrestaShop\PrestaShop\Adapter\Profile\CommandHandler\DeleteProfileHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ??= new \PrestaShop\PrestaShop\Adapter\Configuration())->get("_PS_ADMIN_PROFILE_"), ($container->services['prestashop.adapter.data_provider.employee'] ?? $container->load('getPrestashop_Adapter_DataProvider_EmployeeService')));
    }
}
