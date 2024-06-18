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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_0727d01b9e84c22a9f2b0be3031763a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 45
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 45);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 45, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["radio_widget"])) {
            throw new RuntimeError('Block "radio_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_radio_widget"] = $_trait_0_blocks["radio_widget"]; unset($_trait_0_blocks["radio_widget"]);

        if (!isset($_trait_0_blocks["checkbox_widget"])) {
            throw new RuntimeError('Block "checkbox_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_checkbox_widget"] = $_trait_0_blocks["checkbox_widget"]; unset($_trait_0_blocks["checkbox_widget"]);

        // line 48
        $_trait_1 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 48);
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 48, $this->source);
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        // line 49
        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 49);
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig".'" cannot be used as a trait.', 49, $this->source);
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        // line 50
        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 50);
        if (!$_trait_3->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 50, $this->source);
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        // line 51
        $_trait_4 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 51);
        if (!$_trait_4->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig".'" cannot be used as a trait.', 51, $this->source);
        }
        $_trait_4_blocks = $_trait_4->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'password_widget' => [$this, 'block_password_widget'],
                'form_row' => [$this, 'block_form_row'],
                'form_modify_all_shops' => [$this, 'block_form_modify_all_shops'],
                'form_disabling_switch' => [$this, 'block_form_disabling_switch'],
                'widget_type_class' => [$this, 'block_widget_type_class'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'url_widget' => [$this, 'block_url_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'email_widget' => [$this, 'block_email_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'icon_button_widget' => [$this, 'block_icon_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'row_attributes' => [$this, 'block_row_attributes'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_errors_field' => [$this, 'block_form_errors_field'],
                'form_errors_other' => [$this, 'block_form_errors_other'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_fields_with_tabs' => [$this, 'block_translatable_fields_with_tabs'],
                'translatable_fields_with_dropdown' => [$this, 'block_translatable_fields_with_dropdown'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'form_help' => [$this, 'block_form_help'],
                'form_prepend_external_link' => [$this, 'block_form_prepend_external_link'],
                'form_append_external_link' => [$this, 'block_form_append_external_link'],
                'form_external_link' => [$this, 'block_form_external_link'],
                'form_external_link_attributes' => [$this, 'block_form_external_link_attributes'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'form_prepend_alert' => [$this, 'block_form_prepend_alert'],
                'form_append_alert' => [$this, 'block_form_append_alert'],
                'form_alert' => [$this, 'block_form_alert'],
                'unavailable_widget' => [$this, 'block_unavailable_widget'],
                'text_preview_widget' => [$this, 'block_text_preview_widget'],
                'link_preview_widget' => [$this, 'block_link_preview_widget'],
                'image_preview_widget' => [$this, 'block_image_preview_widget'],
                'delta_quantity_widget' => [$this, 'block_delta_quantity_widget'],
                'delta_quantity_quantity_widget' => [$this, 'block_delta_quantity_quantity_widget'],
                'delta_quantity_delta_row' => [$this, 'block_delta_quantity_delta_row'],
                'delta_quantity_delta_widget' => [$this, 'block_delta_quantity_delta_widget'],
                'submittable_input_widget' => [$this, 'block_submittable_input_widget'],
                'submittable_input_button_widget' => [$this, 'block_submittable_input_button_widget'],
                'submittable_delta_quantity_delta_widget' => [$this, 'block_submittable_delta_quantity_delta_widget'],
                'navigation_tab_widget' => [$this, 'block_navigation_tab_widget'],
                'accordion_widget' => [$this, 'block_accordion_widget'],
                'button_collection_widget' => [$this, 'block_button_collection_widget'],
                'avatar_url_row' => [$this, 'block_avatar_url_row'],
                'change_password_row' => [$this, 'block_change_password_row'],
                'price_reduction_widget' => [$this, 'block_price_reduction_widget'],
                'image_with_preview_widget' => [$this, 'block_image_with_preview_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 34
        echo "
";
        // line 46
        echo "
";
        // line 52
        echo "
";
        // line 54
        echo "
";
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('form_start', $context, $blocks);
        // line 67
        $this->displayBlock('form_widget', $context, $blocks);
        // line 75
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 80
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 90
        $this->displayBlock('password_widget', $context, $blocks);
        // line 97
        echo "
";
        // line 98
        $this->displayBlock('form_row', $context, $blocks);
        // line 116
        echo "
";
        // line 121
        $this->displayBlock('form_modify_all_shops', $context, $blocks);
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('form_disabling_switch', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('widget_type_class', $context, $blocks);
        // line 156
        echo "
";
        // line 159
        $this->displayBlock('form_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('money_widget', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 254
        $this->displayBlock('url_widget', $context, $blocks);
        // line 260
        $this->displayBlock('date_widget', $context, $blocks);
        // line 278
        echo "
";
        // line 279
        $this->displayBlock('time_widget', $context, $blocks);
        // line 294
        $this->displayBlock('email_widget', $context, $blocks);
        // line 300
        $this->displayBlock('button_widget', $context, $blocks);
        // line 304
        echo "
";
        // line 305
        $this->displayBlock('icon_button_widget', $context, $blocks);
        // line 323
        echo "
";
        // line 324
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 328
        echo "
";
        // line 329
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 333
        echo "
";
        // line 334
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 357
        echo "
";
        // line 358
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 368
        echo "
";
        // line 369
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 407
        echo "
";
        // line 408
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 433
        echo "
";
        // line 434
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 440
        echo "
";
        // line 441
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 477
        echo "
";
        // line 478
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 519
        echo "
";
        // line 520
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 534
        echo "
";
        // line 535
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 551
        echo "
";
        // line 552
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 577
        echo "
";
        // line 578
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 602
        $this->displayBlock('row_attributes', $context, $blocks);
        // line 610
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 639
        echo "
";
        // line 641
        echo "
";
        // line 642
        $this->displayBlock('choice_label', $context, $blocks);
        // line 647
        echo "
";
        // line 648
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 651
        echo "
";
        // line 652
        $this->displayBlock('radio_label', $context, $blocks);
        // line 655
        echo "
";
        // line 656
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 688
        echo "
";
        // line 689
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 703
        echo "
";
        // line 704
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 711
        echo "
";
        // line 713
        echo "
";
        // line 714
        $this->displayBlock('form_errors', $context, $blocks);
        // line 721
        echo "
";
        // line 722
        $this->displayBlock('form_errors_field', $context, $blocks);
        // line 780
        echo "
";
        // line 781
        $this->displayBlock('form_errors_other', $context, $blocks);
        // line 796
        echo "
";
        // line 798
        echo "
";
        // line 799
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 835
        echo "
";
        // line 836
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 888
        echo "
";
        // line 890
        $this->displayBlock('translatable_fields_with_tabs', $context, $blocks);
        // line 913
        echo "
";
        // line 914
        $this->displayBlock('translatable_fields_with_dropdown', $context, $blocks);
        // line 950
        echo "
";
        // line 951
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 959
        echo "
";
        // line 960
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 984
        echo "
";
        // line 985
        $this->displayBlock('file_widget', $context, $blocks);
        // line 1017
        echo "
";
        // line 1018
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 1034
        echo "
";
        // line 1035
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 1054
        echo "
";
        // line 1055
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 1080
        echo "
";
        // line 1081
        $this->displayBlock('text_with_length_counter_widget', $context, $blocks);
        // line 1109
        echo "
";
        // line 1110
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 1114
        echo "
";
        // line 1115
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 1120
        $this->displayBlock('number_widget', $context, $blocks);
        // line 1130
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 1140
        $this->displayBlock('form_unit', $context, $blocks);
        // line 1147
        echo "
";
        // line 1148
        $this->displayBlock('form_unit_prepend', $context, $blocks);
        // line 1155
        echo "
";
        // line 1156
        $this->displayBlock('form_help', $context, $blocks);
        // line 1165
        echo "
";
        // line 1166
        $this->displayBlock('form_prepend_external_link', $context, $blocks);
        // line 1171
        echo "
";
        // line 1172
        $this->displayBlock('form_append_external_link', $context, $blocks);
        // line 1177
        echo "
";
        // line 1178
        $this->displayBlock('form_external_link', $context, $blocks);
        // line 1196
        $this->displayBlock('form_external_link_attributes', $context, $blocks);
        // line 1210
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 1213
        echo "
";
        // line 1214
        $this->displayBlock('text_widget', $context, $blocks);
        // line 1231
        $this->displayBlock('form_prepend_alert', $context, $blocks);
        // line 1237
        $this->displayBlock('form_append_alert', $context, $blocks);
        // line 1243
        $this->displayBlock('form_alert', $context, $blocks);
        // line 1284
        $this->displayBlock('unavailable_widget', $context, $blocks);
        // line 1291
        echo "
";
        // line 1292
        $this->displayBlock('text_preview_widget', $context, $blocks);
        // line 1321
        echo "
";
        // line 1322
        $this->displayBlock('link_preview_widget', $context, $blocks);
        // line 1329
        echo "
";
        // line 1330
        $this->displayBlock('image_preview_widget', $context, $blocks);
        // line 1339
        echo "
";
        // line 1340
        $this->displayBlock('delta_quantity_widget', $context, $blocks);
        // line 1353
        echo "
";
        // line 1354
        $this->displayBlock('delta_quantity_quantity_widget', $context, $blocks);
        // line 1366
        echo "
";
        // line 1367
        $this->displayBlock('delta_quantity_delta_row', $context, $blocks);
        // line 1383
        echo "
";
        // line 1384
        $this->displayBlock('delta_quantity_delta_widget', $context, $blocks);
        // line 1389
        echo "
";
        // line 1390
        $this->displayBlock('submittable_input_widget', $context, $blocks);
        // line 1403
        echo "
";
        // line 1404
        $this->displayBlock('submittable_input_button_widget', $context, $blocks);
        // line 1409
        echo "
";
        // line 1410
        $this->displayBlock('submittable_delta_quantity_delta_widget', $context, $blocks);
        // line 1424
        $this->displayBlock('navigation_tab_widget', $context, $blocks);
        // line 1481
        $this->displayBlock('accordion_widget', $context, $blocks);
        // line 1527
        $this->displayBlock('button_collection_widget', $context, $blocks);
        // line 1573
        echo "
";
        // line 1574
        $this->displayBlock('avatar_url_row', $context, $blocks);
        // line 1584
        echo "
";
        // line 1585
        $this->displayBlock('change_password_row', $context, $blocks);
        // line 1625
        $this->displayBlock('price_reduction_widget', $context, $blocks);
        // line 1639
        $this->displayBlock('image_with_preview_widget', $context, $blocks);
    }

    // line 57
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-alerts-success" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 58), "alerts", [], "any", false, true, false, 58), "success", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 58), "alerts", [], "any", false, true, false, 58), "success", [], "any", false, false, false, 58), [])) : ([])))]);
        // line 59
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-alerts-info" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "info", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "info", [], "any", false, false, false, 59), [])) : ([])))]);
        // line 60
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-alerts-warning" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "warning", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "warning", [], "any", false, false, false, 60), [])) : ([])))]);
        // line 61
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-alerts-error" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "error", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "error", [], "any", false, false, false, 61), [])) : ([])))]);
        // line 62
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-form-submitted" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 62), "submitted", [], "any", false, false, false, 62)) ? (1) : (0))]);
        // line 63
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-form-valid" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 63), "valid", [], "any", false, false, false, 63)) ? (1) : (0))]);
        // line 64
        echo "  ";
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "
";
    }

    // line 67
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        if (array_key_exists("columns_number", $context)) {
            // line 69
            echo "    ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 69), "")) : ("")) . " form-columns-") . ($context["columns_number"] ?? null)))]);
            // line 70
            echo "  ";
        }
        // line 71
        echo "  ";
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 72
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 75
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 77
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 77)->display(twig_array_merge($context, ["attr" => ($context["attr"] ?? null)]));
    }

    // line 80
    public function block_ip_address_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "  <div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, ($context["currentIp"] ?? null), "html", null, true);
        echo "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
  ";
        // line 87
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 90
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "password")) : ("password"));
        // line 92
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 93
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 98
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "<div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 99)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 99), "html", null, true);
        }
        echo "\">";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 101
        $this->displayBlock("form_prepend_alert", $context, $blocks);
        // line 102
        $this->displayBlock("form_prepend_external_link", $context, $blocks);
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 106
        $this->displayBlock("form_modify_all_shops", $context, $blocks);
        // line 108
        $this->displayBlock("form_append_alert", $context, $blocks);
        // line 109
        $this->displayBlock("form_append_external_link", $context, $blocks);
        // line 110
        echo "</div>

  ";
        // line 112
        if (($context["column_breaker"] ?? null)) {
            // line 113
            echo "  <div class=\"form-group form-column-breaker\"></div>
  ";
        }
    }

    // line 121
    public function block_form_modify_all_shops($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "  ";
        $context["overrideCheckboxName"] = (($context["modify_all_shops_prefix"] ?? null) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122));
        // line 123
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 123), ($context["overrideCheckboxName"] ?? null), [], "any", true, true, false, 123)) {
            // line 124
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 124), ($context["overrideCheckboxName"] ?? null), [], "any", false, false, false, 124), 'errors');
            echo "
    ";
            // line 125
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 125), ($context["overrideCheckboxName"] ?? null), [], "any", false, false, false, 125), 'widget');
            echo "
  ";
        }
    }

    // line 129
    public function block_form_disabling_switch($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "  ";
        $context["disablingSwitchName"] = (($context["disabling_switch_prefix"] ?? null) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 130), "name", [], "any", false, false, false, 130));
        // line 131
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 131), ($context["disablingSwitchName"] ?? null), [], "any", true, true, false, 131)) {
            // line 132
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 132), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 132), 'errors');
            echo "
    ";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 133), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 133), 'widget');
            echo "
  ";
        }
    }

    // line 137
    public function block_widget_type_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        if (( !((array_key_exists("compound", $context)) ? (_twig_default_filter(($context["compound"] ?? null), false)) : (false)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 138), "block_prefixes", [], "any", false, false, false, 138)) > 2))) {
            // line 139
            echo " ";
            ob_start(function () { return ''; });
            // line 140
            echo "
    ";
            // line 141
            $context["index"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 141), "block_prefixes", [], "any", false, false, false, 141)) - 2);
            // line 142
            echo "    ";
            $context["widgetType"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 142), "block_prefixes", [], "any", false, false, false, 142)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["index"] ?? null)] ?? null) : null);
            // line 143
            echo "    ";
            if ((($context["widgetType"] ?? null) == "choice")) {
                // line 144
                echo "      ";
                if ( !($context["expanded"] ?? null)) {
                    // line 145
                    echo "        ";
                    $context["widgetType"] = "select";
                    // line 146
                    echo "      ";
                } elseif (($context["multiple"] ?? null)) {
                    // line 147
                    echo "        ";
                    $context["widgetType"] = "checboxes";
                    // line 148
                    echo "      ";
                } else {
                    // line 149
                    echo "        ";
                    $context["widgetType"] = "radio";
                    // line 150
                    echo "      ";
                }
                // line 151
                echo "    ";
            }
            // line 152
            echo "    ";
            echo twig_escape_filter($this->env, ($context["widgetType"] ?? null), "html", null, true);
            echo "-widget
