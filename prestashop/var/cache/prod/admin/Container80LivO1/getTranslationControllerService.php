<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslationControllerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Controller\Api\TranslationController' shared service.
     *
     * @return \PrestaShopBundle\Controller\Api\TranslationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['PrestaShopBundle\\Controller\\Api\\TranslationController'] = $instance = new \PrestaShopBundle\Controller\Api\TranslationController(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['prestashop.core.api.query_translation_params_collection'] ??= new \PrestaShopBundle\Api\QueryTranslationParamsCollection()), ($container->services['prestashop.service.translation'] ?? $container->load('getPrestashop_Service_TranslationService')));

        $instance->setLogger(($container->services['logger'] ?? self::getLoggerService($container)));
        $instance->setContainer($container);
        $instance->setAuthorizationChecker(($container->privates['security.authorization_checker'] ?? self::getSecurity_AuthorizationCheckerService($container)));

        return $instance;
    }
}
