<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_XT4Gx_MService extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.XT4Gx.M' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.XT4Gx.M'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.attachment.query_handler.get_attachment_information_handler'] ?? $container->load('getPrestashop_Adapter_Attachment_QueryHandler_GetAttachmentInformationHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
