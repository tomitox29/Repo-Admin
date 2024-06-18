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

/* @PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig */
class __TwigTemplate_88084430ca76cae77bb326e8d7f1d6f0 extends Template
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
        echo "<meta charset=\"utf-8\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "imgDir", [], "any", false, false, false, 29), "html", null, true);
        echo "favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "imgDir", [], "any", false, false, false, 30), "html", null, true);
        echo "app_icon.png\" />

<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">
<title>";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "metaTitle", [], "any", false, false, false, 33)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "metaTitle", [], "any", false, false, false, 33), "html", null, true);
            echo " • ";
        }
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "shopName", [], "any", false, false, false, 33), "html", null, true);
        echo "</title>

<script type=\"text/javascript\">
  var help_class_name = '";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "controllerName", [], "any", false, false, false, 36), "html", null, true);
        echo "';
  var iso_user = '";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "isoUser", [], "any", false, false, false, 37), "html", null, true);
        echo "';
  var lang_is_rtl = '";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "langIsRtl", [], "any", false, false, false, 38)), "html", null, true);
        echo "';
  var full_language_code = '";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "fullLanguageCode", [], "any", false, false, false, 39), "html", null, true);
        echo "';
  var full_cldr_language_code = '";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "fullCldrLanguageCode", [], "any", false, false, false, 40), "html", null, true);
        echo "';
  var country_iso_code = '";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "countryIsoCode", [], "any", false, false, false, 41), "html", null, true);
        echo "';
  var _PS_VERSION_ = '";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "psVersion", [], "any", false, false, false, 42), "html", null, true);
        echo "';
  var roundMode = ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "roundMode", [], "any", false, false, false, 43)), "html", null, true);
        echo ";
  var youEditFieldFor = '";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "editForLabel", [], "any", false, false, false, 44), "html", null, true);
        echo "';
  var new_order_msg = '";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new order has been placed on your store.", [], "Admin.Navigation.Header"), "html", null, true);
        echo "';
  var order_number_msg = '";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order number:", [], "Admin.Navigation.Header"), "html", null, true);
        echo " ';
  var total_msg = '";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total:", [], "Admin.Global"), "html", null, true);
        echo " ';
  var from_msg = '";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From:", [], "Admin.Global"), "html", null, true);
        echo " ';
  var see_order_msg = '";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View this order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "';
  var new_customer_msg = '";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new customer registered on your store.", [], "Admin.Navigation.Header"), "html", null, true);
        echo "';
  var customer_name_msg = '";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer name:", [], "Admin.Navigation.Header"), "html", null, true);
        echo " ';
  var new_msg = '";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new message was posted on your store.", [], "Admin.Navigation.Header"), "html", null, true);
        echo "';
  var see_msg = '";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read this message", [], "Admin.Navigation.Header"), "html", null, true);
        echo "';
  var token = '";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "legacyToken", [], "any", false, false, false, 54), "html", null, true);
        echo "';
  var token_admin_orders = tokenAdminOrders = '";
        // line 55
        echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyAdminToken("AdminOrders");
        echo "';
  var token_admin_customers = tokenAdminCustomers = '";
        // line 56
        echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyAdminToken("AdminCustomers");
        echo "';
  var token_admin_customer_threads = tokenAdminCustomerThreads = '";
        // line 57
        echo $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyAdminToken("AdminCustomerThreads");
        echo "';
  var currentIndex = '";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "currentIndex", [], "any", false, false, false, 58), "html", null, true);
        echo "';
  var employee_token = '";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "employeeToken", [], "any", false, false, false, 59), "html", null, true);
        echo "';
  var choose_language_translate = '";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose language:", [], "Admin.Actions"), "html", null, true);
        echo "';
  var default_language = '";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "defaultLanguage", [], "any", false, false, false, 61)), "html", null, true);
        echo "';
  var admin_modules_link = '";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_manage");
        echo "';
  var admin_notification_get_link = '";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_common_notifications");
        echo "';
  var admin_notification_push_link = adminNotificationPushLink = '";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_common_notifications_ack");
        echo "';
  var update_success_msg = '";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Successful update", [], "Admin.Notifications.Success"), "html", null, true);
        echo "';
  var search_product_msg = '";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "';
</script>

";
        // line 70
        $this->loadTemplate("@AdminNewTheme/public/preload.html.twig", "@PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig", 70)->display($context);
        // line 71
        echo "
";
        // line 77
        $context["displayBackOfficeHeaderRendered"] = $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeHeader");
        // line 78
        echo "
";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "cssFiles", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["css_uri"] => $context["css_media"]) {
            // line 80
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $context["css_uri"], "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"";
            echo twig_escape_filter($this->env, $context["css_media"], "html", null, true);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['css_uri'], $context['css_media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "jsDef", [], "any", false, false, false, 83)) {
            // line 84
            echo "  <script type=\"text/javascript\">
    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "jsDef", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["k"] => $context["def"]) {
                // line 86
                echo "    var ";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo " = ";
                echo json_encode($context["def"]);
                echo ";
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['def'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "  </script>
";
        }
        // line 90
        echo "
";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "jsFiles", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["js_uri"]) {
            // line 92
            echo "  <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $context["js_uri"], "html", null, true);
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_uri'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
";
        // line 96
        echo ($context["displayBackOfficeHeaderRendered"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig";
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
        return array (  260 => 96,  257 => 94,  248 => 92,  244 => 91,  241 => 90,  237 => 88,  226 => 86,  222 => 85,  219 => 84,  217 => 83,  214 => 82,  203 => 80,  199 => 79,  196 => 78,  194 => 77,  191 => 71,  189 => 70,  183 => 66,  179 => 65,  175 => 64,  171 => 63,  167 => 62,  163 => 61,  159 => 60,  155 => 59,  151 => 58,  147 => 57,  143 => 56,  139 => 55,  135 => 54,  131 => 53,  127 => 52,  123 => 51,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  99 => 45,  95 => 44,  91 => 43,  87 => 42,  83 => 41,  79 => 40,  75 => 39,  71 => 38,  67 => 37,  63 => 36,  53 => 33,  47 => 30,  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/head_tag.html.twig");
    }
}
