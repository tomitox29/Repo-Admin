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

/* @PrestaShop/Admin/Component/Layout/search_form.html.twig */
class __TwigTemplate_fa1c53adfce319539bf36f0005d5144b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"";
        // line 28
        echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminSearch");
        echo "\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  ";
        // line 31
        if ((array_key_exists("showClearBtn", $context) && ($context["showClearBtn"] ?? null))) {
            // line 32
            echo "    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  ";
        }
        // line 34
        echo "  <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["boQuery"] ?? null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search (e.g.: product reference, customer name…)", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searchbar", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        echo "
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" href=\"#\" data-value=\"0\" data-placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What are you looking for?", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        echo "</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Global"), "html", null, true);
        echo "\" href=\"#\" data-value=\"1\" data-placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product name, reference, etc.", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Global"), "html", null, true);
        echo "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by name"), "html", null, true);
        echo "\" href=\"#\" data-value=\"2\" data-placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by name", [], "Admin.Navigation.Header"), "html", null, true);
        echo " </a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by ip address"), "html", null, true);
        echo "\" href=\"#\" data-value=\"6\" data-placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("123.45.67.89", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by IP address", [], "Admin.Navigation.Header"), "html", null, true);
        echo "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        echo "\" href=\"#\" data-value=\"3\" data-placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order ID", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        echo "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Global"), "html", null, true);
        echo "\" href=\"#\" data-value=\"4\" data-placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice number", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Global"), "html", null, true);
        echo "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        echo "\" href=\"#\" data-value=\"5\" data-placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart ID", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        echo "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        echo "\" href=\"#\" data-value=\"7\" data-placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module name", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        echo "</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SEARCH", [], "Admin.Navigation.Header"), "html", null, true);
        echo "</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
  \$(function(){
    ";
        // line 58
        if ((array_key_exists("searchType", $context) && ($context["searchType"] ?? null))) {
            // line 59
            echo "      \$('.search-option a[data-value=' + ";
            echo ((($context["searchType"] ?? null)) ? (1) : (0));
            echo " + ']').click();
    ";
        }
        // line 61
        echo "      \$('#bo_query').one('click', function() {
        \$(this).closest('form').removeClass('collapsed');
      });
    });
</script>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/Layout/search_form.html.twig";
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
        return array (  165 => 61,  159 => 59,  157 => 58,  147 => 51,  138 => 49,  130 => 48,  122 => 47,  114 => 46,  102 => 45,  90 => 44,  82 => 43,  73 => 41,  67 => 38,  57 => 35,  54 => 34,  50 => 32,  48 => 31,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/search_form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/search_form.html.twig");
    }
}
