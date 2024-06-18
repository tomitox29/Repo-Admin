<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestashop_Adapter_Attachment_CommandHandler_BulkDeleteAttachmentHandlerService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'prestashop.adapter.attachment.command_handler.bulk_delete_attachment_handler' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Attachment\CommandHandler\BulkDeleteAttachmentsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['prestashop.adapter.attachment.command_handler.bulk_delete_attachment_handler'] = new \PrestaShop\PrestaShop\Adapter\Attachment\CommandHandler\BulkDeleteAttachmentsHandler(($container->privates['validator'] ?? self::getValidatorService($container)));
    }
}
