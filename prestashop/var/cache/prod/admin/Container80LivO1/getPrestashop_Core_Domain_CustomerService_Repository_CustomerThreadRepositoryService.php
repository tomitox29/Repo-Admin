<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Domain_CustomerService_Repository_CustomerThreadRepositoryService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.domain.customer_service.repository.customer_thread_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CustomerService\Repository\CustomerThreadRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.domain.customer_service.repository.customer_thread_repository'] = new \PrestaShop\PrestaShop\Core\Domain\CustomerService\Repository\CustomerThreadRepository();
    }
}
