<?php

namespace Container80LivO1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_RLBEjL6Service extends AdminKernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.rLBEjL6' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.rLBEjL6'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['prestashop.adapter.attachment.query_handler.search_attachment_handler'] ?? $container->load('getPrestashop_Adapter_Attachment_QueryHandler_SearchAttachmentHandlerService'))->handle(...), ['method' => 'handle']);
    }
}
