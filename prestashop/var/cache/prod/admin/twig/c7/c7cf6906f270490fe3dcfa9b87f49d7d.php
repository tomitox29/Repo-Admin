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

/* @PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig */
class __TwigTemplate_b8e4bafc40160f4fd3cf232144ba73a4 extends Template
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
        echo "<div class=\"bootstrap\">
  <div class=\"page-head ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentTabLevel", [], "any", false, false, false, 26) >= 3)) {
            echo "with-tabs";
        }
        echo "\">
    <div class=\"wrapper clearfix\">
      ";
        // line 28
        $this->displayBlock('pageBreadcrumb', $context, $blocks);
        // line 47
        echo "
      ";
        // line 48
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 61
        echo "
      ";
        // line 62
        $this->displayBlock('toolbarBox', $context, $blocks);
        // line 110
        echo "  </div>

    ";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentTabLevel", [], "any", false, false, false, 112) >= 3)) {
            // line 113
            echo "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav\">
        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "navigationTabs", [], "any", false, false, false, 115));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 116
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 116), "active", [], "any", false, false, false, 116)) {
                    // line 117
                    echo "          <li>
            <a
              href=\"";
                    // line 119
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "href", [], "any", false, false, false, 119), "html", null, true);
                    echo "\"
              id=\"subtab-";
                    // line 120
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 120), "class_name", [], "any", false, false, false, 120), "html", null, true);
                    echo "\"
              ";
                    // line 121
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 121), "current", [], "any", false, false, false, 121)) {
                        echo "class=\"current\"";
                    }
                    // line 122
                    echo "              data-submenu=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 122), "id_tab", [], "any", false, false, false, 122), "html", null, true);
                    echo "\">
              ";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 123), "html", null, true);
                    echo "
              <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
            </a>
          </li>
          ";
                }
                // line 130
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "      </ul>
    </div>
    ";
        }
        // line 134
        echo "  </div>
  ";
        // line 135
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardTop");
        echo "
