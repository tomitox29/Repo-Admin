<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Hook_Generator_HookDescriptionGeneratorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.hook.generator.hook_description_generator' shared autowired service.
     *
     * @return \PrestaShop\PrestaShop\Core\Hook\Generator\HookDescriptionGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.hook.generator.hook_description_generator'] = new \PrestaShop\PrestaShop\Core\Hook\Generator\HookDescriptionGenerator($container->parameters['hook_descriptions'], new \PrestaShop\PrestaShop\Core\Util\String\StringValidator(), ($container->services['PrestaShop\\PrestaShop\\Core\\Util\\String\\StringModifier'] ??= new \PrestaShop\PrestaShop\Core\Util\String\StringModifier()));
    }
}
