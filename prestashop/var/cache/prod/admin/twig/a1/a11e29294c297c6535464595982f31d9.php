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

/* @PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig */
class __TwigTemplate_40465a4f889cf9f8d5f65f189c7edd0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'page_layout_customization_form_rest' => [$this, 'block_page_layout_customization_form_rest'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pageLayoutCustomizationForm"] ?? null), 'form_start');
        echo "
  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i>
          ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose layouts", [], "Admin.Actions"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-body\">
          <table class=\"table\">
            <thead>
              <tr>
                <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Layout", [], "Admin.Global"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customizablePage"]) {
            // line 47
            echo "                <tr>
                  <td>";
            // line 48
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["customizablePage"], "title", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["customizablePage"], "title", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, $context["customizablePage"], "page", [], "any", false, false, false, 48))) : (twig_get_attribute($this->env, $this->source, $context["customizablePage"], "page", [], "any", false, false, false, 48))), "html", null, true);
            echo "</td>
                  <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customizablePage"], "description", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                  <td>";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_0 = (($__internal_compile_1 = ($context["pageLayoutCustomizationForm"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["layouts"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["customizablePage"], "page", [], "any", false, false, false, 50)] ?? null) : null), 'widget');
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customizablePage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
          </table>

          ";
        // line 56
        $this->displayBlock('page_layout_customization_form_rest', $context, $blocks);
        // line 59
        echo "        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pageLayoutCustomizationForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 56
    public function block_page_layout_customization_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["pageLayoutCustomizationForm"] ?? null), 'rest');
        echo "
          ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig";
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
        return array (  140 => 57,  136 => 56,  130 => 68,  121 => 62,  116 => 59,  114 => 56,  109 => 53,  100 => 50,  96 => 49,  92 => 48,  89 => 47,  85 => 46,  78 => 42,  74 => 41,  70 => 40,  61 => 34,  51 => 28,  47 => 27,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/customize_page_layouts.html.twig");
    }
}
