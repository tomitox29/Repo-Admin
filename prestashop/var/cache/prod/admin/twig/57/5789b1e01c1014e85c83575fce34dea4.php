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

/* @PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig */
class __TwigTemplate_72923aedf719f9244826757ba318490e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'entity_search_input_widget' => [$this, 'block_entity_search_input_widget'],
            'entity_search_list_layout' => [$this, 'block_entity_search_list_layout'],
            'entity_search_table_layout' => [$this, 'block_entity_search_table_layout'],
            'entity_item_row' => [$this, 'block_entity_item_row'],
            'entity_item_list_row' => [$this, 'block_entity_item_list_row'],
            'entity_item_table_row' => [$this, 'block_entity_item_table_row'],
            'searched_customer_row' => [$this, 'block_searched_customer_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('entity_search_input_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('entity_search_list_layout', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('entity_search_table_layout', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('entity_item_row', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('entity_item_list_row', $context, $blocks);
        // line 135
        $this->displayBlock('entity_item_table_row', $context, $blocks);
        // line 158
        $this->displayBlock('searched_customer_row', $context, $blocks);
    }

    // line 26
    public function block_entity_search_input_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  ";
        // line 28
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype-template" =>         // line 29
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-index" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["prototype"] ?? null), "vars", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html_attr"), "data-prototype-mapping" => json_encode(        // line 31
($context["prototype_mapping"] ?? null)), "data-identifier-field" =>         // line 32
($context["identifier_field"] ?? null), "data-filtered-identities" => json_encode(        // line 33
($context["filtered_identities"] ?? null)), "data-remove-modal" => json_encode(        // line 34
($context["remove_modal"] ?? null)), "data-remote-url" =>         // line 35
($context["remote_url"] ?? null), "data-data-limit" =>         // line 36
($context["limit"] ?? null), "data-min-length" =>         // line 37
($context["min_length"] ?? null), "data-allow-delete" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["form"] ?? null), "vars", [], "any", false, false, false, 38), "allow_delete", [], "any", false, false, false, 38)) ? (1) : (0)), "data-suggestion-field" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["form"] ?? null), "vars", [], "any", false, false, false, 39), "suggestion_field", [], "any", false, false, false, 39)]);
        // line 41
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 41), "")) : ("")) . " entity-search-widget"))]);
        // line 44
        echo "  <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 46
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 46), "allow_search", [], "any", false, false, false, 46)) {
            // line 47
            echo "      <div class=\"search search-with-icon\">";
            // line 48
            $context["attr"] = twig_array_merge(($context["search_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,             // line 49
($context["search_attr"] ?? null), "class", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["search_attr"] ?? null), "class", [], "any", false, false, false, 49), "")) : ("")) . " entity-search-input form-control")), "autocomplete" => "off", "placeholder" =>             // line 51
($context["placeholder"] ?? null), "type" => "text"]);
            // line 54
            $context["id"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54) . "_search_input");
            // line 55
            echo "<input ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " />
      </div>
    ";
        }
        // line 58
        $this->displayBlock("form_help", $context, $blocks);
        // line 60
        $context["id"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60) . "_list");
        // line 61
        if ((($context["list_layout"] ?? null) == "table")) {
            // line 62
            $this->displayBlock("entity_search_table_layout", $context, $blocks);
        } else {
            // line 64
            $this->displayBlock("entity_search_list_layout", $context, $blocks);
        }
        // line 66
        echo "    ";
        if ( !(null === ($context["empty_state"] ?? null))) {
            // line 67
            echo "      <div class=\"alert alert-info empty-entity-list mt-2\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 69
            echo ($context["empty_state"] ?? null);
            echo "
        </p>
      </div>
    ";
        }
        // line 73
        echo "  </div>
