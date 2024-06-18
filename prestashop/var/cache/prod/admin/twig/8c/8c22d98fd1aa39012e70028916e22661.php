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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig */
class __TwigTemplate_ac5c6b0c874338c4dd264862ba77e877 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'features_row' => [$this, 'block_features_row'],
            'feature_collection_row' => [$this, 'block_feature_collection_row'],
            'feature_collection_item_row' => [$this, 'block_feature_collection_item_row'],
            'feature_value_row' => [$this, 'block_feature_value_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $this->displayBlock('features_row', $context, $blocks);
        // line 51
        $this->displayBlock('feature_collection_row', $context, $blocks);
        // line 75
        $this->displayBlock('feature_collection_item_row', $context, $blocks);
        // line 91
        $this->displayBlock('feature_value_row', $context, $blocks);
    }

    // line 26
    public function block_features_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "<div class=\"form-group\">
    <h3>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Features", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h3>

    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"product-features-controls\">
      ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_id", [], "any", false, false, false, 32), 'widget');
        echo "
      <div class=\"feature-value-spinner d-none\">
        <div class=\"spinner\"></div>
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading feature values...", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_id", [], "any", false, false, false, 37), 'widget');
        echo "
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, false, false, 38), 'widget');
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_feature", [], "any", false, false, false, 39), 'widget');
        echo "
    </div>
    ";
        // line 42
        echo "    ";
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["external_link" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_id", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "external_link", [], "any", false, false, false, 42)];
        if (!is_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 42, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        // line 43
        $this->displayBlock("form_external_link", $context, $blocks);
        $context = $__internal_compile_0;
        // line 46
        $this->displayBlock("form_rows", $context, $blocks);
        // line 47
        echo "</div>";
    }

    // line 51
    public function block_feature_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53)]);
        // line 54
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 54), "")) : ("")) . " table feature-values-table-collection"))]);
        // line 57
        echo "  ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57))) {
            // line 58
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 58), "")) : ("")) . " d-none"))]);
        }
        // line 60
        echo "
  <table ";
        // line 61
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    <thead class=\"thead-default\">
    <tr>
      <th>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feature", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
      <th>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feature value", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
      <th></th>
    </tr>
    </thead>
    <tbody>";
        // line 70
        $this->displayBlock("form_rows", $context, $blocks);
        // line 71
        echo "</tbody>
  </table>";
    }

    // line 75
    public function block_feature_collection_item_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "  ";
        $context["featureId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_id", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "value", [], "any", false, false, false, 77);
        // line 78
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 78), "")) : ("")) . " product-feature-collection")), "feature-id" => ($context["featureId"] ?? null)]);
        // line 80
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_values", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "prototype", [], "any", false, false, false, 80), 'row'), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_values", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "prototype", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80)]);
        // line 81
        echo "<tr ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    <td colspan=\"3\">
      ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_id", [], "any", false, false, false, 83), 'widget');
        echo "
      ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_name", [], "any", false, false, false, 84), 'widget');
        echo "
    </td>
  </tr>
  ";
        // line 88
        $this->displayBlock("form_rows", $context, $blocks);
    }

    // line 91
    public function block_feature_value_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "  ";
        $context["featureCollectionParent"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 93), "parent", [], "any", false, false, false, 93);
        // line 94
        echo "  ";
        $context["featureId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["featureCollectionParent"] ?? null), "feature_id", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "value", [], "any", false, false, false, 94);
        // line 95
        echo "  ";
        $context["featureName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["featureCollectionParent"] ?? null), "feature_name", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95);
        // line 96
        echo "  <tr class=\"product-feature-value\" feature-id=\"";
        echo twig_escape_filter($this->env, ($context["featureId"] ?? null), "html", null, true);
        echo "\">
    <td class=\"feature-column\">
      ";
        // line 98
        echo twig_escape_filter($this->env, ($context["featureName"] ?? null), "html", null, true);
        echo "
    </td>
    <td>
      ";
        // line 101
        if ((null === ($context["is_custom"] ?? null))) {
            // line 102
            echo "        ";
            // line 103
            echo "        ";
            $context["featureValueAttributes"] = [];
            // line 104
            echo "        ";
            $context["customValueAttributes"] = [];
            // line 105
            echo "      ";
        } elseif (($context["is_custom"] ?? null)) {
            // line 106
            echo "        ";
            // line 107
            echo "        ";
            $context["featureValueAttributes"] = ["row_attr" => ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_name", [], "any", false, true, false, 107), "vars", [], "any", false, true, false, 107), "row_attr", [], "any", false, true, false, 107), "class", [], "any", true, true, false, 107)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_name", [], "any", false, true, false, 107), "vars", [], "any", false, true, false, 107), "row_attr", [], "any", false, true, false, 107), "class", [], "any", false, false, false, 107), "")) : ("")) . " d-none"))]];
            // line 108
            echo "        ";
            $context["customValueAttributes"] = [];
            // line 109
            echo "      ";
        } else {
            // line 110
            echo "        ";
            // line 111
            echo "        ";
            $context["featureValueAttributes"] = [];
            // line 112
            echo "        ";
            $context["customValueAttributes"] = ["row_attr" => ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, true, false, 112), "vars", [], "any", false, true, false, 112), "row_attr", [], "any", false, true, false, 112), "class", [], "any", true, true, false, 112)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, true, false, 112), "vars", [], "any", false, true, false, 112), "row_attr", [], "any", false, true, false, 112), "class", [], "any", false, false, false, 112), "")) : ("")) . " d-none"))]];
            // line 113
            echo "      ";
        }
        // line 114
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_name", [], "any", false, false, false, 114), 'row', twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_name", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "attr", [], "any", false, false, false, 114), ($context["featureValueAttributes"] ?? null)));
        echo "
      ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, false, false, 115), 'row', twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "attr", [], "any", false, false, false, 115), ($context["customValueAttributes"] ?? null)));
        echo "
      ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_id", [], "any", false, false, false, 116), 'row');
        echo "
      ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "is_custom", [], "any", false, false, false, 117), 'row');
        echo "
    </td>
    <td class=\"feature-actions\">
      ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 120), 'widget');
        echo "

      ";
        // line 123
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    </td>
  </tr>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  266 => 123,  261 => 120,  255 => 117,  251 => 116,  247 => 115,  242 => 114,  239 => 113,  236 => 112,  233 => 111,  231 => 110,  228 => 109,  225 => 108,  222 => 107,  220 => 106,  217 => 105,  214 => 104,  211 => 103,  209 => 102,  207 => 101,  201 => 98,  195 => 96,  192 => 95,  189 => 94,  186 => 93,  182 => 91,  178 => 88,  172 => 84,  168 => 83,  162 => 81,  160 => 80,  158 => 78,  155 => 77,  151 => 75,  146 => 71,  144 => 70,  137 => 65,  133 => 64,  127 => 61,  124 => 60,  121 => 58,  118 => 57,  116 => 54,  114 => 53,  110 => 51,  106 => 47,  104 => 46,  101 => 43,  92 => 42,  87 => 39,  83 => 38,  79 => 37,  74 => 35,  68 => 32,  63 => 30,  58 => 28,  55 => 27,  51 => 26,  47 => 91,  45 => 75,  43 => 51,  41 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/FormTheme/features.html.twig");
    }
}
