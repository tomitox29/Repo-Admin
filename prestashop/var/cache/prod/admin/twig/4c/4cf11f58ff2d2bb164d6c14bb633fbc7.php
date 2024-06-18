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

/* @PrestaShop/Admin/Sell/Catalog/Product/Grid/grid.html.twig */
class __TwigTemplate_9cb79c6bfbe36ee0004d701ca649543f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'grid_bulk_actions_block' => [$this, 'block_grid_bulk_actions_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/Common/Grid/grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/Grid/grid.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_grid_bulk_actions_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "attributes", [], "any", false, false, false, 28), "is_empty_state", [], "any", false, false, false, 28)) {
            // line 29
            echo "  ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["categoryFilterForm"] ?? null), 'form_start', ["attr" => ["class" => "d-inline-block"]]);
            echo "
    ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["categoryFilterForm"] ?? null), 'row');
            echo "
  ";
            // line 31
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["categoryFilterForm"] ?? null), 'form_end');
            echo "
  ";
        }
        // line 33
        echo "  ";
        $this->displayParentBlock("grid_bulk_actions_block", $context, $blocks);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Grid/grid.html.twig";
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
        return array (  67 => 33,  62 => 31,  58 => 30,  53 => 29,  50 => 28,  46 => 27,  35 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Grid/grid.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Grid/grid.html.twig");
    }
}
