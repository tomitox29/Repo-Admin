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

/* @PrestaShop/Admin/Layout/default_layout.html.twig */
class __TwigTemplate_e30b24577c07606a928c8f63532f6526 extends Template
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
            'core_javascript' => [$this, 'block_core_javascript'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'layout_header' => [$this, 'block_layout_header'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "setupSmarty", [(($context["layoutTitle"]) ?? ("")), ($context["metaTitle"] ?? null), ($context["lightDisplay"] ?? null)], "method", false, false, false, 26), "html", null, true);
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 28), "html", null, true);
        echo "\">
  <head>
    ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 40
        echo "  </head>
  <body class=\"lang-";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 41), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 41)) {
            echo " lang-rtl";
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "controllerName", [], "any", false, false, false, 41))), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 41)) {
            echo " page-sidebar-closed";
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", false, false, false, 41), false)) : (false))) {
            echo " multishop-enabled";
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 41), false)) : (false))) {
            echo " developer-mode";
        }
        echo "\"
    ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 42) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 42), "base_url", [], "any", true, true, false, 42))) {
            echo "data-base-url=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 42), "base_url", [], "any", false, false, false, 42), "html", null, true);
            echo "\"";
        }
        // line 43
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 43) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 43), "token", [], "any", true, true, false, 43))) {
            echo "data-token=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 43), "token", [], "any", false, false, false, 43), "html", null, true);
            echo "\"";
        }
        // line 44
        echo "  >
";
        // line 46
        $this->displayBlock('layout_header', $context, $blocks);
        // line 139
        echo "
";
        // line 141
        if (($context["showContentHeader"] ?? null)) {
            // line 142
            echo "  ";
            $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->extensionPreCreateForRender("Toolbar", twig_to_array(["layoutTitle" => ((            // line 143
array_key_exists("layoutTitle", $context)) ? (_twig_default_filter(($context["layoutTitle"] ?? null))) : ("")), "helpLink" => ((            // line 144
array_key_exists("help_link", $context)) ? (_twig_default_filter(($context["help_link"] ?? null), "")) : ("")), "enableSidebar" => ((            // line 145
array_key_exists("enableSidebar", $context)) ? (_twig_default_filter(($context["enableSidebar"] ?? null), false)) : (false))]));
            if (null !== $preRendered) {
                echo $preRendered; 
            } else {
                $preRenderEvent = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->startEmbeddedComponentRender("Toolbar", twig_to_array(["layoutTitle" => ((                // line 143
array_key_exists("layoutTitle", $context)) ? (_twig_default_filter(($context["layoutTitle"] ?? null))) : ("")), "helpLink" => ((                // line 144
array_key_exists("help_link", $context)) ? (_twig_default_filter(($context["help_link"] ?? null), "")) : ("")), "enableSidebar" => ((                // line 145
array_key_exists("enableSidebar", $context)) ? (_twig_default_filter(($context["enableSidebar"] ?? null), false)) : (false))]), $context, "Admin/Layout/default_layout.html.twig", 4725899401);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                if (!isset($embeddedContext["outerBlocks"])) {
                    $embeddedContext["outerBlocks"] = new \Symfony\UX\TwigComponent\BlockStack();
                }
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 4725899401);
                $this->loadTemplate("@PrestaShop/Admin/Layout/default_layout.html.twig", "@PrestaShop/Admin/Layout/default_layout.html.twig", 142, "4725899401")->display($embeddedContext, $embeddedBlocks);
                $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
            }
        }
        // line 150
        echo "
<div id=\"main-div\">
  <div
    class=\"content-div";
        // line 153
        if ((($context["showContentHeader"] ?? null) === false)) {
            echo " -notoolbar";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "displayedWithTabs", [], "any", false, false, false, 153)) {
            echo " with-tabs";
        }
        echo "\">
    ";
        // line 154
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "installDirExists", [], "any", false, false, false, 154)) {
            // line 155
            echo "      <div class=\"alert alert-warning\">
        ";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For security reasons, you must also delete the /install folder.", [], "Admin.Login.Notification"), "html", null, true);
            echo "
      </div>
    ";
        } else {
            // line 159
            echo "      ";
            echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminAfterHeader", []);
            echo "

      <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
      <div id=\"content-message-box\"></div>

      ";
            // line 165
            echo "      ";
            $this->displayBlock('content_header', $context, $blocks);
            // line 166
            echo "      ";
            $this->displayBlock('content', $context, $blocks);
            // line 167
            echo "      ";
            $this->displayBlock('content_footer', $context, $blocks);
            // line 168
            echo "      ";
            $this->displayBlock('sidebar_right', $context, $blocks);
            // line 169
            echo "
      ";
            // line 170
            echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminEndContent", []);
            echo "
    ";
        }
        // line 172
        echo "  </div>
