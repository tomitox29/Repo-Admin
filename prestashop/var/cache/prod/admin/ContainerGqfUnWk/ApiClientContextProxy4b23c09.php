<?php

namespace ContainerGqfUnWk;

class ApiClientContextProxy4b23c09 extends \PrestaShop\PrestaShop\Core\Context\ApiClientContext implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'apiClient' => [parent::class, 'apiClient', null],
        'apiClient' => [parent::class, 'apiClient', null],
    ];
    public function getApiClient(): ?\PrestaShop\PrestaShop\Core\Context\ApiClient
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getApiClient(...\func_get_args());
        }
        return parent::getApiClient(...\func_get_args());
    }
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ApiClientContextProxy4b23c09', false)) {
    \class_alias(__NAMESPACE__.'\\ApiClientContextProxy4b23c09', 'ApiClientContextProxy4b23c09', false);
}
