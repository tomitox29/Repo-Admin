<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Admin_Login_FormHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.admin.login.form_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\Handler
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['form.factory'] ?? $container->load('getForm_FactoryService'));

        if (isset($container->services['prestashop.admin.login.form_handler'])) {
            return $container->services['prestashop.admin.login.form_handler'];
        }

        return $container->services['prestashop.admin.login.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler($a, ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), new \PrestaShopBundle\Form\Admin\Login\LoginFormDataProvider(($container->privates['security.authentication_utils'] ?? $container->load('getSecurity_AuthenticationUtilsService'))), 'PrestaShopBundle\\Form\\Admin\\Login\\LoginType', 'BackOfficeLogin', '');
    }
}
