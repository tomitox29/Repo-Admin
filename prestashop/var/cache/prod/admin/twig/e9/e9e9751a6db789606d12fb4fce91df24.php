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

/* @PrestaShop/Admin/Module/Includes/action_button.html.twig */
class __TwigTemplate_8af55da8240f5ca18fd8051fba81683d extends Template
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
        echo "
";
        // line 26
        if ((($context["action"] ?? null) == "configure")) {
            // line 27
            echo "  <a class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 28
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
  </a>
";
        } else {
            // line 31
            echo "  <form class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("classes_form", $context)) ? (_twig_default_filter(($context["classes_form"] ?? null))) : ("")), "html", null, true);
            echo "\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">
    <button type=\"submit\" class=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo " module_action_menu_";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\" data-confirm_modal=\"module-modal-confirm-";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\">
      ";
            // line 33
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
    </button>
  </form>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/action_button.html.twig";
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
        return array (  72 => 33,  62 => 32,  55 => 31,  49 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/action_button.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/action_button.html.twig");
    }
}
