<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Translation_Extractor_PhpService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.translation.extractor.php' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Extractor\PhpExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.translation.extractor.php'] = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\PhpExtractor();
    }
}
