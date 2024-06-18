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

/* @PrestaShop/Admin/Layout/light_layout.html.twig */
class __TwigTemplate_2b9982073afdf3d5edc73653ffee44bc extends Template
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
        echo "</head>

<body
  class=\"lang-";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 43), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 43)) {
            echo " lang-rtl";
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "controllerName", [], "any", false, false, false, 43))), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 43)) {
            echo " page-sidebar-closed";
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 43), false)) : (false))) {
            echo " developer-mode";
        }
        echo "\"
  ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 44) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 44), "base_url", [], "any", true, true, false, 44))) {
            echo "data-base-url=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 44), "base_url", [], "any", false, false, false, 44), "html", null, true);
            echo "\"";
        }
        // line 45
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 45) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 45), "token", [], "any", false, false, false, 45))) {
            echo "data-token=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 45), "token", [], "any", false, false, false, 45), "html", null, true);
            echo "\"";
        }
        // line 46
        echo ">

<div id=\"main-div\" class=\"light_display_layout\">
  ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "installDirExists", [], "any", false, false, false, 49)) {
            // line 50
            echo "    <div class=\"alert alert-warning\">
      ";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For security reasons, you must also delete the /install folder.", [], "Admin.Login.Notification"), "html", null, true);
            echo "
    </div>
  ";
        } else {
            // line 54
            echo "    <div class=\"-notoolbar\">
      ";
            // line 55
            echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminAfterHeader", []);
            echo "

      ";
            // line 58
            echo "      ";
            $this->displayBlock('content_header', $context, $blocks);
            // line 59
            echo "      ";
            $this->displayBlock('content', $context, $blocks);
            // line 60
            echo "      ";
            $this->displayBlock('content_footer', $context, $blocks);
            // line 61
            echo "      ";
            $this->displayBlock('sidebar_right', $context, $blocks);
            // line 62
            echo "
      ";
            // line 63
            echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminEndContent", []);
            echo "
    </div>
  ";
        }
        // line 66
        echo "</div>

";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        $this->displayBlock('extra_javascripts', $context, $blocks);
        // line 71
        $this->displayBlock('translate_javascripts', $context, $blocks);
        // line 72
        echo "</body>
</html>
";
    }

    // line 30
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        $this->displayBlock('core_javascript', $context, $blocks);
        // line 34
        echo "    ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("HeadTag", ["metaTitle" => ($context["metaTitle"] ?? null)]);
        echo "
    ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "    ";
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        // line 39
        echo "  ";
    }

    // line 31
    public function block_core_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Layout/core_javascript.html.twig", "@PrestaShop/Admin/Layout/light_layout.html.twig", 32)->display($context);
        // line 33
        echo "    ";
    }

    // line 35
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Layout/stylesheets.html.twig", "@PrestaShop/Admin/Layout/light_layout.html.twig", 36)->display($context);
        // line 37
        echo "    ";
    }

    // line 38
    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 58
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 59
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 60
    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 61
    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 70
    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 71
    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Layout/light_layout.html.twig";
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
        return array (  239 => 71,  233 => 70,  227 => 69,  221 => 61,  215 => 60,  209 => 59,  203 => 58,  197 => 38,  193 => 37,  190 => 36,  186 => 35,  182 => 33,  179 => 32,  175 => 31,  171 => 39,  168 => 38,  166 => 35,  161 => 34,  158 => 31,  154 => 30,  148 => 72,  146 => 71,  144 => 70,  142 => 69,  138 => 66,  132 => 63,  129 => 62,  126 => 61,  123 => 60,  120 => 59,  117 => 58,  112 => 55,  109 => 54,  103 => 51,  100 => 50,  98 => 49,  93 => 46,  86 => 45,  80 => 44,  65 => 43,  60 => 40,  58 => 30,  53 => 28,  48 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Layout/light_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Layout/light_layout.html.twig");
    }
}
