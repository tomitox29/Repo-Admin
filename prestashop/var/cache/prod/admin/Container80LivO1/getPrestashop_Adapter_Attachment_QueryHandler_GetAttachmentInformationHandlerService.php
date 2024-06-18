<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Attachment_QueryHandler_GetAttachmentInformationHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.attachment.query_handler.get_attachment_information_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Attachment\QueryHandler\GetAttachmentInformationHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.attachment.query_handler.get_attachment_information_handler'] = new \PrestaShop\PrestaShop\Adapter\Attachment\QueryHandler\GetAttachmentInformationHandler(($container->services['PrestaShop\\PrestaShop\\Adapter\\Attachment\\AttachmentRepository'] ?? $container->load('getAttachmentRepositoryService')));
    }
}