";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 139
            echo twig_spaceless($___internal_parse_0_);
        }
    }

    // line 159
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        if ( !(($context["label"] ?? null) === false)) {
            // line 161
            if ( !($context["compound"] ?? null)) {
                // line 162
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 164
            echo "    ";
            if (($context["required"] ?? null)) {
                // line 165
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 165)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 165), "")) : ("")) . " required"))]);
            }
            // line 167
            echo "    ";
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 168
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 169
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 170
($context["name"] ?? null), "%id%" =>                     // line 171
($context["id"] ?? null)]);
                } else {
                    // line 174
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 178
            $context["labelTag"] = ((array_key_exists("label_tag_name", $context)) ? (_twig_default_filter(($context["label_tag_name"] ?? null), "label")) : ("label"));
            // line 179
            echo "    <";
            echo twig_escape_filter($this->env, ($context["labelTag"] ?? null), "html", null, true);
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
            echo ">
    ";
            // line 180
            if (($context["required"] ?? null)) {
                // line 181
                echo "      <span class=\"text-danger\">*</span>
    ";
            }
            // line 183
            echo "    ";
            echo (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)));
            echo "
    ";
            // line 184
            if (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip", [], "array", true, true, false, 184)) {
                // line 185
                echo "      ";
                $context["placement"] = ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true, false, 185)) ? ((($__internal_compile_1 = ($context["label_attr"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["tooltip_placement"] ?? null) : null)) : ("top"));
                // line 186
                echo "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? null), "html", null, true);
                echo "\"
         title=\"";
                // line 187
                echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["label_attr"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["tooltip"] ?? null) : null), "html", null, true);
                echo "\"></i>
    ";
            }
            // line 189
            echo "
    ";
            // line 190
            if ((array_key_exists("label_help_box", $context) || twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover", [], "array", true, true, false, 190))) {
                // line 191
                echo "      ";
                $context["content"] = ((array_key_exists("label_help_box", $context)) ? (($context["label_help_box"] ?? null)) : ((($__internal_compile_3 = ($context["label_attr"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["popover"] ?? null) : null)));
                // line 192
                echo "      ";
                $context["placement"] = ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover_placement", [], "array", true, true, false, 192)) ? ((($__internal_compile_4 = ($context["label_attr"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["popover_placement"] ?? null) : null)) : ("top"));
                // line 193
                echo "      ";
                $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 193)->display(twig_array_merge($context, ["placement" => ($context["placement"] ?? null), "content" => ($context["content"] ?? null)]));
                // line 194
                echo "    ";
            }
            // line 195
            $this->displayBlock("form_disabling_switch", $context, $blocks);
            // line 196
            echo "</";
            echo twig_escape_filter($this->env, ($context["labelTag"] ?? null), "html", null, true);
            echo ">";
        }
        // line 198
        if (array_key_exists("label_subtitle", $context)) {
            // line 199
            echo "    <p class=\"subtitle\">";
            echo ($context["label_subtitle"] ?? null);
            echo "</p>
  ";
        }
    }

    // line 205
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 206
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 206)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 206), "")) : ("")) . " form-control"))]);
        // line 207
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        // line 208
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 208)->display(twig_array_merge($context, ["attr" => ($context["attr"] ?? null)]));
        // line 209
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 212
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 213
        echo "<div class=\"input-group money-type\">
    ";
        // line 214
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 215
        echo "    ";
        if ( !($context["prepend"] ?? null)) {
            // line 216
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 217
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 220
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 221
        if (($context["prepend"] ?? null)) {
            // line 222
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 223
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 226
        echo "  </div>

  ";
        // line 228
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 231
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 232
        echo "<div class=\"input-group\">";
        // line 233
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 234
        echo "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
    }

    // line 240
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 241
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 242
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 244
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 244)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 244), "")) : ("")) . " form-inline"))]);
            // line 245
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 246
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 246), 'errors');
            // line 247
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 247), 'errors');
            // line 248
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 248), 'widget', ["datetime" => true]);
            // line 249
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 249), 'widget', ["datetime" => true]);
            // line 250
            echo "</div>";
        }
    }

    // line 254
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 255
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 256
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 257
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 260
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 261
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 262
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 264
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 264)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 264), "")) : ("")) . " form-inline"))]);
            // line 265
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 266
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 268
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 269
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 269), 'widget'), "{{ month }}" =>             // line 270
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 270), 'widget'), "{{ day }}" =>             // line 271
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 271), 'widget')]);
            // line 273
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 274
                echo "</div>";
            }
        }
    }

    // line 279
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 280
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 281
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 283
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 283)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 283), "")) : ("")) . " form-inline"))]);
            // line 284
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 285
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 287
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 287), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 287), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 287), 'widget');
            }
            // line 288
            echo "    ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 289
                echo "</div>";
            }
        }
    }

    // line 294
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 295
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 296
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 297
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 300
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 301
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 301)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 301), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 302
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 305
    public function block_icon_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 306
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 306)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 306), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 307
        echo "  ";
        if ((($context["button_type"] ?? null) == "link")) {
            // line 308
            echo "    ";
            $context["buttonTag"] = "a";
            // line 309
            echo "    ";
            // line 310
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 310)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 310), false)) : (false))) {
                // line 311
                echo "      ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 311) . " disabled"))]);
                // line 312
                echo "    ";
            }
            // line 313
            echo "  ";
        } else {
            // line 314
            echo "    ";
            $context["buttonTag"] = "button";
            // line 315
            echo "    ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["type" => "button"]);
            // line 316
            echo "  ";
        }
        // line 317
        echo "
  <";
        // line 318
        echo twig_escape_filter($this->env, ($context["buttonTag"] ?? null), "html", null, true);
        echo " ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    <i class=\"material-icons\">";
        // line 319
        echo twig_escape_filter($this->env, ($context["button_icon"] ?? null), "html", null, true);
        echo "</i>
    <span class=\"btn-label\">";
        // line 320
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</span>
  </";
        // line 321
        echo twig_escape_filter($this->env, ($context["buttonTag"] ?? null), "html", null, true);
        echo ">";
    }

    // line 324
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 325
        $this->displayParentBlock("choice_widget", $context, $blocks);
        // line 326
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 329
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 330
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 330)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 330), "")) : ("")) . " custom-select"))]);
        // line 331
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 334
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 335
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 335)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 335), "")) : ("")))) {
            // line 336
            echo "<div class=\"control-group\">";
            // line 337
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 338
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 339
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 339)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 339), "")) : ("")), "translation_domain" =>                 // line 340
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 341
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            echo "</div>";
        } else {
            // line 346
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 347
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 349
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 349)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 349), "")) : ("")), "translation_domain" =>                 // line 350
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 351
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "</div>";
        }
    }

    // line 358
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 359
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 362
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
            // line 363
            echo "        ";
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
        // line 365
        echo "</ul>
  </div>";
    }

    // line 369
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 370
        echo "<li>
    ";
        // line 371
        $context["checked"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 371), "submitted_values", [], "any", true, true, false, 371) && twig_get_attribute($this->env, $this->source, ($context["submitted_values"] ?? null), twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 371), [], "array", true, true, false, 371))) ? ("checked=\"checked\"") : (""));
        // line 372
        echo "    ";
        if (($context["multiple"] ?? null)) {
            // line 373
            echo "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 375
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 375), "full_name", [], "any", false, false, false, 375), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 375), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo ">
          ";
            // line 376
            if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 376) && (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", false, false, false, 376) == 0))) {
                // line 377
                echo "            <i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 377), "html", null, true);
                echo "</i>";
            } else {
                // line 379
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 379), "html", null, true);
                echo "
          ";
            }
            // line 381
            echo "          ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 382
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 382), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 384
            echo "        </label>
      </div>";
        } else {
            // line 387
            echo "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 389
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 389), "id", [], "any", false, false, false, 389), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 389), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo " class=\"category\">
          ";
            // line 390
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 390), "html", null, true);
            echo "
          ";
            // line 391
            if (array_key_exists("defaultCategory", $context)) {
                // line 392
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 392), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 394
            echo "        </label>
      </div>";
        }
        // line 397
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 397)) {
            // line 398
            echo "      <ul>
        ";
            // line 399
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 399));
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
                // line 400
                echo "          ";
                $context["child"] = $context["item"];
                // line 401
                echo "          ";
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
            // line 403
            echo "</ul>
    ";
        }
        // line 405
        echo "  </li>";
    }

    // line 408
    public function block_translatefields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 409
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"translations tabbable\" id=\"";
        // line 410
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 410), "id", [], "any", false, false, false, 410), "html", null, true);
        echo "\" tabindex=\"1\">
    ";
        // line 411
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 412
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 413
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 414
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 415
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 415), "label", [], "any", false, false, false, 415), "html", null, true);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 415) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 415), "name", [], "any", false, false, false, 415))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 415), "id", [], "any", false, false, false, 415), "html", null, true);
                echo "\">
              ";
                // line 416
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "label", [], "any", false, false, false, 416)), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 420
            echo "      </ul>
    ";
        }
        // line 422
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 425
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "label", [], "any", false, false, false, 425), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "id", [], "any", false, false, false, 425), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 425) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "name", [], "any", false, false, false, 425))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 425), "valid", [], "any", false, false, false, 425)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "label", [], "any", false, false, false, 425), "html", null, true);
            echo "\">
          ";
            // line 426
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
          ";
            // line 427
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        echo "    </div>
  </div>
