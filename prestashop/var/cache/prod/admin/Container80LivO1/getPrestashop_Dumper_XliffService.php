<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Dumper_XliffService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.dumper.xliff' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.dumper.xliff'] = new \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper();
    }
}
