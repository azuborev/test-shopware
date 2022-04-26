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

/* @Storefront/storefront/utilities/icon.html.twig */
class __TwigTemplate_765ae84f8c73bd34c8b781460e5d969cccbc9afcb8476fd1d3b4a58905b5b1f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_icon' => [$this, 'block_utilities_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('utilities_icon', $context, $blocks);
    }

    public function block_utilities_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["styles"] = [0 => ($context["size"] ?? null), 1 => ($context["color"] ?? null), 2 => ($context["rotation"] ?? null), 3 => ($context["flip"] ?? null), 4 => ($context["class"] ?? null)];
        // line 3
        echo "
    ";
        // line 4
        if ( !array_key_exists("pack", $context)) {
            // line 5
            echo "        ";
            $context["pack"] = "default";
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if ( !array_key_exists("namespace", $context)) {
            // line 9
            echo "        ";
            $context["namespace"] = "Storefront";
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if (sw_get_attribute($this->env, $this->source, ($context["themeIconConfig"] ?? null), ($context["pack"] ?? null), [], "array", true, true, false, 12)) {
            // line 13
            echo "        <span class=\"icon icon-";
            echo twig_escape_filter($this->env, ($context["pack"] ?? null), "html", null, true);
            echo " icon-";
            echo twig_escape_filter($this->env, ($context["pack"] ?? null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                if ((0 !== twig_compare($context["entry"], ""))) {
                    echo " icon-";
                    echo twig_escape_filter($this->env, $context["entry"], "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
            ";
            // line 14
            echo twig_source($this->env, (((((("@" . sw_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["themeIconConfig"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["pack"] ?? null)] ?? null) : null), "namespace", [], "any", false, false, false, 14)) . "/../") . sw_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["themeIconConfig"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["pack"] ?? null)] ?? null) : null), "path", [], "any", false, false, false, 14)) . "/") . ($context["name"] ?? null)) . ".svg"), true);
            echo "
        </span>
    ";
        } else {
            // line 17
            echo "        <span
            class=\"icon icon-";
            // line 18
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                if ((0 !== twig_compare($context["entry"], ""))) {
                    echo " icon-";
                    echo twig_escape_filter($this->env, $context["entry"], "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
                ";
            // line 19
            echo twig_source($this->env, (((((("@" . ($context["namespace"] ?? null)) . "/../app/storefront/dist/assets/icon/") . ($context["pack"] ?? null)) . "/") . ($context["name"] ?? null)) . ".svg"), true);
            echo "
        </span>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/icon.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 19,  104 => 18,  101 => 17,  95 => 14,  75 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/icon.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/utilities/icon.html.twig");
    }
}
