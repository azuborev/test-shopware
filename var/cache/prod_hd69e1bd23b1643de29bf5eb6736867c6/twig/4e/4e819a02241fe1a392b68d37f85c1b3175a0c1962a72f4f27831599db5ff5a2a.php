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

/* @Storefront/storefront/page/error/error-ajax-std.html.twig */
class __TwigTemplate_d56077bcb88ac79f541ec38e1cd316070c39552f930c60fa6ec13e6c247925ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/error/_pagelet.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/error/_pagelet.html.twig", "@Storefront/storefront/page/error/error-ajax-std.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/error/error-ajax-std.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/error/error-ajax-std.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/page/error/error-ajax-std.html.twig");
    }
}