</div>

  <div class=\"mobile-layer\"></div>

  ";
        // line 177
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("Footer");
        echo "

  ";
        // line 180
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 181
        echo "  ";
        $this->displayBlock('extra_javascripts', $context, $blocks);
        // line 182
        echo "  ";
        $this->displayBlock('translate_javascripts', $context, $blocks);
        // line 183
        echo "</body>
</html>
";
    }

    // line 30
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "      ";
        $this->displayBlock('core_javascript', $context, $blocks);
        // line 34
        echo "      ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("HeadTag", ["metaTitle" => ($context["metaTitle"] ?? null)]);
        echo "
      ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "      ";
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        // line 39
        echo "    ";
    }

    // line 31
    public function block_core_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Layout/core_javascript.html.twig", "@PrestaShop/Admin/Layout/default_layout.html.twig", 32)->display($context);
        // line 33
        echo "      ";
    }

    // line 35
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Layout/stylesheets.html.twig", "@PrestaShop/Admin/Layout/default_layout.html.twig", 36)->display($context);
        // line 37
        echo "      ";
    }

    // line 38
    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 46
    public function block_layout_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "  <header id=\"header\" class=\"d-print-none\">
    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

      ";
        // line 52
        echo "      <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "defaultTabLink", [], "any", false, false, false, 53), "html", null, true);
        echo "\"></a>
      <span id=\"shop_version\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "version", [], "any", false, false, false, 54), "html", null, true);
        echo "</span>

      ";
        // line 56
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("QuickAccess");
        echo "

      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            ";
        // line 61
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("SearchForm");
        echo "
            <button class=\"component-search-cancel d-none\">
              ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </div>
          ";
        // line 66
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("MobileQuickAccess");
        echo "
        </div>
        <div class=\"component-search-background d-none\"></div>
      </div>

      ";
        // line 71
        if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 71), false)) : (false))) {
            // line 72
            echo "        <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your shop is in debug mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            echo "</strong></p><p class=&quot;text-left&quot;>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.", ["[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Navigation.Notification"), "html", null, true);
            echo "</p>\"
             href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_performance");
            echo "\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Navigation.Header"), "html", null, true);
            echo "</span>
          </a>
        </div>
      ";
        }
        // line 86
        echo "
      ";
        // line 87
        if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "maintenanceModeEnabled", [], "any", true, true, false, 87)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "maintenanceModeEnabled", [], "any", false, false, false, 87), false)) : (false))) {
            // line 88
            echo "        ";
            ob_start(function () { return ''; });
            // line 89
            echo "          <p class=\"text-left text-nowrap\">
            <strong>
              ";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your store is in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            echo "
            </strong>
          </p>
          <p class=\"text-left\">
            ";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your visitors and customers cannot access your store while in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            echo "
          </p>
          <p class=\"text-left\">
            ";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage the maintenance settings, go to Shop Parameters > Maintenance tab.", [], "Admin.Navigation.Notification"), "html", null, true);
            echo "
          </p>
          ";
            // line 100
            if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", false, false, false, 100), false)) : (false))) {
                // line 101
                echo "            <p class=\"text-left\">
              ";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admins can access the store front office without storing their IP.", [], "Admin.Navigation.Notification"), "html", null, true);
                echo "
            </p>
          ";
            }
            // line 105
            echo "        ";
            $context["maintenanceTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            echo "        <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"";
            // line 112
            echo twig_escape_filter($this->env, ($context["maintenanceTitle"] ?? null), "html");
            echo "\"
             href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_maintenance");
            echo "\"
          >
            <i class=\"material-icons\"
               style=\"";
            // line 116
            if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", true, true, false, 116)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", false, false, false, 116), false)) : (false))) {
                echo "color: var(--green);";
            }
            echo "\"
            >build</i>
            <span>";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maintenance mode", [], "Admin.Navigation.Header"), "html", null, true);
            echo "</span>
          </a>
        </div>
      ";
        }
        // line 122
        echo "
      <div class=\"header-right\">
        <div class=\"shop-list\">
          <a class=\"link\" id=\"header_shopname\" href=\"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "baseUrl", [], "any", false, false, false, 125), "html", null, true);
        echo "\" target= \"_blank\">
            <i class=\"material-icons\">visibility</i>
            <span>";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
        echo "</span>
          </a>
        </div>
        ";
        // line 130
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("NotificationsCenter");
        echo "
        ";
        // line 131
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("EmployeeDropdown");
        echo "
        ";
        // line 132
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeTop");
        echo "
      </div>
    </nav>
  </header>

  ";
        // line 137
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("NavBar");
        echo "
