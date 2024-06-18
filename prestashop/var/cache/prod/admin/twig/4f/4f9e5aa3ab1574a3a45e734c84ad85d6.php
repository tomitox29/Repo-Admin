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

/* @PrestaShop/Admin/layout.html.twig */
class __TwigTemplate_1f47643fd3a8daba0e879969eeae9561 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
            'content_header' => [$this, 'block_content_header'],
            'session_alert' => [$this, 'block_session_alert'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return $this->loadTemplate(((($context["lightDisplay"] ?? null)) ? ("@PrestaShop/Admin/Layout/light_layout.html.twig") : ("@PrestaShop/Admin/Layout/default_layout.html.twig")), "@PrestaShop/Admin/layout.html.twig", 30);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $context["lightDisplay"] = ((array_key_exists("lightDisplay", $context)) ? (($context["lightDisplay"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 25), "query", [], "any", false, false, false, 25), "get", ["liteDisplaying", false], "method", false, false, false, 25)));
        // line 26
        $context["showContentHeader"] = ((array_key_exists("showContentHeader", $context)) ? (($context["showContentHeader"] ?? null)) : (true));
        // line 27
        $context["layoutHeaderToolbarBtn"] = ((array_key_exists("layoutHeaderToolbarBtn", $context)) ? (($context["layoutHeaderToolbarBtn"] ?? null)) : ([]));
        // line 28
        $context["metaTitle"] = ((array_key_exists("meta_title", $context)) ? (($context["meta_title"] ?? null)) : (((array_key_exists("layoutTitle", $context)) ? (($context["layoutTitle"] ?? null)) : (""))));
        // line 30
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/default.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/right-sidebar.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/form_popover_error.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 38
    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "  <script>
    var translate_javascripts = ";
        // line 40
        echo json_encode(($context["js_translatable"] ?? null));
        echo ";
    var PS_ALLOW_ACCENTED_CHARS_URL = ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_ALLOW_ACCENTED_CHARS_URL")), "html", null, true);
        echo ";
  </script>
";
    }

    // line 45
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "  ";
        $this->displayBlock("session_alert", $context, $blocks);
        echo "
";
    }

    // line 49
    public function block_session_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "  ";
        // line 70
        echo "  ";
        $macros["layout"] = $this;
        // line 71
        echo "
  ";
        // line 72
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 72), "flashbag", [], "any", false, false, false, 72), "peek", ["error"], "method", false, false, false, 72)) > 0)) {
            // line 73
            echo "    ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["danger", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 73), "flashbag", [], "any", false, false, false, 73), "get", ["error"], "method", false, false, false, 73)], 73, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 75
        echo "  ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 75), "flashbag", [], "any", false, false, false, 75), "peek", ["failure"], "method", false, false, false, 75)) > 0)) {
            // line 76
            echo "    ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["danger", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 76), "flashbag", [], "any", false, false, false, 76), "get", ["failure"], "method", false, false, false, 76)], 76, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 78
        echo "  ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 78), "flashbag", [], "any", false, false, false, 78), "peek", ["success"], "method", false, false, false, 78)) > 0)) {
            // line 79
            echo "    ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["success", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 79), "flashbag", [], "any", false, false, false, 79), "get", ["success"], "method", false, false, false, 79)], 79, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 81
        echo "  ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 81), "flashbag", [], "any", false, false, false, 81), "peek", ["warning"], "method", false, false, false, 81)) > 0)) {
            // line 82
            echo "    ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["warning", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 82), "flashbag", [], "any", false, false, false, 82), "get", ["warning"], "method", false, false, false, 82)], 82, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 84
        echo "  ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 84), "flashbag", [], "any", false, false, false, 84), "peek", ["info"], "method", false, false, false, 84)) > 0)) {
            // line 85
            echo "    ";
            echo twig_call_macro($macros["layout"], "macro_alert", ["info", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 85), "flashbag", [], "any", false, false, false, 85), "get", ["info"], "method", false, false, false, 85)], 85, $context, $this->getSourceContext());
            echo "
  ";
        }
    }

    // line 89
    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/img/bundle/dashboard_loading.gif"), "html", null, true);
        echo "\"
      style=\"margin-top: 10em;\" alt=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading...", [], "Admin.Global"), "html", null, true);
        echo "\"
    />
  </nav>
";
    }

    // line 50
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
            // line 51
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo " d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      ";
            // line 55
            if ((twig_length_filter($this->env, ($context["flashbagContent"] ?? null)) > 1)) {
                // line 56
                echo "        <ul class=\"alert-text\">
          ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 58
                    echo "            <li>";
                    echo $context["flashMessage"];
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "        </ul>
      ";
            } else {
                // line 62
                echo "        <div class=\"alert-text\">
          ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 64
                    echo "            <p>";
                    echo $context["flashMessage"];
                    echo "</p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "        </div>
      ";
            }
            // line 68
            echo "    </div>
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
        return "@PrestaShop/Admin/layout.html.twig";
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
        return array (  252 => 68,  248 => 66,  239 => 64,  235 => 63,  232 => 62,  228 => 60,  219 => 58,  215 => 57,  212 => 56,  210 => 55,  202 => 51,  188 => 50,  180 => 97,  176 => 96,  168 => 90,  164 => 89,  156 => 85,  153 => 84,  147 => 82,  144 => 81,  138 => 79,  135 => 78,  129 => 76,  126 => 75,  120 => 73,  118 => 72,  115 => 71,  112 => 70,  110 => 50,  106 => 49,  99 => 46,  95 => 45,  88 => 41,  84 => 40,  81 => 39,  77 => 38,  71 => 35,  67 => 34,  62 => 33,  58 => 32,  54 => 30,  52 => 28,  50 => 27,  48 => 26,  46 => 25,  39 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/layout.html.twig");
    }
}