";
    }

    // line 76
    public function block_entity_search_list_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        $context["attr"] = twig_array_merge(($context["list_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", true, true, false, 77)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", false, false, false, 77), "")) : ("")) . " entities-list entities-list-container"))]);
        // line 78
        echo "<ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 79
        $this->displayBlock("form_rows", $context, $blocks);
        // line 80
        echo "</ul>
";
    }

    // line 83
    public function block_entity_search_table_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        $context["attr"] = twig_array_merge(($context["list_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", false, false, false, 84), "")) : ("")) . " entities-list-container"))]);
        // line 85
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <div class=\"row\">
      <div class=\"col-sm\">
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr>
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "children", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 92
            echo "              ";
            $context["childType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 92), "block_prefixes", [], "any", false, false, false, 92), 1, [], "any", false, false, false, 92);
            // line 93
            echo "              ";
            if ((($context["childType"] ?? null) != "hidden")) {
                // line 94
                echo "                <th>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 94), "label", [], "any", false, false, false, 94), "html", null, true);
                echo "</th>
              ";
            }
            // line 96
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
            ";
        // line 99
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 99), "allow_delete", [], "any", false, false, false, 99)) {
            // line 100
            echo "              <th></th>
            ";
        }
        // line 102
        echo "            </tr>
          </thead>
          <tbody class=\"entities-list\">";
        // line 105
        $this->displayBlock("form_rows", $context, $blocks);
        // line 106
        echo "</tbody>
        </table>
      </div>
    </div>
  </div>
";
    }

    // line 113
    public function block_entity_item_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "list_layout", [], "any", false, false, false, 114) == "table")) {
            // line 115
            $this->displayBlock("entity_item_table_row", $context, $blocks);
        } else {
            // line 117
            $this->displayBlock("entity_item_list_row", $context, $blocks);
        }
    }

    // line 121
    public function block_entity_item_list_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 122)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 122), "")) : ("")) . " media entity-item"))]);
        // line 123
        echo "  <li ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <div class=\"media-left\">
      ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 125), 'widget');
        echo "
    </div>
    <div class=\"media-body media-middle\">
      ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 128), 'widget');
        echo "
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
  </li>
";
    }

    // line 135
    public function block_entity_item_table_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 136)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 136), "")) : ("")) . " entity-item"))]);
        // line 137
        echo "  <tr ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
  ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 138));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 139
            echo "    ";
            $context["childType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 139), "block_prefixes", [], "any", false, false, false, 139), 1, [], "any", false, false, false, 139);
            // line 140
            echo "    ";
            if ((($context["childType"] ?? null) == "hidden")) {
                // line 141
                echo "      ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
    ";
            } else {
                // line 143
                echo "    <td>
      ";
                // line 144
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
    </td>
    ";
            }
            // line 147
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "
  ";
        // line 150
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "allow_delete", [], "any", false, false, false, 150)) {
            // line 151
            echo "    <td>
      <i class=\"material-icons entity-item-delete\">clear</i>
    </td>
  ";
        }
        // line 155
        echo "  </tr>";
    }

    // line 158
    public function block_searched_customer_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 159)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 159), "")) : ("")) . " media entity-item"))]);
        // line 160
        echo "  <li ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <div class=\"media-body media-middle\">
      ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fullname_and_email", [], "any", false, false, false, 162), 'widget');
        echo "
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id_customer", [], "any", false, false, false, 165), 'widget');
        echo "
  </li>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  354 => 165,  348 => 162,  342 => 160,  339 => 159,  335 => 158,  331 => 155,  325 => 151,  322 => 150,  319 => 148,  313 => 147,  307 => 144,  304 => 143,  298 => 141,  295 => 140,  292 => 139,  288 => 138,  283 => 137,  281 => 136,  277 => 135,  270 => 131,  264 => 128,  258 => 125,  252 => 123,  249 => 122,  245 => 121,  240 => 117,  237 => 115,  234 => 114,  230 => 113,  221 => 106,  219 => 105,  215 => 102,  211 => 100,  208 => 99,  205 => 97,  199 => 96,  193 => 94,  190 => 93,  187 => 92,  183 => 91,  173 => 85,  171 => 84,  167 => 83,  162 => 80,  160 => 79,  156 => 78,  154 => 77,  150 => 76,  145 => 73,  138 => 69,  134 => 67,  131 => 66,  128 => 64,  125 => 62,  123 => 61,  121 => 60,  119 => 58,  112 => 55,  110 => 54,  108 => 51,  107 => 49,  106 => 48,  104 => 47,  101 => 46,  96 => 44,  94 => 41,  92 => 39,  91 => 38,  90 => 37,  89 => 36,  88 => 35,  87 => 34,  86 => 33,  85 => 32,  84 => 31,  83 => 30,  82 => 29,  81 => 28,  79 => 27,  75 => 26,  71 => 158,  69 => 135,  67 => 121,  64 => 120,  62 => 113,  59 => 112,  57 => 83,  54 => 82,  52 => 76,  49 => 75,  47 => 26,  44 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/entity_search_input.html.twig");
    }
}
