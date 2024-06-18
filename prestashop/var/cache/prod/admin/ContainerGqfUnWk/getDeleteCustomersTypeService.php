<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteCustomersTypeService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'PrestaShopBundle\Form\Admin\Sell\Customer\DeleteCustomersType' shared autowired service.
     *
     * @return \PrestaShopBundle\Form\Admin\Sell\Customer\DeleteCustomersType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Customer\\DeleteCustomersType'] = new \PrestaShopBundle\Form\Admin\Sell\Customer\DeleteCustomersType(($container->services['.container.private.prestashop.core.form.choice_provider.customer_delete_method'] ?? $container->load('get_Container_Private_Prestashop_Core_Form_ChoiceProvider_CustomerDeleteMethodService'))->getChoices());
    }
}