";
    }

    // line 165
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 166
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 167
    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 168
    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 180
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 181
    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 182
    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Layout/default_layout.html.twig";
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
        return array (  486 => 182,  480 => 181,  474 => 180,  468 => 168,  462 => 167,  456 => 166,  450 => 165,  444 => 137,  436 => 132,  432 => 131,  428 => 130,  422 => 127,  417 => 125,  412 => 122,  405 => 118,  398 => 116,  392 => 113,  388 => 112,  380 => 106,  377 => 105,  371 => 102,  368 => 101,  366 => 100,  361 => 98,  355 => 95,  348 => 91,  344 => 89,  341 => 88,  339 => 87,  336 => 86,  329 => 82,  323 => 79,  317 => 78,  309 => 72,  307 => 71,  299 => 66,  293 => 63,  288 => 61,  280 => 56,  275 => 54,  271 => 53,  268 => 52,  262 => 47,  258 => 46,  252 => 38,  248 => 37,  245 => 36,  241 => 35,  237 => 33,  234 => 32,  230 => 31,  226 => 39,  223 => 38,  221 => 35,  216 => 34,  213 => 31,  209 => 30,  203 => 183,  200 => 182,  197 => 181,  194 => 180,  189 => 177,  182 => 172,  177 => 170,  174 => 169,  171 => 168,  168 => 167,  165 => 166,  162 => 165,  153 => 159,  147 => 156,  144 => 155,  142 => 154,  133 => 153,  128 => 150,  116 => 145,  115 => 144,  114 => 143,  109 => 145,  108 => 144,  107 => 143,  105 => 142,  103 => 141,  100 => 139,  98 => 46,  95 => 44,  88 => 43,  82 => 42,  64 => 41,  61 => 40,  59 => 30,  54 => 28,  49 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Layout/default_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Layout/default_layout.html.twig");
    }
}


/* @PrestaShop/Admin/Layout/default_layout.html.twig */
class __TwigTemplate_e30b24577c07606a928c8f63532f6526___4725899401 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'pageTitle' => [$this, 'block_pageTitle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 142
        return $this->loadTemplate(($context["__parent__"] ?? null), "@PrestaShop/Admin/Layout/default_layout.html.twig", 142);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_outer__block_fallback($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 147
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ((        $this->renderBlock(twig_get_attribute($this->env, $this->source, ($context["outerBlocks"] ?? null), "pageTitle", [], "any", false, false, false, 147), $context, $blocks)) ?: ($this->renderParentBlock("pageTitle", $context, $blocks)));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Layout/default_layout.html.twig";
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
        return array (  558 => 147,  543 => 142,  486 => 182,  480 => 181,  474 => 180,  468 => 168,  462 => 167,  456 => 166,  450 => 165,  444 => 137,  436 => 132,  432 => 131,  428 => 130,  422 => 127,  417 => 125,  412 => 122,  405 => 118,  398 => 116,  392 => 113,  388 => 112,  380 => 106,  377 => 105,  371 => 102,  368 => 101,  366 => 100,  361 => 98,  355 => 95,  348 => 91,  344 => 89,  341 => 88,  339 => 87,  336 => 86,  329 => 82,  323 => 79,  317 => 78,  309 => 72,  307 => 71,  299 => 66,  293 => 63,  288 => 61,  280 => 56,  275 => 54,  271 => 53,  268 => 52,  262 => 47,  258 => 46,  252 => 38,  248 => 37,  245 => 36,  241 => 35,  237 => 33,  234 => 32,  230 => 31,  226 => 39,  223 => 38,  221 => 35,  216 => 34,  213 => 31,  209 => 30,  203 => 183,  200 => 182,  197 => 181,  194 => 180,  189 => 177,  182 => 172,  177 => 170,  174 => 169,  171 => 168,  168 => 167,  165 => 166,  162 => 165,  153 => 159,  147 => 156,  144 => 155,  142 => 154,  133 => 153,  128 => 150,  116 => 145,  115 => 144,  114 => 143,  109 => 145,  108 => 144,  107 => 143,  105 => 142,  103 => 141,  100 => 139,  98 => 46,  95 => 44,  88 => 43,  82 => 42,  64 => 41,  61 => 40,  59 => 30,  54 => 28,  49 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Layout/default_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Layout/default_layout.html.twig");
    }
}
