<?php

namespace ContainerGqfUnWk;

class EmployeePasswordResetterGhost6167120 extends \PrestaShopBundle\Security\Admin\EmployeePasswordResetter implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'configuration' => [parent::class, 'configuration', parent::class],
        "\0".parent::class."\0".'cookieKey' => [parent::class, 'cookieKey', parent::class],
        "\0".parent::class."\0".'employeeRepository' => [parent::class, 'employeeRepository', parent::class],
        "\0".parent::class."\0".'entityManager' => [parent::class, 'entityManager', parent::class],
        "\0".parent::class."\0".'hashing' => [parent::class, 'hashing', parent::class],
        "\0".parent::class."\0".'router' => [parent::class, 'router', parent::class],
        "\0".parent::class."\0".'shopContext' => [parent::class, 'shopContext', parent::class],
        "\0".parent::class."\0".'translator' => [parent::class, 'translator', parent::class],
        'configuration' => [parent::class, 'configuration', parent::class],
        'cookieKey' => [parent::class, 'cookieKey', parent::class],
        'employeeRepository' => [parent::class, 'employeeRepository', parent::class],
        'entityManager' => [parent::class, 'entityManager', parent::class],
        'hashing' => [parent::class, 'hashing', parent::class],
        'router' => [parent::class, 'router', parent::class],
        'shopContext' => [parent::class, 'shopContext', parent::class],
        'translator' => [parent::class, 'translator', parent::class],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('EmployeePasswordResetterGhost6167120', false)) {
    \class_alias(__NAMESPACE__.'\\EmployeePasswordResetterGhost6167120', 'EmployeePasswordResetterGhost6167120', false);
}
