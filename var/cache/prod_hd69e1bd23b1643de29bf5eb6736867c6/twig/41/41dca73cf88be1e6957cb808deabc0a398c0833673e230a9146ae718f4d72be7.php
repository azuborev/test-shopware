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

/* @Storefront/storefront/page/error/_pagelet.html.twig */
class __TwigTemplate_cdbb7e6db51177b10a0edb5a4df0cd7fb02147c638ba7652a1fd7e251d19fd43 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'base_flashbags' => [$this, 'block_base_flashbags'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('base_flashbags', $context, $blocks);
    }

    public function block_base_flashbags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"flashbags\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => [0 => "warning", 1 => "error", 2 => "danger"]], "method", false, false, false, 3));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 4
            echo "            ";
            if ( !twig_test_empty($context["messages"])) {
                // line 5
                echo "                ";
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/error/_pagelet.html.twig", 5)->display(twig_array_merge($context, ["type" => $context["type"], "list" => $context["messages"]]));
                // line 6
                echo "            ";
            }
            // line 7
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/error/_pagelet.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 8,  74 => 7,  71 => 6,  68 => 5,  65 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/error/_pagelet.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/page/error/_pagelet.html.twig");
    }
}
