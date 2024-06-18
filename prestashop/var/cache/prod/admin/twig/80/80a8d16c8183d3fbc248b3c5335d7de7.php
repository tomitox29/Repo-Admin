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

/* @PrestaShop/Admin/Improve/Design/Cms/index.html.twig */
class __TwigTemplate_0e877105e4397e2fde62f86c7ee40bce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'cms_page_category_breadcrumb' => [$this, 'block_cms_page_category_breadcrumb'],
            'cms_category_grid' => [$this, 'block_cms_category_grid'],
            'cms_grid' => [$this, 'block_cms_grid'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "
  ";
        // line 29
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 29)->display($context);
        // line 30
        echo "
  ";
        // line 31
        $this->displayBlock('cms_page_category_breadcrumb', $context, $blocks);
        // line 34
        echo "
  ";
        // line 35
        $this->displayBlock('cms_category_grid', $context, $blocks);
        // line 44
        echo "
  ";
        // line 45
        $this->displayBlock('cms_grid', $context, $blocks);
    }

    // line 31
    public function block_cms_page_category_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 32)->display($context);
        // line 33
        echo "  ";
    }

    // line 35
    public function block_cms_category_grid($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 36, "1044860257")->display(twig_array_merge($context, ["grid" => ($context["cmsCategoryGrid"] ?? null)]));
        // line 43
        echo "  ";
    }

    // line 45
    public function block_cms_grid($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 46)->display(twig_array_merge($context, ["grid" => ($context["cmsGrid"] ?? null)]));
        // line 47
        echo "  ";
    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/cms_page.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig";
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
        return array (  122 => 53,  118 => 52,  113 => 51,  109 => 50,  105 => 47,  102 => 46,  98 => 45,  94 => 43,  91 => 36,  87 => 35,  83 => 33,  80 => 32,  76 => 31,  72 => 45,  69 => 44,  67 => 35,  64 => 34,  62 => 31,  59 => 30,  57 => 29,  54 => 28,  50 => 27,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Cms/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Cms/index.html.twig */
class __TwigTemplate_0e877105e4397e2fde62f86c7ee40bce___1044860257 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'grid_panel_footer' => [$this, 'block_grid_panel_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 36
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 36);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_grid_panel_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 38), "query", [], "any", false, false, false, 38), "get", ["id_cms_category"], "method", false, false, false, 38) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 38), "query", [], "any", false, false, false, 38), "get", ["id_cms_category"], "method", false, false, false, 38) != twig_get_attribute($this->env, $this->source, ($context["cmsPageView"] ?? null), "root_category_id", [], "any", false, false, false, 38)))) {
            // line 39
            echo "          ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/Blocks/listing_panel_footer.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 39)->display($context);
            // line 40
            echo "        ";
        }
        // line 41
        echo "      ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig";
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
        return array (  202 => 41,  199 => 40,  196 => 39,  193 => 38,  189 => 37,  178 => 36,  122 => 53,  118 => 52,  113 => 51,  109 => 50,  105 => 47,  102 => 46,  98 => 45,  94 => 43,  91 => 36,  87 => 35,  83 => 33,  80 => 32,  76 => 31,  72 => 45,  69 => 44,  67 => 35,  64 => 34,  62 => 31,  59 => 30,  57 => 29,  54 => 28,  50 => 27,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Cms/index.html.twig");
    }
}
