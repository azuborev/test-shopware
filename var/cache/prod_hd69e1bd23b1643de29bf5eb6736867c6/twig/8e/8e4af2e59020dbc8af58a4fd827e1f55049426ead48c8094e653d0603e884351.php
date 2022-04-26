<?php

use Twig\Environment;
use function Shopware\Core\Framework\Adapter\Twig\sw_get_attribute;
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

/* @SwagPayPal/storefront/page/checkout/address/index.html.twig */
class __TwigTemplate_95b3dbf220adbc7be56a748db9bd86782a241974ab9b0565d92f3ce4a262e23a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_checkout_address_login_toggle' => [$this, 'block_page_checkout_address_login_toggle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/checkout/address/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/address/index.html.twig", "@SwagPayPal/storefront/page/checkout/address/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_checkout_address_login_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("page_checkout_address_login_toggle", $context, $blocks);
        echo "

    ";
        // line 7
        echo "    ";
        $context["expressSettings"] = (($__internal_compile_0 = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extensions", [], "any", false, false, false, 7)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_constant("Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID")] ?? null) : null);
        // line 8
        echo "    ";
        $context["expressEnabled"] = sw_get_attribute($this->env, $this->source, ($context["expressSettings"] ?? null), "loginEnabled", [], "any", false, false, false, 8);
        // line 9
        echo "
    ";
        // line 11
        echo "    ";
        $context["installmentBanner"] = (($__internal_compile_1 = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extensions", [], "any", false, false, false, 11)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_constant("Swag\\PayPal\\Installment\\Banner\\InstallmentBannerSubscriber::PAYPAL_INSTALLMENT_BANNER_DATA_EXTENSION_ID")] ?? null) : null);
        // line 12
        echo "    ";
        $context["installmentBannerEnabled"] =  !(null === ($context["installmentBanner"] ?? null));
        // line 13
        echo "
    ";
        // line 14
        if ((($context["expressEnabled"] ?? null) || ($context["installmentBannerEnabled"] ?? null))) {
            // line 15
            echo "        <div class=\"row mb-2\">
            ";
            // line 16
            if (($context["expressEnabled"] ?? null)) {
                // line 17
                echo "                ";
                $this->loadTemplate("@SwagPayPal/storefront/component/ecs-spb-checkout/ecs-button.html.twig", "@SwagPayPal/storefront/page/checkout/address/index.html.twig", 17)->display(twig_array_merge($context, ["button_class" => "col-5"]));
                // line 18
                echo "            ";
            }
            // line 19
            echo "
            ";
            // line 20
            if (($context["installmentBannerEnabled"] ?? null)) {
                // line 21
                echo "                <div class=\"col-5 mt-2\"
                     data-swag-paypal-installment-banner=\"true\"
                     data-swag-pay-pal-installment-banner-options=\"";
                // line 23
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["installmentBanner"] ?? null)]), "html", null, true);
                echo "\">
                </div>
            ";
            }
            // line 26
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@SwagPayPal/storefront/page/checkout/address/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  96 => 23,  92 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  79 => 16,  76 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 9,  59 => 8,  56 => 7,  50 => 4,  46 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SwagPayPal/storefront/page/checkout/address/index.html.twig", "/var/www/shopwareloc/custom/plugins/SwagPayPal/src/Resources/views/storefront/page/checkout/address/index.html.twig");
    }
}
