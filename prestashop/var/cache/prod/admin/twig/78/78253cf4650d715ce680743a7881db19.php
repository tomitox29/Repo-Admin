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

/* @PrestaShop/Admin/Component/LoginLayout/head_tag.html.twig */
class __TwigTemplate_4fe0bfbb53f79b9c044f5d6e9a6eaed0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'headJavascripts' => [$this, 'block_headJavascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "imgDir", [], "any", false, false, false, 30), "html", null, true);
        echo "favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "imgDir", [], "any", false, false, false, 31), "html", null, true);
        echo "app_icon.png\" />
<title>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "shopName", [], "any", false, false, false, 32), "html", null, true);
        echo "</title>

";
        // line 34
        $this->loadTemplate("@AdminNewTheme/public/preload.html.twig", "@PrestaShop/Admin/Component/LoginLayout/head_tag.html.twig", 34)->display($context);
        // line 35
        echo "
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "cssFiles", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["css_uri"] => $context["css_media"]) {
            // line 37
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $context["css_uri"], "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"";
            echo twig_escape_filter($this->env, $context["css_media"], "html", null, true);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['css_uri'], $context['css_media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "jsDef", [], "any", false, false, false, 40)) {
            // line 41
            echo "  <script type=\"text/javascript\">
    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "jsDef", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["k"] => $context["def"]) {
                // line 43
                echo "    var ";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo " = ";
                echo json_encode($context["def"]);
                echo ";
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['def'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "  </script>
";
        }
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('headJavascripts', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "jsFiles", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["js_uri"]) {
            // line 51
            echo "  <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $context["js_uri"], "html", null, true);
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_uri'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 54)) {
            // line 55
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/theme_rtl.css"), "html", null, true);
            echo "\" media=\"all\">
  <link rel=\"stylesheet\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/rtl.css"), "html", null, true);
            echo "\" media=\"all\">
";
        } else {
            // line 58
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/theme.css"), "html", null, true);
            echo "\" media=\"all\">
";
        }
        // line 60
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/login.css"), "html", null, true);
        echo "\" media=\"all\">
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/login_form.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 48
    public function block_headJavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/LoginLayout/head_tag.html.twig";
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
        return array (  158 => 48,  152 => 61,  147 => 60,  141 => 58,  136 => 56,  131 => 55,  129 => 54,  126 => 53,  117 => 51,  113 => 50,  110 => 49,  108 => 48,  105 => 47,  101 => 45,  90 => 43,  86 => 42,  83 => 41,  81 => 40,  78 => 39,  67 => 37,  63 => 36,  60 => 35,  58 => 34,  53 => 32,  49 => 31,  45 => 30,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/LoginLayout/head_tag.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LoginLayout/head_tag.html.twig");
    }
}
