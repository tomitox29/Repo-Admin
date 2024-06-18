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

/* @PrestaShop/Admin/Module/Includes/action_menu.html.twig */
class __TwigTemplate_cde53dd9d2799df002b8998703777367 extends Template
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
        echo "
 <div class=\"btn-group module-actions\">
  ";
        // line 27
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 27), "urls", [], "any", false, false, false, 27))) {
            // line 28
            echo "    ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_button.html.twig", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", 28)->display(twig_array_merge($context, ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 29
($context["module"] ?? null), "attributes", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "classes_form" => "btn-group form-action-button", "classes" => "btn btn-primary-reverse btn-outline-primary", "url" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 32
($context["module"] ?? null), "attributes", [], "any", false, false, false, 32), "urls", [], "any", false, false, false, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 32), "url_active", [], "any", false, false, false, 32)] ?? null) : null), "action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
($context["module"] ?? null), "attributes", [], "any", false, false, false, 33), "url_active", [], "any", false, false, false, 33), "label" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
($context["module"] ?? null), "attributes", [], "any", false, false, false, 34), "urls_labels", [], "any", false, false, false, 34)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 34), "url_active", [], "any", false, false, false, 34)] ?? null) : null)]));
            // line 36
            echo "    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 36), "urls", [], "any", false, false, false, 36)) > 1)) {
                // line 37
                echo "        <input type=\"hidden\" class=\"btn\" />
        <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"caret\"></span>
        </button>
        <span class=\"sr-only\">";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle dropdown", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</span>
        <div class=\"dropdown-menu\">
          ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 43), "urls", [], "any", false, false, false, 43));
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
                foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                    // line 44
                    echo "            ";
                    if (($context["module_action"] != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 44), "url_active", [], "any", false, false, false, 44))) {
                        // line 45
                        echo "                <li>
                  ";
                        // line 46
                        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_button.html.twig", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", 46)->display(twig_array_merge($context, ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 47
($context["module"] ?? null), "attributes", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "classes" => "dropdown-item", "url" =>                         // line 49
$context["module_url"], "action" =>                         // line 50
$context["module_action"], "label" => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 51
($context["module"] ?? null), "attributes", [], "any", false, false, false, 51), "urls_labels", [], "any", false, false, false, 51)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["module_action"]] ?? null) : null)]));
                        // line 53
                        echo "                </li>
            ";
                    }
                    // line 55
                    echo "          ";
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
                unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "        </div>
    ";
            }
            // line 58
            echo "  ";
        }
        // line 59
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/action_menu.html.twig";
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
        return array (  118 => 59,  115 => 58,  111 => 56,  97 => 55,  93 => 53,  91 => 51,  90 => 50,  89 => 49,  88 => 47,  87 => 46,  84 => 45,  81 => 44,  64 => 43,  59 => 41,  53 => 37,  50 => 36,  48 => 34,  47 => 33,  46 => 32,  45 => 29,  43 => 28,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/action_menu.html.twig");
    }
}
