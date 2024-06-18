<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Translation_ChainextractorService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.translation.chainextractor' shared service.
     *
     * @return \PrestaShop\TranslationToolsBundle\Translation\Extractor\ChainExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['prestashop.translation.chainextractor'] = $instance = new \PrestaShop\TranslationToolsBundle\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', ($container->services['prestashop.translation.extractor.php'] ??= new \PrestaShop\TranslationToolsBundle\Translation\Extractor\PhpExtractor()));
        $instance->addExtractor('twig', ($container->services['prestashop.translation.extractor.twig'] ?? $container->load('getPrestashop_Translation_Extractor_TwigService')));
        $instance->addExtractor('smarty', ($container->services['prestashop.translation.extractor.smarty'] ?? $container->load('getPrestashop_Translation_Extractor_SmartyService')));

        return $instance;
    }
}
