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

/* @SwagPayPal/storefront/component/checkout/offcanvas-cart.html.twig */
class __TwigTemplate_9750735b64ae11512d383f02d44fa9e413aa1ab83f9d618ffa2756b8f61bc789 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_offcanvas_cart_actions_cart' => [$this, 'block_component_offcanvas_cart_actions_cart'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", "@SwagPayPal/storefront/component/checkout/offcanvas-cart.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_component_offcanvas_cart_actions_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("component_offcanvas_cart_actions_cart", $context, $blocks);
        echo "

    ";
        // line 7
        echo "    ";
        $context["expressSettings"] = (($__internal_compile_0 = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extensions", [], "any", false, false, false, 7)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_constant("Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID")] ?? null) : null);
        // line 8
        echo "
    ";
        // line 9
        if (sw_get_attribute($this->env, $this->source, ($context["expressSettings"] ?? null), "offCanvasEnabled", [], "any", false, false, false, 9)) {
            // line 10
            echo "        ";
            $this->loadTemplate("@SwagPayPal/storefront/component/ecs-spb-checkout/ecs-button.html.twig", "@SwagPayPal/storefront/component/checkout/offcanvas-cart.html.twig", 10)->display(twig_array_merge($context, ["button_class" => "btn-block"]));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        $context["installmentBanner"] = (($__internal_compile_1 = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extensions", [], "any", false, false, false, 14)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_constant("Swag\\PayPal\\Installment\\Banner\\InstallmentBannerSubscriber::PAYPAL_INSTALLMENT_BANNER_DATA_EXTENSION_ID")] ?? null) : null);
        // line 15
        echo "
    ";
        // line 16
        if ( !(null === ($context["installmentBanner"] ?? null))) {
            // line 17
            echo "        <div class=\"btn-block ml-1\"
             data-swag-paypal-installment-banner=\"true\"
             data-swag-pay-pal-installment-banner-options=\"";
            // line 19
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["installmentBanner"] ?? null)]), "html", null, true);
            echo "\">
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@SwagPayPal/storefront/component/checkout/offcanvas-cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  81 => 17,  79 => 16,  76 => 15,  73 => 14,  70 => 12,  67 => 11,  64 => 10,  62 => 9,  59 => 8,  56 => 7,  50 => 4,  46 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SwagPayPal/storefront/component/checkout/offcanvas-cart.html.twig", "/var/www/shopwareloc/custom/plugins/SwagPayPal/src/Resources/views/storefront/component/checkout/offcanvas-cart.html.twig");
    }
}