";
    }

    // line 434
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 435
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 436
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 436)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 436), "")) : ("")) . " form-control"))]);
        }
        // line 438
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 441
    public function block_translate_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 444
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
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 445
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 445), "attr", [], "any", false, true, false, 445), "class", [], "any", true, true, false, 445)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 445), "attr", [], "any", false, true, false, 445), "class", [], "any", false, false, false, 445), "")) : ("")) . " js-locale-input");
            // line 446
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 446), "label", [], "any", false, false, false, 446));
            // line 447
            echo "
      ";
            // line 448
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 448) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 448), "name", [], "any", false, false, false, 448))) {
                // line 449
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 450
                echo "      ";
            }
            // line 452
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(($context["classes"] ?? null))]);
            // line 453
            $this->displayBlock("form_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        echo "
    ";
        // line 456
        if ( !($context["hide_locales"] ?? null)) {
            // line 457
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 463
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 463), "id", [], "any", false, false, false, 463), "html", null, true);
            echo "\"
        >
          ";
            // line 465
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 465), "default_locale", [], "any", false, false, false, 465), "iso_code", [], "any", false, false, false, 465)), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 468
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 468), "id", [], "any", false, false, false, 468), "html", null, true);
            echo "\">
          ";
            // line 469
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 470
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 470), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 470), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 472
            echo "        </div>
      </div>
    ";
        }
        // line 475
        echo "  </div>";
    }

    // line 478
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 479
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 481
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 482
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 482), "attr", [], "any", false, true, false, 482), "class", [], "any", true, true, false, 482)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 482), "attr", [], "any", false, true, false, 482), "class", [], "any", false, false, false, 482), "")) : ("")) . " js-locale-input");
            // line 483
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 483), "label", [], "any", false, false, false, 483));
            // line 484
            echo "
      ";
            // line 485
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 485) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 485), "name", [], "any", false, false, false, 485))) {
                // line 486
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 487
                echo "      ";
            }
            // line 488
            echo "
      <div class=\"";
            // line 489
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 490
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        echo "
    ";
        // line 494
        if (($context["show_locale_select"] ?? null)) {
            // line 495
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 501
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 501), "id", [], "any", false, false, false, 501), "html", null, true);
            echo "\"
        >
          ";
            // line 503
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 503), "default_locale", [], "any", false, false, false, 503), "iso_code", [], "any", false, false, false, 503)), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 506
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 506), "id", [], "any", false, false, false, 506), "html", null, true);
            echo "\">
          ";
            // line 507
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 508
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 509
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 509), "html", null, true);
                echo "\"
            >
              ";
                // line 511
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 511), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 514
            echo "        </div>
      </div>
    ";
        }
        // line 517
        echo "  </div>";
    }

    // line 520
    public function block_date_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 521
        echo "  ";
        ob_start(function () { return ''; });
        // line 522
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 522)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 522), "")) : ("")) . " form-control datepicker"))]);
        // line 523
        echo "    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
        // line 524
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
        // line 531
        $this->displayBlock("form_help", $context, $blocks);
        echo "
  ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 521
        echo twig_spaceless($___internal_parse_1_);
    }

    // line 535
    public function block_date_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 536
        echo "  ";
        ob_start(function () { return ''; });
        // line 537
        echo "    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        ";
        // line 539
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 539), 'row');
        echo "
      </div>
      <div class=\"col col-md-4\">
        ";
        // line 542
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 542), 'row');
        echo "
        ";
        // line 543
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", true, true, false, 543)) {
            // line 544
            echo "          ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", false, false, false, 544), 'widget');
            echo "
          ";
            // line 545
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", false, false, false, 545), 'errors');
            echo "
        ";
        }
        // line 547
        echo "      </div>
    </div>
  ";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 536
        echo twig_spaceless($___internal_parse_2_);
    }

    // line 552
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 553
        echo "  ";
        ob_start(function () { return ''; });
        // line 554
        echo "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button d-block\"
            title=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            name=\"";
        // line 557
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
        // line 560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
    ";
        // line 562
        if (($context["show_reset_button"] ?? null)) {
            // line 563
            echo "      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"";
            // line 565
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"";
            // line 567
            echo twig_escape_filter($this->env, ($context["reset_url"] ?? null), "html", null, true);
            echo "\"
                data-redirect=\"";
            // line 568
            echo twig_escape_filter($this->env, ($context["redirect_url"] ?? null), "html", null, true);
            echo "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
            // line 571
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
        </button>
      </div>
    ";
        }
        // line 575
        echo "  ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 553
        echo twig_spaceless($___internal_parse_3_);
    }

    // line 578
    public function block_switch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 579
        echo "  ";
        ob_start(function () { return ''; });
        // line 580
        echo "  ";
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (_twig_default_filter(($context["row_attr"] ?? null), [])) : ([]));
        // line 581
        echo "  <div class=\"input-group ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", true, true, false, 581)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", false, false, false, 581), "")) : ("")), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowAttributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
            echo " ";
            if (($context["key"] != "class")) {
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["rowAttr"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rowAttr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"ps-switch\" id=\"";
        // line 582
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 582), "id", [], "any", false, false, false, 582), "html", null, true);
        echo "\">
        ";
        // line 583
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
            // line 584
            echo "          ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 584));
            // line 585
            echo "          <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\"
            ";
            // line 586
            $this->displayBlock("attributes", $context, $blocks);
            echo "
            name=\"";
            // line 587
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\"
            value=\"";
            // line 588
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 588), "html", null, true);
            echo "\"
            ";
            // line 589
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            // line 590
            echo "            ";
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            // line 591
            echo "            type=\"radio\"
          >
          ";
            // line 593
            if (($context["show_choices"] ?? null)) {
                echo "<label for=\"";
                echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 593), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
                echo "</label>";
            }
            // line 594
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 595
        echo "        <span class=\"slide-button\"></span>
    </span>
  </div>
  ";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 579
        echo twig_spaceless($___internal_parse_4_);
        // line 599
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 602
    public function block_row_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 603
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (_twig_default_filter(($context["row_attr"] ?? null), [])) : ([]));
        // line 604
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowAttributes"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 605
            echo " ";
            // line 606
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 610
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 611
        echo "  <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
    <small>";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 615
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 620
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-6\">";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-2\">";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          </tr>
          </thead>
          <tbody>";
        // line 626
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
            // line 627
            echo "            <tr>
              <td class=\"col-md-3\">";
            // line 628
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 629
            echo twig_escape_filter($this->env, (($__internal_compile_5 = (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 629), "attr", [], "any", false, false, false, 629), "data", [], "any", false, false, false, 629)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 629)] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["file_name"] ?? null) : null), "html", null, true);
            echo "</span></td>
              <td class=\"col-md-2\">";
            // line 630
            echo twig_escape_filter($this->env, (($__internal_compile_7 = (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 630), "attr", [], "any", false, false, false, 630), "data", [], "any", false, false, false, 630)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 630)] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["mime"] ?? null) : null), "html", null, true);
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
        // line 633
        echo "</tbody>
        </table>
      </div>
    </div>
  </div>
";
    }

    // line 642
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 644
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 644)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 644), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 645
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 648
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 649
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 652
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 653
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 656
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 657
        echo "  ";
        // line 658
        echo "  ";
        if (array_key_exists("widget", $context)) {
            // line 659
            echo "    ";
            if (($context["required"] ?? null)) {
                // line 660
                echo "      ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 660)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 660), "")) : ("")) . " required"))]);
                // line 661
                echo "    ";
            }
            // line 662
            echo "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 663
                echo "      ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 663)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 663), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 664
                echo "    ";
            }
            // line 665
            echo "    ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 666
                echo "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 667
                echo "    ";
            }
            // line 668
            echo "
    ";
            // line 669
            if (((($__internal_compile_9 = ($context["block_prefixes"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[2] ?? null) : null) == "radio")) {
                // line 670
                echo "      <label class=\"form-check-label\"";
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
                // line 671
                echo ($context["widget"] ?? null);
                // line 673
                echo "<i class=\"form-check-round\"></i>";
                // line 675
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 676
                echo "</label>
    ";
            } else {
                // line 678
                echo "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 679
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
                // line 680
                echo ($context["widget"] ?? null);
                // line 681
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 682
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 683
                echo "</label>
      </div>
    ";
            }
            // line 686
            echo "  ";
        }
    }

    // line 689
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 690
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 690)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 690), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 690)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 690), "")) : (""))));
        // line 691
        if (twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 692
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 692)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 692), "")) : ("")) . " custom-control-input"))]);
            // line 693
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 694
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 695
            echo "</div>";
        } else {
            // line 697
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 697)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 697), "")) : ("")) . " form-check-input"))]);
            // line 698
            echo "<div class=\"form-check form-check-radio form-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 699
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 700
            echo "</div>";
        }
    }

    // line 704
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 705
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 705)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 705), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 705)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 705), "")) : (""))));
        // line 706
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 706)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 706), "")) : ("")) . " form-check-input"))]);
        // line 707
        echo "<div class=\"form-check form-check-radio form-checkbox";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", true, true, false, 707)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", false, false, false, 707), "html", null, true);
        }
        echo "\">";
        // line 708
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>         $this->renderBlock("base_checkbox_widget", $context, $blocks)]);
        // line 709
        echo "</div>";
    }

    // line 714
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 715
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "fieldError", [], "array", true, true, false, 715) && ((($__internal_compile_10 = ($context["attr"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["fieldError"] ?? null) : null) == true))) {
            // line 716
            echo "    ";
            $this->displayBlock("form_errors_field", $context, $blocks);
            echo "
  ";
        } else {
            // line 718
            echo "    ";
            $this->displayBlock("form_errors_other", $context, $blocks);
            echo "
  ";
        }
    }

    // line 722
    public function block_form_errors_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 723
        echo "  ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 725
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 727
                $context["popoverContainer"] = ("popover-error-container-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 727), "id", [], "any", false, false, false, 727));
                // line 728
                echo "      <div class=\"";
                echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                echo "\"></div>

      ";
                // line 730
                ob_start(function () { return ''; });
                // line 731
                echo "        <div class=\"popover-error-list\">
          <ul>";
                // line 733
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 734
                    echo "<li class=\"text-danger\"> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 734), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 734), "form_error"), "html", null, true);
                    echo "
              </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 737
                echo "          </ul>
        </div>
      ";
                $context["popoverErrorContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 740
                echo "
      <template class=\"js-popover-error-content\" data-id=\"";
                // line 741
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 741), "id", [], "any", false, false, false, 741), "html", null, true);
                echo "\">
        ";
                // line 742
                echo twig_escape_filter($this->env, ($context["popoverErrorContent"] ?? null), "html", null, true);
                echo "
      </template>

      ";
                // line 745
                ob_start(function () { return ''; });
                // line 746
                echo "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                // line 748
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 748), "id", [], "any", false, false, false, 748), "html", null, true);
                echo "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                // line 752
                echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                echo "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> ";
                // line 754
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% errors", ["%count%" => twig_length_filter($this->env, ($context["errors"] ?? null))], "Admin.Global"), "html", null, true);
                echo "</u>
        </span>
      ";
                $context["errorPopover"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 757
                echo "
      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          ";
                // line 760
                echo twig_escape_filter($this->env, ($context["errorPopover"] ?? null), "html", null, true);
                echo "
        </div>
      </div>

      ";
            } else {
                // line 766
                echo "<div class=\"d-inline-block text-danger align-top\">
        <i class=\"material-icons form-error-icon\">error_outline</i>
      </div>
      <div class=\"d-inline-block\">
        ";
                // line 770
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 771
                    echo "          <div class=\"text-danger\">
            <p> ";
                    // line 772
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 772), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 772), "form_error"), "html", null, true);
                    echo "
            </p>
          </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 776
                echo "</div>";
            }
        }
    }

    // line 781
    public function block_form_errors_other($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 782
        echo "  ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 783
            echo "<div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        ";
            // line 788
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 789
                echo "            <p> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 789), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 789), "form_error"), "html", null, true);
                echo "
            </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 792
            echo "</div>
    </div>
  ";
        }
    }

    // line 799
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 800
        echo "  ";
        ob_start(function () { return ''; });
        // line 801
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
        // line 811
        if (($context["isCheckSelectAll"] ?? null)) {
            // line 812
            echo "                    checked
                  ";
        }
        // line 814
        echo "                >
                <i class=\"md-checkbox-control\"></i>
                ";
        // line 816
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 816), "displayTotalItems", [], "any", false, false, false, 816)) {
            echo " (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["form"] ?? null)), "html", null, true);
            echo ") ";
        }
        // line 817
        echo "              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 823
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 824
            echo "          <tr>
            <td>
              ";
            // line 826
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 830
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 800
        echo twig_spaceless($___internal_parse_5_);
    }

    // line 836
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 837
        echo "  ";
        ob_start(function () { return ''; });
        // line 838
        echo "    <div class=\"choice-table";
        if (($context["headers_fixed"] ?? null)) {
            echo "-headers-fixed";
        }
        echo " table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
        // line 842
        echo twig_escape_filter($this->env, ($context["table_label"] ?? null), "html", null, true);
        echo "</th>
          ";
        // line 843
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
            // line 844
            echo "            <th class=\"text-center\">
              ";
            // line 845
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 845), "multiple", [], "any", false, false, false, 845) && !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 845), "name", [], "any", false, false, false, 845), ($context["headers_to_disable"] ?? null)))) {
                // line 846
                echo "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                // line 848
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 848) + 1), "html", null, true);
                echo "\"
                   data-column-checked=\"false\"
                >
                  ";
                // line 851
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 851), "label", [], "any", false, false, false, 851), "html", null, true);
                echo "
                </a>
              ";
            } else {
                // line 854
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 854), "label", [], "any", false, false, false, 854), "html", null, true);
                echo "
              ";
            }
            // line 856
            echo "            </th>
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
        // line 858
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 861
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 862
            echo "          <tr>
            <td>
              ";
            // line 864
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 866
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 867
                echo "              <td class=\"text-center\">
                ";
                // line 868
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 868), $context["child_choice_name"], [], "array", true, true, false, 868)) {
                    // line 869
                    echo "                  ";
                    $context["entry_index"] = (($__internal_compile_11 = (($__internal_compile_12 = ($context["child_choice_entry_index_mapping"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["choice_value"]] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["child_choice_name"]] ?? null) : null);
                    // line 870
                    echo "
                  ";
                    // line 871
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 871), "multiple", [], "any", false, false, false, 871)) {
                        // line 872
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_13 = $context["child_choice"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["entry_index"] ?? null)] ?? null) : null), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 874
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_14 = $context["child_choice"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[($context["entry_index"] ?? null)] ?? null) : null), 'widget');
                        echo "
                  ";
                    }
                    // line 876
                    echo "                ";
                } else {
                    // line 877
                    echo "                  --
                ";
                }
                // line 879
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 881
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 883
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 837
        echo twig_spaceless($___internal_parse_6_);
    }

    // line 890
    public function block_translatable_fields_with_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 891
        echo "  <div class=\"translations tabbable\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 891), "id", [], "any", false, false, false, 891), "html", null, true);
        echo "\" tabindex=\"1\">
    ";
        // line 892
        if (((($context["hide_locales"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 893
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 894
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 895
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 896
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 896), "label", [], "any", false, false, false, 896), "html", null, true);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 896) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 896), "name", [], "any", false, false, false, 896))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 896), "id", [], "any", false, false, false, 896), "html", null, true);
                echo "\">
              ";
                // line 897
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 897), "label", [], "any", false, false, false, 897)), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 901
            echo "      </ul>
    ";
        }
        // line 903
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 905
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 906
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 906), "label", [], "any", false, false, false, 906), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 906), "id", [], "any", false, false, false, 906), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hide_locales"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 906) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 906), "name", [], "any", false, false, false, 906))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 906), "valid", [], "any", false, false, false, 906)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 906), "label", [], "any", false, false, false, 906), "html", null, true);
            echo "\">
          ";
            // line 907
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 910
        echo "    </div>
  </div>
