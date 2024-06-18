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

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig */
class __TwigTemplate_d27f973f4a8bca90bab6ee14c28d6377 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 25
        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 25);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        // line 26
        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 26);
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 26, $this->source);
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        // line 27
        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 27);
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig".'" cannot be used as a trait.', 27, $this->source);
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'color_picker_widget' => [$this, 'block_color_picker_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'form_help' => [$this, 'block_form_help'],
                'form_hint' => [$this, 'block_form_hint'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "
";
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('button_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('money_widget', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('date_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('time_widget', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 171
        echo "
";
        // line 172
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 248
        echo "
";
        // line 249
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 293
        echo "
";
        // line 294
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 335
        echo "
";
        // line 336
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 350
        echo "
";
        // line 351
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 359
        echo "
";
        // line 360
        $this->displayBlock('color_picker_widget', $context, $blocks);
        // line 369
        echo "
";
        // line 370
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 395
        echo "
";
        // line 396
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 416
        echo "
";
        // line 417
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 448
        echo "
";
        // line 449
        $this->displayBlock('form_label', $context, $blocks);
        // line 452
        echo "
";
        // line 453
        $this->displayBlock('choice_label', $context, $blocks);
        // line 458
        echo "
";
        // line 459
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 462
        echo "
";
        // line 463
        $this->displayBlock('radio_label', $context, $blocks);
        // line 466
        echo "
";
        // line 467
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 496
        echo "
";
        // line 498
        echo "
";
        // line 499
        $this->displayBlock('form_row', $context, $blocks);
        // line 506
        echo "
";
        // line 507
        $this->displayBlock('button_row', $context, $blocks);
        // line 513
        echo "
";
        // line 514
        $this->displayBlock('choice_row', $context, $blocks);
        // line 518
        echo "
";
        // line 519
        $this->displayBlock('date_row', $context, $blocks);
        // line 523
        echo "
";
        // line 524
        $this->displayBlock('time_row', $context, $blocks);
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 533
        echo "
";
        // line 534
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 540
        echo "
";
        // line 541
        $this->displayBlock('radio_row', $context, $blocks);
        // line 547
        echo "
";
        // line 549
        echo "
";
        // line 550
        $this->displayBlock('form_errors', $context, $blocks);
        // line 571
        echo "

";
        // line 574
        echo "
";
        // line 575
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 611
        echo "
";
        // line 612
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 664
        echo "
";
        // line 665
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 701
        echo "
";
        // line 702
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 726
        echo "
";
        // line 727
        $this->displayBlock('file_widget', $context, $blocks);
        // line 754
        echo "
";
        // line 755
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 771
        echo "
";
        // line 772
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 786
        echo "
";
        // line 787
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 812
        echo "
";
        // line 813
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 817
        echo "
";
        // line 818
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 822
        echo "
";
        // line 823
        $this->displayBlock('form_help', $context, $blocks);
        // line 828
        echo "
";
        // line 829
        $this->displayBlock('form_hint', $context, $blocks);
        // line 836
        echo "
";
        // line 837
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 840
        echo "
";
        // line 841
        $this->displayBlock('text_widget', $context, $blocks);
    }

    // line 31
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 33
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 33), "")) : ("")) . " form-control"))]);
        }
        // line 35
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 38
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 39), "")) : ("")) . " form-control"))]);
        // line 40
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 43
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 44), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 45
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 48
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "<div class=\"input-group money-type\">
        ";
        // line 50
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 51
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 52
            echo "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 53
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 56
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 57
        if (($context["prepend"] ?? null)) {
            // line 58
            echo "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 59
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 62
        echo "    </div>";
    }

    // line 65
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "<div class=\"input-group\">";
        // line 67
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 68
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
    }

    // line 74
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 76
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 78
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 78), "")) : ("")) . " form-inline"))]);
            // line 79
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 80), 'errors');
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 81), 'errors');
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 82), 'widget', ["datetime" => true]);
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 83), 'widget', ["datetime" => true]);
            // line 84
            echo "</div>";
        }
    }

    // line 88
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 90
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 92
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 92)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 92), "")) : ("")) . " form-inline"))]);
            // line 93
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 94
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 96
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 97
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 97), 'widget'), "{{ month }}" =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 98), 'widget'), "{{ day }}" =>             // line 99
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 99), 'widget')]);
            // line 101
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 102
                echo "</div>";
            }
        }
    }

    // line 107
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 111)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 111), "")) : ("")) . " form-inline"))]);
            // line 112
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 113
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 115), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 115), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 115), 'widget');
            }
            // line 116
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 117
                echo "</div>";
            }
        }
    }

    // line 122
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 123)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 123), "")) : ("")) . " custom-select"))]);
        // line 124
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124)], "Admin.Global")]);
        // line 125
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 128
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 129)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 129), "")) : ("")))) {
            // line 130
            echo "<div class=\"control-group\">";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 132
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 133
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 133)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 133), "")) : ("")), "translation_domain" =>                 // line 134
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "</div>";
        } else {
            // line 139
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 142
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 142)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 142), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "</div>";
        }
    }

    // line 150
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 152
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 153
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 155
            echo "<div class=\"checkbox\">";
            // line 156
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 157
            echo "</div>";
        }
    }

    // line 161
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 163
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 164
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 166
            echo "<div class=\"radio form-check form-check-radio\">";
            // line 167
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 168
            echo "</div>";
        }
    }

    // line 172
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 177
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "</ul>
    </div>";
    }

    // line 183
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        echo "<li";
        if ((array_key_exists("defaultHidden", $context) && (($context["defaultHidden"] ?? null) === true))) {
            echo " class=\"more\"";
        }
        echo ">
        ";
        // line 185
        $context["checked"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 185), "submitted_values", [], "any", true, true, false, 185) && twig_get_attribute($this->env, $this->source, ($context["submitted_values"] ?? null), twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 185), [], "array", true, true, false, 185));
        // line 186
        echo "        ";
        if (($context["multiple"] ?? null)) {
            // line 187
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 189), "full_name", [], "any", false, false, false, 189), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 189), "html", null, true);
            echo "\"";
            if (($context["checked"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " class=\"category\">
                    ";
            // line 190
            if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 190) && (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", false, false, false, 190) == 0))) {
                // line 191
                echo "                        <i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 191), "html", null, true);
                echo "</i>";
            } else {
                // line 193
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 193), "html", null, true);
                echo "
                    ";
            }
            // line 195
            echo "                    ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 196
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 196), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 198
            echo "                </label>
            </div>";
        } else {
            // line 201
            echo "<div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"form[";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 203), "id", [], "any", false, false, false, 203), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 203), "html", null, true);
            echo "\"";
            if (($context["checked"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " class=\"category\"";
            if (($context["required"] ?? null)) {
                echo " required";
            }
            echo ">
                    ";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 204), "html", null, true);
            echo "
                    ";
            // line 205
            if (array_key_exists("defaultCategory", $context)) {
                // line 206
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 206), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 208
            echo "                </label>
            </div>";
        }
        // line 211
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 211)) {
            // line 212
            echo "            <ul";
            if ((array_key_exists("defaultHidden", $context) && (($context["defaultHidden"] ?? null) === true))) {
                echo " style=\"display: none;\"";
            }
            echo ">
                ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 213));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 214
                echo "                    ";
                $context["child"] = $context["item"];
                // line 215
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "</ul>
        ";
        }
        // line 219
        echo "    </li>";
    }

    // line 222
    public function block_translatefields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 223
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 224), "id", [], "any", false, false, false, 224), "html", null, true);
        echo "\">
        ";
        // line 225
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 226
            echo "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 228
                echo "                <li class=\"nav-item\">
                    <a href=\"#\" data-locale=\"";
                // line 229
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 229), "label", [], "any", false, false, false, 229), "html", null, true);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 229) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 229), "name", [], "any", false, false, false, 229))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 229), "id", [], "any", false, false, false, 229), "html", null, true);
                echo "\">
                        ";
                // line 230
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 230), "label", [], "any", false, false, false, 230)), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "        </ul>
        ";
        }
        // line 236
        echo "
        <div class=\"translationsFields tab-content\">
            ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 239
            echo "                <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 239), "label", [], "any", false, false, false, 239), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 239), "id", [], "any", false, false, false, 239), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 239) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 239), "name", [], "any", false, false, false, 239))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 239), "valid", [], "any", false, false, false, 239)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 239), "label", [], "any", false, false, false, 239), "html", null, true);
            echo "\">
                    ";
            // line 240
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 241
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            // line 242
            $this->displayBlock("form_help", $context, $blocks);
            // line 243
            echo "</div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "        </div>
    </div>
