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

/* @Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig */
class __TwigTemplate_c3034f12afcf746ad0337dd210c78aed43e7858766f52e88ee073a1f3eceec25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_multi_select_list_item' => [$this, 'block_component_filter_multi_select_list_item'],
            'component_filter_multi_select_list_item_checkbox_input' => [$this, 'block_component_filter_multi_select_list_item_checkbox_input'],
            'component_filter_multi_select_list_item_label_element' => [$this, 'block_component_filter_multi_select_list_item_label_element'],
            'component_multi_select_list_item_label' => [$this, 'block_component_multi_select_list_item_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_filter_multi_select_list_item', $context, $blocks);
    }

    public function block_component_filter_multi_select_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["formCheckboxWrapperClass"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 3
        $context["id"] = sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 3);
        // line 4
        echo "        ";
        $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4);
        // line 5
        echo "        ";
        $this->displayBlock('component_filter_multi_select_list_item_checkbox_input', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('component_filter_multi_select_list_item_label_element', $context, $blocks);
        // line 20
        echo "    </div>
";
    }

    // line 5
    public function block_component_filter_multi_select_list_item_checkbox_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            <input type=\"checkbox\"
                   class=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
        echo " filter-multi-select-checkbox\"
                   data-label=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                   value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
                   id=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
        ";
    }

    // line 13
    public function block_component_filter_multi_select_list_item_label_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            <label class=\"filter-multi-select-item-label ";
        echo twig_escape_filter($this->env, ($context["formCheckLabelClass"] ?? null), "html", null, true);
        echo "\" for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 15
        $this->displayBlock('component_multi_select_list_item_label', $context, $blocks);
        // line 18
        echo "            </label>
        ";
    }

    // line 15
    public function block_component_multi_select_list_item_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 16,  114 => 15,  109 => 18,  107 => 15,  100 => 14,  96 => 13,  90 => 10,  86 => 9,  82 => 8,  78 => 7,  75 => 6,  71 => 5,  66 => 20,  64 => 13,  61 => 12,  58 => 5,  55 => 4,  53 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-multi-select-list-item.html.twig");
    }
}
