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

/* @PrestaShop/Admin/Layout/login_layout.html.twig */
class __TwigTemplate_db67b0e2e5091dffc7d1eb82a643b8fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascrips' => [$this, 'block_javascrips'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  ";
        // line 33
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("LoginHeadTag");
        echo "
  ";
        // line 34
        $this->displayBlock('javascrips', $context, $blocks);
        // line 35
        echo "  ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "</head>
<body class=\"lang-";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 37), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 37)) {
            echo " lang-rtl";
        }
        echo " ps_back-office bootstrap\">
  <div id=\"login\">
    <div id=\"content\">
      <div id=\"login-panel\">
        <div id=\"login-header\">
          <h1 class=\"text-center\">
            <img id=\"logo\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "baseImgUrl", [], "any", false, false, false, 43), "html", null, true);
        echo "prestashop@2x.png\" width=\"123px\" height=\"24px\" alt=\"PrestaShop\" />
          </h1>
        </div>

        <div id=\"shop-img\">
          <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "baseImgUrl", [], "any", false, false, false, 48), "html", null, true);
        echo "preston-login@2x.png\" alt=\"{\$shop_name}\" width=\"69.5px\" height=\"118.5px\" />
        </div>

        <div id=\"login-content-card\" class=\"card\">
          <div class=\"card-body\">
            ";
        // line 53
        $this->displayBlock('session_alert', $context, $blocks);
        // line 92
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "          </div>
        </div>

        <a class='login-back' href='";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "baseUrl", [], "any", false, false, false, 96), "html", null, true);
        echo "'>
          <i class=\"material-icons rtl-flip\">arrow_back</i>
          <span>";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to", [], "Admin.Actions"), "html", null, true);
        echo "</span>
          <span class=\"login-back-shop\">";
        // line 99
        echo twig_escape_filter($this->env, ($context["shopName"] ?? null), "html", null, true);
        echo "</span>
        </a>

        <div id=\"login-footer\">
          <p class=\"text-center text-muted\">
            <a href=\"https://www.prestashop-project.org\" onclick=\"return !window.open(this.href);\">
              &copy; PrestaShop&#8482; 2007-";
        // line 105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - All rights reserved
            </a>
          </p>
          <p class=\"login-footer-social text-center\">
            <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
              ";
        // line 110
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("ux:icon", ["name" => "bi:twitter-x", "height" => "16", "width" => "16", "aria-hidden" => "true"]);
        echo "
            </a>
            <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
              ";
        // line 113
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("ux:icon", ["name" => "bi:facebook", "height" => "16", "width" => "16", "aria-hidden" => "true"]);
        echo "
            </a>
            <a class=\"link-social link-github _blank\" href=\"https://github.com/PrestaShop/PrestaShop\" title=\"Github\">
              ";
        // line 116
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("ux:icon", ["name" => "bi:github", "height" => "16", "width" => "16", "aria-hidden" => "true"]);
        echo "
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</body>
";
    }

    // line 34
    public function block_javascrips($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 35
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_session_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "              ";
        // line 74
        echo "              ";
        $macros["layout"] = $this;
        // line 75
        echo "
              ";
        // line 76
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 76), "flashbag", [], "any", false, false, false, 76), "peek", ["error"], "method", false, false, false, 76)) > 0)) {
            // line 77
            echo "                ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["danger", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 77), "flashbag", [], "any", false, false, false, 77), "get", ["error"], "method", false, false, false, 77)], 77, $context, $this->getSourceContext());
            echo "
              ";
        }
        // line 79
        echo "              ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 79), "flashbag", [], "any", false, false, false, 79), "peek", ["failure"], "method", false, false, false, 79)) > 0)) {
            // line 80
            echo "                ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["danger", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 80), "flashbag", [], "any", false, false, false, 80), "get", ["failure"], "method", false, false, false, 80)], 80, $context, $this->getSourceContext());
            echo "
              ";
        }
        // line 82
        echo "              ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 82), "flashbag", [], "any", false, false, false, 82), "peek", ["success"], "method", false, false, false, 82)) > 0)) {
            // line 83
            echo "                ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["success", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 83), "flashbag", [], "any", false, false, false, 83), "get", ["success"], "method", false, false, false, 83)], 83, $context, $this->getSourceContext());
            echo "
              ";
        }
        // line 85
        echo "              ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 85), "flashbag", [], "any", false, false, false, 85), "peek", ["warning"], "method", false, false, false, 85)) > 0)) {
            // line 86
            echo "                ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["warning", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 86), "flashbag", [], "any", false, false, false, 86), "get", ["warning"], "method", false, false, false, 86)], 86, $context, $this->getSourceContext());
            echo "
              ";
        }
        // line 88
        echo "              ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 88), "flashbag", [], "any", false, false, false, 88), "peek", ["info"], "method", false, false, false, 88)) > 0)) {
            // line 89
            echo "                ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["info", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 89), "flashbag", [], "any", false, false, false, 89), "get", ["info"], "method", false, false, false, 89)], 89, $context, $this->getSourceContext());
            echo "
              ";
        }
        // line 91
        echo "            ";
    }

    // line 92
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 54
    public function macro_alert($__type__ = null, $__flashbagContent__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "flashbagContent" => $__flashbagContent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 55
            echo "                <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo " d-print-none\" role=\"alert\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
                  </button>
                  ";
            // line 59
            if ((twig_length_filter($this->env, ($context["flashbagContent"] ?? null)) > 1)) {
                // line 60
                echo "                    <ul class=\"alert-text\">
                      ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 62
                    echo "                        <li>";
                    echo $context["flashMessage"];
                    echo "</li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                    </ul>
                  ";
            } else {
                // line 66
                echo "                    <div class=\"alert-text\">
                      ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 68
                    echo "                        <p>";
                    echo $context["flashMessage"];
                    echo "</p>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                    </div>
                  ";
            }
            // line 72
            echo "                </div>
              ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Layout/login_layout.html.twig";
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
        return array (  297 => 72,  293 => 70,  284 => 68,  280 => 67,  277 => 66,  273 => 64,  264 => 62,  260 => 61,  257 => 60,  255 => 59,  247 => 55,  233 => 54,  227 => 92,  223 => 91,  217 => 89,  214 => 88,  208 => 86,  205 => 85,  199 => 83,  196 => 82,  190 => 80,  187 => 79,  181 => 77,  179 => 76,  176 => 75,  173 => 74,  171 => 54,  167 => 53,  161 => 35,  155 => 34,  142 => 116,  136 => 113,  130 => 110,  122 => 105,  113 => 99,  109 => 98,  104 => 96,  99 => 93,  96 => 92,  94 => 53,  86 => 48,  78 => 43,  66 => 37,  63 => 36,  60 => 35,  58 => 34,  54 => 33,  48 => 30,  41 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Layout/login_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Layout/login_layout.html.twig");
    }
}