";
    }

    // line 914
    public function block_translatable_fields_with_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 915
        $context["formClass"] = twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 915), "attr", [], "any", false, true, false, 915), "class", [], "any", true, true, false, 915)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 915), "attr", [], "any", false, true, false, 915), "class", [], "any", false, false, false, 915), "")) : ("")) . " input-group locale-input-group js-locale-input-group d-flex"));
        // line 916
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["formClass"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 916), "id", [], "any", false, false, false, 916), "html", null, true);
        echo "\" tabindex=\"1\">
      ";
        // line 917
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 918
            echo "        ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 918), "attr", [], "any", false, true, false, 918), "class", [], "any", true, true, false, 918)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 918), "attr", [], "any", false, true, false, 918), "class", [], "any", false, false, false, 918), "")) : ("")) . " js-locale-input");
            // line 919
            echo "        ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 919), "label", [], "any", false, false, false, 919));
            // line 920
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 920) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 920), "name", [], "any", false, false, false, 920))) {
                // line 921
                echo "          ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 922
                echo "        ";
            }
            // line 923
            echo "        <div data-lang-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 923), "name", [], "any", false, false, false, 923), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
          ";
            // line 924
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 927
        echo "      ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 928
            echo "        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            ";
            // line 932
            if (array_key_exists("change_form_language_url", $context)) {
                // line 933
                echo "              data-change-language-url=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 933), "change_form_language_url", [], "any", false, false, false, 933), "html", null, true);
                echo "\"
            ";
            }
            // line 935
            echo "                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"";
            // line 937
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 937), "id", [], "any", false, false, false, 937), "html", null, true);
            echo "_dropdown\"
          >
            ";
            // line 939
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 939), "default_locale", [], "any", false, false, false, 939), "iso_code", [], "any", false, false, false, 939)), "html", null, true);
            echo "
          </button>
          <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 941
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 941), "id", [], "any", false, false, false, 941), "html", null, true);
            echo "_dropdown\">
            ";
            // line 942
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 943
                echo "              <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 943), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 943), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 945
            echo "          </div>
        </div>
      ";
        }
        // line 948
        echo "    </div>";
    }

    // line 951
    public function block_translatable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 952
        if (($context["use_tabs"] ?? null)) {
            // line 953
            echo "    ";
            $this->displayBlock("translatable_fields_with_tabs", $context, $blocks);
            echo "
  ";
        } else {
            // line 955
            echo "    ";
            $this->displayBlock("translatable_fields_with_dropdown", $context, $blocks);
            echo "
  ";
        }
        // line 957
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 960
    public function block_birthday_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 961
        echo "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 962
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 964
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 964)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 964), "")) : ("")) . " form-inline"))]);
            // line 965
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 966
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 968
            echo "
    ";
            // line 969
            $context["yearWidget"] = (("<div class=\"col pl-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 969), 'widget')) . "</div>");
            // line 970
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 970), 'widget')) . "</div>");
            // line 971
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 971), 'widget')) . "</div>");
            // line 973
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 974
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 975
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 976
($context["dayWidget"] ?? null)]);
            // line 979
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 980
                echo "</div>";
            }
        }
    }

    // line 985
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 986
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 988
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 992
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 993
($context["attr"] ?? null), "class", [], "any", true, true, false, 993)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 993), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 998
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 998) && twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 998))) {
            // line 999
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (twig_get_attribute($this->env, $this->source,             // line 1000
($context["attr"] ?? null), "class", [], "any", false, false, false, 1000) . " disabled")]);
            // line 1002
            echo "    ";
        }
        // line 1003
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1005
        echo "<label class=\"custom-file-label\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1005), "id", [], "any", false, false, false, 1005), "html", null, true);
        echo "\">
      ";
        // line 1006
        $context["attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1006), "attr", [], "any", false, false, false, 1006);
        // line 1007
        echo "      ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 1007)) ? (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", false, false, false, 1007)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>";
        // line 1010
        $this->displayBlock("form_help", $context, $blocks);
        // line 1011
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1011), "download_url", [], "any", false, false, false, 1011)) {
            // line 1012
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1012), "download_url", [], "any", false, false, false, 1012), "html", null, true);
            echo "\">
      ";
            // line 1013
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download file", [], "Admin.Actions"), "html", null, true);
            echo "
    </a>
  ";
        }
    }

    // line 1018
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1019
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1019), "attr", [], "any", false, false, false, 1019), "is_allowed_to_display", [], "any", false, false, false, 1019)) {
            // line 1020
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 1022
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 1023
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 1025
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"
          ";
            // line 1026
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 1027
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
    }

    // line 1035
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1036
        echo "  <div class=\"input-group\">
    ";
        // line 1037
        if (($context["compound"] ?? null)) {
            // line 1038
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 1040
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 1042
        echo "    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 1045
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 1046
        echo twig_escape_filter($this->env, ($context["generated_value_length"] ?? null), "html", null, true);
        echo "\"
      >
        ";
        // line 1048
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
  ";
        // line 1052
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 1055
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1056
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 1057
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 1061
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 1062
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1064
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 1066
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 1068
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 1071
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 1072
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 1074
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 1076
        echo "
    </em>
  </small>
";
    }

    // line 1081
    public function block_text_with_length_counter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1082
        echo "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 1083
        $context["current_length"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1083), "max_length", [], "any", false, false, false, 1083) - twig_length_filter($this->env, ($context["value"] ?? null)));
        // line 1084
        echo "
    ";
        // line 1085
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1085), "position", [], "any", false, false, false, 1085) == "before")) {
            // line 1086
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1087
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1090
        echo "
    ";
        // line 1091
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-max-length" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1091), "max_length", [], "any", false, false, false, 1091), "maxlength" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1091), "max_length", [], "any", false, false, false, 1091), "class" => "js-countable-input"]);
        // line 1092
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ($context["input_attr"] ?? null));
        // line 1094
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1094), "input", [], "any", false, false, false, 1094) == "input")) {
            // line 1095
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1096
($context["form"] ?? null), "vars", [], "any", false, false, false, 1096), "input", [], "any", false, false, false, 1096) == "textarea")) {
            // line 1097
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1099
            $this->displayBlock("form_widget", $context, $blocks);
        }
        // line 1101
        echo "
    ";
        // line 1102
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1102), "position", [], "any", false, false, false, 1102) == "after")) {
            // line 1103
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1104
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1107
        echo "  </div>
";
    }

    // line 1110
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1111
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_15 = ($context["form"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_16 = ($context["form"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 1115
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1116
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_17 = ($context["form"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_18 = ($context["form"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 1120
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1121
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 1122
        echo "<div class=\"input-group\">";
        // line 1123
        $this->displayBlock("form_unit_prepend", $context, $blocks);
        // line 1124
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1125
        $this->displayBlock("form_unit", $context, $blocks);
        // line 1126
        echo "</div>
  ";
        // line 1127
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 1130
    public function block_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1131
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 1132
        echo "<div class=\"input-group\">";
        // line 1133
        $this->displayBlock("form_unit_prepend", $context, $blocks);
        // line 1134
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1135
        $this->displayBlock("form_unit", $context, $blocks);
        // line 1136
        echo "</div>
  ";
        // line 1137
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 1140
    public function block_form_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1141
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1141), "unit", [], "any", true, true, false, 1141) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1141), "prepend_unit", [], "any", false, false, false, 1141))) {
            // line 1142
            echo "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 1143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1143), "unit", [], "any", false, false, false, 1143), "html", null, true);
            echo "</span>
    </div>
  ";
        }
    }

    // line 1148
    public function block_form_unit_prepend($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1149
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1149), "unit", [], "any", true, true, false, 1149) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1149), "prepend_unit", [], "any", false, false, false, 1149))) {
            // line 1150
            echo "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 1151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1151), "unit", [], "any", false, false, false, 1151), "html", null, true);
            echo "</span>
    </div>
  ";
        }
    }

    // line 1156
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1157
        echo "  ";
        if ( !(null === ($context["help"] ?? null))) {
            // line 1158
            $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 1158)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 1158), "")) : ("")) . " form-text"))]);
            // line 1159
            echo "<small id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\"";
            $__internal_compile_19 = $context;
            $__internal_compile_20 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($__internal_compile_20)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 1159, $this->getSourceContext());
            }
            $__internal_compile_20 = twig_to_array($__internal_compile_20);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_20));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_19;
            echo ">";
            echo ($context["help"] ?? null);
            echo "</small>
  ";
        }
        // line 1161
        echo "  ";
        if (array_key_exists("warning", $context)) {
            // line 1162
            echo "    ";
            echo twig_escape_filter($this->env, ($context["warning"] ?? null), "html", null, true);
            echo "
  ";
        }
    }

    // line 1166
    public function block_form_prepend_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1167
        echo "  ";
        if ((array_key_exists("external_link", $context) && (twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "position", [], "any", false, false, false, 1167) == "prepend"))) {
            // line 1168
            $this->displayBlock("form_external_link", $context, $blocks);
        }
    }

    // line 1172
    public function block_form_append_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1173
        echo "  ";
        if ((array_key_exists("external_link", $context) && (twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "position", [], "any", false, false, false, 1173) == "append"))) {
            // line 1174
            $this->displayBlock("form_external_link", $context, $blocks);
        }
    }

    // line 1178
    public function block_form_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1179
        echo "  ";
        if (array_key_exists("external_link", $context)) {
            // line 1180
            ob_start(function () { return ''; });
            // line 1181
            echo "<a ";
            $this->displayBlock("form_external_link_attributes", $context, $blocks);
            echo ">
        ";
            // line 1182
            if (twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "open_in_new_tab", [], "any", false, false, false, 1182)) {
                echo "<i class=\"material-icons\">open_in_new</i>";
            }
            $context["openingTag"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1185
            echo "<div class=\"small font-secondary form-external-link";
            if ((twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "align", [], "any", false, false, false, 1185) === "right")) {
                echo " text-right";
            }
            echo "\">
      ";
            // line 1187
            echo "      ";
            if ((twig_in_filter("[1]", twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1187)) && twig_in_filter("[/1]", twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1187)))) {
                // line 1188
                echo "        ";
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1188), ["[1]" => ($context["openingTag"] ?? null), "[/1]" => "</a>"]);
                echo "
      ";
            } else {
                // line 1190
                echo "        ";
                echo twig_replace_filter((("[1]" . twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1190)) . "[/1]"), ["[1]" => ($context["openingTag"] ?? null), "[/1]" => "</a>"]);
                echo "
      ";
            }
            // line 1192
            echo "    </div>
  ";
        }
    }

    // line 1196
    public function block_form_external_link_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1197
        $context["external_link_attr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, false, false, 1197), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1197), "class", [], "any", true, true, false, 1197)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1197), "class", [], "any", false, false, false, 1197), "")) : ("")) . " btn btn-link px-0 align-right"))]);
        // line 1198
        echo "
  ";
        // line 1199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["external_link_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 1200
            echo "    ";
            if (!twig_in_filter($context["attrname"], ["href", "class"])) {
                // line 1201
                echo "      ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"
    ";
            }
            // line 1203
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1204
        echo "
  ";
        // line 1205
        if (twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "open_in_new_tab", [], "any", false, false, false, 1205)) {
            echo "target=\"_blank\"";
        }
        // line 1206
        echo "  href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "href", [], "any", false, false, false, 1206), "html", null, true);
        echo "\"
  class=\"";
        // line 1207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["external_link_attr"] ?? null), "class", [], "any", false, false, false, 1207), "html", null, true);
        echo "\"";
    }

    // line 1210
    public function block_custom_content_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1211
        echo "  ";
        $this->loadTemplate(($context["template"] ?? null), "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 1211)->display(twig_array_merge($context, ($context["data"] ?? null)));
    }

    // line 1214
    public function block_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1215
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1215), "id", [], "any", false, false, false, 1215)], "Admin.Global")]);
        // line 1216
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1217
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 1219
        echo "
  ";
        // line 1220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

  ";
        // line 1222
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1223
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 1224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1225
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1227
            echo "    </datalist>
  ";
        }
    }

    // line 1231
    public function block_form_prepend_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1232
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "prepend"))) {
            // line 1233
            $this->displayBlock("form_alert", $context, $blocks);
        }
    }

    // line 1237
    public function block_form_append_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1238
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "append"))) {
            // line 1239
            $this->displayBlock("form_alert", $context, $blocks);
        }
    }

    // line 1243
    public function block_form_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1244
        if (array_key_exists("alert_message", $context)) {
            // line 1245
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["alert_type"] ?? null), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                echo " expandable-alert";
            }
            echo "\" role=\"alert\">
    ";
            // line 1246
            if (array_key_exists("alert_title", $context)) {
                // line 1247
                echo "      <p class=\"alert-text\">
        ";
                // line 1248
                echo ($context["alert_title"] ?? null);
                echo "
      </p>
    ";
            } else {
                // line 1251
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["alert_message"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1252
                    echo "        <p class=\"alert-text\">
          ";
                    // line 1253
                    echo $context["message"];
                    echo "
        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1256
                echo "    ";
            }
            // line 1257
            echo "
    ";
            // line 1258
            if (array_key_exists("alert_title", $context)) {
                // line 1259
                echo "      <div class=\"alert-more collapse\" id=\"expandable_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1259), "id", [], "any", false, false, false, 1259), "html", null, true);
                echo "\" style=\"\">
        ";
                // line 1260
                if ((twig_length_filter($this->env, ($context["alert_message"] ?? null)) > 1)) {
                    // line 1261
                    echo "          <ul class=\"p-0\">
            ";
                    // line 1262
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["alert_message"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1263
                        echo "              <li>";
                        echo $context["message"];
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1265
                    echo "          </ul>
        ";
                } else {
                    // line 1267
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["alert_message"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1268
                        echo "            <p>
              ";
                        // line 1269
                        echo $context["message"];
                        echo "
            </p>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1272
                    echo "        ";
                }
                // line 1273
                echo "      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 1275
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1275), "id", [], "any", false, false, false, 1275), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 1276
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions"), "html", null, true);
                echo "
          </button>
       </div>
    ";
            }
            // line 1280
            echo "  </div>
  ";
        }
    }

    // line 1284
    public function block_unavailable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1285
        echo "  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 1287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not available yet.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </p>
  </div>
