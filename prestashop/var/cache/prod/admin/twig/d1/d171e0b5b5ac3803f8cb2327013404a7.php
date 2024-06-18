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

/* @PrestaShop/Admin/Component/Layout/notifications_center.html.twig */
class __TwigTemplate_9a26832e60a66cffed37a21165916c18 extends Template
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
            echo "  <div class=\"component header-right-component\" id=\"header-notifications-container\">
    <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
      <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">notifications_none</i>
        <span id=\"notifications-total\" class=\"count hide\">0</span>
      </button>
      <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
        <div class=\"notifications\">
          <ul class=\"nav nav-tabs\" role=\"tablist\">
            ";
            // line 35
            $context["active"] = "active";
            // line 36
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 36)) {
                // line 37
                echo "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 39
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\"
                  id=\"orders-tab\"
                  data-toggle=\"tab\"
                  data-type=\"order\"
                  href=\"#orders-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 46
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification");
                echo "
                  <span id=\"_nb_new_orders_\"></span>
                </a>
              </li>
              ";
                // line 50
                $context["active"] = "";
                // line 51
                echo "            ";
            }
            // line 52
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 52)) {
                // line 53
                echo "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 55
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\"
                  id=\"customers-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer\"
                  href=\"#customers-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification"), "html", null, true);
                echo "
                  <span id=\"_nb_new_customers_\"></span>
                </a>
              </li>
              ";
                // line 66
                $context["active"] = "";
                // line 67
                echo "            ";
            }
            // line 68
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 68)) {
                // line 69
                echo "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 71
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\"
                  id=\"messages-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer_message\"
                  href=\"#messages-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messages[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification"), "html", null, true);
                echo "
                  <span id=\"_nb_new_messages_\"></span>
                </a>
              </li>
              ";
                // line 82
                $context["active"] = "";
                // line 83
                echo "            ";
            }
            // line 84
            echo "          </ul>

          <!-- Tab panes -->
          <div class=\"tab-content\">
            ";
            // line 88
            $context["active"] = "active";
            // line 89
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 89)) {
                // line 90
                echo "              <div class=\"tab-pane ";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo " empty\" id=\"orders-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new order for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                echo "<br>
                  ";
                // line 93
                echo twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "noOrderTip", [], "any", false, false, false, 93);
                echo "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 97
                $context["active"] = "";
                // line 98
                echo "            ";
            }
            // line 99
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 99)) {
                // line 100
                echo "              <div class=\"tab-pane ";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo " empty\" id=\"customers-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new customer for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                echo "<br>
                  ";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "noCustomerTip", [], "any", false, false, false, 103), "html", null, true);
                echo "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 107
                $context["active"] = "";
                // line 108
                echo "            ";
            }
            // line 109
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 109)) {
                // line 110
                echo "              <div class=\"tab-pane ";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo " empty\" id=\"messages-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new message for now.", [], "Admin.Navigation.Notification"), "html", null, true);
                echo "<br>
                  ";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "noCustomerMessageTip", [], "any", false, false, false, 113), "html", null, true);
                echo "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 117
                $context["active"] = "";
                // line 118
                echo "            ";
            }
            // line 119
            echo "          </div>
        </div>
      </div>
    </div>

    ";
            // line 124
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewOrders", [], "any", false, false, false, 124)) {
                // line 125
                echo "      <script type=\"text/html\" id=\"order-notification-template\">
        <a class=\"notif\" href='order_url'>
          #_id_order_ -
          ";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("from", [], "Admin.Navigation.Notification"), "html", null, true);
                echo " <strong>_customer_name_</strong> (_iso_code_)_carrier_
          <strong class=\"float-sm-right\">_total_paid_</strong>
        </a>
      </script>
    ";
            }
            // line 133
            echo "
    ";
            // line 134
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewCustomers", [], "any", false, false, false, 134)) {
                // line 135
                echo "      <script type=\"text/html\" id=\"customer-notification-template\">
        <a class=\"notif\" href='customer_url'>
          #_id_customer_ - <strong>_customer_name_</strong>_company_
          - ";
                // line 138
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registered", [], "Admin.Navigation.Notification"), "html", null, true);
                echo " <strong>_date_add_</strong>
        </a>
      </script>
    ";
            }
            // line 142
            echo "
    ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "showNewMessages", [], "any", false, false, false, 143)) {
                // line 144
                echo "      <script type=\"text/html\" id=\"message-notification-template\">
        <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
          - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
        </a>
      </script>
    ";
            }
            // line 153
            echo "  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig";
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
        return array (  277 => 153,  266 => 144,  264 => 143,  261 => 142,  254 => 138,  249 => 135,  247 => 134,  244 => 133,  236 => 128,  231 => 125,  229 => 124,  222 => 119,  219 => 118,  217 => 117,  210 => 113,  206 => 112,  200 => 110,  197 => 109,  194 => 108,  192 => 107,  185 => 103,  181 => 102,  175 => 100,  172 => 99,  169 => 98,  167 => 97,  160 => 93,  156 => 92,  150 => 90,  147 => 89,  145 => 88,  139 => 84,  136 => 83,  134 => 82,  127 => 78,  117 => 71,  113 => 69,  110 => 68,  107 => 67,  105 => 66,  98 => 62,  88 => 55,  84 => 53,  81 => 52,  78 => 51,  76 => 50,  69 => 46,  59 => 39,  55 => 37,  52 => 36,  50 => 35,  39 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/notifications_center.html.twig");
    }
}