";
    }

    // line 249
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 251
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 251)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 251), "")) : ("")) . " form-control"))]);
        }
        // line 253
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 256
    public function block_translate_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 260
            echo "            ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 260), "attr", [], "any", false, true, false, 260), "class", [], "any", true, true, false, 260)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 260), "attr", [], "any", false, true, false, 260), "class", [], "any", false, false, false, 260), "")) : ("")) . " js-locale-input");
            // line 261
            echo "            ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 261), "label", [], "any", false, false, false, 261));
            // line 262
            echo "
            ";
            // line 263
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 263) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 263), "name", [], "any", false, false, false, 263))) {
                // line 264
                echo "                ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 265
                echo "            ";
            }
            // line 266
            echo "
            ";
            // line 267
            $context["attr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 267), "attr", [], "any", false, false, false, 267);
            // line 268
            echo "
            ";
            // line 269
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "
        ";
        // line 272
        if ( !($context["hide_locales"] ?? null)) {
            // line 273
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 279), "id", [], "any", false, false, false, 279), "html", null, true);
            echo "\"
            >
                ";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 281), "default_locale", [], "any", false, false, false, 281), "iso_code", [], "any", false, false, false, 281), "html", null, true);
            echo "
            </button>

            <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 284
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 284), "id", [], "any", false, false, false, 284), "html", null, true);
            echo "\">
                ";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 286
                echo "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 286), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 286), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "            </div>
        </div>
        ";
        }
        // line 291
        echo "    </div>";
    }

    // line 294
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 298
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 298), "attr", [], "any", false, true, false, 298), "class", [], "any", true, true, false, 298)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 298), "attr", [], "any", false, true, false, 298), "class", [], "any", false, false, false, 298), "")) : ("")) . " js-locale-input");
            // line 299
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 299), "label", [], "any", false, false, false, 299));
            // line 300
            echo "
      ";
            // line 301
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 301) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 301), "name", [], "any", false, false, false, 301))) {
                // line 302
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 303
                echo "      ";
            }
            // line 304
            echo "
      <div class=\"";
            // line 305
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 306
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "
    ";
        // line 310
        if (($context["show_locale_select"] ?? null)) {
            // line 311
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 317), "id", [], "any", false, false, false, 317), "html", null, true);
            echo "\"
        >
          ";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 319), "default_locale", [], "any", false, false, false, 319), "iso_code", [], "any", false, false, false, 319), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 322
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 322), "id", [], "any", false, false, false, 322), "html", null, true);
            echo "\">
          ";
            // line 323
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 324
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 325
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 325), "html", null, true);
                echo "\"
            >
              ";
                // line 327
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 327), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            echo "        </div>
      </div>
    ";
        }
        // line 333
        echo "  </div>";
    }

    // line 336
    public function block_date_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 337
        echo "  ";
        ob_start(function () { return ''; });
        // line 338
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 338)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 338), "")) : ("")) . " datepicker form-control"))]);
        // line 339
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 339), "id", [], "any", false, false, false, 339)], "Admin.Global")]);
        // line 340
        echo "<div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
        // line 341
        echo twig_escape_filter($this->env, ($context["date_format"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
  ";
        $___internal_parse_11_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 337
        echo twig_spaceless($___internal_parse_11_);
    }

    // line 351
    public function block_date_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 352
        echo "  ";
        ob_start(function () { return ''; });
        // line 353
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 353), 'widget');
        echo "
    ";
        // line 354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 354), 'errors');
        echo "
    ";
        // line 355
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 355), 'widget');
        echo "
    ";
        // line 356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 356), 'errors');
        echo "
  ";
        $___internal_parse_12_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 352
        echo twig_spaceless($___internal_parse_12_);
    }

    // line 360
    public function block_color_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 361
        echo "  ";
        ob_start(function () { return ''; });
        // line 362
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 362)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 362), "")) : ("")) . " form-control colorpicker"))]);
        // line 363
        echo "    <div class=\"input-group colorpicker\">
      <input type=\"text\" ";
        // line 364
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
    </div>";
        // line 366
        $this->displayBlock("form_help", $context, $blocks);
        $___internal_parse_13_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 361
        echo twig_spaceless($___internal_parse_13_);
    }

    // line 370
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 371
        echo "    ";
        ob_start(function () { return ''; });
        // line 372
        echo "        <button type=\"submit\"
                class=\"btn btn-primary grid-search-button d-block\"
                title=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
                name=\"";
        // line 375
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
        >
          <i class=\"material-icons\">search</i>
          ";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      ";
        // line 380
        if (($context["show_reset_button"] ?? null)) {
            // line 381
            echo "          <div class=\"js-grid-reset-button\">
            <button type=\"reset\"
                    name=\"";
            // line 383
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                    data-url=\"";
            // line 385
            echo twig_escape_filter($this->env, ($context["reset_url"] ?? null), "html", null, true);
            echo "\"
                    data-redirect=\"";
            // line 386
            echo twig_escape_filter($this->env, ($context["redirect_url"] ?? null), "html", null, true);
            echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
            // line 389
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
            </button>
          </div>
      ";
        }
        // line 393
        echo "    ";
        $___internal_parse_14_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 371
        echo twig_spaceless($___internal_parse_14_);
    }

    // line 396
    public function block_switch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 397
        echo "    ";
        ob_start(function () { return ''; });
        // line 398
        echo "    <span class=\"ps-switch\">
        ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 400
            echo "            ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 400));
            // line 401
            echo "            <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\"
                ";
            // line 402
            $this->displayBlock("attributes", $context, $blocks);
            echo "
                name=\"";
            // line 403
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\"
                value=\"";
            // line 404
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 404), "html", null, true);
            echo "\"
                ";
            // line 405
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            // line 406
            echo "                ";
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            // line 407
            echo "                type=\"radio\"
                aria-label=\"";
            // line 408
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 408), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "\"
                >
            <label for=\"";
            // line 410
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 410), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "</label>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        echo "        <span class=\"slide-button\"></span>
    </span>
    ";
        $___internal_parse_15_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 397
        echo twig_spaceless($___internal_parse_15_);
    }

    // line 417
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 418
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 422
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\">";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 433
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 434
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 435
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 436
            echo twig_escape_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 436), "attr", [], "any", false, false, false, 436), "data", [], "any", false, false, false, 436)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 436)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["file_name"] ?? null) : null), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 437
            echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 437), "attr", [], "any", false, false, false, 437), "data", [], "any", false, false, false, 437)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 437)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["mime"] ?? null) : null), "html", null, true);
            echo "</td>
              </tr>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
    }

    // line 449
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 450
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 453
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 455
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 455)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 455), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 456
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 459
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 460
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 463
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 464
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 467
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 468
        echo "    ";
        // line 469
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 470
            echo "      ";
            if (($context["required"] ?? null)) {
                // line 471
                echo "        ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 471)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 471), "")) : ("")) . " required"))]);
                // line 472
                echo "      ";
            }
            // line 473
            echo "      ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 474
                echo "          ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 474)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 474), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 475
                echo "      ";
            }
            // line 476
            echo "      ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 477
                echo "          ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 478
                echo "      ";
            }
            // line 479
            echo "
      ";
            // line 480
            if ((array_key_exists("material_design", $context) || twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "material_design", [], "any", true, true, false, 480))) {
                // line 481
                echo "        <div class=\"md-checkbox md-checkbox-inline\">
          <label";
                // line 482
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 483
                echo ($context["widget"] ?? null);
                // line 484
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 485
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 486
                echo "</label>
        </div>
      ";
            } else {
                // line 489
                echo "      <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    if (($context["attrname"] === "class")) {
                        echo " form-check-label";
                    }
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                if ((twig_length_filter($this->env, ($context["label_attr"] ?? null)) <= 0)) {
                    echo " class=\"form-check-label\"";
                }
                echo ">";
                // line 490
                echo ($context["widget"] ?? null);
                // line 491
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 492
                echo "</label>
      ";
            }
            // line 494
            echo "    ";
        }
    }

    // line 499
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 500
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 502
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 503
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 504
        echo "</div>";
    }

    // line 507
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 508
        $context["rowClass"] = ("form-group " . twig_trim_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 508), "row_attr", [], "any", false, true, false, 508), "class", [], "any", true, true, false, 508)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 508), "row_attr", [], "any", false, true, false, 508), "class", [], "any", false, false, false, 508), "")) : (""))));
        // line 509
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["rowClass"] ?? null), "html", null, true);
        echo "\">";
        // line 510
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 511
        echo "</div>";
    }

    // line 514
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 515
        $context["force_error"] = true;
        // line 516
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 519
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 520
        $context["force_error"] = true;
        // line 521
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 524
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 525
        $context["force_error"] = true;
        // line 526
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 529
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 530
        $context["force_error"] = true;
        // line 531
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 534
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 535
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 536
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 537
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 538
        echo "</div>";
    }

    // line 541
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 542
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 544
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 545
        echo "</div>";
    }

    // line 550
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 551
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 552
            echo "<div class=\"alert alert-danger\">";
            // line 553
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 554
                echo "<ul class=\"alert-text\">";
                // line 555
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 556
                    echo "<li> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 556), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 556), "form_error"), "html", null, true);
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 559
                echo "</ul>";
            } else {
                // line 561
                echo "<div class=\"alert-text\">";
                // line 562
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 563
                    echo "<p> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 563), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 563), "form_error"), "html", null, true);
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 566
                echo "</div>";
            }
            // line 568
            echo "</div>";
        }
    }

    // line 575
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 576
        echo "  ";
        ob_start(function () { return ''; });
        // line 577
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
          <tr>
            <th class=\"checkbox\">
              <div class=\"md-checkbox\">
                <label>
                  <input
                    type=\"checkbox\"
                    class=\"js-choice-table-select-all\"
                    ";
        // line 587
        if (($context["isCheckSelectAll"] ?? null)) {
            // line 588
            echo "                      checked
                    ";
        }
        // line 590
        echo "                  >
                  <i class=\"md-checkbox-control\"></i>
                  ";
        // line 592
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 592), "displayTotalItems", [], "any", false, false, false, 592)) {
            echo " (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["form"] ?? null)), "html", null, true);
            echo ") ";
        }
        // line 593
        echo "                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 599
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 600
            echo "          <tr>
            <td>
              ";
            // line 602
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 606
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_16_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 576
        echo twig_spaceless($___internal_parse_16_);
    }

    // line 612
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 613
        echo "  ";
        ob_start(function () { return ''; });
        // line 614
        echo "    <div class=\"choice-table";
        if (($context["headers_fixed"] ?? null)) {
            echo "-headers-fixed";
        }
        echo " table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
        // line 618
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</th>
            ";
        // line 619
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 620
            echo "              <th class=\"text-center\">
                ";
            // line 621
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 621), "multiple", [], "any", false, false, false, 621) && !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 621), "name", [], "any", false, false, false, 621), ($context["headers_to_disable"] ?? null)))) {
                // line 622
                echo "                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"";
                // line 624
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 624) + 1), "html", null, true);
                echo "\"
                     data-column-checked=\"false\"
                  >
                    ";
                // line 627
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 627), "label", [], "any", false, false, false, 627), "html", null, true);
                echo "
                  </a>
                ";
            } else {
                // line 630
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 630), "label", [], "any", false, false, false, 630), "html", null, true);
                echo "
                ";
            }
            // line 632
            echo "              </th>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 634
        echo "          </tr>
        </thead>
        <tbody>
        ";
        // line 637
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 638
            echo "          <tr>
            <td>
              ";
            // line 640
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 642
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 643
                echo "              <td class=\"text-center\">
                ";
                // line 644
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 644), $context["child_choice_name"], [], "array", true, true, false, 644)) {
                    // line 645
                    echo "                  ";
                    $context["entry_index"] = (($__internal_compile_4 = (($__internal_compile_5 = ($context["child_choice_entry_index_mapping"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["choice_value"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["child_choice_name"]] ?? null) : null);
                    // line 646
                    echo "
                  ";
                    // line 647
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 647), "multiple", [], "any", false, false, false, 647)) {
                        // line 648
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_6 = $context["child_choice"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["entry_index"] ?? null)] ?? null) : null), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 650
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_7 = $context["child_choice"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["entry_index"] ?? null)] ?? null) : null), 'widget');
                        echo "
                  ";
                    }
                    // line 652
                    echo "                ";
                } else {
                    // line 653
                    echo "                  --
                ";
                }
                // line 655
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 657
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 659
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_17_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 613
        echo twig_spaceless($___internal_parse_17_);
    }

    // line 665
    public function block_translatable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 666
        $context["formClass"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 666), "attr", [], "any", false, true, false, 666), "class", [], "any", true, true, false, 666)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 666), "attr", [], "any", false, true, false, 666), "class", [], "any", false, false, false, 666), "")) : ("")) . twig_trim_filter(" input-group locale-input-group js-locale-input-group d-flex"));
        // line 667
        echo "  <div class=\"";
        echo twig_escape_filter($this->env, ($context["formClass"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 669
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 669), "attr", [], "any", false, true, false, 669), "class", [], "any", true, true, false, 669)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 669), "attr", [], "any", false, true, false, 669), "class", [], "any", false, false, false, 669), "")) : ("")) . " js-locale-input");
            // line 670
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 670), "label", [], "any", false, false, false, 670));
            // line 671
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 671) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 671), "name", [], "any", false, false, false, 671))) {
                // line 672
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 673
                echo "      ";
            }
            // line 674
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
        ";
            // line 675
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 678
        echo "    ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 679
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                ";
            // line 683
            if (array_key_exists("change_form_language_url", $context)) {
                // line 684
                echo "                  data-change-language-url=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 684), "change_form_language_url", [], "any", false, false, false, 684), "html", null, true);
                echo "\"
                ";
            }
            // line 686
            echo "                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 688
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 688), "id", [], "any", false, false, false, 688), "html", null, true);
            echo "_dropdown\"
        >
          ";
            // line 690
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 690), "default_locale", [], "any", false, false, false, 690), "iso_code", [], "any", false, false, false, 690), "html", null, true);
            echo "
        </button>
        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 692
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 692), "id", [], "any", false, false, false, 692), "html", null, true);
            echo "_dropdown\">
          ";
            // line 693
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 694
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 694), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 694), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 696
            echo "        </div>
      </div>
    ";
        }
        // line 699
        echo "  </div>";
    }

    // line 702
    public function block_birthday_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 703
        echo "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 704
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 706
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 706)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 706), "")) : ("")) . " form-inline"))]);
            // line 707
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 708
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 710
            echo "
    ";
            // line 711
            $context["yearWidget"] = (("<div class=\"col pl-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 711), 'widget')) . "</div>");
            // line 712
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 712), 'widget')) . "</div>");
            // line 713
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 713), 'widget')) . "</div>");
            // line 715
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 716
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 717
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 718
($context["dayWidget"] ?? null)]);
            // line 721
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 722
                echo "</div>";
            }
        }
    }

    // line 727
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 728
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 730
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 734
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 735
($context["attr"] ?? null), "class", [], "any", true, true, false, 735)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 735), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 740
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 740) && twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 740))) {
            // line 741
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (twig_get_attribute($this->env, $this->source,             // line 742
($context["attr"] ?? null), "class", [], "any", false, false, false, 742) . " disabled")]);
            // line 744
            echo "    ";
        }
        // line 745
        echo "
    ";
        // line 746
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

    <label class=\"custom-file-label\" for=\"";
        // line 748
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 748), "id", [], "any", false, false, false, 748), "html", null, true);
        echo "\">
      ";
        // line 749
        $context["attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 749), "attr", [], "any", false, false, false, 749);
        // line 750
        echo "      ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 750)) ? (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", false, false, false, 750)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>
