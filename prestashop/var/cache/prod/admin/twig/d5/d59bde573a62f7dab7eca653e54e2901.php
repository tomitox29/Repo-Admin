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

/* @PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig */
class __TwigTemplate_577573e6028a3abc1102bd4980b2ad11 extends Template
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
        if (((twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 25) || twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 25)) || twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 25))) {
            // line 26
            echo "<ul class=\"header-list component\">
  <li id=\"notification\" class=\"dropdown\">
    <a href=\"javascript:void(0);\" class=\"notification dropdown-toggle notifs\">
      <i class=\"material-icons\">notifications_none</i>
      <span id=\"total_notif_number_wrapper\" class=\"notifs_badge hide\">
              <span id=\"total_notif_value\">0</span>
            </span>
    </a>
    <div class=\"dropdown-menu dropdown-menu-right notifs_dropdown\">
      <div class=\"notifications\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
          ";
            // line 37
            $context["active"] = "active";
            // line 38
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 38)) {
                // line 39
                echo "            <li class=\"nav-item ";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"order\" href=\"#orders-notifications\" role=\"tab\" id=\"orders-tab\">";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Navigation.Header"), "html", null, true);
                echo "<span id=\"orders_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 42
                $context["active"] = "";
                // line 43
                echo "          ";
            }
            // line 44
            echo "
          ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 45)) {
                // line 46
                echo "            <li class=\"nav-item ";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer\" href=\"#customers-notifications\" role=\"tab\" id=\"customers-tab\">";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
                echo "<span id=\"customers_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 49
                $context["active"] = "";
                // line 50
                echo "          ";
            }
            // line 51
            echo "
          ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 52)) {
                // line 53
                echo "            <li class=\"nav-item ";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer_message\" href=\"#messages-notifications\" role=\"tab\" id=\"messages-tab\">";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messages", [], "Admin.Global"), "html", null, true);
                echo "<span id=\"customer_messages_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 56
                $context["active"] = "";
                // line 57
                echo "          ";
            }
            // line 58
            echo "        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\">
          ";
            // line 62
            $context["active"] = "active";
            // line 63
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 63)) {
                // line 64
                echo "            <div class=\"tab-pane ";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo " empty\" id=\"orders-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new order for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                echo "<br>
                ";
                // line 67
                echo twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "noOrderTip", [], "any", false, false, false, 67);
                echo "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 71
                $context["active"] = "";
                // line 72
                echo "          ";
            }
            // line 73
            echo "
          ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 74)) {
                // line 75
                echo "            <div class=\"tab-pane ";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo " empty\" id=\"customers-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new customer for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                echo "<br>
                ";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "noCustomerTip", [], "any", false, false, false, 78), "html", null, true);
                echo "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 82
                $context["active"] = "";
                // line 83
                echo "          ";
            }
            // line 84
            echo "
          ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 85)) {
                // line 86
                echo "            <div class=\"tab-pane ";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo " empty\" id=\"messages-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new message for now.", [], "Admin.Navigation.Notification"), "html", null, true);
                echo "<br>
                ";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "noCustomerMessageTip", [], "any", false, false, false, 89), "html", null, true);
                echo "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 93
                $context["active"] = "";
                // line 94
                echo "          ";
            }
            // line 95
            echo "        </div>
      </div>
    </div>
  </li>
</ul>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig";
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
        return array (  199 => 95,  196 => 94,  194 => 93,  187 => 89,  183 => 88,  177 => 86,  175 => 85,  172 => 84,  169 => 83,  167 => 82,  160 => 78,  156 => 77,  150 => 75,  148 => 74,  145 => 73,  142 => 72,  140 => 71,  133 => 67,  129 => 66,  123 => 64,  120 => 63,  118 => 62,  112 => 58,  109 => 57,  107 => 56,  102 => 54,  97 => 53,  95 => 52,  92 => 51,  89 => 50,  87 => 49,  82 => 47,  77 => 46,  75 => 45,  72 => 44,  69 => 43,  67 => 42,  62 => 40,  57 => 39,  54 => 38,  52 => 37,  39 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/notifications_center.html.twig");
    }
}
