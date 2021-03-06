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

/* @Storefront/storefront/block/cms-block-sidebar-filter.html.twig */
class __TwigTemplate_45924ad9145c8f3a634aa6d8eb8d91666d70ebacb9041cbef3e735b102bc1e79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_sidebar_filter' => [$this, 'block_block_sidebar_filter'],
            'block_sidebar_filter_inner' => [$this, 'block_block_sidebar_filter_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('block_sidebar_filter', $context, $blocks);
    }

    public function block_block_sidebar_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["element"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 2), "getSlot", [0 => "content"], "method", false, false, false, 2);
        // line 3
        echo "    ";
        $context["columns"] = 1;
        // line 4
        echo "
    <div class=\"col-12\" data-cms-element-id=\"";
        // line 5
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
        ";
        // line 6
        $this->displayBlock('block_sidebar_filter_inner', $context, $blocks);
        // line 9
        echo "    </div>
";
    }

    // line 6
    public function block_block_sidebar_filter_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/element/cms-element-" . sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 7)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-sidebar-filter.html.twig", 7);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 8
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/block/cms-block-sidebar-filter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 8,  70 => 7,  66 => 6,  61 => 9,  59 => 6,  55 => 5,  52 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/block/cms-block-sidebar-filter.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/block/cms-block-sidebar-filter.html.twig");
    }
}