";
    }

    // line 1292
    public function block_text_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1293
        echo "  ";
        // line 1294
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1295
        echo "<span class=\"label text-preview ";
        echo twig_escape_filter($this->env, ($context["preview_class"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 1297
        echo "    ";
        if (array_key_exists("prefix", $context)) {
            // line 1298
            echo "    <span class=\"text-preview-prefix\">
      ";
            // line 1299
            echo ($context["prefix"] ?? null);
            echo "
    </span>
    ";
        }
        // line 1302
        echo "
    <span class=\"text-preview-value\">
      ";
        // line 1304
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1304), "allow_html", [], "any", false, false, false, 1304)) {
            // line 1305
            echo "        ";
            // line 1306
            echo "        ";
            echo ($context["value"] ?? null);
            echo "
      ";
        } else {
            // line 1308
            echo "        ";
            // line 1309
            echo "        ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html");
            echo "
      ";
        }
        // line 1311
        echo "    </span>

    ";
        // line 1314
        echo "    ";
        if (array_key_exists("suffix", $context)) {
            // line 1315
            echo "    <span class=\"text-preview-suffix\">
      ";
            // line 1316
            echo ($context["suffix"] ?? null);
            echo "
    </span>
    ";
        }
        // line 1319
        echo "  </span>
";
    }

    // line 1322
    public function block_link_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1323
        echo "  ";
        // line 1324
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1325
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1325), "value", [], "any", false, false, false, 1325), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1325)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1325), "")) : ("")), "html", null, true);
        echo "\">
    ";
        // line 1326
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1326), "button_label", [], "any", false, false, false, 1326), "html", null, true);
        echo "
  </a>
";
    }

    // line 1330
    public function block_image_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1331
        echo "  ";
        // line 1332
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1333
        if ( !twig_test_empty(($context["value"] ?? null))) {
            // line 1334
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_trim_filter(("Image preview for " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1334), "name", [], "any", false, false, false, 1334))), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1334), "image_class", [], "any", false, false, false, 1334), "html", null, true);
            echo "\" />
  ";
        } else {
            // line 1336
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No picture", [], "Admin.Global"), "html", null, true);
            echo "
  ";
        }
    }

    // line 1340
    public function block_delta_quantity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1341
        echo "  ";
        $context["quantity"] = ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", true, true, false, 1341)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", false, false, false, 1341), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1341), "vars", [], "any", false, false, false, 1341), "value", [], "any", false, false, false, 1341))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1341), "vars", [], "any", false, false, false, 1341), "value", [], "any", false, false, false, 1341)));
        // line 1342
        echo "  ";
        // line 1343
        echo "  ";
        if ((null === ($context["initialQuantity"] ?? null))) {
            // line 1344
            echo "    ";
            $context["initialQuantity"] = ($context["quantity"] ?? null);
            // line 1345
            echo "  ";
        }
        // line 1346
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1346)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1346), "")) : ("")) . " delta-quantity")), "data-initial-quantity" => ($context["initialQuantity"] ?? null)]);
        // line 1347
        echo "  <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 1348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "initial_quantity", [], "any", false, false, false, 1348), 'widget', ["value" => ($context["initialQuantity"] ?? null)]);
        echo "
    ";
        // line 1349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1349), 'widget', ["initialQuantity" => ($context["initialQuantity"] ?? null), "deltaQuantity" => ($context["deltaQuantity"] ?? null), "value" => ($context["quantity"] ?? null)]);
        echo "
    ";
        // line 1350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delta", [], "any", false, false, false, 1350), 'row');
        echo "
  </div>
";
    }

    // line 1354
    public function block_delta_quantity_quantity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1355
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1355)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1355), "")) : ("")) . " delta-quantity-quantity"))]);
        // line 1356
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 1357
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1358
        echo "<span class=\"initial-quantity\">";
        echo twig_escape_filter($this->env, ($context["initialQuantity"] ?? null), "html", null, true);
        echo "</span>
    <span class=\"quantity-update";
        // line 1359
        if ((($context["deltaQuantity"] ?? null) != 0)) {
            echo " quantity-modified";
        }
        echo "\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">";
        // line 1361
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</span>
    </span>
    ";
        // line 1363
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  </div>
";
    }

    // line 1367
    public function block_delta_quantity_delta_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1368
        echo "  <div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 1368)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 1368), "html", null, true);
        }
        echo "\">
    <div class=\"delta-quantity-delta-container\">";
        // line 1370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 1371
        $this->displayBlock("form_prepend_alert", $context, $blocks);
        // line 1372
        $this->displayBlock("form_prepend_external_link", $context, $blocks);
        // line 1374
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 1376
        $this->displayBlock("form_append_alert", $context, $blocks);
        // line 1377
        $this->displayBlock("form_append_external_link", $context, $blocks);
        // line 1378
        echo "</div>";
        // line 1379
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 1380
        $this->displayBlock("form_modify_all_shops", $context, $blocks);
        // line 1381
        echo "</div>
";
    }

    // line 1384
    public function block_delta_quantity_delta_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1385
        $context["type"] = "number";
        // line 1386
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1386)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1386), "")) : ("")) . " delta-quantity-delta"))]);
        // line 1387
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 1390
    public function block_submittable_input_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1391
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1391)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1391), "")) : ("")) . " ps-submittable-input-wrapper"))]);
        // line 1392
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 1393
        $context["typeAttr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1393), "type_attr", [], "any", false, false, false, 1393), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1394
($context["form"] ?? null), "vars", [], "any", false, true, false, 1394), "type_attr", [], "any", false, true, false, 1394), "class", [], "any", true, true, false, 1394)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1394), "type_attr", [], "any", false, true, false, 1394), "class", [], "any", false, false, false, 1394), "")) : ("")) . " submittable-input")), "data-initial-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1395
($context["form"] ?? null), "value", [], "any", false, false, false, 1395), "vars", [], "any", false, false, false, 1395), "value", [], "any", false, false, false, 1395), "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1396
($context["form"] ?? null), "value", [], "any", false, false, false, 1396), "vars", [], "any", false, false, false, 1396), "value", [], "any", false, false, false, 1396)]);
        // line 1399
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 1399), 'widget', ["attr" => ($context["typeAttr"] ?? null)]);
        // line 1400
        $this->displayBlock("submittable_input_button_widget", $context, $blocks);
        // line 1401
        echo "</div>
";
    }

    // line 1404
    public function block_submittable_input_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1405
        echo "  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
";
    }

    // line 1410
    public function block_submittable_delta_quantity_delta_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1411
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1411)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1411), "")) : ("")) . " delta-quantity-delta ps-submittable-input-wrapper"))]);
        // line 1412
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 1413
        $context["attr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1413), "attr", [], "any", false, false, false, 1413), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1414
($context["form"] ?? null), "vars", [], "any", false, true, false, 1414), "attr", [], "any", false, true, false, 1414), "class", [], "any", true, true, false, 1414)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1414), "attr", [], "any", false, true, false, 1414), "class", [], "any", false, false, false, 1414), "")) : ("")) . " submittable-input")), "data-initial-value" =>         // line 1415
($context["value"] ?? null), "value" =>         // line 1416
($context["value"] ?? null)]);
        // line 1419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        // line 1420
        $this->displayBlock("submittable_input_button_widget", $context, $blocks);
        // line 1421
        echo "</div>
