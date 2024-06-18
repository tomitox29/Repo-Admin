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

/* @PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig */
class __TwigTemplate_e11102a85e48547dec579d91318c8640 extends Template
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
        echo "<nav class=\"nav-bar\" role=\"navigation\" id=\"nav-sidebar\">
  <span class=\"menu-collapse\" data-toggle-url=\"";
        // line 26
        echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminEmployees", ["action" => "toggleMenu"]);
        echo "\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <div class=\"logo-container\">
      <div class=\"logo-container__header\">
        <a id=\"header_logo\" class=\"logo float-left\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "defaultTab", [], "any", false, false, false, 34)), "html_attr");
        echo "\"></a>
        <span id=\"shop_version\" class=\"header-version\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "psVersion", [], "any", false, false, false, 35), "html", null, true);
        echo "</span>
      </div>
      <div class=\"logo-container__close js-mobile-menu\">
        <i class=\"material-icons close-btn\">close</i>
      </div>
    </div>

    <ul class=\"main-menu";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 42)) {
            echo " sidebar-closed";
        }
        echo "\">
      ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "tabs", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["level1"]) {
            // line 44
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["level1"], "active", [], "any", false, false, false, 44)) {
                // line 45
                echo "
        ";
                // line 46
                $context["level1Href"] = twig_get_attribute($this->env, $this->source, $context["level1"], "href", [], "any", false, false, false, 46);
                // line 47
                echo "        ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 47)) > 0) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, true, false, 47), 0, [], "array", false, true, false, 47), "href", [], "any", true, true, false, 47))) {
                    // line 48
                    echo "          ";
                    $context["level1Href"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 48)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "href", [], "any", false, false, false, 48);
                    // line 49
                    echo "        ";
                }
                // line 50
                echo "
        ";
                // line 51
                $context["level1Name"] = twig_get_attribute($this->env, $this->source, $context["level1"], "name", [], "any", false, false, false, 51);
                // line 52
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["level1"], "name", [], "any", false, false, false, 52) === "")) {
                    // line 53
                    echo "          ";
                    $context["level1Name"] = twig_get_attribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 53);
                    // line 54
                    echo "        ";
                }
                // line 55
                echo "
        ";
                // line 56
                if ( !(twig_get_attribute($this->env, $this->source, $context["level1"], "icon", [], "any", false, false, false, 56) === "")) {
                    // line 57
                    echo "
          <li class=\"link-levelone";
                    // line 58
                    if (twig_get_attribute($this->env, $this->source, $context["level1"], "current", [], "any", false, false, false, 58)) {
                        echo " link-levelone-active";
                    }
                    echo "\" data-submenu=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "id_tab", [], "any", false, false, false, 58), "html", null, true);
                    echo "\" id=\"tab-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 58), "html", null, true);
                    echo "\">
            <a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, ($context["level1Href"] ?? null), "html", null, true);
                    echo "\" class=\"link\" >
              <i class=\"material-icons\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "icon", [], "any", false, false, false, 60), "html", null, true);
                    echo "</i> <span>";
                    echo twig_escape_filter($this->env, ($context["level1Name"] ?? null), "html", null, true);
                    echo "</span>
            </a>
          </li>

        ";
                } else {
                    // line 65
                    echo "
        <li class=\"category-title";
                    // line 66
                    if (twig_get_attribute($this->env, $this->source, $context["level1"], "current", [], "any", false, false, false, 66)) {
                        echo " link-active";
                    }
                    echo "\" data-submenu=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "id_tab", [], "any", false, false, false, 66), "html", null, true);
                    echo "\" id=\"tab-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 66), "html", null, true);
                    echo "\">
          <span class=\"title\">";
                    // line 67
                    echo twig_escape_filter($this->env, ($context["level1Name"] ?? null), "html", null, true);
                    echo "</span>
        </li>

        ";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 70));
                    foreach ($context['_seq'] as $context["_key"] => $context["level2"]) {
                        // line 71
                        echo "        ";
                        if (twig_get_attribute($this->env, $this->source, $context["level2"], "active", [], "any", false, false, false, 71)) {
                            // line 72
                            echo "
        ";
                            // line 73
                            $context["level2Href"] = twig_get_attribute($this->env, $this->source, $context["level2"], "href", [], "any", false, false, false, 73);
                            // line 74
                            echo "
        ";
                            // line 75
                            $context["level2Name"] = twig_get_attribute($this->env, $this->source, $context["level2"], "name", [], "any", false, false, false, 75);
                            // line 76
                            echo "        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["level2"], "name", [], "any", false, false, false, 76) === "")) {
                                // line 77
                                echo "          ";
                                $context["level2Name"] = twig_get_attribute($this->env, $this->source, $context["level2"], "class_name", [], "any", false, false, false, 77);
                                // line 78
                                echo "        ";
                            }
                            // line 79
                            echo "        ";
                            $context["levelOneClass"] = "";
                            // line 80
                            echo "
        ";
                            // line 81
                            if ((twig_get_attribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 81) &&  !twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 81))) {
                                // line 82
                                echo "          ";
                                $context["levelOneClass"] = " link-active open ul-open";
                                // line 83
                                echo "        ";
                            } elseif ((twig_get_attribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 83) && twig_get_attribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 83))) {
                                // line 84
                                echo "          ";
                                $context["levelOneClass"] = " link-active";
                                // line 85
                                echo "        ";
                            }
                            // line 86
                            echo "
        <li class=\"link-levelone";
                            // line 87
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 87)) > 0)) {
                                echo " has_submenu";
                            }
                            echo twig_escape_filter($this->env, ($context["levelOneClass"] ?? null), "html", null, true);
                            echo "\" data-submenu=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level2"], "id_tab", [], "any", false, false, false, 87), "html", null, true);
                            echo "\" id=\"subtab-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level2"], "class_name", [], "any", false, false, false, 87), "html", null, true);
                            echo "\">
          <a href=\"";
                            // line 88
                            echo twig_escape_filter($this->env, ($context["level2Href"] ?? null), "html", null, true);
                            echo "\" class=\"link\">
            <i class=\"material-icons mi-";
                            // line 89
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level2"], "icon", [], "any", false, false, false, 89), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level2"], "icon", [], "any", false, false, false, 89), "html", null, true);
                            echo "</i>
            <span>";
                            // line 90
                            echo twig_escape_filter($this->env, ($context["level2Name"] ?? null), "html", null, true);
                            echo "</span>
            ";
                            // line 91
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 91)) > 0)) {
                                // line 92
                                echo "              <i class=\"material-icons sub-tabs-arrow\">
                ";
                                // line 93
                                if (twig_get_attribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 93)) {
                                    // line 94
                                    echo "                  keyboard_arrow_up
                ";
                                } else {
                                    // line 96
                                    echo "                  keyboard_arrow_down
                ";
                                }
                                // line 98
                                echo "              </i>
            ";
                            }
                            // line 100
                            echo "          </a>
          ";
                            // line 101
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 101)) > 0)) {
                                // line 102
                                echo "            <ul id=\"collapse-";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level2"], "id_tab", [], "any", false, false, false, 102), "html", null, true);
                                echo "\" class=\"submenu panel-collapse\">
              ";
                                // line 103
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 103));
                                foreach ($context['_seq'] as $context["_key"] => $context["level3"]) {
                                    // line 104
                                    echo "              ";
                                    if (twig_get_attribute($this->env, $this->source, $context["level3"], "active", [], "any", false, false, false, 104)) {
                                        // line 105
                                        echo "
              ";
                                        // line 106
                                        $context["level3Href"] = twig_get_attribute($this->env, $this->source, $context["level3"], "href", [], "any", false, false, false, 106);
                                        // line 107
                                        echo "
              ";
                                        // line 108
                                        $context["level3Name"] = twig_get_attribute($this->env, $this->source, $context["level3"], "name", [], "any", false, false, false, 108);
                                        // line 109
                                        echo "              ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["level3"], "name", [], "any", false, false, false, 109) === "")) {
                                            // line 110
                                            echo "                ";
                                            $context["level3Name"] = twig_get_attribute($this->env, $this->source, $context["level3"], "class_name", [], "any", false, false, false, 110);
                                            // line 111
                                            echo "              ";
                                        }
                                        // line 112
                                        echo "
              <li class=\"link-leveltwo";
                                        // line 113
                                        if (twig_get_attribute($this->env, $this->source, $context["level3"], "current", [], "any", false, false, false, 113)) {
                                            echo " link-active";
                                        }
                                        echo "\" data-submenu=\"";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level3"], "id_tab", [], "any", false, false, false, 113), "html", null, true);
                                        echo "\" id=\"subtab-";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level3"], "class_name", [], "any", false, false, false, 113), "html", null, true);
                                        echo "\">
                <a href=\"";
                                        // line 114
                                        echo twig_escape_filter($this->env, ($context["level3Href"] ?? null), "html", null, true);
                                        echo "\" class=\"link\"> ";
                                        echo twig_escape_filter($this->env, ($context["level3Name"] ?? null), "html", null, true);
                                        echo "</a>
              </li>

              ";
                                    }
                                    // line 118
                                    echo "              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 119
                                echo "            </ul>
          ";
                            }
                            // line 121
                            echo "        </li>
        ";
                        }
                        // line 123
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "
        ";
                }
                // line 126
                echo "
        ";
            }
            // line 128
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "    </ul>
    ";
        // line 130
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminNavBarBeforeEnd");
        echo "
  </div>
