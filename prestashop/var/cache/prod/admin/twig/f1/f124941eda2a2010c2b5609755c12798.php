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

/* @PrestaShop/Admin/Common/_partials/_sidebar.html.twig */
class __TwigTemplate_e5f306b59e68d05331f877e417fd8a35 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<div id=\"ps-quicknav-sidebar\"  class=\"_fullspace\">
    <div class=\"quicknav-header\">
        <div class=\"float-left\"><a href=\"#\" data-toggle=\"sidebar\" data-target=\".sidebar\">×</a></div>
        <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["title"] ?? null), [], "AdminCommon"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"quicknav-scroller _fullspace\">
        <object class=\"_fullspace\" data=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\"></object>
    </div>
    <div class=\"quicknav-fixed-bottom navbar-form-footer\">
        ";
        // line 34
        echo ($context["footer"] ?? null);
        echo "
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/_partials/_sidebar.html.twig";
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
        return array (  54 => 34,  48 => 31,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/_partials/_sidebar.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/_partials/_sidebar.html.twig");
    }
}