";
    }

    // line 1424
    public function block_navigation_tab_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1425
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1425)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1425), "")) : ("")) . " navigation-tab-widget"))]);
        // line 1426
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
  <div id=\"";
        // line 1427
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1427), "id", [], "any", false, false, false, 1427), "html", null, true);
        echo "-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    ";
        // line 1433
        $context["firstRenderedChild"] = true;
        // line 1434
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1434));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1435
            echo "      ";
            if (((( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1435) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1435), "name", [], "any", false, false, false, 1435) != "_toolbar_buttons")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1435), "name", [], "any", false, false, false, 1435) != "_footer_buttons")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1435), "name", [], "any", false, false, false, 1435) != "_token"))) {
                // line 1436
                echo "      <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1436), "id", [], "any", false, false, false, 1436), "html", null, true);
                echo "-tab-nav\" class=\"nav-item";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1436), "valid", [], "any", false, false, false, 1436)) {
                    echo " has-error";
                }
                echo "\">
        <a href=\"#";
                // line 1437
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1437), "id", [], "any", false, false, false, 1437), "html", null, true);
                echo "-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link";
                if (($context["firstRenderedChild"] ?? null)) {
                    echo " active";
                }
                echo "\">
          ";
                // line 1438
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1438), "label", [], "any", false, false, false, 1438), "html", null, true);
                echo "
        </a>
      </li>
      ";
                // line 1441
                $context["firstRenderedChild"] = false;
                // line 1442
                echo "      ";
            }
            // line 1443
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1444
        echo "    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    ";
        // line 1450
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", ["_toolbar_buttons"], "method", false, false, false, 1450)) {
            // line 1451
            echo "    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      ";
            // line 1452
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_toolbar_buttons", [], "any", false, false, false, 1452), 'widget');
            echo "
    </div>
    ";
        }
        // line 1455
        echo "  </div>

  <div id=\"";
        // line 1457
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1457), "id", [], "any", false, false, false, 1457), "html", null, true);
        echo "-tabs-content\" class=\"tab-content\">
    ";
        // line 1458
        $context["firstRenderedChild"] = true;
        // line 1459
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1459));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1460
            echo "      ";
            if ((( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1460) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1460), "name", [], "any", false, false, false, 1460) != "_footer_buttons")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1460), "name", [], "any", false, false, false, 1460) != "_token"))) {
                // line 1461
                echo "      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid";
                if (($context["firstRenderedChild"] ?? null)) {
                    echo " active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1461), "id", [], "any", false, false, false, 1461), "html", null, true);
                echo "-tab\">
        ";
                // line 1462
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1462), "label_tab", [], "any", true, true, false, 1462)) {
                    // line 1463
                    echo "          ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1463), "label_tab", [], "any", false, false, false, 1463)) ? [] : ["label" => $_label_]));
                    echo "
        ";
                }
                // line 1465
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
        ";
                // line 1466
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
      </div>
      ";
                // line 1468
                $context["firstRenderedChild"] = false;
                // line 1469
                echo "      ";
            }
            // line 1470
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1471
        echo "  </div>

  ";
        // line 1473
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", ["_footer_buttons"], "method", false, false, false, 1473)) {
            // line 1474
            echo "    <div class=\"navigation-tab-widget-footer\">
      ";
            // line 1475
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_footer_buttons", [], "any", false, false, false, 1475), 'widget');
            echo "
    </div>
  ";
        }
        // line 1478
        echo "</div>
";
    }

    // line 1481
    public function block_accordion_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1482
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 1483
($context["attr"] ?? null), "class", [], "any", true, true, false, 1483)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1483), "")) : ("")) . " accordion accordion-form"))]);
        // line 1485
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 1486
        $context["firstChild"] = true;
        // line 1487
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1488
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1488), "compound", [], "any", false, false, false, 1488)) {
                // line 1489
                echo "      ";
                $context["hasError"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1489), "valid", [], "any", false, false, false, 1489) != true);
                // line 1490
                echo "      ";
                $context["isExpanded"] = (((($context["firstChild"] ?? null) && ($context["expand_first"] ?? null)) || (($context["hasError"] ?? null) && ($context["expand_on_error"] ?? null))) || ($context["expand_all"] ?? null));
                // line 1491
                echo "      <div class=\"card\">
        <div class=\"card-header\" id=\"";
                // line 1492
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1492), "id", [], "any", false, false, false, 1492), "html", null, true);
                echo "_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button ";
                // line 1495
                if (($context["hasError"] ?? null)) {
                    echo " has-error ";
                }
                echo " btn btn-block text-left";
                if ( !($context["isExpanded"] ?? null)) {
                    echo " collapsed";
                }
                echo "\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#";
                // line 1498
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1498), "id", [], "any", false, false, false, 1498), "html", null, true);
                echo "_accordion\"
              aria-expanded=\"";
                // line 1499
                if (($context["isExpanded"] ?? null)) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo "\"
              aria-controls=\"";
                // line 1500
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1500), "id", [], "any", false, false, false, 1500), "html", null, true);
                echo "_accordion\">
              <span class=\"accordion-form-button-label\">";
                // line 1501
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1501), "label", [], "any", false, false, false, 1501), "html", null, true);
                echo "</span>
              ";
                // line 1502
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1502), "label_subtitle", [], "any", true, true, false, 1502)) {
                    // line 1503
                    echo "                <span class=\"accordion-form-button-sub-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1503), "label_subtitle", [], "any", false, false, false, 1503), "html", null, true);
                    echo "</span>
              ";
                }
                // line 1505
                echo "              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"";
                // line 1510
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1510), "id", [], "any", false, false, false, 1510), "html", null, true);
                echo "_accordion\" class=\"collapse";
                if (($context["isExpanded"] ?? null)) {
                    echo " show";
                }
                echo "\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1510), "id", [], "any", false, false, false, 1510), "html", null, true);
                echo "_accordion_header\" ";
                if (($context["display_one"] ?? null)) {
                    echo "data-parent=\"#";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1510), "id", [], "any", false, false, false, 1510), "html", null, true);
                    echo "\"";
                }
                echo ">
          <div class=\"card-body\">
            ";
                // line 1512
                $context["childAttr"] = ["class" => "accordion-sub-form"];
                // line 1513
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ($context["childAttr"] ?? null)]);
                echo "
            ";
                // line 1514
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
          </div>
        </div>
      </div>
      ";
                // line 1518
                $context["firstChild"] = false;
                // line 1519
                echo "      ";
            }
            // line 1520
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1521
        echo "
    ";
        // line 1523
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
  </div>";
    }

    // line 1527
    public function block_button_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1528
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 1529
($context["attr"] ?? null), "class", [], "any", true, true, false, 1529)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1529), "")) : ("")) . " form-group btn-collection btn-toolbar")), "role" => "group", "style" => ("justify-content: " .         // line 1531
($context["justify_content"] ?? null))]);
        // line 1533
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 1534
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["button_groups"] ?? null));
        foreach ($context['_seq'] as $context["group"] => $context["buttons"]) {
            // line 1535
            echo "      <div class=\"";
            if (($context["use_button_groups"] ?? null)) {
                echo "btn-group ";
            }
            echo "group-";
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "\">
        ";
            // line 1537
            echo "        ";
            $context["inlineButtonsLimit"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1537), "inline_buttons_limit", [], "any", false, false, false, 1537);
            // line 1538
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["buttons"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 1539
                echo "          ";
                $context["action"] = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), $context["button"], [], "any", false, false, false, 1539);
                // line 1540
                echo "          ";
                if (((($context["inlineButtonsLimit"] ?? null) === null) || (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1540) <= ($context["inlineButtonsLimit"] ?? null)))) {
                    // line 1541
                    echo "            ";
                    // line 1542
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1542), "use_inline_labels", [], "any", false, false, false, 1542)) {
                        // line 1543
                        echo "              ";
                        $context["actionLabel"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "vars", [], "any", false, false, false, 1543), "label", [], "any", false, false, false, 1543);
                        // line 1544
                        echo "            ";
                    } else {
                        // line 1545
                        echo "              ";
                        $context["actionLabel"] = "";
                        // line 1546
                        echo "            ";
                    }
                    // line 1547
                    echo "            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["action"] ?? null), 'widget', ["label" => ($context["actionLabel"] ?? null)]);
                    echo "
          ";
                }
                // line 1549
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1550
            echo "
        ";
            // line 1552
            echo "        ";
            if (( !(($context["inlineButtonsLimit"] ?? null) === null) && (twig_length_filter($this->env, $context["buttons"]) > ($context["inlineButtonsLimit"] ?? null)))) {
                // line 1553
                echo "          <a id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1553), "id", [], "any", false, false, false, 1553), "html", null, true);
                echo "_dropdown\" class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
             data-toggle=\"dropdown\"
             aria-haspopup=\"true\"
             aria-expanded=\"false\"
          >
          </a>
          <div class=\"dropdown-menu\">
            ";
                // line 1560
                $context["remainingButtons"] = twig_slice($this->env, $context["buttons"], ($context["inlineButtonsLimit"] ?? null));
                // line 1561
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["remainingButtons"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 1562
                    echo "              ";
                    $context["action"] = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), $context["button"], [], "any", false, false, false, 1562);
                    // line 1563
                    echo "              ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["action"] ?? null), 'widget', ["attr" => ["class" => ("dropdown-item " . twig_trim_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 1564
($context["action"] ?? null), "vars", [], "any", false, true, false, 1564), "attr", [], "any", false, true, false, 1564), "class", [], "any", true, true, false, 1564)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "vars", [], "any", false, true, false, 1564), "attr", [], "any", false, true, false, 1564), "class", [], "any", false, false, false, 1564), "")) : (""))))]]);
                    // line 1565
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1567
                echo "          </div>
        ";
            }
            // line 1569
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['buttons'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1571
        echo "  </div>
";
    }

    // line 1574
    public function block_avatar_url_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1575
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row', ["attr" => ($context["attr"] ?? null)]);
        echo "

  <div class=\"form-group row\">
    <label class=\"form-control-label\"></label>
    <div class=\"col-sm\">
      <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 1580
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 1580), "vars", [], "any", false, false, false, 1580), "value", [], "any", false, false, false, 1580), "avatar_url", [], "any", false, false, false, 1580), "html", null, true);
        echo "\" alt=\"\">
    </div>
  </div>
