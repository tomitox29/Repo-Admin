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

/* @PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig */
class __TwigTemplate_8ef1604422dc59fa7d4e552ee11e451c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'category_showcase_card' => [$this, 'block_category_showcase_card'],
            'categories_kpis' => [$this, 'block_categories_kpis'],
            'categories_breadcrumb' => [$this, 'block_categories_breadcrumb'],
            'categories_listing' => [$this, 'block_categories_listing'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        $this->displayBlock('category_showcase_card', $context, $blocks);
        // line 31
        echo "
  ";
        // line 32
        $this->displayBlock('categories_kpis', $context, $blocks);
        // line 38
        echo "
  ";
        // line 39
        $this->displayBlock('categories_breadcrumb', $context, $blocks);
        // line 42
        echo "
  ";
        // line 43
        $this->displayBlock('categories_listing', $context, $blocks);
    }

    // line 28
    public function block_category_showcase_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 29)->display($context);
        // line 30
        echo "  ";
    }

    // line 32
    public function block_categories_kpis($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle\\Controller\\Admin\\CommonController::renderKpiRowAction", ["kpiRow" =>         // line 35
($context["categoriesKpi"] ?? null)]));
        // line 36
        echo "
  ";
    }

    // line 39
    public function block_categories_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 40)->display($context);
        // line 41
        echo "  ";
    }

    // line 43
    public function block_categories_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 44, "1261674915")->display(twig_array_merge($context, ["grid" => ($context["categoriesGrid"] ?? null)]));
        // line 53
        echo "  ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/category.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig";
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
        return array (  135 => 60,  131 => 59,  125 => 57,  121 => 56,  117 => 53,  114 => 44,  110 => 43,  106 => 41,  103 => 40,  99 => 39,  94 => 36,  92 => 35,  90 => 33,  86 => 32,  82 => 30,  79 => 29,  75 => 28,  71 => 43,  68 => 42,  66 => 39,  63 => 38,  61 => 32,  58 => 31,  55 => 28,  51 => 27,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/index.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig */
class __TwigTemplate_8ef1604422dc59fa7d4e552ee11e451c___1261674915 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'grid_panel_footer' => [$this, 'block_grid_panel_footer'],
            'grid_panel_extra_content' => [$this, 'block_grid_panel_extra_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 44
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 44);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 45
    public function block_grid_panel_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 46)->display($context);
        // line 47
        echo "      ";
    }

    // line 49
    public function block_grid_panel_extra_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 50)->display($context);
        // line 51
        echo "      ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig";
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
        return array (  221 => 51,  218 => 50,  214 => 49,  210 => 47,  207 => 46,  203 => 45,  192 => 44,  135 => 60,  131 => 59,  125 => 57,  121 => 56,  117 => 53,  114 => 44,  110 => 43,  106 => 41,  103 => 40,  99 => 39,  94 => 36,  92 => 35,  90 => 33,  86 => 32,  82 => 30,  79 => 29,  75 => 28,  71 => 43,  68 => 42,  66 => 39,  63 => 38,  61 => 32,  58 => 31,  55 => 28,  51 => 27,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/index.html.twig");
    }
}
