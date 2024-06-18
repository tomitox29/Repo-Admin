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

/* @PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig */
class __TwigTemplate_2c4a0986b76cc48e8676c07a61ae6701 extends Template
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
        echo "<form id=\"header_search\" class=\"component bo_search_form\" method=\"post\" action=\"";
        echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminSearch");
        echo "\" role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  ";
        // line 27
        if ((array_key_exists("showClearBtn", $context) && ($context["showClearBtn"] ?? null))) {
            // line 28
            echo "    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  ";
        }
        // line 30
        echo "  <div class=\"form-group\">
    <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" />
    <div class=\"input-group\">
      <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
          <i id=\"search_type_icon\" class=\"material-icons\">search</i>
        </button>
        <ul id=\"header_search_options\" class=\"dropdown-menu\">
          <li class=\"search-all search-option active\">
            <a href=\"#\" data-value=\"0\" data-placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What are you looking for?", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\">
              <i class=\"material-icons\">search</i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"divider\"></li>
          <li class=\"search-book search-option\">
            <a href=\"#\" data-value=\"1\" data-placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product name, SKU, reference...", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\">
              <i class=\"material-icons\">store_mall_directory</i> ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Navigation.Menu"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"search-customers-name search-option\">
            <a href=\"#\" data-value=\"2\" data-placeholder=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email, name...", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\">
              <i class=\"material-icons\">group</i> ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers by name", [], "Admin.Navigation.Header"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"search-customers-addresses search-option\">
            <a href=\"#\" data-value=\"6\" data-placeholder=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("123.45.67.89", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" data-icon=\"icon-desktop\">
              <i class=\"material-icons\">desktop_mac</i> ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers by IP address", [], "Admin.Navigation.Header"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"search-orders search-option\">
            <a href=\"#\" data-value=\"3\" data-placeholder=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order ID", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\">
              <i class=\"material-icons\">shopping_basket</i> ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"search-invoices search-option\">
            <a href=\"#\" data-value=\"4\" data-placeholder=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice Number", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\">
              <i class=\"material-icons\">book</i> ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Navigation.Menu"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"search-carts search-option\">
            <a href=\"#\" data-value=\"5\" data-placeholder=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart ID", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\">
              <i class=\"material-icons\">shopping_cart</i> ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"search-modules search-option\">
            <a href=\"#\" data-value=\"7\" data-placeholder=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module name", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\">
              <i class=\"material-icons\">extension</i> ";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 79
        if ((array_key_exists("showClearBtn", $context) && ($context["showClearBtn"] ?? null))) {
            // line 80
            echo "      <a href=\"#\" class=\"clear_search hide\"><i class=\"material-icons\">clear</i></a>
      ";
        }
        // line 82
        echo "      <input id=\"bo_query\" name=\"bo_query\" type=\"text\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, ($context["boQuery"] ?? null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\" />
    </div>
  </div>
  <script>
    ";
        // line 86
        if ((array_key_exists("searchType", $context) && ($context["searchType"] ?? null))) {
            // line 87
            echo "    \$(function() {
      \$('.search-option a[data-value=' + ";
            // line 88
            echo ((($context["searchType"] ?? null)) ? (1) : (0));
            echo " + ']').click();
    });
    ";
        }
        // line 91
        echo "  </script>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig";
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
        return array (  177 => 91,  171 => 88,  168 => 87,  166 => 86,  154 => 82,  150 => 80,  148 => 79,  140 => 74,  136 => 73,  129 => 69,  125 => 68,  118 => 64,  114 => 63,  107 => 59,  103 => 58,  97 => 55,  93 => 54,  86 => 50,  82 => 49,  75 => 45,  71 => 44,  64 => 40,  60 => 39,  49 => 30,  45 => 28,  43 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/search_form.html.twig");
    }
}
