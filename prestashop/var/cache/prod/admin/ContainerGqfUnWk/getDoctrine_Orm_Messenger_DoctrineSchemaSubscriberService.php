<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Messenger_DoctrineSchemaSubscriberService extends AdminKernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.messenger.doctrine_schema_subscriber' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.messenger.doctrine_schema_subscriber'] = new \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaSubscriber(new RewindableGenerator(fn () => new \EmptyIterator(), 0));
    }
}
