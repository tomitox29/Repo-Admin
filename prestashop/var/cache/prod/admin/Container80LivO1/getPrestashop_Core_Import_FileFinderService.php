<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_Import_FileFinderService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.import.file_finder' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Import\File\FileFinder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.import.file_finder'] = new \PrestaShop\PrestaShop\Core\Import\File\FileFinder(($container->services['prestashop.core.import.dir'] ?? $container->load('getPrestashop_Core_Import_DirService')));
    }
}
