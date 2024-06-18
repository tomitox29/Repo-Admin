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

/* @PrestaShop/Admin/Component/Layout/quick_access.html.twig */
class __TwigTemplate_8cc5054d430e0393718aead10af1eefa extends Template
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
        echo "<div class=\"component\" id=\"quick-access-container\">
  <div class=\"dropdown quick-accesses\">
    <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
      ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        echo "
    </button>
    <div class=\"dropdown-menu\">
      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "quickAccesses", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 32
            echo "        <a class=\"dropdown-item quick-row-link
          ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", true, true, false, 33)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", false, false, false, 33), "html", null, true);
            }
            // line 34
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 34)) {
                echo "active";
            }
            echo "\"
        href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 35), "html", null, true);
            echo "\"
        ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 36)) {
                echo " target=\"_blank\"";
            }
            // line 37
            echo "        data-item=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "\"
        >";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickAccess'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "      <div class=\"dropdown-divider\"></div>
      ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 41)) {
            // line 42
            echo "        <a id=\"quick-remove-link\"
           class=\"dropdown-item js-quick-link\"
           href=\"#\"
           data-method=\"remove\"
           data-quicklink-id=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 46), "id_quick_access", [], "any", false, false, false, 46), "html", null, true);
            echo "\"
           data-rand=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_random($this->env, 1, 200), "html", null, true);
            echo "\"
           data-icon=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentPageIcon", [], "any", false, false, false, 48), "html", null, true);
            echo "\"
           data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 49), "link", [], "any", false, false, false, 49), "html", null, true);
            echo "\"
           data-post-link=\"";
            // line 50
            echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            echo "\"
           data-prompt-text=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            echo "\"
           data-link=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
            echo "\"
        >
          <i class=\"material-icons\">remove_circle_outline</i>
          ";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            echo "
        </a>
      ";
        } else {
            // line 58
            echo "        <a id=\"quick-add-link\"
           class=\"dropdown-item js-quick-link\"
           href=\"#\"
           data-rand=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_random($this->env, 1, 200), "html", null, true);
            echo "\"
           data-method=\"add\"
           data-icon=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentPageIcon", [], "any", false, false, false, 63), "html", null, true);
            echo "\"
           data-url=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentPageQuickAccessLink", [], "any", false, false, false, 64), "html", null, true);
            echo "\"
           data-post-link=\"";
            // line 65
            echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            echo "\"
           data-prompt-text=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            echo "\"
           data-link=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentPageTitle", [], "any", false, false, false, 67), "html", null, true);
            echo "\"
        >
          <i class=\"material-icons\">add_circle</i>
          ";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            echo "
        </a>
      ";
        }
        // line 73
        echo "      <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"";
        echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        echo "\">
      <i class=\"material-icons\">settings</i>
      ";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        echo "
      </a>
    </div>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/Layout/quick_access.html.twig";
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
        return array (  178 => 75,  172 => 73,  166 => 70,  160 => 67,  156 => 66,  152 => 65,  148 => 64,  144 => 63,  139 => 61,  134 => 58,  128 => 55,  122 => 52,  118 => 51,  114 => 50,  110 => 49,  106 => 48,  102 => 47,  98 => 46,  92 => 42,  90 => 41,  87 => 40,  79 => 38,  74 => 37,  70 => 36,  66 => 35,  59 => 34,  55 => 33,  52 => 32,  48 => 31,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/quick_access.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/quick_access.html.twig");
    }
}
