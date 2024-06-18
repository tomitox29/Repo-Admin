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

/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_684bcbbef01bd5137c8a9b8206c8414d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_import"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new theme", [], "Admin.Design.Feature"), "icon" => "add_circle_outline"], "export" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_export_current"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export current theme", [], "Admin.Design.Feature"), "icon" => "cloud_download"]];
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "  <div id=\"themes-logo-page\">


    ";
        // line 43
        if ( !($context["isSingleShopContext"] ?? null)) {
            // line 44
            echo "      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must select a shop from the above list if you wish to choose a theme.", [], "Admin.Design.Help"), "html", null, true);
            echo "
        </p>
      </div>
    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if (($context["isInstalledRtlLanguage"] ?? null)) {
            // line 52
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 52)->display($context);
            // line 53
            echo "    ";
        }
        // line 54
        echo "
    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["shopLogosForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_upload_logos")]);
        echo "
    ";
        // line 56
        if ((( !($context["isInstalledRtlLanguage"] ?? null) && ($context["isSingleShopContext"] ?? null)) && ($context["isMultiShopFeatureUsed"] ?? null))) {
            // line 57
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 57)->display($context);
            // line 58
            echo "    ";
        }
        // line 59
        echo "    <div class=\"card\">
      <div class=\"card-header\">
        ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"card-body logo-configuration-card-body\">
        ";
        // line 64
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 64)->display($context);
        // line 65
        echo "      </div>
      <div class=\"card-footer\">
        <button class=\"btn btn-primary float-right\">
          ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
        <div class=\"clearfix\">&nbsp;</div>
      </div>
    </div>
    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["shopLogosForm"] ?? null), 'rest');
        echo "
    ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["shopLogosForm"] ?? null), 'form_end');
        echo "

    <div class=\"card\">
      <div class=\"card-header\" data-role=\"theme-shop\">
        ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My theme for %name% shop", ["%name%" => ($context["shopName"] ?? null)], "Admin.Design.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"card-body\">
        <div class=\"row\">
          ";
        // line 82
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 82, "1559238154")->display(twig_array_merge($context, ["themeName" => twig_get_attribute($this->env, $this->source,         // line 83
($context["theme"] ?? null), "get", ["name"], "method", false, false, false, 83), "themeDisplayName" => twig_get_attribute($this->env, $this->source,         // line 84
($context["theme"] ?? null), "get", ["display_name"], "method", false, false, false, 84), "themeVersion" => twig_get_attribute($this->env, $this->source,         // line 85
($context["currentlyUsedTheme"] ?? null), "get", ["version"], "method", false, false, false, 85), "themeAuthor" => twig_get_attribute($this->env, $this->source,         // line 86
($context["currentlyUsedTheme"] ?? null), "get", ["author.name"], "method", false, false, false, 86), "themeAuthorUrl" => twig_get_attribute($this->env, $this->source,         // line 87
($context["theme"] ?? null), "get", ["author.url"], "method", false, false, false, 87), "isActive" => true]));
        // line 100
        echo "
          ";
        // line 101
        if ( !twig_test_empty(($context["notUsedThemes"] ?? null))) {
            // line 102
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notUsedThemes"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 103
                echo "              ";
                $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 103, "992185089")->display(twig_array_merge($context, ["themeName" => twig_get_attribute($this->env, $this->source,                 // line 104
$context["theme"], "get", ["name"], "method", false, false, false, 104), "themeDisplayName" => twig_get_attribute($this->env, $this->source,                 // line 105
$context["theme"], "get", ["display_name"], "method", false, false, false, 105), "themeVersion" => twig_get_attribute($this->env, $this->source,                 // line 106
$context["theme"], "get", ["version"], "method", false, false, false, 106), "themeAuthor" => twig_get_attribute($this->env, $this->source,                 // line 107
$context["theme"], "get", ["author.name"], "method", false, false, false, 107), "themeAuthorUrl" => twig_get_attribute($this->env, $this->source,                 // line 108
$context["theme"], "get", ["author.url"], "method", false, false, false, 108), "isActive" => false]));
                // line 134
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "          </div>

          ";
            // line 137
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 137)->display($context);
            // line 138
            echo "          ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 138)->display($context);
            // line 139
            echo "        ";
        }
        // line 140
        echo "
        ";
        // line 141
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminThemesListAfter", ["current_theme_name" => twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "get", ["name"], "method", false, false, false, 141)]);
        echo "

        ";
        // line 143
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 143)->display($context);
        // line 144
        echo "      </div>
    </div>

  </div>