";
    }

    // line 755
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 756
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 756), "attr", [], "any", false, false, false, 756), "is_allowed_to_display", [], "any", false, false, false, 756)) {
            // line 757
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 759
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 760
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 762
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"
          ";
            // line 763
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 764
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
    }

    // line 772
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 773
        echo "  <div class=\"input-group\">";
        // line 774
        $this->displayBlock("form_widget", $context, $blocks);
        // line 775
        echo "<span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 778
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 779
        echo twig_escape_filter($this->env, ($context["generated_value_length"] ?? null), "html", null, true);
        echo "\"
      >
        ";
        // line 781
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
";
    }

    // line 787
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 788
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 789
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 793
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 794
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 796
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 798
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 800
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 803
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 804
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 806
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 808
        echo "
    </em>
  </small>
";
    }

    // line 813
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 814
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_8 = ($context["form"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 815
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_9 = ($context["form"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 818
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 819
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_10 = ($context["form"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 820
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_11 = ($context["form"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 823
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 824
        echo "  ";
        if (($context["help"] ?? null)) {
            // line 825
            echo "    <small class=\"form-text\">";
            echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            echo "</small>
  ";
        }
    }

    // line 829
    public function block_form_hint($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 830
        echo "  ";
        if (($context["hint"] ?? null)) {
            // line 831
            echo "    <div class=\"hint-box\">
      <div class=\"alert alert-info\">";
            // line 832
            echo ($context["hint"] ?? null);
            echo "</div>
    </div>
  ";
        }
    }

    // line 837
    public function block_custom_content_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 838
        echo "  ";
        $this->loadTemplate(($context["template"] ?? null), "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 838)->display(twig_array_merge($context, ($context["data"] ?? null)));
    }

    // line 841
    public function block_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 842
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 842), "id", [], "any", false, false, false, 842)], "Admin.Global")]);
        // line 843
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 844
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 846
        echo "
  ";
        // line 847
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

  ";
        // line 849
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 850
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 851
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 852
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 854
            echo "    </datalist>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  2486 => 854,  2477 => 852,  2473 => 851,  2468 => 850,  2466 => 849,  2461 => 847,  2458 => 846,  2455 => 844,  2453 => 843,  2451 => 842,  2447 => 841,  2442 => 838,  2438 => 837,  2430 => 832,  2427 => 831,  2424 => 830,  2420 => 829,  2412 => 825,  2409 => 824,  2405 => 823,  2399 => 820,  2394 => 819,  2390 => 818,  2384 => 815,  2379 => 814,  2375 => 813,  2368 => 808,  2366 => 806,  2365 => 804,  2364 => 803,  2358 => 800,  2354 => 798,  2351 => 796,  2348 => 794,  2346 => 793,  2344 => 789,  2342 => 788,  2338 => 787,  2329 => 781,  2324 => 779,  2320 => 778,  2315 => 775,  2313 => 774,  2311 => 773,  2307 => 772,  2296 => 764,  2292 => 763,  2288 => 762,  2284 => 760,  2282 => 759,  2278 => 757,  2275 => 756,  2271 => 755,  2262 => 750,  2260 => 749,  2256 => 748,  2251 => 746,  2248 => 745,  2245 => 744,  2243 => 742,  2241 => 741,  2239 => 740,  2237 => 735,  2236 => 734,  2229 => 730,  2225 => 728,  2221 => 727,  2215 => 722,  2213 => 721,  2211 => 718,  2210 => 717,  2209 => 716,  2208 => 715,  2205 => 713,  2202 => 712,  2200 => 711,  2197 => 710,  2192 => 708,  2190 => 707,  2188 => 706,  2185 => 704,  2182 => 703,  2178 => 702,  2174 => 699,  2169 => 696,  2158 => 694,  2154 => 693,  2150 => 692,  2145 => 690,  2140 => 688,  2136 => 686,  2130 => 684,  2128 => 683,  2122 => 679,  2119 => 678,  2110 => 675,  2105 => 674,  2102 => 673,  2099 => 672,  2096 => 671,  2093 => 670,  2090 => 669,  2086 => 668,  2081 => 667,  2079 => 666,  2075 => 665,  2071 => 613,  2065 => 659,  2058 => 657,  2051 => 655,  2047 => 653,  2044 => 652,  2038 => 650,  2032 => 648,  2030 => 647,  2027 => 646,  2024 => 645,  2022 => 644,  2019 => 643,  2015 => 642,  2010 => 640,  2006 => 638,  2002 => 637,  1997 => 634,  1982 => 632,  1976 => 630,  1970 => 627,  1964 => 624,  1960 => 622,  1958 => 621,  1955 => 620,  1938 => 619,  1934 => 618,  1924 => 614,  1921 => 613,  1917 => 612,  1913 => 576,  1907 => 606,  1897 => 602,  1893 => 600,  1889 => 599,  1881 => 593,  1873 => 592,  1869 => 590,  1865 => 588,  1863 => 587,  1851 => 577,  1848 => 576,  1844 => 575,  1839 => 568,  1836 => 566,  1827 => 563,  1823 => 562,  1821 => 561,  1818 => 559,  1809 => 556,  1805 => 555,  1803 => 554,  1801 => 553,  1799 => 552,  1797 => 551,  1793 => 550,  1789 => 545,  1787 => 544,  1785 => 543,  1779 => 542,  1775 => 541,  1771 => 538,  1769 => 537,  1767 => 536,  1761 => 535,  1757 => 534,  1753 => 531,  1751 => 530,  1747 => 529,  1743 => 526,  1741 => 525,  1737 => 524,  1733 => 521,  1731 => 520,  1727 => 519,  1723 => 516,  1721 => 515,  1717 => 514,  1713 => 511,  1711 => 510,  1707 => 509,  1705 => 508,  1701 => 507,  1697 => 504,  1695 => 503,  1693 => 502,  1691 => 501,  1685 => 500,  1681 => 499,  1676 => 494,  1672 => 492,  1670 => 491,  1668 => 490,  1647 => 489,  1642 => 486,  1640 => 485,  1638 => 484,  1636 => 483,  1622 => 482,  1619 => 481,  1617 => 480,  1614 => 479,  1611 => 478,  1608 => 477,  1605 => 476,  1602 => 475,  1599 => 474,  1596 => 473,  1593 => 472,  1590 => 471,  1587 => 470,  1584 => 469,  1582 => 468,  1578 => 467,  1574 => 464,  1570 => 463,  1566 => 460,  1562 => 459,  1558 => 456,  1556 => 455,  1552 => 453,  1548 => 450,  1544 => 449,  1535 => 440,  1518 => 437,  1514 => 436,  1510 => 435,  1507 => 434,  1490 => 433,  1484 => 429,  1480 => 428,  1476 => 427,  1468 => 422,  1462 => 419,  1457 => 418,  1453 => 417,  1449 => 397,  1444 => 412,  1426 => 410,  1421 => 408,  1418 => 407,  1413 => 406,  1409 => 405,  1405 => 404,  1401 => 403,  1397 => 402,  1392 => 401,  1389 => 400,  1372 => 399,  1369 => 398,  1366 => 397,  1362 => 396,  1358 => 371,  1355 => 393,  1348 => 389,  1342 => 386,  1338 => 385,  1333 => 383,  1329 => 381,  1327 => 380,  1322 => 378,  1316 => 375,  1312 => 374,  1308 => 372,  1305 => 371,  1301 => 370,  1297 => 361,  1294 => 366,  1284 => 364,  1281 => 363,  1278 => 362,  1275 => 361,  1271 => 360,  1267 => 352,  1262 => 356,  1258 => 355,  1254 => 354,  1249 => 353,  1246 => 352,  1242 => 351,  1238 => 337,  1219 => 341,  1216 => 340,  1214 => 339,  1211 => 338,  1208 => 337,  1204 => 336,  1200 => 333,  1195 => 330,  1186 => 327,  1181 => 325,  1178 => 324,  1174 => 323,  1170 => 322,  1164 => 319,  1159 => 317,  1151 => 311,  1149 => 310,  1146 => 309,  1137 => 306,  1133 => 305,  1130 => 304,  1127 => 303,  1124 => 302,  1122 => 301,  1119 => 300,  1116 => 299,  1113 => 298,  1109 => 297,  1104 => 295,  1100 => 294,  1096 => 291,  1091 => 288,  1080 => 286,  1076 => 285,  1072 => 284,  1066 => 281,  1061 => 279,  1053 => 273,  1051 => 272,  1048 => 271,  1040 => 269,  1037 => 268,  1035 => 267,  1032 => 266,  1029 => 265,  1026 => 264,  1024 => 263,  1021 => 262,  1018 => 261,  1015 => 260,  1011 => 259,  1006 => 257,  1002 => 256,  998 => 253,  995 => 251,  993 => 250,  989 => 249,  983 => 245,  968 => 243,  966 => 242,  964 => 241,  960 => 240,  939 => 239,  922 => 238,  918 => 236,  914 => 234,  904 => 230,  894 => 229,  891 => 228,  887 => 227,  884 => 226,  882 => 225,  878 => 224,  873 => 223,  869 => 222,  865 => 219,  861 => 217,  844 => 215,  841 => 214,  824 => 213,  817 => 212,  814 => 211,  810 => 208,  804 => 206,  802 => 205,  798 => 204,  784 => 203,  780 => 201,  776 => 198,  770 => 196,  767 => 195,  762 => 193,  757 => 191,  755 => 190,  745 => 189,  741 => 187,  738 => 186,  736 => 185,  729 => 184,  725 => 183,  720 => 179,  703 => 177,  686 => 176,  683 => 175,  677 => 173,  673 => 172,  668 => 168,  666 => 167,  664 => 166,  661 => 164,  659 => 163,  657 => 162,  653 => 161,  648 => 157,  646 => 156,  644 => 155,  641 => 153,  639 => 152,  637 => 151,  633 => 150,  628 => 146,  622 => 143,  621 => 142,  620 => 141,  616 => 140,  612 => 139,  609 => 137,  603 => 134,  602 => 133,  601 => 132,  597 => 131,  595 => 130,  593 => 129,  589 => 128,  585 => 125,  583 => 124,  581 => 123,  577 => 122,  571 => 117,  568 => 116,  560 => 115,  555 => 113,  553 => 112,  551 => 111,  548 => 109,  546 => 108,  542 => 107,  536 => 102,  534 => 101,  532 => 99,  531 => 98,  530 => 97,  529 => 96,  524 => 94,  522 => 93,  520 => 92,  517 => 90,  515 => 89,  511 => 88,  506 => 84,  504 => 83,  502 => 82,  500 => 81,  498 => 80,  494 => 79,  492 => 78,  489 => 76,  487 => 75,  483 => 74,  476 => 68,  474 => 67,  472 => 66,  468 => 65,  464 => 62,  458 => 59,  455 => 58,  453 => 57,  451 => 56,  445 => 53,  442 => 52,  439 => 51,  437 => 50,  434 => 49,  430 => 48,  426 => 45,  424 => 44,  420 => 43,  416 => 40,  414 => 39,  410 => 38,  406 => 35,  403 => 33,  401 => 32,  397 => 31,  393 => 841,  390 => 840,  388 => 837,  385 => 836,  383 => 829,  380 => 828,  378 => 823,  375 => 822,  373 => 818,  370 => 817,  368 => 813,  365 => 812,  363 => 787,  360 => 786,  358 => 772,  355 => 771,  353 => 755,  350 => 754,  348 => 727,  345 => 726,  343 => 702,  340 => 701,  338 => 665,  335 => 664,  333 => 612,  330 => 611,  328 => 575,  325 => 574,  321 => 571,  319 => 550,  316 => 549,  313 => 547,  311 => 541,  308 => 540,  306 => 534,  303 => 533,  301 => 529,  298 => 528,  296 => 524,  293 => 523,  291 => 519,  288 => 518,  286 => 514,  283 => 513,  281 => 507,  278 => 506,  276 => 499,  273 => 498,  270 => 496,  268 => 467,  265 => 466,  263 => 463,  260 => 462,  258 => 459,  255 => 458,  253 => 453,  250 => 452,  248 => 449,  245 => 448,  242 => 446,  240 => 417,  237 => 416,  235 => 396,  232 => 395,  230 => 370,  227 => 369,  225 => 360,  222 => 359,  220 => 351,  217 => 350,  215 => 336,  212 => 335,  210 => 294,  207 => 293,  205 => 256,  202 => 255,  200 => 249,  197 => 248,  195 => 222,  192 => 221,  190 => 183,  187 => 182,  185 => 172,  182 => 171,  180 => 161,  177 => 160,  175 => 150,  172 => 149,  170 => 128,  167 => 127,  165 => 122,  162 => 121,  160 => 107,  157 => 106,  155 => 88,  152 => 87,  150 => 74,  147 => 73,  145 => 65,  142 => 64,  140 => 48,  137 => 47,  135 => 43,  132 => 42,  130 => 38,  127 => 37,  125 => 31,  122 => 30,  119 => 28,  44 => 27,  37 => 26,  30 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig");
    }
}
