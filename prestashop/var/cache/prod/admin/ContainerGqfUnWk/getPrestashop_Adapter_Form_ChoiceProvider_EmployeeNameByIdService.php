<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Form_ChoiceProvider_EmployeeNameByIdService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.form.choice_provider.employee_name_by_id' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\EmployeeNameByIdChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.form.choice_provider.employee_name_by_id'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\EmployeeNameByIdChoiceProvider();
    }
}
