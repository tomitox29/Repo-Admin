<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Core_MailTemplate_Transformation_HtmlTextifyService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.core.mail_template.transformation.html_textify' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\MailTemplate\Transformation\HTMLToTextTransformation
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.core.mail_template.transformation.html_textify'] = new \PrestaShop\PrestaShop\Core\MailTemplate\Transformation\HTMLToTextTransformation();
    }
}
