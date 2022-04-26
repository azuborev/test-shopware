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

/* @SwagPayPal/storefront/layout/footer/footer.html.twig */
class __TwigTemplate_5be3fb849085d5210585cff0567707f8f90197ed0aaafd70e04c4e88aeb04381 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_footer_payment_logos' => [$this, 'block_layout_footer_payment_logos'],
            'layout_footer_bottom' => [$this, 'block_layout_footer_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/footer/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/footer/footer.html.twig", "@SwagPayPal/storefront/layout/footer/footer.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_layout_footer_payment_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        $context["spbCheckoutMarksData"] = (($__internal_compile_0 = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 6), "extensions", [], "any", false, false, false, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_constant("Swag\\PayPal\\Checkout\\SPBCheckout\\SPBMarksSubscriber::PAYPAL_SMART_PAYMENT_MARKS_DATA_EXTENSION_ID")] ?? null) : null);
        // line 7
        echo "
    ";
        // line 9
        echo "    ";
        $context["installmentBanner"] = (($__internal_compile_1 = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 9), "extensions", [], "any", false, false, false, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_constant("Swag\\PayPal\\Installment\\Banner\\InstallmentBannerSubscriber::PAYPAL_INSTALLMENT_BANNER_DATA_EXTENSION_ID")] ?? null) : null);
        // line 10
        echo "
    ";
        // line 11
        if ( !(null === ($context["installmentBanner"] ?? null))) {
            // line 12
            echo "        <div class=\"col-4 mt-2 p-0 footer-logo is-payment\"
             data-swag-paypal-installment-banner=\"true\"
             data-swag-pay-pal-installment-banner-options=\"";
            // line 14
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["installmentBanner"] ?? null)]), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        $this->displayParentBlock("layout_footer_payment_logos", $context, $blocks);
        echo "
";
    }

    // line 21
    public function block_layout_footer_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        $this->displayParentBlock("layout_footer_bottom", $context, $blocks);
        echo "

    ";
        // line 25
        echo "    ";
        $context["fundingEligibilityData"] = (($__internal_compile_2 = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 25), "extensions", [], "any", false, false, false, 25)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_constant("Swag\\PayPal\\Storefront\\Data\\FundingSubscriber::FUNDING_ELIGIBILITY_EXTENSION")] ?? null) : null);
        // line 26
        echo "
    ";
        // line 27
        if (($context["fundingEligibilityData"] ?? null)) {
            // line 28
            echo "        <div data-swag-paypal-funding-eligibility=\"true\"
             data-swag-paypal-funding-eligibility-options=\"";
            // line 29
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["fundingEligibilityData"] ?? null)]), "html", null, true);
            echo "\">
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@SwagPayPal/storefront/layout/footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  106 => 28,  104 => 27,  101 => 26,  98 => 25,  92 => 22,  88 => 21,  82 => 18,  79 => 17,  73 => 14,  69 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 7,  55 => 6,  53 => 5,  51 => 4,  47 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SwagPayPal/storefront/layout/footer/footer.html.twig", "/var/www/shopwareloc/custom/plugins/SwagPayPal/src/Resources/views/storefront/layout/footer/footer.html.twig");
    }
}
