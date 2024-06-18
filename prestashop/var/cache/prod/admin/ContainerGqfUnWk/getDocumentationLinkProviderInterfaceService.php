<?php

namespace ContainerGqfUnWk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDocumentationLinkProviderInterfaceService extends AdminKernelProdContainer
{
    /*
     * Gets the public 'PrestaShop\PrestaShop\Core\Util\HelperCard\DocumentationLinkProviderInterface' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Util\HelperCard\DocumentationLinkProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['PrestaShop\\PrestaShop\\Core\\Util\\HelperCard\\DocumentationLinkProviderInterface'] = new \PrestaShop\PrestaShop\Core\Util\HelperCard\DocumentationLinkProvider(((($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language) ? (($container->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? self::getLegacyContextService($container))->getContext()->language->iso_code) : ("en-US")), ['team' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/team', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/configurer-boutique/parametres-avances/equipe', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/configurar-tienda/parametros-avanzados/equipo', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/configurare-negozio/parametri-avanzati/squadra', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/team'], 'meta' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/shop-parameters/traffic/seo-and-urls', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/configurer-boutique/configurer-parametres-boutique/trafic/seo-et-url', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/configurar-tienda/parametros-tienda/trafico/seo-y-urls', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/configurare-negozio/parametri-negozio/traffico/seo-e-url', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/shop-parameters/traffic/seo-and-urls'], 'customer' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-customers/your-customers', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-clients/vos-clients', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-clientes/tus-clientes', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-clienti/i-tuoi-clienti', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-customers/your-customers'], 'supplier' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-suppliers', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/gerer-fournisseurs', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/gestionar-proveedores', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/gestire-fornitori', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-suppliers'], 'category' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-categories', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/gerer-categories', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/gestionar-categorias', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/gestire-categorie', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-categories'], 'cms_pages' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/improving-shop/customizing-store-design/pages-managing-static-content', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/optimiser-boutique/personnaliser-apparence-boutique/pages-gerer-contenu-statique', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/optimizar-tienda/personalizar-diseno-tienda/paginas-gestionar-contenido-estatico', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/migliorare-negozio/personalizzare-design-negozio/pagine-gestione-contenuti-statici', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/improving-shop/customizing-store-design/pages-managing-static-content'], 'debug_mode' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/performance#performance-debugmode', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/configurer-boutique/parametres-avances/performance#parametresdeperformances-modedebug', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/configurar-tienda/parametros-avanzados/rendimiento#rendimiento-mododepuracion', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/configurare-negozio/parametri-avanzati/performance-prestazioni#modalita-di-debug', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/configuring-shop/advanced-parameters/performance#performance-debugmode'], 'attribute' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-product-attributes', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/gerer-attributs-produits', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/gestionar-atributos-producto', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/gestire-attributi-prodotti', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-product-attributes'], 'monitoring' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/monitoring-catalog', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/suivi-catalogue', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/monitorear-catalogo', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/monitorare-catalogo', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/monitoring-catalog'], 'attachment' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-files', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/gerer-fichiers', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/gestionar-archivos', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/gestire-files', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-files'], 'credit_slip' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-orders/credit-slips', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-commandes/avoirs', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-pedidos/facturas-por-abono', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-ordini/note-di-credito', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-orders/credit-slips'], 'carrier' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/improving-shop/managing-shipping/carriers', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/optimiser-boutique/gerer-livraisons/gerer-transporteurs', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/optimizar-tienda/gestionar-transporte/gestionar-transportistas', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/migliorare-negozio/gestire-spedizioni/corrieri', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/improving-shop/managing-shipping/carriers'], 'combinations' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-products#managingproducts-creatingaproductwithcombinations', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/gerer-produits#creation-dun-produit-avec-des-declinaisons', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/gestionar-productos#gestionarlosproductos-crearunproductoconcombinaciones', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/gestire-prodotti#gestireprodotti-creareunprodottoconcombinazioni', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-products#managingproducts-creatingaproductwithcombinations'], 'feature' => ['en' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-product-features', 'fr' => 'https://docs.prestashop-project.org/1.7-documentation/v/french/guide-utilisateur/vendre/gerer-catalogue/gerer-caracteristiques-produits', 'es' => 'https://docs.prestashop-project.org/1.7-documentation/v/spanish/guia-usuario/vender/gestionar-catalogo/gestionar-caracteristicas-producto', 'it' => 'https://docs.prestashop-project.org/1.7-documentation/v/italian/guida-utente/vendere/gestire-catalogo/gestire-funzioni-prodotto', '_fallback' => 'https://docs.prestashop-project.org/1.7-documentation/user-guide/selling/managing-catalog/managing-product-features']]);
    }
}
