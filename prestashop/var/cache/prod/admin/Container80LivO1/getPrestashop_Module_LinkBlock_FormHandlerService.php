<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Module_LinkBlock_FormHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.module.link_block.form_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\FormHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.module.link_block.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\FormHandler(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService'))->createBuilder(), ($container->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? self::getHookDispatcherService($container)), ($container->services['prestashop.module.link_block.form_provider'] ?? $container->load('getPrestashop_Module_LinkBlock_FormProviderService')), ['link_block' => 'PrestaShop\\Module\\LinkList\\Form\\Type\\LinkBlockType'], 'AdminLinkWidget');
    }
}
