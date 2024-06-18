<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Prestashop_Core_Form_ChoiceProvider_ThemeByNameWithEmailsService extends AdminKernelProdContainer
{
    /*
     * Gets the public '.container.private.prestashop.core.form.choice_provider.theme_by_name_with_emails' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\ThemeByNameWithEmailsChoiceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['.container.private.prestashop.core.form.choice_provider.theme_by_name_with_emails'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\ThemeByNameWithEmailsChoiceProvider(($container->services['prestashop.core.addon.theme.repository'] ?? $container->load('getPrestashop_Core_Addon_Theme_RepositoryService'))->getListAsCollection());
    }
}