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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig */
class __TwigTemplate_07ffa0c122043f9cab8704837307fd9d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  <div class=\"card theme-card\" data-role=\"theme-card-container\">
    <div class=\"active-card-overlay ";
        // line 29
        echo ((($context["isActive"] ?? null)) ? ("active") : (""));
        echo "\"></div>

    ";
        // line 31
        $this->displayBlock('image', $context, $blocks);
        // line 33
        echo "
    <div class=\"actions-container ";
        // line 34
        echo ((($context["isActive"] ?? null)) ? ("active") : (""));
        echo "\">
      ";
        // line 35
        $this->displayBlock('button_container', $context, $blocks);
        // line 37
        echo "    </div>
  </div>

  <div class=\"text-center theme-card-description\">
    <b class=\"theme-name\">
      ";
        // line 42
        echo twig_escape_filter($this->env, ($context["themeDisplayName"] ?? null), "html", null, true);
        echo "
    </b>
    <span class=\"theme-version\">
      ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Version", [], "Admin.Global"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["themeVersion"] ?? null), "html", null, true);
        echo "
    </span>
    <div class=\"theme-author\">
      <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["themeAuthorUrl"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Designed by %s", ["%s" => ($context["themeAuthor"] ?? null)], "Admin.Design.Feature"), "html", null, true);
        echo "</a>
    </div>
  </div>
";
    }

    // line 31
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    ";
    }

    // line 35
    public function block_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "      ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
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
        return array (  114 => 36,  110 => 35,  106 => 32,  102 => 31,  92 => 48,  84 => 45,  78 => 42,  71 => 37,  69 => 35,  65 => 34,  62 => 33,  60 => 31,  55 => 29,  52 => 28,  48 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig");
    }
}
