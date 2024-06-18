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

/* @PrestaShop/Admin/Component/LegacyLayout/shop_list.html.twig */
class __TwigTemplate_1f01d3f78e0fd0426dfa166bda137473 extends Template
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
        echo "<ul id=\"header-list\" class=\"header-list\">
  <li class=\"shopname\" data-mobile=\"true\" data-from=\"header-list\" data-target=\"menu\">
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "shopList", [], "any", false, false, false, 27)) {
            // line 28
            echo "    <ul id=\"header_shop\" class=\"shop-state\">
      <li class=\"dropdown\">
        <i class=\"material-icons\">visibility</i>
        <span>";
            // line 31
            echo twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "shopList", [], "any", false, false, false, 31);
            echo "</span>
      </li>
    </ul>
    ";
        } else {
            // line 35
            echo "    <a id=\"header_shopname\" class=\"shop-state\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "baseUrl", [], "any", false, false, false, 35), "html_attr");
            echo "\" target=\"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
            echo "</span>
    </a>
    ";
        }
        // line 40
        echo "  </li>
</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/shop_list.html.twig";
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
        return array (  67 => 40,  61 => 37,  55 => 35,  48 => 31,  43 => 28,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/shop_list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/shop_list.html.twig");
    }
}