</div>
";
    }

    // line 28
    public function block_pageBreadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "      <ul class=\"breadcrumb page-breadcrumb\">
        ";
        // line 31
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 31), "container", [], "any", true, true, false, 31) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 31), "container", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31) != ""))) {
            // line 32
            echo "        <li class=\"breadcrumb-container\">
          ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 33), "container", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33));
            echo "
        </li>
        ";
        }
        // line 36
        echo "
        ";
        // line 38
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 38), "tab", [], "any", true, true, false, 38) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 38), "tab", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38) != ""))) {
            // line 39
            echo "        <li class=\"breadcrumb-current\">
          ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 40), "tab", [], "any", false, false, false, 40), "href", [], "any", false, false, false, 40) != "")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 40), "tab", [], "any", false, false, false, 40), "href", [], "any", false, false, false, 40));
                echo "\">";
            }
            // line 41
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 41), "tab", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41));
            echo "
          ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 42), "tab", [], "any", false, false, false, 42), "href", [], "any", false, false, false, 42) != "")) {
                echo "</a>";
            }
            // line 43
            echo "        </li>
        ";
        }
        // line 45
        echo "      </ul>
      ";
    }

    // line 48
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "      <h1 class=\"page-title\">
        ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 50), "back", [], "any", true, true, false, 50)) {
            // line 51
            echo "          ";
            $context["backButton"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 51), "back", [], "any", false, false, false, 51);
            // line 52
            echo "          <a id=\"page-header-desc-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "table", [], "any", false, false, false, 52), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["backButton"] ?? null), "imgclass", [], "any", true, true, false, 52)) {
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["backButton"] ?? null), "imgclass", [], "any", false, false, false, 52), "html", null, true);
            }
            echo "\"
             class=\"page-header-toolbar-back";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, ($context["backButton"] ?? null), "target", [], "any", true, true, false, 53) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["backButton"] ?? null), "target", [], "any", false, false, false, 53)))) {
                echo " _blank";
            }
            echo "\"
             ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["backButton"] ?? null), "href", [], "any", true, true, false, 54)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["backButton"] ?? null), "href", [], "any", false, false, false, 54));
                echo "\"";
            }
            // line 55
            echo "             title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["backButton"] ?? null), "desc", [], "any", false, false, false, 55), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["backButton"] ?? null), "js", [], "any", true, true, false, 55) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["backButton"] ?? null), "js", [], "any", false, false, false, 55)))) {
                echo " onclick=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["backButton"] ?? null), "js", [], "any", false, false, false, 55), "html", null, true);
                echo "\"";
            }
            echo ">
          </a>
        ";
        }
        // line 58
        echo "        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "title", [], "any", false, false, false, 58));
        echo "
      </h1>
      ";
    }

    // line 62
    public function block_toolbarBox($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "      <div class=\"page-bar toolbarBox\">
        <div class=\"btn-toolbar\">
          <a href=\"#\" class=\"toolbar_btn dropdown-toolbar navbar-toggle\" data-toggle=\"collapse\"
             data-target=\"#toolbar-nav\"><i class=\"process-icon-dropdown\"></i>
            <div>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Menu", [], "Admin.Navigation.Menu"), "html", null, true);
        echo "</div>
          </a>
          <ul id=\"toolbar-nav\" class=\"nav nav-pills pull-right collapse navbar-collapse\">
            ";
        // line 70
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
        echo "
            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
            // line 72
            echo "              ";
            if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                // line 73
                echo "                <li>
                  <a
                    id=\"page-header-desc-";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "table", [], "any", false, false, false, 75), "html", null, true);
                echo "-";
                if (twig_get_attribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 75)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 75));
                } else {
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                }
                echo "\"
                    class=\"toolbar_btn";
                // line 76
                if ((twig_get_attribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 76) && twig_get_attribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 76))) {
                    echo " _blank";
                }
                echo " pointer\"
                    ";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 77)) {
                    // line 78
                    echo "                      href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 78));
                    echo "\"
                    ";
                }
                // line 80
                echo "                    title=\"";
                if (twig_get_attribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 80)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 80), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 80));
                }
                echo "\"
                    ";
                // line 81
                if ((twig_get_attribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 81) && twig_get_attribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 81))) {
                    // line 82
                    echo "                      data-target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 82), "html", null, true);
                    echo "\"
                      data-toggle=\"modal\"
                    ";
                }
                // line 85
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 85)) {
                    // line 86
                    echo "                      data-toggle=\"pstooltip\"
                      data-placement=\"bottom\"
                    ";
                }
                // line 89
                echo "                    data-role=\"page-header-desc-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "table", [], "any", false, false, false, 89), "html", null, true);
                echo "-link\"
                  >
                    <i class=\"";
                // line 91
                if ((twig_get_attribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 91) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 91)))) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 91));
                } else {
                    echo "process-icon-";
                    if (twig_get_attribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 91)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 91));
                    } else {
                        echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    }
                }
                if (twig_get_attribute($this->env, $this->source, $context["btn"], "class", [], "any", true, true, false, 91)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 91));
                }
                echo "\"></i>
                    <div";
                // line 92
                if ((twig_get_attribute($this->env, $this->source, $context["btn"], "force_desc", [], "any", true, true, false, 92) && (twig_get_attribute($this->env, $this->source, $context["btn"], "force_desc", [], "any", false, false, false, 92) == true))) {
                    echo " class=\"locked\"";
                }
                echo ">
                      ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 93));
                echo "
                    </div>
                  </a>
                </li>
              ";
            }
            // line 98
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['btn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
            <li>
              <a class=\"toolbar_btn btn-help\" href=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 101), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
        echo "\">
                <i class=\"process-icon-help\"></i>
                <div>";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
        echo "</div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig";
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
        return array (  372 => 103,  365 => 101,  361 => 99,  355 => 98,  347 => 93,  341 => 92,  324 => 91,  318 => 89,  313 => 86,  310 => 85,  303 => 82,  301 => 81,  292 => 80,  286 => 78,  284 => 77,  278 => 76,  268 => 75,  264 => 73,  261 => 72,  257 => 71,  253 => 70,  247 => 67,  241 => 63,  237 => 62,  229 => 58,  216 => 55,  210 => 54,  204 => 53,  195 => 52,  192 => 51,  190 => 50,  187 => 49,  183 => 48,  178 => 45,  174 => 43,  170 => 42,  165 => 41,  159 => 40,  156 => 39,  153 => 38,  150 => 36,  144 => 33,  141 => 32,  138 => 31,  135 => 29,  131 => 28,  124 => 135,  121 => 134,  116 => 131,  110 => 130,  100 => 123,  95 => 122,  91 => 121,  87 => 120,  83 => 119,  79 => 117,  76 => 116,  72 => 115,  68 => 113,  66 => 112,  62 => 110,  60 => 62,  57 => 61,  55 => 48,  52 => 47,  50 => 28,  43 => 26,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/toolbar.html.twig");
    }
}
