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

/* @SwagPayPal/storefront/component/product/card/action.html.twig */
class __TwigTemplate_cbe0371577aee50b989d98b918bd8ae0313933f3b0212c9ab0fd1e45049ec856 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_product_box_action_form' => [$this, 'block_component_product_box_action_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/product/card/action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/component/product/card/action.html.twig", "@SwagPayPal/storefront/component/product/card/action.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_component_product_box_action_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("component_product_box_action_form", $context, $blocks);
        echo "

    ";
        // line 7
        echo "    ";
        $context["expressSettings"] = (($__internal_compile_0 = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "extensions", [], "any", false, false, false, 7)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_constant("Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID")] ?? null) : null);
        // line 8
        echo "
    ";
        // line 9
        if (((null === ($context["expressSettings"] ?? null)) && (($__internal_compile_1 = sw_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "extensions", [], "any", false, false, false, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_constant("Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID")] ?? null) : null))) {
            // line 10
            echo "        ";
            // line 11
            echo "        ";
            $context["expressSettings"] = (($__internal_compile_2 = sw_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "extensions", [], "any", false, false, false, 11)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_constant("Swag\\PayPal\\Checkout\\ExpressCheckout\\ExpressCheckoutSubscriber::PAYPAL_EXPRESS_CHECKOUT_BUTTON_DATA_EXTENSION_ID")] ?? null) : null);
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ((sw_get_attribute($this->env, $this->source, ($context["expressSettings"] ?? null), "listingEnabled", [], "any", false, false, false, 14) && (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedCheapestPrice", [], "any", false, false, false, 14), "totalPrice", [], "any", false, false, false, 14), 0)))) {
            // line 15
            echo "        ";
            $this->loadTemplate("@SwagPayPal/storefront/component/ecs-spb-checkout/ecs-button.html.twig", "@SwagPayPal/storefront/component/product/card/action.html.twig", 15)->display(twig_array_merge($context, ["button_class" => "pt-3"]));
            // line 16
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@SwagPayPal/storefront/component/product/card/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  77 => 15,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  64 => 10,  62 => 9,  59 => 8,  56 => 7,  50 => 4,  46 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SwagPayPal/storefront/component/product/card/action.html.twig", "/var/www/shopwareloc/custom/plugins/SwagPayPal/src/Resources/views/storefront/component/product/card/action.html.twig");
    }
}