";
    }

    // line 1585
    public function block_change_password_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1586
        echo "  <div class=\"form-group row\">
    <label class=\"form-control-label\">
      ";
        // line 1588
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "html", null, true);
        echo "
    </label>
    <div class=\"col-sm\">
      ";
        // line 1592
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1592), "change_password_button", [], "any", false, false, false, 1592), 'row');
        echo "

      <div class=\"card card-body js-change-password-block d-none\">
        ";
        // line 1596
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1596), "old_password", [], "any", false, false, false, 1596), 'row');
        echo "

        ";
        // line 1599
        echo "        ";
        // line 1600
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1600), "new_password", [], "any", false, false, false, 1600), 'row');
        echo "

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
        // line 1605
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1605), "generated_password", [], "any", false, false, false, 1605), 'widget');
        echo "
          </div>
          <div class=\"col-sm\">
            ";
        // line 1608
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1608), "generate_password_button", [], "any", false, false, false, 1608), 'widget');
        echo "
          </div>
        </div>
        ";
        // line 1611
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1611), "cancel_button", [], "any", false, false, false, 1611), 'row');
        echo "

        ";
        // line 1614
        echo "        <div class=\"js-password-strength-feedback d-none\">
          <span class=\"strength-low\">";
        // line 1615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
          <span class=\"strength-medium\">";
        // line 1616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Okay", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
          <span class=\"strength-high\">";
        // line 1617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Good", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
          <span class=\"strength-extreme\">";
        // line 1618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fabulous", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 1625
    public function block_price_reduction_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1626
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1626)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1626), "")) : ("")) . " reduction-widget row"))]);
        // line 1627
        echo "  <div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 1628
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1628));
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
            // line 1629
            echo "      ";
            $__internal_compile_21 = $context;
            $__internal_compile_22 = ["row_attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1629), "row_attr", [], "any", false, false, false, 1629), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1629), "row_attr", [], "any", false, true, false, 1629), "class", [], "any", true, true, false, 1629)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1629), "row_attr", [], "any", false, true, false, 1629), "class", [], "any", false, false, false, 1629), "")) : ("")) . " col col-md-3"))])];
            if (!is_iterable($__internal_compile_22)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 1629, $this->getSourceContext());
            }
            $__internal_compile_22 = twig_to_array($__internal_compile_22);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_22));
            // line 1630
            echo "      <div ";
            $this->displayBlock("row_attributes", $context, $blocks);
            echo ">
      ";
            $context = $__internal_compile_21;
            // line 1632
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
            // line 1633
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
            echo "
      </div>
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
        // line 1636
        echo "</div>";
    }

    // line 1639
    public function block_image_with_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1640
        echo "  ";
        if ((array_key_exists("data", $context) &&  !twig_test_empty(($context["data"] ?? null)))) {
            // line 1641
            echo "    <div>
      ";
            // line 1642
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["preview_image"]) {
                // line 1645
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", true, true, false, 1645)) {
                    // line 1646
                    echo "          ";
                    if (($context["can_be_deleted"] ?? null)) {
                        // line 1647
                        echo "            <figure class=\"figure\">
              <img src=\"";
                        // line 1648
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", false, false, false, 1648), "html", null, true);
                        echo "\" class=\"figure-img img-fluid img-thumbnail\">
              <figcaption class=\"figure-caption\">
                ";
                        // line 1650
                        if (($context["show_size"] ?? null)) {
                            // line 1651
                            echo "                  <p>";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preview_image"], "size", [], "any", false, false, false, 1651), "html", null, true);
                            echo "</p>
                ";
                        }
                        // line 1653
                        echo "                <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                        data-form-submit-url=\"";
                        // line 1654
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preview_image"], "delete_path", [], "any", false, false, false, 1654), "html", null, true);
                        echo "\"
                        data-form-csrf-token=\"";
                        // line 1655
                        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(($context["csrf_delete_token_id"] ?? null)), "html", null, true);
                        echo "\"
                >
                  <i class=\"material-icons\">
                    delete_forever
                  </i>
                  ";
                        // line 1660
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
                        echo "
                </button>
              </figcaption>
            </figure>
          ";
                    } else {
                        // line 1665
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["preview_image"]) {
                            // line 1666
                            echo "              <figure class=\"figure\">
                <img src=\"";
                            // line 1667
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", false, false, false, 1667), "html", null, true);
                            echo "\" class=\"figure-img img-fluid img-thumbnail\">
                ";
                            // line 1668
                            if (($context["show_size"] ?? null)) {
                                // line 1669
                                echo "                  <figcaption class=\"figure-caption\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["preview_image"], "size", [], "any", false, false, false, 1669), "html", null, true);
                                echo "</figcaption>
                ";
                            }
                            // line 1671
                            echo "              </figure>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preview_image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1673
                        echo "          ";
                    }
                    // line 1674
                    echo "      ";
                }
                // line 1675
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preview_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1676
            echo "    </div>
  ";
        }
        // line 1678
        echo "  ";
        $this->displayBlock("file_widget", $context, $blocks);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  4718 => 1678,  4714 => 1676,  4708 => 1675,  4705 => 1674,  4702 => 1673,  4695 => 1671,  4687 => 1669,  4685 => 1668,  4681 => 1667,  4678 => 1666,  4673 => 1665,  4665 => 1660,  4657 => 1655,  4653 => 1654,  4650 => 1653,  4642 => 1651,  4640 => 1650,  4635 => 1648,  4632 => 1647,  4629 => 1646,  4626 => 1645,  4622 => 1642,  4619 => 1641,  4616 => 1640,  4612 => 1639,  4608 => 1636,  4591 => 1633,  4586 => 1632,  4580 => 1630,  4571 => 1629,  4554 => 1628,  4549 => 1627,  4547 => 1626,  4543 => 1625,  4533 => 1618,  4529 => 1617,  4525 => 1616,  4521 => 1615,  4518 => 1614,  4513 => 1611,  4507 => 1608,  4501 => 1605,  4492 => 1600,  4490 => 1599,  4484 => 1596,  4477 => 1592,  4471 => 1588,  4467 => 1586,  4463 => 1585,  4455 => 1580,  4446 => 1575,  4442 => 1574,  4437 => 1571,  4430 => 1569,  4426 => 1567,  4419 => 1565,  4417 => 1564,  4415 => 1563,  4412 => 1562,  4407 => 1561,  4405 => 1560,  4394 => 1553,  4391 => 1552,  4388 => 1550,  4374 => 1549,  4368 => 1547,  4365 => 1546,  4362 => 1545,  4359 => 1544,  4356 => 1543,  4353 => 1542,  4351 => 1541,  4348 => 1540,  4345 => 1539,  4327 => 1538,  4324 => 1537,  4315 => 1535,  4311 => 1534,  4306 => 1533,  4304 => 1531,  4303 => 1529,  4302 => 1528,  4298 => 1527,  4291 => 1523,  4288 => 1521,  4282 => 1520,  4279 => 1519,  4277 => 1518,  4270 => 1514,  4265 => 1513,  4263 => 1512,  4246 => 1510,  4239 => 1505,  4233 => 1503,  4231 => 1502,  4227 => 1501,  4223 => 1500,  4215 => 1499,  4211 => 1498,  4199 => 1495,  4193 => 1492,  4190 => 1491,  4187 => 1490,  4184 => 1489,  4181 => 1488,  4176 => 1487,  4174 => 1486,  4169 => 1485,  4167 => 1483,  4166 => 1482,  4162 => 1481,  4157 => 1478,  4151 => 1475,  4148 => 1474,  4146 => 1473,  4142 => 1471,  4136 => 1470,  4133 => 1469,  4131 => 1468,  4126 => 1466,  4121 => 1465,  4115 => 1463,  4113 => 1462,  4104 => 1461,  4101 => 1460,  4096 => 1459,  4094 => 1458,  4090 => 1457,  4086 => 1455,  4080 => 1452,  4077 => 1451,  4075 => 1450,  4067 => 1444,  4061 => 1443,  4058 => 1442,  4056 => 1441,  4050 => 1438,  4042 => 1437,  4033 => 1436,  4030 => 1435,  4025 => 1434,  4023 => 1433,  4014 => 1427,  4009 => 1426,  4007 => 1425,  4003 => 1424,  3998 => 1421,  3996 => 1420,  3994 => 1419,  3992 => 1416,  3991 => 1415,  3990 => 1414,  3989 => 1413,  3985 => 1412,  3983 => 1411,  3979 => 1410,  3972 => 1405,  3968 => 1404,  3963 => 1401,  3961 => 1400,  3959 => 1399,  3957 => 1396,  3956 => 1395,  3955 => 1394,  3954 => 1393,  3950 => 1392,  3948 => 1391,  3944 => 1390,  3940 => 1387,  3938 => 1386,  3936 => 1385,  3932 => 1384,  3927 => 1381,  3925 => 1380,  3923 => 1379,  3921 => 1378,  3919 => 1377,  3917 => 1376,  3915 => 1374,  3913 => 1372,  3911 => 1371,  3909 => 1370,  3897 => 1368,  3893 => 1367,  3886 => 1363,  3881 => 1361,  3874 => 1359,  3869 => 1358,  3867 => 1357,  3863 => 1356,  3861 => 1355,  3857 => 1354,  3850 => 1350,  3846 => 1349,  3842 => 1348,  3837 => 1347,  3834 => 1346,  3831 => 1345,  3828 => 1344,  3825 => 1343,  3823 => 1342,  3820 => 1341,  3816 => 1340,  3808 => 1336,  3798 => 1334,  3796 => 1333,  3794 => 1332,  3792 => 1331,  3788 => 1330,  3781 => 1326,  3774 => 1325,  3772 => 1324,  3770 => 1323,  3766 => 1322,  3761 => 1319,  3755 => 1316,  3752 => 1315,  3749 => 1314,  3745 => 1311,  3739 => 1309,  3737 => 1308,  3731 => 1306,  3729 => 1305,  3727 => 1304,  3723 => 1302,  3717 => 1299,  3714 => 1298,  3711 => 1297,  3706 => 1295,  3704 => 1294,  3702 => 1293,  3698 => 1292,  3690 => 1287,  3686 => 1285,  3682 => 1284,  3676 => 1280,  3669 => 1276,  3665 => 1275,  3661 => 1273,  3658 => 1272,  3649 => 1269,  3646 => 1268,  3641 => 1267,  3637 => 1265,  3628 => 1263,  3624 => 1262,  3621 => 1261,  3619 => 1260,  3614 => 1259,  3612 => 1258,  3609 => 1257,  3606 => 1256,  3597 => 1253,  3594 => 1252,  3589 => 1251,  3583 => 1248,  3580 => 1247,  3578 => 1246,  3570 => 1245,  3568 => 1244,  3564 => 1243,  3559 => 1239,  3557 => 1238,  3553 => 1237,  3548 => 1233,  3546 => 1232,  3542 => 1231,  3536 => 1227,  3527 => 1225,  3523 => 1224,  3518 => 1223,  3516 => 1222,  3511 => 1220,  3508 => 1219,  3505 => 1217,  3503 => 1216,  3501 => 1215,  3497 => 1214,  3492 => 1211,  3488 => 1210,  3483 => 1207,  3478 => 1206,  3474 => 1205,  3471 => 1204,  3465 => 1203,  3457 => 1201,  3454 => 1200,  3450 => 1199,  3447 => 1198,  3445 => 1197,  3441 => 1196,  3435 => 1192,  3429 => 1190,  3423 => 1188,  3420 => 1187,  3413 => 1185,  3408 => 1182,  3403 => 1181,  3401 => 1180,  3398 => 1179,  3394 => 1178,  3389 => 1174,  3386 => 1173,  3382 => 1172,  3377 => 1168,  3374 => 1167,  3370 => 1166,  3362 => 1162,  3359 => 1161,  3341 => 1159,  3339 => 1158,  3336 => 1157,  3332 => 1156,  3324 => 1151,  3321 => 1150,  3318 => 1149,  3314 => 1148,  3306 => 1143,  3303 => 1142,  3300 => 1141,  3296 => 1140,  3292 => 1137,  3289 => 1136,  3287 => 1135,  3285 => 1134,  3283 => 1133,  3281 => 1132,  3279 => 1131,  3275 => 1130,  3271 => 1127,  3268 => 1126,  3266 => 1125,  3264 => 1124,  3262 => 1123,  3260 => 1122,  3258 => 1121,  3254 => 1120,  3248 => 1117,  3243 => 1116,  3239 => 1115,  3233 => 1112,  3228 => 1111,  3224 => 1110,  3219 => 1107,  3213 => 1104,  3210 => 1103,  3208 => 1102,  3205 => 1101,  3202 => 1099,  3199 => 1097,  3197 => 1096,  3195 => 1095,  3193 => 1094,  3191 => 1092,  3189 => 1091,  3186 => 1090,  3180 => 1087,  3177 => 1086,  3175 => 1085,  3172 => 1084,  3170 => 1083,  3167 => 1082,  3163 => 1081,  3156 => 1076,  3154 => 1074,  3153 => 1072,  3152 => 1071,  3146 => 1068,  3142 => 1066,  3139 => 1064,  3136 => 1062,  3134 => 1061,  3132 => 1057,  3130 => 1056,  3126 => 1055,  3120 => 1052,  3113 => 1048,  3108 => 1046,  3104 => 1045,  3099 => 1042,  3096 => 1040,  3093 => 1038,  3091 => 1037,  3088 => 1036,  3084 => 1035,  3073 => 1027,  3069 => 1026,  3065 => 1025,  3061 => 1023,  3059 => 1022,  3055 => 1020,  3052 => 1019,  3048 => 1018,  3040 => 1013,  3035 => 1012,  3033 => 1011,  3031 => 1010,  3025 => 1007,  3023 => 1006,  3018 => 1005,  3016 => 1003,  3013 => 1002,  3011 => 1000,  3009 => 999,  3007 => 998,  3005 => 993,  3004 => 992,  2997 => 988,  2993 => 986,  2989 => 985,  2983 => 980,  2981 => 979,  2979 => 976,  2978 => 975,  2977 => 974,  2976 => 973,  2973 => 971,  2970 => 970,  2968 => 969,  2965 => 968,  2960 => 966,  2958 => 965,  2956 => 964,  2953 => 962,  2950 => 961,  2946 => 960,  2941 => 957,  2935 => 955,  2929 => 953,  2927 => 952,  2923 => 951,  2919 => 948,  2914 => 945,  2903 => 943,  2899 => 942,  2895 => 941,  2890 => 939,  2885 => 937,  2881 => 935,  2875 => 933,  2873 => 932,  2867 => 928,  2864 => 927,  2855 => 924,  2848 => 923,  2845 => 922,  2842 => 921,  2839 => 920,  2836 => 919,  2833 => 918,  2829 => 917,  2822 => 916,  2820 => 915,  2816 => 914,  2810 => 910,  2801 => 907,  2780 => 906,  2776 => 905,  2772 => 903,  2768 => 901,  2758 => 897,  2748 => 896,  2745 => 895,  2741 => 894,  2738 => 893,  2736 => 892,  2731 => 891,  2727 => 890,  2723 => 837,  2717 => 883,  2710 => 881,  2703 => 879,  2699 => 877,  2696 => 876,  2690 => 874,  2684 => 872,  2682 => 871,  2679 => 870,  2676 => 869,  2674 => 868,  2671 => 867,  2667 => 866,  2662 => 864,  2658 => 862,  2654 => 861,  2649 => 858,  2634 => 856,  2628 => 854,  2622 => 851,  2616 => 848,  2612 => 846,  2610 => 845,  2607 => 844,  2590 => 843,  2586 => 842,  2576 => 838,  2573 => 837,  2569 => 836,  2565 => 800,  2559 => 830,  2549 => 826,  2545 => 824,  2541 => 823,  2533 => 817,  2525 => 816,  2521 => 814,  2517 => 812,  2515 => 811,  2503 => 801,  2500 => 800,  2496 => 799,  2489 => 792,  2480 => 789,  2476 => 788,  2469 => 783,  2466 => 782,  2462 => 781,  2456 => 776,  2447 => 772,  2444 => 771,  2440 => 770,  2434 => 766,  2426 => 760,  2421 => 757,  2415 => 754,  2410 => 752,  2403 => 748,  2399 => 746,  2397 => 745,  2391 => 742,  2387 => 741,  2384 => 740,  2379 => 737,  2369 => 734,  2365 => 733,  2362 => 731,  2360 => 730,  2354 => 728,  2352 => 727,  2350 => 725,  2347 => 723,  2343 => 722,  2335 => 718,  2329 => 716,  2327 => 715,  2323 => 714,  2319 => 709,  2317 => 708,  2310 => 707,  2308 => 706,  2306 => 705,  2302 => 704,  2297 => 700,  2295 => 699,  2291 => 698,  2289 => 697,  2286 => 695,  2284 => 694,  2280 => 693,  2278 => 692,  2276 => 691,  2274 => 690,  2270 => 689,  2265 => 686,  2260 => 683,  2258 => 682,  2256 => 681,  2254 => 680,  2240 => 679,  2237 => 678,  2233 => 676,  2231 => 675,  2229 => 673,  2227 => 671,  2212 => 670,  2210 => 669,  2207 => 668,  2204 => 667,  2201 => 666,  2198 => 665,  2195 => 664,  2192 => 663,  2189 => 662,  2186 => 661,  2183 => 660,  2180 => 659,  2177 => 658,  2175 => 657,  2171 => 656,  2167 => 653,  2163 => 652,  2159 => 649,  2155 => 648,  2151 => 645,  2149 => 644,  2145 => 642,  2136 => 633,  2119 => 630,  2115 => 629,  2111 => 628,  2108 => 627,  2091 => 626,  2085 => 622,  2081 => 621,  2077 => 620,  2069 => 615,  2063 => 612,  2058 => 611,  2054 => 610,  2043 => 606,  2041 => 605,  2037 => 604,  2035 => 603,  2031 => 602,  2027 => 599,  2025 => 579,  2019 => 595,  2005 => 594,  1997 => 593,  1993 => 591,  1988 => 590,  1984 => 589,  1980 => 588,  1976 => 587,  1972 => 586,  1967 => 585,  1964 => 584,  1947 => 583,  1943 => 582,  1923 => 581,  1920 => 580,  1917 => 579,  1913 => 578,  1909 => 553,  1906 => 575,  1899 => 571,  1893 => 568,  1889 => 567,  1884 => 565,  1880 => 563,  1878 => 562,  1873 => 560,  1867 => 557,  1863 => 556,  1859 => 554,  1856 => 553,  1852 => 552,  1848 => 536,  1843 => 547,  1838 => 545,  1833 => 544,  1831 => 543,  1827 => 542,  1821 => 539,  1817 => 537,  1814 => 536,  1810 => 535,  1806 => 521,  1801 => 531,  1783 => 524,  1780 => 523,  1777 => 522,  1774 => 521,  1770 => 520,  1766 => 517,  1761 => 514,  1752 => 511,  1747 => 509,  1744 => 508,  1740 => 507,  1736 => 506,  1730 => 503,  1725 => 501,  1717 => 495,  1715 => 494,  1712 => 493,  1703 => 490,  1699 => 489,  1696 => 488,  1693 => 487,  1690 => 486,  1688 => 485,  1685 => 484,  1682 => 483,  1679 => 482,  1675 => 481,  1670 => 479,  1666 => 478,  1662 => 475,  1657 => 472,  1646 => 470,  1642 => 469,  1638 => 468,  1632 => 465,  1627 => 463,  1619 => 457,  1617 => 456,  1614 => 455,  1598 => 453,  1596 => 452,  1593 => 450,  1590 => 449,  1588 => 448,  1585 => 447,  1582 => 446,  1579 => 445,  1562 => 444,  1557 => 442,  1553 => 441,  1549 => 438,  1546 => 436,  1544 => 435,  1540 => 434,  1534 => 430,  1525 => 427,  1521 => 426,  1500 => 425,  1496 => 424,  1492 => 422,  1488 => 420,  1478 => 416,  1468 => 415,  1465 => 414,  1461 => 413,  1458 => 412,  1456 => 411,  1452 => 410,  1447 => 409,  1443 => 408,  1439 => 405,  1435 => 403,  1418 => 401,  1415 => 400,  1398 => 399,  1395 => 398,  1392 => 397,  1388 => 394,  1382 => 392,  1380 => 391,  1376 => 390,  1368 => 389,  1364 => 387,  1360 => 384,  1354 => 382,  1351 => 381,  1346 => 379,  1341 => 377,  1339 => 376,  1331 => 375,  1327 => 373,  1324 => 372,  1322 => 371,  1319 => 370,  1315 => 369,  1310 => 365,  1293 => 363,  1276 => 362,  1273 => 361,  1267 => 359,  1263 => 358,  1258 => 354,  1252 => 351,  1251 => 350,  1250 => 349,  1249 => 348,  1245 => 347,  1241 => 346,  1238 => 344,  1232 => 341,  1231 => 340,  1230 => 339,  1229 => 338,  1225 => 337,  1223 => 336,  1221 => 335,  1217 => 334,  1213 => 331,  1211 => 330,  1207 => 329,  1201 => 326,  1199 => 325,  1195 => 324,  1190 => 321,  1186 => 320,  1182 => 319,  1176 => 318,  1173 => 317,  1170 => 316,  1167 => 315,  1164 => 314,  1161 => 313,  1158 => 312,  1155 => 311,  1152 => 310,  1150 => 309,  1147 => 308,  1144 => 307,  1142 => 306,  1138 => 305,  1134 => 302,  1132 => 301,  1128 => 300,  1124 => 297,  1120 => 296,  1118 => 295,  1114 => 294,  1108 => 289,  1105 => 288,  1097 => 287,  1092 => 285,  1090 => 284,  1088 => 283,  1085 => 281,  1083 => 280,  1079 => 279,  1073 => 274,  1071 => 273,  1069 => 271,  1068 => 270,  1067 => 269,  1066 => 268,  1061 => 266,  1059 => 265,  1057 => 264,  1054 => 262,  1052 => 261,  1048 => 260,  1044 => 257,  1040 => 256,  1038 => 255,  1034 => 254,  1029 => 250,  1027 => 249,  1025 => 248,  1023 => 247,  1021 => 246,  1017 => 245,  1015 => 244,  1012 => 242,  1010 => 241,  1006 => 240,  999 => 234,  997 => 233,  995 => 232,  991 => 231,  987 => 228,  983 => 226,  977 => 223,  974 => 222,  972 => 221,  970 => 220,  964 => 217,  961 => 216,  958 => 215,  956 => 214,  953 => 213,  949 => 212,  944 => 209,  942 => 208,  940 => 207,  938 => 206,  934 => 205,  926 => 199,  924 => 198,  919 => 196,  917 => 195,  914 => 194,  911 => 193,  908 => 192,  905 => 191,  903 => 190,  900 => 189,  895 => 187,  890 => 186,  887 => 185,  885 => 184,  880 => 183,  876 => 181,  874 => 180,  857 => 179,  855 => 178,  851 => 174,  848 => 171,  847 => 170,  846 => 169,  844 => 168,  841 => 167,  838 => 165,  835 => 164,  832 => 162,  830 => 161,  828 => 160,  824 => 159,  819 => 139,  813 => 152,  810 => 151,  807 => 150,  804 => 149,  801 => 148,  798 => 147,  795 => 146,  792 => 145,  789 => 144,  786 => 143,  783 => 142,  781 => 141,  778 => 140,  775 => 139,  773 => 138,  769 => 137,  762 => 133,  757 => 132,  754 => 131,  751 => 130,  747 => 129,  740 => 125,  735 => 124,  732 => 123,  729 => 122,  725 => 121,  719 => 113,  717 => 112,  713 => 110,  711 => 109,  709 => 108,  707 => 106,  705 => 105,  703 => 104,  701 => 102,  699 => 101,  697 => 100,  686 => 99,  682 => 98,  678 => 93,  674 => 92,  672 => 91,  668 => 90,  662 => 87,  656 => 84,  651 => 83,  649 => 82,  647 => 81,  643 => 80,  639 => 77,  635 => 76,  631 => 75,  627 => 72,  624 => 71,  621 => 70,  618 => 69,  616 => 68,  612 => 67,  605 => 64,  602 => 63,  599 => 62,  596 => 61,  593 => 60,  590 => 59,  587 => 58,  583 => 57,  579 => 1639,  577 => 1625,  575 => 1585,  572 => 1584,  570 => 1574,  567 => 1573,  565 => 1527,  563 => 1481,  561 => 1424,  559 => 1410,  556 => 1409,  554 => 1404,  551 => 1403,  549 => 1390,  546 => 1389,  544 => 1384,  541 => 1383,  539 => 1367,  536 => 1366,  534 => 1354,  531 => 1353,  529 => 1340,  526 => 1339,  524 => 1330,  521 => 1329,  519 => 1322,  516 => 1321,  514 => 1292,  511 => 1291,  509 => 1284,  507 => 1243,  505 => 1237,  503 => 1231,  501 => 1214,  498 => 1213,  496 => 1210,  494 => 1196,  492 => 1178,  489 => 1177,  487 => 1172,  484 => 1171,  482 => 1166,  479 => 1165,  477 => 1156,  474 => 1155,  472 => 1148,  469 => 1147,  467 => 1140,  465 => 1130,  463 => 1120,  461 => 1115,  458 => 1114,  456 => 1110,  453 => 1109,  451 => 1081,  448 => 1080,  446 => 1055,  443 => 1054,  441 => 1035,  438 => 1034,  436 => 1018,  433 => 1017,  431 => 985,  428 => 984,  426 => 960,  423 => 959,  421 => 951,  418 => 950,  416 => 914,  413 => 913,  411 => 890,  408 => 888,  406 => 836,  403 => 835,  401 => 799,  398 => 798,  395 => 796,  393 => 781,  390 => 780,  388 => 722,  385 => 721,  383 => 714,  380 => 713,  377 => 711,  375 => 704,  372 => 703,  370 => 689,  367 => 688,  365 => 656,  362 => 655,  360 => 652,  357 => 651,  355 => 648,  352 => 647,  350 => 642,  347 => 641,  344 => 639,  342 => 610,  340 => 602,  338 => 578,  335 => 577,  333 => 552,  330 => 551,  328 => 535,  325 => 534,  323 => 520,  320 => 519,  318 => 478,  315 => 477,  313 => 441,  310 => 440,  308 => 434,  305 => 433,  303 => 408,  300 => 407,  298 => 369,  295 => 368,  293 => 358,  290 => 357,  288 => 334,  285 => 333,  283 => 329,  280 => 328,  278 => 324,  275 => 323,  273 => 305,  270 => 304,  268 => 300,  266 => 294,  264 => 279,  261 => 278,  259 => 260,  257 => 254,  255 => 240,  252 => 239,  250 => 231,  247 => 230,  245 => 212,  242 => 211,  240 => 205,  237 => 204,  235 => 159,  232 => 156,  230 => 137,  227 => 136,  225 => 129,  222 => 128,  220 => 121,  217 => 116,  215 => 98,  212 => 97,  210 => 90,  208 => 80,  206 => 75,  204 => 67,  202 => 57,  199 => 56,  196 => 54,  193 => 52,  190 => 46,  187 => 34,  184 => 25,  70 => 51,  63 => 50,  56 => 49,  49 => 48,  30 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig");
    }
}
