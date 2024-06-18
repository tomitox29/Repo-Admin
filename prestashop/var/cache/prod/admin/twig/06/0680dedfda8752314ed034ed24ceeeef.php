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

/* @PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig */
class __TwigTemplate_8edcd7f21ff2109c7cd425feeeba90a9 extends Template
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
        echo "<div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        echo "</p>
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "quickAccesses", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 28
            echo "    <a class=\"dropdown-item quick-row-link";
            if (twig_get_attribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 28)) {
                echo " active";
            }
            echo "\"
      href=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 29), "html", null, true);
            echo "\"
      ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 30)) {
                echo " target=\"_blank\"";
            }
            // line 31
            echo "      data-item=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "\"
      >
      ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "
  </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickAccess'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  <div class=\"dropdown-divider\"></div>
  ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 37)) {
            // line 38
            echo "    <a id=\"quick-remove-link\"
       class=\"dropdown-item js-quick-link\"
       href=\"#\"
       data-method=\"remove\"
       data-quicklink-id=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 42), "id_quick_access", [], "any", false, false, false, 42), "html", null, true);
            echo "\"
       data-rand=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_random($this->env, 1, 200), "html", null, true);
            echo "\"
       data-url=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 44), "link", [], "any", false, false, false, 44), "html", null, true);
            echo "\"
       data-post-link=\"";
            // line 45
            echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            echo "\"
       data-prompt-text=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            echo "\"
       data-link=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
            echo "\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            echo "
    </a>
  ";
        } else {
            // line 53
            echo "    <a id=\"quick-add-link\"
       class=\"dropdown-item js-quick-link\"
       href=\"#\"
       data-rand=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_random($this->env, 1, 200), "html", null, true);
            echo "\"
       data-method=\"add\"
       data-icon=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentPageIcon", [], "any", false, false, false, 58), "html", null, true);
            echo "\"
       data-url=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentPageQuickAccessLink", [], "any", false, false, false, 59), "html", null, true);
            echo "\"
       data-post-link=\"";
            // line 60
            echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            echo "\"
       data-prompt-text=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            echo "\"
       data-link=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentPageTitle", [], "any", false, false, false, 62), "html", null, true);
            echo "\"
    >
      <i class=\"material-icons\">add_circle</i>
      ";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            echo "
    </a>
  ";
        }
        // line 68
        echo "  <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"";
        echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        echo "\">
  <i class=\"material-icons\">settings</i>
    ";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        echo "
  </a>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig";
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
        return array (  165 => 70,  159 => 68,  153 => 65,  147 => 62,  143 => 61,  139 => 60,  135 => 59,  131 => 58,  126 => 56,  121 => 53,  115 => 50,  109 => 47,  105 => 46,  101 => 45,  97 => 44,  93 => 43,  89 => 42,  83 => 38,  81 => 37,  78 => 36,  69 => 33,  63 => 31,  59 => 30,  55 => 29,  48 => 28,  44 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/mobile_quick_access.html.twig");
    }
}
