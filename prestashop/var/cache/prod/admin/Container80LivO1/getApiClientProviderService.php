<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiClientProviderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Security\OAuth2\Provider\ApiClientProvider' shared service.
     *
     * @return \PrestaShopBundle\Security\OAuth2\Provider\ApiClientProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShopBundle\\Security\\OAuth2\\Provider\\ApiClientProvider'] = new \PrestaShopBundle\Security\OAuth2\Provider\ApiClientProvider(($container->services['PrestaShopBundle\\Entity\\Repository\\ApiClientRepository'] ?? $container->load('getApiClientRepositoryService')), ($container->services['Symfony\\Component\\PasswordHasher\\PasswordHasherInterface'] ?? $container->load('getPasswordHasherInterfaceService')));
    }
}
