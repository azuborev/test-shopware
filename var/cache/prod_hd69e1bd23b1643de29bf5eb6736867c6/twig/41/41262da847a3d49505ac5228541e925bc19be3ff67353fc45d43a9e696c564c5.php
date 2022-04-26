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

/* @Storefront/storefront/component/analytics.html.twig */
class __TwigTemplate_6ea93aa1a4a934a2448b4fe1486ef927c25c980b1a0e65ad6e88570245f14174 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_head_analytics' => [$this, 'block_component_head_analytics'],
            'component_head_analytics_tag_config' => [$this, 'block_component_head_analytics_tag_config'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_head_analytics', $context, $blocks);
    }

    public function block_component_head_analytics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 2), "analytics", [], "any", false, false, false, 2) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 2), "analytics", [], "any", false, false, false, 2), "isActive", [], "method", false, false, false, 2))) {
            // line 3
            echo "        ";
            $context["trackingId"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 3), "analytics", [], "any", false, false, false, 3), "getTrackingId", [], "method", false, false, false, 3);
            // line 4
            echo "
        <script>
            window.gtagActive = true;
            window.gtagURL = 'https://www.googletagmanager.com/gtag/js?id=";
            // line 7
            echo twig_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
            echo "'
        </script>


        <script id=\"sw-google-tag-manager-init\" type=\"javascript/blocked\">
            window.controllerName = '";
            // line 12
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
            echo "';
            window.actionName = '";
            // line 13
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
            echo "';
            window.dataLayer = window.dataLayer || [];
            window.trackOrders = '";
            // line 15
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 15), "analytics", [], "any", false, false, false, 15), "isTrackOrders", [], "method", false, false, false, 15), "html", null, true);
            echo "';

            function gtag() { dataLayer.push(arguments); }

            ";
            // line 19
            $this->displayBlock('component_head_analytics_tag_config', $context, $blocks);
            // line 30
            echo "        </script>
    ";
        }
    }

    // line 19
    public function block_component_head_analytics_tag_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "            window.gtagCallback = function gtagCallbackFunction() {
                gtag('js', new Date());

                gtag('config', '";
        // line 23
        echo twig_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
        echo "', {
                    'anonymize_ip': '";
        // line 24
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 24), "analytics", [], "any", false, false, false, 24), "isAnonymizeIp", [], "method", false, false, false, 24), "html", null, true);
        echo "',
                    'cookie_domain': 'none',
                    'cookie_prefix': '_swag_ga',
                });
            };
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/analytics.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  98 => 23,  93 => 20,  89 => 19,  83 => 30,  81 => 19,  74 => 15,  69 => 13,  65 => 12,  57 => 7,  52 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/analytics.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/component/analytics.html.twig");
    }
}
