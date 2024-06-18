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

/* @PrestaShop/Admin/Layout/legacy_layout.html.twig */
class __TwigTemplate_a9b1b144467a27f0f8bcde978c718e10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'layout_header' => [$this, 'block_layout_header'],
            'content_header' => [$this, 'block_content_header'],
            'session_alert' => [$this, 'block_session_alert'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8 ie7\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9 ie8\"> <![endif]-->
<!--[if gt IE 8]> <html class=\"no-js ie9\"> <![endif]-->
<html lang=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
<head>
  ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "</head>

<body class=\"lang-";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 37), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 37)) {
            echo " lang-rtl";
        }
        echo " ps_back-office page-sidebar ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "controllerName", [], "any", false, false, false, 37))), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 37)) {
            echo " page-sidebar-closed";
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", false, false, false, 37), false)) : (false))) {
            echo " multishop-enabled";
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 37), false)) : (false))) {
            echo " developer-mode";
        }
        echo "\"
  ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 38) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 38), "base_url", [], "any", true, true, false, 38))) {
            echo "data-base-url=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 38), "base_url", [], "any", false, false, false, 38), "html", null, true);
            echo "\"";
        }
        // line 39
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 39) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 39), "token", [], "any", true, true, false, 39))) {
            echo "data-token=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 39), "token", [], "any", false, false, false, 39), "html", null, true);
            echo "\"";
        }
        // line 40
        echo ">

";
        // line 43
        $this->displayBlock('layout_header', $context, $blocks);
        // line 123
        echo "
  <div id=\"main\">
    <div id=\"content\" class=\"bootstrap";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "displayedWithTabs", [], "any", false, false, false, 125)) {
            echo " with-tabs";
        }
        echo "\">
      ";
        // line 127
        echo "      ";
        if (($context["showContentHeader"] ?? null)) {
            // line 128
            echo "        ";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("LegacyToolbar");
            echo "
      ";
        }
        // line 130
        echo "
      ";
        // line 131
        $this->displayBlock('content_header', $context, $blocks);
        // line 136
        echo "
      ";
        // line 137
        $this->displayBlock('content', $context, $blocks);
        // line 140
        echo "    </div>
  </div>

  <div id=\"footer\" class=\"bootstrap\">
    <div class=\"col-sm-12\">
      ";
        // line 145
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeFooter", []);
        echo "
    </div>
  </div>

  ";
        // line 149
        if ( !twig_test_empty(($context["modals"] ?? null))) {
            // line 150
            echo "    <div class=\"bootstrap\">
      ";
            // line 151
            echo ($context["modals"] ?? null);
            echo "
    </div>
  ";
        }
        // line 154
        echo "</body>
</html>
";
    }

    // line 32
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("LegacyHeadTag");
        echo "
  ";
    }

    // line 43
    public function block_layout_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "  <header id=\"header\" class=\"bootstrap\">
    <nav id=\"header_infos\" role=\"navigation\">
      <i class=\"material-icons js-mobile-menu\">menu</i>

      ";
        // line 49
        echo "      <a id=\"header_logo\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "defaultTabLink", [], "any", false, false, false, 49), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop logo", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\"></a>
      <span id=\"shop_version\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "version", [], "any", false, false, false, 50), "html", null, true);
        echo "</span>

      ";
        // line 52
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("LegacyQuickAccess");
        echo "
      ";
        // line 53
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("LegacySearchForm");
        echo "

      ";
        // line 55
        if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 55), false)) : (false))) {
            // line 56
            echo "        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"debug-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your shop is in debug mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            echo "</strong></p><p class=&quot;text-left&quot;>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.", ["[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Navigation.Notification"), "html", null, true);
            echo "</p>\"
             href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_performance");
            echo "\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Navigation.Header"), "html", null, true);
            echo "</span>
          </a>
        </div>
      ";
        }
        // line 70
        echo "
      ";
        // line 71
        if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "maintenanceModeEnabled", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "maintenanceModeEnabled", [], "any", false, false, false, 71), false)) : (false))) {
            // line 72
            echo "        ";
            ob_start(function () { return ''; });
            // line 73
            echo "          <p class=\"text-left\">
            <strong>
              ";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your store is in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            echo "
            </strong>
          </p>
          <p class=\"text-left\">
            ";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your visitors and customers cannot access your store while in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            echo "
          </p>
          <p class=\"text-left\">
            ";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage the maintenance settings, go to Shop Parameters > Maintenance tab.", [], "Admin.Navigation.Notification"), "html", null, true);
            echo "
          </p>
          ";
            // line 84
            if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", false, false, false, 84), false)) : (false))) {
                // line 85
                echo "            <p class=\"text-left\">
              ";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admins can access the store front office without storing their IP.", [], "Admin.Navigation.Notification"), "html", null, true);
                echo "
            </p>
          ";
            }
            // line 89
            echo "        ";
            $context["maintenanceTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 90
            echo "        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"maintenance-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"";
            // line 96
            echo twig_escape_filter($this->env, ($context["maintenanceTitle"] ?? null), "html");
            echo "\"
             href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_maintenance");
            echo "\"
          >
            <i class=\"material-icons\"
               style=\"";
            // line 100
            if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", false, false, false, 100), false)) : (false))) {
                echo "color: #72c279;";
            }
            echo "\"
            >build</i>
            <span>";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maintenance mode", [], "Admin.Navigation.Header"), "html", null, true);
            echo "</span>
          </a>
        </div>
      ";
        }
        // line 106
        echo "
      ";
        // line 107
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("LegacyShopList");
        echo "

      ";
        // line 109
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("LegacyNotificationsCenter");
        echo "
      ";
        // line 110
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("LegacyEmployeeDropdown");
        echo "

      ";
        // line 113
        echo "      <span id=\"ajax_running\" class=\"hidden-xs\">
        <i class=\"icon-refresh icon-spin icon-fw\"></i>
      </span>

      ";
        // line 117
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeTop");
        echo "
    </nav>
  </header>

  ";
        // line 121
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("LegacyNavBar");
        echo "
";
    }

    // line 131
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "        ";
        $this->displayBlock('session_alert', $context, $blocks);
        // line 135
        echo "      ";
    }

    // line 132
    public function block_session_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "          ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("LegacySessionAlert");
        echo "
        ";
    }

    // line 137
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "        ";
        echo ($context["legacyContent"] ?? null);
        echo "
      ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Layout/legacy_layout.html.twig";
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
        return array (  366 => 138,  362 => 137,  355 => 133,  351 => 132,  347 => 135,  344 => 132,  340 => 131,  334 => 121,  327 => 117,  321 => 113,  316 => 110,  312 => 109,  307 => 107,  304 => 106,  297 => 102,  290 => 100,  284 => 97,  280 => 96,  272 => 90,  269 => 89,  263 => 86,  260 => 85,  258 => 84,  253 => 82,  247 => 79,  240 => 75,  236 => 73,  233 => 72,  231 => 71,  228 => 70,  221 => 66,  215 => 63,  209 => 62,  201 => 56,  199 => 55,  194 => 53,  190 => 52,  185 => 50,  178 => 49,  172 => 44,  168 => 43,  161 => 33,  157 => 32,  151 => 154,  145 => 151,  142 => 150,  140 => 149,  133 => 145,  126 => 140,  124 => 137,  121 => 136,  119 => 131,  116 => 130,  110 => 128,  107 => 127,  101 => 125,  97 => 123,  95 => 43,  91 => 40,  84 => 39,  78 => 38,  60 => 37,  56 => 35,  54 => 32,  49 => 30,  42 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Layout/legacy_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Layout/legacy_layout.html.twig");
    }
}
