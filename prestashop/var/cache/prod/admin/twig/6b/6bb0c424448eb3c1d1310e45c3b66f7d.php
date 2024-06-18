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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig */
class __TwigTemplate_14a30a625336c235e1e4f90b1b924913 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'category_form_block' => [$this, 'block_category_form_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["categoryForm"] ?? null), ["@PrestaShop/Admin/Sell/Catalog/Categories/FormTheme/category.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('category_form_block', $context, $blocks);
    }

    public function block_category_form_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["categoryForm"] ?? null), 'form_start', ["attr" => ["data-id" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? null), 0)) : (0))]]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["categoryForm"] ?? null), 'widget');
        echo "
      <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
          <div class=\"alert alert-info\">
            <p class=\"mb-1\">
              <strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You now have three default customer groups.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "</strong>
            </p>

            <p>";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%group_name% - All people without a valid customer account.", ["%group_name%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["defaultGroups"] ?? null), "visitorsGroup", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45)) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
            <p>";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%group_name% - Customer who placed an order with the guest checkout.", ["%group_name%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["defaultGroups"] ?? null), "guestsGroup", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46)) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
            <p>";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%group_name% - All people who have created an account on this site.", ["%group_name%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["defaultGroups"] ?? null), "customersGroup", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47)) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\" id=\"save-button\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
  </div>
</div>
";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["categoryForm"] ?? null), 'form_end');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig";
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
        return array (  114 => 60,  108 => 57,  103 => 55,  99 => 54,  89 => 47,  85 => 46,  81 => 45,  75 => 42,  66 => 36,  59 => 32,  53 => 29,  46 => 28,  43 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/form.html.twig");
    }
}
