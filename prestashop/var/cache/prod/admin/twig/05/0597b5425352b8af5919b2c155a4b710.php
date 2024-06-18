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

/* @PrestaShop/Admin/Module/manage.html.twig */
class __TwigTemplate_fb00d48e6f038329cd81d93464c88e42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'catalog_categories_listing' => [$this, 'block_catalog_categories_listing'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      ";
        // line 31
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 31)->display($context);
        // line 32
        echo "      ";
        // line 33
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 33)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 34
        echo "      ";
        // line 35
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/menu_top.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 35)->display(twig_array_merge($context, ["topMenuData" => ($context["topMenuData"] ?? null), "bulkActions" => ($context["bulkActions"] ?? null)]));
        // line 36
        echo "
      ";
        // line 37
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 37)->display(twig_array_merge($context, ["display_type" => "list", "origin" => "manage"]));
        // line 38
        echo "
      ";
        // line 39
        $this->displayBlock('catalog_categories_listing', $context, $blocks);
        // line 51
        echo "    </div>
  </div>
";
    }

    // line 39
    public function block_catalog_categories_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "subMenu", [], "any", false, false, false, 40));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 41
            echo "          ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["category"], "modules", [], "any", false, false, false, 41))) {
                // line 42
                echo "            ";
                $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 42)->display(twig_array_merge($context, ["category" => $context["category"], "display_type" => "list", "origin" => "manage"]));
                // line 43
                echo "          ";
            } else {
                // line 44
                echo "            <div class=\"module-short-list\">
              <span id=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "refMenu", [], "any", false, false, false, 45), "html", null, true);
                echo "_modules\" class=\"module-search-result-title\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45), [], "Admin.Modules.Feature"), "html", null, true);
                echo "</span>
              ";
                // line 46
                $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 46)->display(twig_array_merge($context, ["modules" => twig_get_attribute($this->env, $this->source, $context["category"], "modules", [], "any", false, false, false, 46), "display_type" => "list", "origin" => "manage", "id" => twig_get_attribute($this->env, $this->source, $context["category"], "refMenu", [], "any", false, false, false, 46)]));
                // line 47
                echo "            </div>
          ";
            }
            // line 49
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/manage.html.twig";
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
        return array (  144 => 50,  130 => 49,  126 => 47,  124 => 46,  118 => 45,  115 => 44,  112 => 43,  109 => 42,  106 => 41,  88 => 40,  84 => 39,  78 => 51,  76 => 39,  73 => 38,  71 => 37,  68 => 36,  65 => 35,  63 => 34,  60 => 33,  58 => 32,  55 => 31,  51 => 28,  47 => 27,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/manage.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/manage.html.twig");
    }
}
