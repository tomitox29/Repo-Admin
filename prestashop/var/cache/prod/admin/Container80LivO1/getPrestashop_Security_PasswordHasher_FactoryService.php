<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Security_PasswordHasher_FactoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.security.password_hasher.factory' shared service.
     *
     * @return \Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.security.password_hasher.factory'] = new \Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory(['common' => ['algorithm' => 'auto']]);
    }
}
