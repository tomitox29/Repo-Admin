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

/* @PrestaShop/Admin/Component/Layout/toolbar.html.twig */
class __TwigTemplate_467a5b7b492aa7f3b63b364d8664185c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pageBreadcrumb' => [$this, 'block_pageBreadcrumb'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'toolbarBox' => [$this, 'block_toolbarBox'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<div class=\"header-toolbar d-print-none\">
  ";
        // line 26
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("MultistoreHeader");
        echo "
  <div class=\"container-fluid\">

    ";
        // line 29
        $this->displayBlock('pageBreadcrumb', $context, $blocks);
        // line 46
        echo "
    ";
        // line 47
        $context["persistent_help_btn"] = ((array_key_exists("help_link", $context) &&  !(($context["help_link"] ?? null) === false)) && twig_test_empty(($context["layoutHeaderToolbarBtn"] ?? null)));
        // line 48
        echo "    <div class=\"title-row ";
        if (($context["persistent_help_btn"] ?? null)) {
            echo "flex-nowrap flex-md-wrap";
        }
        echo "\">
      ";
        // line 49
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 54
        echo "      ";
        $this->displayBlock('toolbarBox', $context, $blocks);
        // line 134
        echo "    </div>
  </div>

  ";
        // line 137
        if ((array_key_exists("headerTabContent", $context) && ($context["headerTabContent"] ?? null))) {
            // line 138
            echo "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headerTabContent"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tabContent"]) {
                // line 140
                echo "        ";
                echo twig_escape_filter($this->env, $context["tabContent"], "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabContent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "    </div>
  ";
        }
        // line 144
        echo "
  ";
        // line 145
        if ((twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentTabLevel", [], "any", false, false, false, 145) >= 3)) {
            // line 146
            echo "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
        ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "navigationTabs", [], "any", false, false, false, 148));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 149
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 149), "active", [], "any", false, false, false, 149)) {
                    // line 150
                    echo "            <li class=\"nav-item\">
              <a href=\"";
                    // line 151
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "href", [], "any", false, false, false, 151), "html", null, true);
                    echo "\" id=\"subtab-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 151), "class_name", [], "any", false, false, false, 151), "html", null, true);
                    echo "\"
                 class=\"nav-link tab ";
                    // line 152
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 152), "current", [], "any", false, false, false, 152)) {
                        echo "active current";
                    }
                    echo "\"
                 data-submenu=\"";
                    // line 153
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 153), "id_tab", [], "any", false, false, false, 153), "html", null, true);
                    echo "\">
                ";
                    // line 154
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 154), "html", null, true);
                    echo "
                <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
              </a>
            </li>
          ";
                }
                // line 161
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "      </ul>
    </div>
  ";
        }
        // line 165
        echo "
  ";
        // line 166
        if ((array_key_exists("layoutHeaderToolbarBtn", $context) &&  !twig_test_empty(($context["layoutHeaderToolbarBtn"] ?? null)))) {
            // line 167
            echo "    <div class=\"btn-floating\">
      <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\"
              aria-expanded=\"false\">
        <i class=\"material-icons\">add</i>
      </button>
      <div class=\"btn-floating-container collapse\">
        <div class=\"btn-floating-menu\">
          ";
            // line 174
            echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
            echo "

          ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layoutHeaderToolbarBtn"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
                // line 177
                echo "            ";
                if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                    // line 178
                    echo "              <a
                class=\"btn btn-floating-item ";
                    // line 179
                    if ((twig_get_attribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", true, true, false, 179) && twig_get_attribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", false, false, false, 179))) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", false, false, false, 179));
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 179) && twig_get_attribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 179))) {
                        echo " _blank";
                    }
                    echo " pointer\"";
                    if (twig_get_attribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 179)) {
                        // line 180
                        echo "                id=\"page-header-desc-floating-";
                        echo twig_escape_filter($this->env, ((array_key_exists("table", $context)) ? (_twig_default_filter(($context["table"] ?? null), "configuration")) : ("configuration")), "html", null, true);
                        echo "-";
                        if (twig_get_attribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 180)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 180));
                        } else {
                            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                        }
                        echo "\"
              href=\"";
                        // line 181
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 181));
                        echo "\"";
                    }
                    // line 182
                    echo "                title=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 182)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 182), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 182));
                    }
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["btn"], "js", [], "any", true, true, false, 182) && twig_get_attribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 182))) {
                        // line 183
                        echo "              onclick=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 183), "html", null, true);
                        echo "\"";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 183) && twig_get_attribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 183))) {
                        // line 184
                        echo "                data-target=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 184), "html", null, true);
                        echo "\"
                data-toggle=\"modal\"";
                    }
                    // line 185
                    if (twig_get_attribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 185)) {
                        // line 186
                        echo "                data-toggle=\"pstooltip\"
                data-placement=\"bottom\"";
                    }
                    // line 188
                    echo "              >
                ";
                    // line 189
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 189));
                    echo "
                ";
                    // line 190
                    if ((twig_get_attribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 190) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 190)))) {
                        echo "<i class=\"material-icons\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 190), "html", null, true);
                        echo "</i>";
                    }
                    // line 191
                    echo "              </a>
            ";
                }
                // line 193
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['btn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "
          ";
            // line 195
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 195))) {
                // line 196
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "sidebarEnabled", [], "any", false, false, false, 196)) {
                    // line 197
                    echo "              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
                 title=\"";
                    // line 198
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    echo "\"
                 data-toggle=\"sidebar\"
                 data-target=\"#right-sidebar\"
                 data-url=\"";
                    // line 201
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 201));
                    echo "\"
              >
                ";
                    // line 203
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    echo "
              </a>
            ";
                } else {
                    // line 206
                    echo "              <a class=\"btn btn-floating-item btn-help\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 206));
                    echo "\"
                 title=\"";
                    // line 207
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    echo "\">
                ";
                    // line 208
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    echo "
              </a>
            ";
                }
                // line 211
                echo "          ";
            }
            // line 212
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 216
        echo "  ";
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardTop");
        echo "
