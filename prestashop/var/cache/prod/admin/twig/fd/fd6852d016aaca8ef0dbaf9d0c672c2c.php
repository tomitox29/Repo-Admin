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

/* @PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig */
class __TwigTemplate_547108ac3cc4f9d6eaa6e2264d9c7808 extends Template
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
        echo "<div class=\"component\" id=\"header-employee-container\">
  <div class=\"dropdown employee-dropdown\">
      <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">account_circle</i>
      </div>
      <div class=\"dropdown-menu dropdown-menu-right\">
        <div class=\"employee-wrapper-avatar\">
          <div class=\"employee-top\">
            <span class=\"employee-avatar\">
              <img class=\"avatar rounded-circle\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 34), "imageUrl", [], "any", false, false, false, 34), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 34), "firstName", [], "any", false, false, false, 34), "html", null, true);
        echo "\" />
            </span>
            <span class=\"employee_profile\">
              ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Welcome back %name%", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 37), "firstName", [], "any", false, false, false, 37)], "Admin.Navigation.Header"), "html", null, true);
        echo "
            </span>
          </div>

          <a class=\"dropdown-item employee-link profile-link\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_edit", ["employeeId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">
            <i class=\"material-icons\">edit</i>
            <span>
              ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your profile", [], "Admin.Navigation.Header"), "html", null, true);
        echo "
            </span>
          </a>
        </div>

        <p class=\"divider\"></p>

        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["displayBackOfficeEmployeeMenu"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 52
            echo "          ";
            $context["menuItemProperties"] = twig_get_attribute($this->env, $this->source, $context["menuItem"], "getProperties", [], "any", false, false, false, 52);
            // line 53
            echo "          <a class=\"dropdown-item ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "getClass", [], "any", false, false, false, 53), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "link", [], "any", false, false, false, 53), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "isExternalLink", [], "any", false, false, false, 53)) {
                echo " target=\"_blank\"";
            }
            echo " rel=\"noopener noreferrer nofollow\">
            ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "icon", [], "any", true, true, false, 54)) {
                // line 55
                echo "              <i class=\"material-icons\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "icon", [], "any", false, false, false, 55), "html", null, true);
                echo "</i>
            ";
            }
            // line 57
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "getContent", [], "any", false, false, false, 57), "html", null, true);
            echo "
          </a>
          ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 59)) {
                // line 60
                echo "            <p class=\"divider\"></p>
          ";
            }
            // line 62
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"";
        // line 64
        echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminLogin", ["logout" => 1]);
        echo "\">
          <i class=\"material-icons d-lg-none\">power_settings_new</i>
          <span>
            ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "Admin.Navigation.Header"), "html", null, true);
        echo "
          </span>
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
        return "@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig";
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
        return array (  153 => 67,  147 => 64,  144 => 63,  130 => 62,  126 => 60,  124 => 59,  118 => 57,  112 => 55,  110 => 54,  99 => 53,  96 => 52,  79 => 51,  69 => 44,  63 => 41,  56 => 37,  48 => 34,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/employee_dropdown.html.twig");
    }
}
