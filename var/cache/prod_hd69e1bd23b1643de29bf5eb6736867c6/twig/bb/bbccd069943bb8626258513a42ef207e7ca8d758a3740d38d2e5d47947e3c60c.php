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

/* @Storefront/storefront/layout/footer/footer-minimal.html.twig */
class __TwigTemplate_a2e31bd095513a600565b80b3c600fefaa0d5ea4172a0430fa5458041e9476fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_footer_inner_container' => [$this, 'block_layout_footer_inner_container'],
            'layout_footer_bottom' => [$this, 'block_layout_footer_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@SwagPayPal/storefront/layout/footer/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SwagPayPal/storefront/layout/footer/footer.html.twig", "@Storefront/storefront/layout/footer/footer-minimal.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_layout_footer_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <footer class=\"footer-minimal\">
        ";
        // line 5
        $this->displayBlock('layout_footer_bottom', $context, $blocks);
        // line 8
        echo "    </footer>
";
    }

    // line 5
    public function block_layout_footer_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        $this->displayParentBlock("layout_footer_bottom", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/footer/footer-minimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 6,  61 => 5,  56 => 8,  54 => 5,  51 => 4,  47 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/footer/footer-minimal.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/layout/footer/footer-minimal.html.twig");
    }
}
