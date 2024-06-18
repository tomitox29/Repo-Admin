<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Multistore/product_header.html.twig */
class __TwigTemplate_7beaa9bfbbc18612e256f997f4667be8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'multishop_header_right' => [$this, 'block_multishop_header_right'],
            'search_shops' => [$this, 'block_search_shops'],
            'all_shops_item' => [$this, 'block_all_shops_item'],
            'shop_group_item' => [$this, 'block_shop_group_item'],
            'shop_item' => [$this, 'block_shop_item'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/Multistore/header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Multistore/header.html.twig", "@PrestaShop/Admin/Multistore/product_header.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_multishop_header_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  <a class=\"header-multishop-view-action product-shops-action\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_products_select_shops", ["productId" => ($context["productId"] ?? null)]), "html", null, true);
        echo "\" target=\"_blank\" rel=\"nofollow\">
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select stores", [], "Admin.Navigation.Header"), "html", null, true);
        echo "
    ";
        // line 30
        $this->loadTemplate("@PrestaShop/Admin/Multistore/shop_icon.html.twig", "@PrestaShop/Admin/Multistore/product_header.html.twig", 30)->display($context);
        // line 31
        echo "  </a>
  ";
        // line 32
        $this->displayParentBlock("multishop_header_right", $context, $blocks);
        echo "
";
    }

    // line 36
    public function block_search_shops($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 40
    public function block_all_shops_item($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 44
    public function block_shop_group_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "  <span class=\"multishop-modal-color-container\">
    <span class=\"multishop-modal-color\"";
        // line 46
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "color", [], "any", false, false, false, 46))) {
            echo " style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "color", [], "any", false, false, false, 46), "html", null, true);
            echo ";\"";
        }
        echo ">
    </span>
  </span>
  ";
        // line 49
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", false, false, false, 49)), "html", null, true);
        echo "
";
    }

    // line 53
    public function block_shop_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "  <div class=\"multishop-modal-item-left\">
    <span class=\"multishop-modal-color-container\">
      <span class=\"multishop-modal-color\"";
        // line 56
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 56))) {
            echo " style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 56), "html", null, true);
            echo ";\"";
        }
        echo ">
      </span>
    </span>
    <a class=\"multishop-modal-shop-name";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "hasMainUrl", [], "method", false, false, false, 59) == false)) {
            echo " multishop-modal-no-url\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 59), "html", null, true);
            echo "</a>";
        } else {
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateShopUrl(($context["shop"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 59), "html", null, true);
            echo "</a>";
        }
        // line 60
        echo "  </div>
  ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "hasMainUrl", [], "method", false, false, false, 61)) {
            // line 62
            echo "    <a class=\"multishop-modal-shop-view\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "getBaseLink", [twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 62)], "method", false, false, false, 62), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noreferrer\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
            echo " <i class=\"material-icons\">visibility</i></a>
  ";
        } else {
            // line 64
            echo "    <a class=\"multishop-modal-shop-view\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopUrl", true, ["shop_id" => twig_get_attribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 64), "addshop_url" => 1]), "html", null, true);
            echo "\" rel=\"noreferrer\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure URL", [], "Admin.Actions"), "html", null, true);
            echo " <i class=\"material-icons\">visibility</i></a>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Multistore/product_header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  152 => 64,  144 => 62,  142 => 61,  139 => 60,  127 => 59,  117 => 56,  113 => 54,  109 => 53,  103 => 49,  93 => 46,  90 => 45,  86 => 44,  80 => 40,  74 => 36,  68 => 32,  65 => 31,  63 => 30,  59 => 29,  54 => 28,  50 => 27,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Multistore/product_header.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Multistore/product_header.html.twig");
    }
}
