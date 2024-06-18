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

/* @PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig */
class __TwigTemplate_373f5f29f8037bbd1c7b2544ede24aaa extends Template
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
        echo "<ul id=\"header_employee_box\" class=\"component\">
  <li id=\"employee_infos\" class=\"dropdown\">
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_edit", ["employeeId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\"
       class=\"employee_name dropdown-toggle\"
       data-toggle=\"dropdown\"
    >
      <i class=\"material-icons\">account_circle</i>
    </a>
    <ul id=\"employee_links\" class=\"dropdown-menu dropdown-menu-right\">
      <li class=\"employee-wrapper-avatar\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\">
              <span class=\"employee_avatar\">
                <img class=\"imgm img-thumbnail\" alt=\"\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 36), "imageUrl", [], "any", false, false, false, 36), "html", null, true);
        echo "\" width=\"60\" height=\"60\" />
              </span>
      </li>
      <li class=\"text-left text-nowrap username\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Welcome back %name%", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 39), "firstName", [], "any", false, false, false, 39)], "Admin.Navigation.Header"), "html", null, true);
        echo "</li>
      <li class=\"employee-wrapper-profile\"><a class=\"admin-link\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_edit", ["employeeId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\"><i class=\"material-icons\">edit</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your profile", [], "Admin.Navigation.Header"), "html", null, true);
        echo "</a></li>
      <li class=\"divider\"></li>

      ";
        // line 43
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
            // line 44
            echo "        ";
            $context["menuItemProperties"] = twig_get_attribute($this->env, $this->source, $context["menuItem"], "getProperties", [], "any", false, false, false, 44);
            // line 45
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "getClass", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
          <a class=\"dropdown-item\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "link", [], "any", false, false, false, 46), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "isExternalLink", [], "any", false, false, false, 46)) {
                echo " target=\"_blank\"";
            }
            echo " rel=\"noopener noreferrer nofollow\">
            ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "icon", [], "any", true, true, false, 47)) {
                // line 48
                echo "              <i class=\"material-icons\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "icon", [], "any", false, false, false, 48), "html", null, true);
                echo "</i>
            ";
            }
            // line 50
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuItem"], "getContent", [], "any", false, false, false, 50), "html", null, true);
            echo "
          </a>
        </li>
        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 53)) {
                // line 54
                echo "          <p class=\"divider\"></p>
        ";
            }
            // line 56
            echo "      ";
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
        // line 57
        echo "
      <li class=\"signout text-center\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\" data-after=\"true\"><a id=\"header_logout\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminLogin", ["logout" => 1]), "html_attr");
        echo "\"><i class=\"material-icons visible-xs\">power_settings_new</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "Admin.Navigation.Header"), "html", null, true);
        echo "</a></li>
    </ul>
  </li>
</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig";
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
        return array (  142 => 58,  139 => 57,  125 => 56,  121 => 54,  119 => 53,  112 => 50,  106 => 48,  104 => 47,  96 => 46,  91 => 45,  88 => 44,  71 => 43,  63 => 40,  59 => 39,  53 => 36,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/employee_dropdown.html.twig");
    }
}