</div>
";
    }

    // line 29
    public function block_pageBreadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "      ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 30), "container", [], "any", true, true, false, 30) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 30), "tab", [], "any", true, true, false, 30))) {
            // line 31
            echo "        <nav aria-label=\"Breadcrumb\">
          <ol class=\"breadcrumb\">
            ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 33), "container", [], "any", true, true, false, 33) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 33), "container", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33) != ""))) {
                // line 34
                echo "              <li class=\"breadcrumb-item\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 34), "container", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34));
                echo "</li>
            ";
            }
            // line 36
            echo "
            ";
            // line 37
            if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 37), "container", [], "any", true, true, false, 37) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 37), "tab", [], "any", true, true, false, 37)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 37), "tab", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37) != "")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 37), "container", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 37), "tab", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 37), "tab", [], "any", false, false, false, 37), "href", [], "any", false, false, false, 37) != ""))) {
                // line 38
                echo "              <li class=\"breadcrumb-item active\">
                <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 39), "tab", [], "any", false, false, false, 39), "href", [], "any", false, false, false, 39));
                echo "\" aria-current=\"page\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 39), "tab", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39));
                echo "</a>
              </li>
            ";
            }
            // line 42
            echo "          </ol>
        </nav>
      ";
        }
        // line 45
        echo "    ";
    }

    // line 49
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "          <h1 class=\"title\">
            ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "title", [], "any", false, false, false, 51));
        echo "
          </h1>
      ";
    }

    // line 54
    public function block_toolbarBox($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "        <div class=\"toolbar-icons";
        if (($context["persistent_help_btn"] ?? null)) {
            echo " toolbar-icons--persistent";
        }
        echo "\">
          <div class=\"wrapper\">
            ";
        // line 57
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
        echo "
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layoutHeaderToolbarBtn"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
            // line 59
            echo "              ";
            if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                // line 60
                echo "                ";
                // line 61
                echo "                <a
                  id=\"page-header-desc-";
                // line 62
                echo twig_escape_filter($this->env, ((array_key_exists("table", $context)) ? (_twig_default_filter(($context["table"] ?? null), "configuration")) : ("configuration")), "html", null, true);
                echo "-";
                if (twig_get_attribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 62)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 62));
                } else {
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                }
                echo "\"
                  class=\"btn ";
                // line 63
                if ((twig_get_attribute($this->env, $this->source, $context["btn"], "class", [], "any", true, true, false, 63) && twig_get_attribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 63))) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 63));
                } else {
                    echo "btn-primary";
                }
                if ((twig_get_attribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 63) && twig_get_attribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 63))) {
                    echo " _blank";
                }
                if ((twig_get_attribute($this->env, $this->source, $context["btn"], "disabled", [], "any", true, true, false, 63) && twig_get_attribute($this->env, $this->source, $context["btn"], "disabled", [], "any", false, false, false, 63))) {
                    echo " disabled auto-pointer-events";
                }
                echo " pointer\"
                  ";
                // line 64
                if (twig_get_attribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 64)) {
                    // line 65
                    echo "                    href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 65));
                    echo "\"
                  ";
                }
                // line 67
                echo "                  title=\"";
                if (twig_get_attribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 67)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 67), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 67));
                }
                echo "\"
                  ";
                // line 68
                if ((twig_get_attribute($this->env, $this->source, $context["btn"], "js", [], "any", true, true, false, 68) && twig_get_attribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 68))) {
                    echo "onclick=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 68), "html", null, true);
                    echo "\" ";
                }
                // line 69
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 69) && twig_get_attribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 69))) {
                    // line 70
                    echo "                    data-target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 70), "html", null, true);
                    echo "\"
                    data-toggle=\"modal\"
                  ";
                }
                // line 73
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 73)) {
                    // line 74
                    echo "                    data-toggle=\"pstooltip\"
                    data-placement=\"bottom\"
                  ";
                }
                // line 77
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", true, true, false, 77) && twig_get_attribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", false, false, false, 77))) {
                    // line 78
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", false, false, false, 78));
                    foreach ($context['_seq'] as $context["attribute_name"] => $context["attribute_value"]) {
                        // line 79
                        echo "                      data-";
                        echo twig_escape_filter($this->env, $context["attribute_name"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attribute_value"], "html", null, true);
                        echo "\"
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attribute_name'], $context['attribute_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo "                  ";
                }
                // line 82
                echo "                >
                  ";
                // line 83
                if ((twig_get_attribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 83) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 83)))) {
                    echo "<i class=\"material-icons\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 83), "html", null, true);
                    echo "</i>";
                }
                // line 84
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 84));
                echo "
                </a>
              ";
            }
            // line 87
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['btn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["layoutHeaderToolbarBtn"] ?? null), "modules-list", [], "array", true, true, false, 88)) {
            // line 89
            echo "              ";
            // line 90
            echo "              <a
                class=\"btn btn-outline-secondary ";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["layoutHeaderToolbarBtn"] ?? null), "modules-list", [], "array", false, true, false, 91), "target", [], "any", true, true, false, 91) && twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["layoutHeaderToolbarBtn"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["modules-list"] ?? null) : null), "target", [], "any", false, false, false, 91))) {
                echo " _blank";
            }
            echo "\"
                id=\"page-header-desc-";
            // line 92
            echo twig_escape_filter($this->env, ((array_key_exists("table", $context)) ? (_twig_default_filter(($context["table"] ?? null), "configuration")) : ("configuration")), "html", null, true);
            echo "-";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["layoutHeaderToolbarBtn"] ?? null), "modules-list", [], "array", false, true, false, 92), "imgclass", [], "any", true, true, false, 92)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["layoutHeaderToolbarBtn"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["modules-list"] ?? null) : null), "imgclass", [], "any", false, false, false, 92), "html", null, true);
            } else {
                echo "modules-list";
            }
            echo "\"
                ";
            // line 93
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["layoutHeaderToolbarBtn"] ?? null), "modules-list", [], "array", false, true, false, 93), "href", [], "any", true, true, false, 93)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["layoutHeaderToolbarBtn"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["modules-list"] ?? null) : null), "href", [], "any", false, false, false, 93), "html", null, true);
                echo "\"";
            }
            // line 94
            echo "                title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["layoutHeaderToolbarBtn"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["modules-list"] ?? null) : null), "desc", [], "any", false, false, false, 94), "html", null, true);
            echo "\"
                ";
            // line 95
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["layoutHeaderToolbarBtn"] ?? null), "modules-list", [], "array", false, true, false, 95), "js", [], "any", true, true, false, 95) && twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["layoutHeaderToolbarBtn"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["modules-list"] ?? null) : null), "js", [], "any", false, false, false, 95))) {
                echo "onclick=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["layoutHeaderToolbarBtn"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["modules-list"] ?? null) : null), "js", [], "any", false, false, false, 95), "html", null, true);
                echo "\"";
            }
            // line 96
            echo "              >
                ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["layoutHeaderToolbarBtn"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["modules-list"] ?? null) : null), "desc", [], "any", false, false, false, 97), "html", null, true);
            echo "
              </a>
            ";
        }
        // line 100
        echo "
            ";
        // line 101
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 101))) {
            // line 102
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "sidebarEnabled", [], "any", false, false, false, 102)) {
                // line 103
                echo "                <a class=\"toolbar-button btn-sidebar d-inline-block d-md-none\" href=\"#\"
                   title=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                echo "\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 107));
                echo "\"
                   id=\"product_form_open_help_mobile\"
                >
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help btn-sidebar d-none d-md-inline-block\" href=\"#\"
                   title=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                echo "\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 116));
                echo "\"
                   id=\"product_form_open_help\"
                >
                  ";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                echo "
                </a>
              ";
            } else {
                // line 122
                echo "                <a class=\"toolbar-button d-inline-block d-md-none\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 122));
                echo "\"
                   title=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                echo "\">
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help d-none d-md-inline-block\" href=\"";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 126));
                echo "\"
                   title=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                echo "
                </a>
              ";
            }
            // line 130
            echo "            ";
        }
        // line 131
        echo "          </div>
        </div>
      ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/Layout/toolbar.html.twig";
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
        return array (  630 => 131,  627 => 130,  619 => 127,  615 => 126,  609 => 123,  604 => 122,  598 => 119,  592 => 116,  586 => 113,  577 => 107,  571 => 104,  568 => 103,  565 => 102,  563 => 101,  560 => 100,  554 => 97,  551 => 96,  545 => 95,  540 => 94,  534 => 93,  524 => 92,  518 => 91,  515 => 90,  513 => 89,  510 => 88,  504 => 87,  497 => 84,  491 => 83,  488 => 82,  485 => 81,  474 => 79,  469 => 78,  466 => 77,  461 => 74,  458 => 73,  451 => 70,  448 => 69,  442 => 68,  433 => 67,  427 => 65,  425 => 64,  411 => 63,  401 => 62,  398 => 61,  396 => 60,  393 => 59,  389 => 58,  385 => 57,  377 => 55,  373 => 54,  366 => 51,  363 => 50,  359 => 49,  355 => 45,  350 => 42,  342 => 39,  339 => 38,  337 => 37,  334 => 36,  328 => 34,  326 => 33,  322 => 31,  319 => 30,  315 => 29,  307 => 216,  301 => 212,  298 => 211,  292 => 208,  288 => 207,  283 => 206,  277 => 203,  272 => 201,  266 => 198,  263 => 197,  260 => 196,  258 => 195,  255 => 194,  249 => 193,  245 => 191,  239 => 190,  235 => 189,  232 => 188,  228 => 186,  226 => 185,  220 => 184,  214 => 183,  205 => 182,  201 => 181,  190 => 180,  180 => 179,  177 => 178,  174 => 177,  170 => 176,  165 => 174,  156 => 167,  154 => 166,  151 => 165,  146 => 162,  140 => 161,  130 => 154,  126 => 153,  120 => 152,  114 => 151,  111 => 150,  108 => 149,  104 => 148,  100 => 146,  98 => 145,  95 => 144,  91 => 142,  82 => 140,  78 => 139,  75 => 138,  73 => 137,  68 => 134,  65 => 54,  63 => 49,  56 => 48,  54 => 47,  51 => 46,  49 => 29,  43 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/toolbar.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/toolbar.html.twig");
    }
}
