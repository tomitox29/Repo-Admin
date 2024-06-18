<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccessTokenControllerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared autowired service.
     *
     * @return \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['PrestaShopBundle\\Security\\OAuth2\\Provider\\ApiClientProvider'] ?? $container->load('getApiClientProviderService'));

        $b = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository($a, ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\ScopeRepository(($container->privates['PrestaShopBundle\\ApiPlatform\\Scopes\\CachedApiResourceScopesExtractor'] ?? $container->load('getCachedApiResourceScopesExtractorService')), $a), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCzkyOm50qOT1sy'."\n".'ZgT0b5fXEE50bm6nC7jTR085chJvlMXf29i24qvFux+XUxvr61Db861YosLtSC9k'."\n".'cj7I+baBKHCROM9iP1/Of3XTqfqFBlSkiOTBI3YTHDHiSXP7hg0KQGhbuD++yV0Y'."\n".'7agOYmUve7vZtH2MGM8Z3b3eY03LXFaBf8+eZX+aU2l/YsRv7IGWltV9H3UMnIRj'."\n".'LP7wZ1xL4oxH55YOr8izuJyGke8BR4XSdNXwfwRKaZJY8G0Junj3c0Gr7W5/UKSZ'."\n".'lbHoMGBs7SVsg0pYIgi/DKMw1RlOkMlhlM95TC35Gbzl3ZbjZ3QqzZYyHTY4lzyR'."\n".'YXapXgD7AgMBAAECggEAQbR/UYUEgyCnKkAo5PVl9fOJ+VEk3KtN08SeSNMjyr8B'."\n".'TeEHoRc8KavHqdtndoGSAwDctvdK4n5MlPC2Z1vzOrv8wC4st3Kf0BNUHf/uYbkI'."\n".'xHEwXjjm7aQd3oHo1andYJhjdtfqPxk3nrTqjmTTSDX6bHR9kYLMWFcJr3LfVp5T'."\n".'ijGVbNFrEVIB2PJ61vhRuiLjsAkLzhwgHSsLrgxaqAVK6qTIegAOD9ZEfrwLJXFl'."\n".'iavF2zh313+6KS2lwVoDLske2C1vOh/492ETRXYmBd2JQ2vUpKzWGA0Hm6/XNN2D'."\n".'u9u63A8DqC2s32eMAW/hW7HEFmLVN7ZhW5HLqStXZQKBgQDsAhdSOI/P3sWVwaJ0'."\n".'t9KZElEGUpqvP8c2GiMzTCqMM3B/XzYwVbBXyPJk6/T1y1Gfe6S94bpYNo4sxFvt'."\n".'fiIDrRKrpzaaPjGSMz95evtNMqfNsq+/vcID+fddw2bo8PbmgBVLBLdG0a6xX0C/'."\n".'Pfbn+Lk9XcvydXIOVH7lBpmpRQKBgQDCyUXJdADOovCwPUfZHfZnYgNKUUIx3/GR'."\n".'S0in96hj/Q1PHZLFx8R2SGcaY7/5rj/fWz7OkixLyEbtTB1pGXaUBIGhqvh1o7yf'."\n".'x+Ar2v96PPXlvw50flBhjedqwMbeVKhkwiuf7+eChv1UVXZTOVZ9f+Y4ILg0cSoy'."\n".'joVo1rMFPwKBgBRdTdPba5VdPKFidvkpT3PD39fy0sQidbcWZEkt3lIAsklbVtqu'."\n".'2iuI/Fl2/skixSVEzv9PdfvcoUH9o40HoDm++mhzYkPG8BIUd/qsgPi1UUNvkrix'."\n".'0Ab1z8F4de3NtRBIpw21F3d16mQFuxmFaEO18433BP0j4zaXVee/PQ0dAoGAKqXA'."\n".'1tvENXntctjn+zyZL4eBKuthr+PVUzeFf+k0gDfuiwzxjsYvWKp/kIKYjMU/DNtA'."\n".'hB/y/OCrztbkdZdyo/PcohX58l/YM6+igFehqhTgzd2n/4+Mb9+O9IuivxkQCYeN'."\n".'36W6LZT6sFVJ4+zg5/dx44YebrT8RTd5NDwV1CcCgYEAzserEi9ZSzlOd3A84Jbg'."\n".'QIuGWVe4aNaX59FaVPi4sV1Qy2ZbB+o+hWg2pAh3Wp175KXTYSJ8E0B5E3eDuZpq'."\n".'RurCkpxr7OL6HqSe+Rg4GkF0ABTlT9aUB1wKHxdBx/lkknpqKu7obvikhimuWwX5'."\n".'o0rkl9oTBJbo7QqRQJOVUj0='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def000002b7e82fe5288a7da9567860c55c59350c29e835cb1aaac8f39e43bd20091a9f4c8823031aa8fa2d190b2544c9b99a534b716e8a1815d7575ebefd2173c6f8488');
        $b->enableGrantType(new \PrestaShopBundle\Security\OAuth2\GrantType\CustomClientCredentialsGrant());
        $c = new \Nyholm\Psr7\Factory\Psr17Factory();

        $container->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = $instance = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($b, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory(new \Nyholm\Psr7\Factory\Psr17Factory(), new \Nyholm\Psr7\Factory\Psr17Factory(), new \Nyholm\Psr7\Factory\Psr17Factory(), $c), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $c);

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController', $container));

        return $instance;
    }
}