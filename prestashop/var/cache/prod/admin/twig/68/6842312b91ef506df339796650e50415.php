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

/* @PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig */
class __TwigTemplate_0af5aa3b0c3d88dab77e7ff621278c0c extends Template
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
        echo "<div id=\"header_quick\" class=\"component\">
  <div class=\"dropdown\" id=\"quick-access-container\">
    <button
      id=\"quick_select\"
      class=\"btn btn-link dropdown-toggle\"
      data-toggle=\"dropdown\"
    >";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        echo " <i class=\"material-icons\">arrow_drop_down</i></button>
    <ul class=\"dropdown-menu\">
      ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "quickAccesses", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 34
            echo "        <li class=\"quick-row-link";
            if (twig_get_attribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 34)) {
                echo " active";
            }
            echo "\">
          <a ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", true, true, false, 35)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", false, false, false, 35), "html", null, true);
                echo "\"";
            }
            // line 36
            echo "          href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 36), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 36)) {
                echo "target=\"_blank\"";
            }
            // line 37
            echo "          data-item=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "\"
          >
            ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "
          </a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickAccess'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
      <li class=\"divider\"></li>
      ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 45)) {
            // line 46
            echo "      <li>
        <a id=\"quick-remove-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"remove\"
           data-quicklink-id=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 48), "id_quick_access", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
          <i class=\"material-icons\">remove_circle</i>
          ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            echo "
        </a>
      </li>
      ";
        } else {
            // line 54
            echo "      <li>
        <a id=\"quick-add-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"add\">
          <i class=\"material-icons\">add_circle</i>
          ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            echo "
        </a>
      </li>
      ";
        }
        // line 61
        echo "      <li>
        <a id=\"quick-manage-link\" href=\"";
        // line 62
        echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        echo "\">
        <i class=\"material-icons\">settings</i>
          ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        echo "
        </a>
      </li>
    </ul>
  </div>
</div>

<script>
  \$(function() {
    \$('.ajax-quick-link').on('click', function(e){
      e.preventDefault();

      var method = \$(this).data('method');

      if(method == 'add')
        var name = prompt('";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentPageTitle", [], "any", false, false, false, 79), "html", null, true);
        echo "');

      if(method == 'add' && name || method == 'remove')
      {
        \$.ajax({
          type: 'POST',
          headers: { \"cache-control\": \"no-cache\" },
          async: false,
          url: \"";
        // line 87
        echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses", ["action" => "GetUrl", "rand" => twig_random($this->env, 1, 200), "ajax" => 1]);
        echo "\" + \"&method=\" + method + ( \$(this).data('quicklink-id') ? \"&id_quick_access=\" + \$(this).data('quicklink-id') : \"\"),
          data: {
            \"url\": \"";
        // line 89
        echo twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentPageQuickAccessLink", [], "any", false, false, false, 89);
        echo "\",
            \"name\": name,
            \"icon\": \"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentPageIcon", [], "any", false, false, false, 91), "html", null, true);
        echo "\"
          },
          dataType: \"json\",
          success: function(data) {
            var quicklink_list ='';
            \$.each(data, function(index,value){
              if (typeof data[index]['name'] !== 'undefined')
                quicklink_list += '<li><a href=\"' + data[index]['link'] + '\">' + data[index]['name'] + '</a></li>';
            });

            if (typeof data['has_errors'] !== 'undefined' && data['has_errors'])
              \$.each(data, function(index, value)
              {
                if (typeof data[index] == 'string')
                  \$.growl.error({ title: \"\", message: data[index]});
              });
            else if (quicklink_list)
            {
              \$('#header_quick ul.dropdown-menu .divider').prevAll().remove();
              \$('#header_quick ul.dropdown-menu').prepend(quicklink_list);
              \$(e.target).remove();
              showSuccessMessage(update_success_msg);
            }
          }
        });
      }
    });
  });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig";
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
        return array (  173 => 91,  168 => 89,  163 => 87,  150 => 79,  132 => 64,  127 => 62,  124 => 61,  117 => 57,  112 => 54,  105 => 50,  100 => 48,  96 => 46,  94 => 45,  90 => 43,  80 => 39,  74 => 37,  67 => 36,  61 => 35,  54 => 34,  50 => 33,  45 => 31,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/quick_access.html.twig");
    }
}
