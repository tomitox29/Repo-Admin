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

/* @PrestaShop/Admin/Login/form_theme.html.twig */
class __TwigTemplate_4e284636eca000db1dc94bf7b53ab89b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 25
        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/Login/form_theme.html.twig", 25);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'submit_row' => [$this, 'block_submit_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
";
        // line 28
        $this->displayBlock('submit_row', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('checkbox_row', $context, $blocks);
    }

    // line 28
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "<div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false)) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 29)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 29), "html", null, true);
        }
        echo "\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 31
        echo "</div>
";
    }

    // line 34
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "  <div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false)) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 35)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 35), "html", null, true);
        }
        echo "\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 37
        $this->displayBlock("form_external_link", $context, $blocks);
        // line 38
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Login/form_theme.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  104 => 38,  102 => 37,  100 => 36,  89 => 35,  85 => 34,  80 => 31,  78 => 30,  67 => 29,  63 => 28,  59 => 34,  56 => 33,  54 => 28,  51 => 26,  30 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Login/form_theme.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Login/form_theme.html.twig");
    }
}
