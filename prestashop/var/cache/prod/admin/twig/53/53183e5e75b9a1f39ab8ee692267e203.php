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

/* @PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig */
class __TwigTemplate_cb980c095d2c02f2fc3530c4ba24c85e extends Template
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
";
        // line 26
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "confirmationMessage", [], "any", false, false, false, 26))) {
            // line 27
            echo "<div class=\"bootstrap\">
  <div class=\"alert alert-success\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "confirmationMessage", [], "any", false, false, false, 30), "html", null, true);
            echo "
  </div>
</div>
";
        }
        // line 34
        echo "
";
        // line 35
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "errorMessage", [], "any", false, false, false, 35))) {
            // line 36
            echo "<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "errorMessage", [], "any", false, false, false, 39), "html", null, true);
            echo "
  </div>
</div>
";
        }
        // line 43
        echo "
";
        // line 44
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 44))) {
            // line 45
            echo "<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 48
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 48)) == 1)) {
                // line 49
                echo "      ";
                echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 49)), "html", null, true);
                echo "
    ";
            } else {
                // line 51
                echo "      ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are %d errors.", ["%d" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 51))], "Admin.Notifications.Error"), "html", null, true);
                echo "
      <br/>
      <ol>
        ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 55
                    echo "        <li>";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "      </ol>
    ";
            }
            // line 59
            echo "  </div>
</div>
";
        }
        // line 62
        echo "
";
        // line 63
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "informations", [], "any", false, false, false, 63))) {
            // line 64
            echo "<div class=\"bootstrap\">
  <div class=\"alert alert-info\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <ul id=\"infos_block\" class=\"list-unstyled\">
      ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "informations", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 69
                echo "      <li>";
                echo twig_escape_filter($this->env, $context["info"], "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "    </ul>
  </div>
</div>
";
        }
        // line 75
        echo "
";
        // line 76
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "confirmations", [], "any", false, false, false, 76))) {
            // line 77
            echo "<div class=\"bootstrap\">
  <div class=\"alert alert-success\" style=\"display:block;\">
    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "confirmations", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["confirmation"]) {
                // line 80
                echo "    ";
                echo twig_escape_filter($this->env, $context["confirmation"], "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['confirmation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "  </div>
</div>
";
        }
        // line 85
        echo "
";
        // line 86
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "warnings", [], "any", false, false, false, 86))) {
            // line 87
            echo "<div class=\"bootstrap\">
  <div class=\"alert alert-warning\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 90
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "warnings", [], "any", false, false, false, 90)) > 1)) {
                // line 91
                echo "    <h4>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are %d warnings:", ["%d" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "warnings", [], "any", false, false, false, 91))]), "html", null, true);
                echo "</h4>
    ";
            }
            // line 93
            echo "    <ul class=\"list-unstyled\">
      ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "warnings", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 95
                echo "      <li>";
                echo twig_escape_filter($this->env, $context["warning"], "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "    </ul>
  </div>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig";
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
        return array (  209 => 97,  200 => 95,  196 => 94,  193 => 93,  187 => 91,  185 => 90,  180 => 87,  178 => 86,  175 => 85,  170 => 82,  161 => 80,  157 => 79,  153 => 77,  151 => 76,  148 => 75,  142 => 71,  133 => 69,  129 => 68,  123 => 64,  121 => 63,  118 => 62,  113 => 59,  109 => 57,  100 => 55,  96 => 54,  89 => 51,  83 => 49,  81 => 48,  76 => 45,  74 => 44,  71 => 43,  64 => 39,  59 => 36,  57 => 35,  54 => 34,  47 => 30,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/session_alert.html.twig");
    }
}
