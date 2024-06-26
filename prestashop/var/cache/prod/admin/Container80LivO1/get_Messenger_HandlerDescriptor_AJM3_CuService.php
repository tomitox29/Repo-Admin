<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_AJM3_CuService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.aJM3.cu' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.aJM3.cu'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.attachment.command_handler.bulk_delete_attachment_handler'] ?? $container->load('getPrestashop_Adapter_Attachment_CommandHandler_BulkDeleteAttachmentHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