</nav>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig";
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
        return array (  345 => 130,  342 => 129,  336 => 128,  332 => 126,  328 => 124,  322 => 123,  318 => 121,  314 => 119,  308 => 118,  299 => 114,  289 => 113,  286 => 112,  283 => 111,  280 => 110,  277 => 109,  275 => 108,  272 => 107,  270 => 106,  267 => 105,  264 => 104,  260 => 103,  255 => 102,  253 => 101,  250 => 100,  246 => 98,  242 => 96,  238 => 94,  236 => 93,  233 => 92,  231 => 91,  227 => 90,  221 => 89,  217 => 88,  206 => 87,  203 => 86,  200 => 85,  197 => 84,  194 => 83,  191 => 82,  189 => 81,  186 => 80,  183 => 79,  180 => 78,  177 => 77,  174 => 76,  172 => 75,  169 => 74,  167 => 73,  164 => 72,  161 => 71,  157 => 70,  151 => 67,  141 => 66,  138 => 65,  128 => 60,  124 => 59,  114 => 58,  111 => 57,  109 => 56,  106 => 55,  103 => 54,  100 => 53,  97 => 52,  95 => 51,  92 => 50,  89 => 49,  86 => 48,  83 => 47,  81 => 46,  78 => 45,  75 => 44,  71 => 43,  65 => 42,  55 => 35,  51 => 34,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/nav_bar.html.twig");
    }
}