";
    }

    // line 150
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/themes.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
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
        return array (  233 => 153,  227 => 151,  223 => 150,  215 => 144,  213 => 143,  208 => 141,  205 => 140,  202 => 139,  199 => 138,  197 => 137,  193 => 135,  179 => 134,  177 => 108,  176 => 107,  175 => 106,  174 => 105,  173 => 104,  171 => 103,  153 => 102,  151 => 101,  148 => 100,  146 => 87,  145 => 86,  144 => 85,  143 => 84,  142 => 83,  141 => 82,  134 => 78,  127 => 74,  123 => 73,  115 => 68,  110 => 65,  108 => 64,  102 => 61,  98 => 59,  95 => 58,  92 => 57,  90 => 56,  86 => 55,  83 => 54,  80 => 53,  77 => 52,  75 => 51,  72 => 50,  65 => 46,  61 => 44,  59 => 43,  54 => 40,  50 => 39,  45 => 25,  43 => 26,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_684bcbbef01bd5137c8a9b8206c8414d___1559238154 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 82
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 82);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 90
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "              <img src=\"";
        echo twig_escape_filter($this->env, ($context["baseShopUrl"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "get", ["preview"], "method", false, false, false, 91), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "get", ["display_name"], "method", false, false, false, 91), "html", null, true);
        echo "\">
            ";
    }

    // line 93
    public function block_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "              <button class=\"btn action-button\">
                <i class=\"material-icons icon-current-theme\">done</i>
                ";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My current theme", [], "Admin.Design.Feature"), "html", null, true);
        echo "
              </button>
            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
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
        return array (  323 => 96,  319 => 94,  315 => 93,  305 => 91,  301 => 90,  290 => 82,  233 => 153,  227 => 151,  223 => 150,  215 => 144,  213 => 143,  208 => 141,  205 => 140,  202 => 139,  199 => 138,  197 => 137,  193 => 135,  179 => 134,  177 => 108,  176 => 107,  175 => 106,  174 => 105,  173 => 104,  171 => 103,  153 => 102,  151 => 101,  148 => 100,  146 => 87,  145 => 86,  144 => 85,  143 => 84,  142 => 83,  141 => 82,  134 => 78,  127 => 74,  123 => 73,  115 => 68,  110 => 65,  108 => 64,  102 => 61,  98 => 59,  95 => 58,  92 => 57,  90 => 56,  86 => 55,  83 => 54,  80 => 53,  77 => 52,  75 => 51,  72 => 50,  65 => 46,  61 => 44,  59 => 43,  54 => 40,  50 => 39,  45 => 25,  43 => 26,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_684bcbbef01bd5137c8a9b8206c8414d___992185089 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 103
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 103);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 111
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "                  <img src=\"";
        echo twig_escape_filter($this->env, ($context["baseShopUrl"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "get", ["preview"], "method", false, false, false, 112), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "get", ["display_name"], "method", false, false, false, 112), "html", null, true);
        echo "\">
                ";
    }

    // line 114
    public function block_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                  <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_enable", ["themeName" => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 115)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("enable-theme"), "html", null, true);
        echo "\"/>
                    <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" ";
        // line 117
        echo (( !($context["isSingleShopContext"] ?? null)) ? ("disabled") : (""));
        echo ">
                      <i class=\"material-icons\">
                        present_to_all
                      </i>
                      <span>";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use this theme", [], "Admin.Design.Feature"), "html", null, true);
        echo "</span>
                    </button>
                  </form>
                  <form action=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_delete", ["themeName" => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 124)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-theme"), "html", null, true);
        echo "\"/>
                    <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                      <i class=\"material-icons\">
                        delete
                      </i>
                    </button>
                  </form>
                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
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
        return array (  436 => 125,  432 => 124,  426 => 121,  419 => 117,  415 => 116,  410 => 115,  406 => 114,  396 => 112,  392 => 111,  381 => 103,  323 => 96,  319 => 94,  315 => 93,  305 => 91,  301 => 90,  290 => 82,  233 => 153,  227 => 151,  223 => 150,  215 => 144,  213 => 143,  208 => 141,  205 => 140,  202 => 139,  199 => 138,  197 => 137,  193 => 135,  179 => 134,  177 => 108,  176 => 107,  175 => 106,  174 => 105,  173 => 104,  171 => 103,  153 => 102,  151 => 101,  148 => 100,  146 => 87,  145 => 86,  144 => 85,  143 => 84,  142 => 83,  141 => 82,  134 => 78,  127 => 74,  123 => 73,  115 => 68,  110 => 65,  108 => 64,  102 => 61,  98 => 59,  95 => 58,  92 => 57,  90 => 56,  86 => 55,  83 => 54,  80 => 53,  77 => 52,  75 => 51,  72 => 50,  65 => 46,  61 => 44,  59 => 43,  54 => 40,  50 => 39,  45 => 25,  43 => 26,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}
