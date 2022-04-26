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

/* @Storefront/storefront/layout/navigation/categories.html.twig */
class __TwigTemplate_c87e854bbb44556fd5f71cd56596ce4f6f2b8468cac0565ecb6c02804203dbbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_categories' => [$this, 'block_layout_navigation_categories'],
            'layout_navigation_categories_item' => [$this, 'block_layout_navigation_categories_item'],
            'layout_navigation_categories_item_link' => [$this, 'block_layout_navigation_categories_item_link'],
            'layout_navigation_categories_recoursion' => [$this, 'block_layout_navigation_categories_recoursion'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_navigation_categories', $context, $blocks);
    }

    public function block_layout_navigation_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["navigationMaxDepth"] = 3;
        // line 3
        echo "
    ";
        // line 4
        if ( !($context["level"] ?? null)) {
            // line 5
            echo "        ";
            $context["level"] = 0;
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $context["activeId"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "navigation", [], "any", false, false, false, 7), "active", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7);
        // line 8
        echo "
    ";
        // line 9
        if (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", true, true, false, 9)) {
            // line 10
            echo "        ";
            $context["activePath"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 10), "categoryTree", [], "any", false, false, false, 10);
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "        ";
            $context["activePath"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 12), "navigation", [], "any", false, false, false, 12), "active", [], "any", false, false, false, 12), "path", [], "any", false, false, false, 12);
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    <div class=\"";
        // line 15
        if ((0 === twig_compare(($context["level"] ?? null), 0))) {
            echo "row ";
        }
        echo "navigation-flyout-categories is-level-";
        echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigationTree"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 17
            echo "            ";
            $context["id"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17);
            // line 18
            echo "            ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 18), "translated", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18);
            // line 19
            echo "            ";
            $context["link"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 19));
            // line 20
            echo "
            ";
            // line 21
            $this->displayBlock('layout_navigation_categories_item', $context, $blocks);
            // line 53
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>
";
    }

    // line 21
    public function block_layout_navigation_categories_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                <div class=\"";
        if ((0 === twig_compare(($context["level"] ?? null), 0))) {
            if (($context["navigationMedia"] ?? null)) {
                echo "col-4 ";
            } else {
                echo "col-3 ";
            }
        }
        echo "navigation-flyout-col\">
                    ";
        // line 23
        $this->displayBlock('layout_navigation_categories_item_link', $context, $blocks);
        // line 41
        echo "
                    ";
        // line 42
        $this->displayBlock('layout_navigation_categories_recoursion', $context, $blocks);
        // line 51
        echo "                </div>
            ";
    }

    // line 23
    public function block_layout_navigation_categories_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                        ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 24), "type", [], "any", false, false, false, 24), "folder"))) {
            // line 25
            echo "                            <div class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"
                                 title=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                <span itemprop=\"name\">";
            // line 27
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                            </div>
                        ";
        } else {
            // line 30
            echo "                            <a class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            if (((0 === twig_compare(($context["id"] ?? null), ($context["activeId"] ?? null))) || twig_in_filter(($context["id"] ?? null), ($context["activePath"] ?? null)))) {
                echo " active";
            }
            echo "\"
                               href=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\"
                               itemprop=\"url\"
                               ";
            // line 33
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 33))) {
                echo "target=\"_blank\"
                                   ";
                // line 34
                if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 34), "linkType", [], "any", false, false, false, 34), "external"))) {
                    echo "rel=\"noopener noreferrer\"";
                }
                // line 35
                echo "                               ";
            }
            // line 36
            echo "                               title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                <span itemprop=\"name\">";
            // line 37
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                            </a>
                        ";
        }
        // line 40
        echo "                    ";
    }

    // line 42
    public function block_layout_navigation_categories_recoursion($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                        ";
        if ((-1 === twig_compare(($context["level"] ?? null), ($context["navigationMaxDepth"] ?? null)))) {
            // line 44
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/categories.html.twig", "@Storefront/storefront/layout/navigation/categories.html.twig", 44)->display(twig_to_array(["navigationTree" => sw_get_attribute($this->env, $this->source,             // line 45
($context["treeItem"] ?? null), "children", [], "any", false, false, false, 45), "level" => (            // line 46
($context["level"] ?? null) + 1), "page" =>             // line 47
($context["page"] ?? null)]));
            // line 49
            echo "                        ";
        }
        // line 50
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/categories.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  247 => 50,  244 => 49,  242 => 47,  241 => 46,  240 => 45,  238 => 44,  235 => 43,  231 => 42,  227 => 40,  221 => 37,  216 => 36,  213 => 35,  209 => 34,  205 => 33,  200 => 31,  192 => 30,  186 => 27,  182 => 26,  177 => 25,  174 => 24,  170 => 23,  165 => 51,  163 => 42,  160 => 41,  158 => 23,  147 => 22,  143 => 21,  138 => 54,  124 => 53,  122 => 21,  119 => 20,  116 => 19,  113 => 18,  110 => 17,  93 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  73 => 11,  70 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  54 => 4,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/categories.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/categories.html.twig");
    }
}
