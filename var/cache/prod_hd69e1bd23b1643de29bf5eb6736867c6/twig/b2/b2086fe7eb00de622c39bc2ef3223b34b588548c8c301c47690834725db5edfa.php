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

/* @Storefront/storefront/layout/navigation/navigation.html.twig */
class __TwigTemplate_af2654cf94c3dccbb1ccd4724c87a99c4ddee3232a6f0eda34f3c56f7057096a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_main_navigation' => [$this, 'block_layout_main_navigation'],
            'layout_main_navigation_navbar' => [$this, 'block_layout_main_navigation_navbar'],
            'layout_main_navigation_menu' => [$this, 'block_layout_main_navigation_menu'],
            'layout_main_navigation_menu_home' => [$this, 'block_layout_main_navigation_menu_home'],
            'layout_main_navigation_menu_items' => [$this, 'block_layout_main_navigation_menu_items'],
            'layout_main_navigation_menu_item' => [$this, 'block_layout_main_navigation_menu_item'],
            'layout_main_navigation_menu_flyout_wrapper' => [$this, 'block_layout_main_navigation_menu_flyout_wrapper'],
            'layout_main_navigation_menu_flyout_container' => [$this, 'block_layout_main_navigation_menu_flyout_container'],
            'layout_main_navigation_menu_flyouts' => [$this, 'block_layout_main_navigation_menu_flyouts'],
            'layout_main_navigation_menu_flyout' => [$this, 'block_layout_main_navigation_menu_flyout'],
            'layout_main_navigation_menu_flyout_include' => [$this, 'block_layout_main_navigation_menu_flyout_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_main_navigation', $context, $blocks);
    }

    public function block_layout_main_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    <div class=\"main-navigation\"
         id=\"mainNavigation\"
         data-flyout-menu=\"true\">
        ";
        // line 6
        $this->displayBlock('layout_main_navigation_navbar', $context, $blocks);
        // line 71
        echo "
        ";
        // line 72
        $this->displayBlock('layout_main_navigation_menu_flyout_wrapper', $context, $blocks);
        // line 103
        echo "    </div>
";
    }

    // line 6
    public function block_layout_main_navigation_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <div class=\"container\">
                ";
        // line 8
        $this->displayBlock('layout_main_navigation_menu', $context, $blocks);
        // line 69
        echo "            </div>
        ";
    }

    // line 8
    public function block_layout_main_navigation_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                    <nav class=\"nav main-navigation-menu\"
                        itemscope=\"itemscope\"
                        itemtype=\"http://schema.org/SiteNavigationElement\">
                        ";
        // line 12
        $context["homeLabel"] = ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, true, false, 12), "translated", [], "any", false, true, false, 12), "homeName", [], "any", true, true, false, 12)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, true, false, 12), "translated", [], "any", false, true, false, 12), "homeName", [], "any", false, false, false, 12), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink")));
        // line 13
        echo "
                        ";
        // line 14
        $this->displayBlock('layout_main_navigation_menu_home', $context, $blocks);
        // line 26
        echo "
                        ";
        // line 27
        $this->displayBlock('layout_main_navigation_menu_items', $context, $blocks);
        // line 67
        echo "                    </nav>
                ";
    }

    // line 14
    public function block_layout_main_navigation_menu_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 15), "translated", [], "any", false, false, false, 15), "homeEnabled", [], "any", false, false, false, 15)) {
            // line 16
            echo "                                <a class=\"nav-link main-navigation-link";
            if ((($context["controllerAction"] ?? null) === "home")) {
                echo " active";
            }
            echo " home-link\"
                                    href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
            echo "\"
                                    itemprop=\"url\"
                                    title=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_striptags(($context["homeLabel"] ?? null)), "html", null, true);
            echo "\">
                                    <div class=\"main-navigation-link-text\">
                                        <span itemprop=\"name\">";
            // line 21
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(($context["homeLabel"] ?? null));
            echo "</span>
                                    </div>
                                </a>
                            ";
        }
        // line 25
        echo "                        ";
    }

    // line 27
    public function block_layout_main_navigation_menu_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", true, true, false, 28)) {
            // line 29
            echo "                                ";
            $context["activePath"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 29), "categoryTree", [], "any", false, false, false, 29);
            // line 30
            echo "                            ";
        } else {
            // line 31
            echo "                                ";
            $context["activePath"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 31), "navigation", [], "any", false, false, false, 31), "active", [], "any", false, false, false, 31), "path", [], "any", false, false, false, 31);
            // line 32
            echo "                            ";
        }
        // line 33
        echo "
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 34), "navigation", [], "any", false, false, false, 34), "tree", [], "any", false, false, false, 34));
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
            // line 35
            echo "                                ";
            $context["category"] = sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 35);
            // line 36
            echo "                                ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36);
            // line 37
            echo "
                                ";
            // line 39
            echo "                                ";
            $context["categorId"] = sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 39);
            // line 40
            echo "
                                ";
            // line 41
            $this->displayBlock('layout_main_navigation_menu_item', $context, $blocks);
            // line 65
            echo "                            ";
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
        // line 66
        echo "                        ";
    }

    // line 41
    public function block_layout_main_navigation_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                                    ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 42), "folder"))) {
            // line 43
            echo "                                        <div class=\"nav-link main-navigation-link\"
                                            ";
            // line 44
            if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 44)), 0))) {
                // line 45
                echo "                                                data-flyout-menu-trigger=\"";
                echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\"
                                            ";
            }
            // line 47
            echo "                                              title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">";
            // line 49
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                            </div>
                                        </div>
                                    ";
        } else {
            // line 53
            echo "                                        <a class=\"nav-link main-navigation-link";
            if (((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 53), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 53), "navigation", [], "any", false, false, false, 53), "active", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53))) || twig_in_filter(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 53), ($context["activePath"] ?? null)))) {
                echo " active";
            }
            echo "\"
                                           href=\"";
            // line 54
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
            echo "\"
                                           itemprop=\"url\"
                                           ";
            // line 56
            if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 56)), 0))) {
                echo "data-flyout-menu-trigger=\"";
                echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 56), "html", null, true);
                echo "\"";
            }
            // line 57
            echo "                                           ";
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 58
            echo "                                           title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">";
            // line 60
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                            </div>
                                        </a>
                                    ";
        }
        // line 64
        echo "                                ";
    }

    // line 72
    public function block_layout_main_navigation_menu_flyout_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "            ";
        $context["navigationChildrenCount"] = 0;
        // line 74
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 74), "navigation", [], "any", false, false, false, 74), "tree", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 75
            echo "                ";
            if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 75), "childCount", [], "any", false, false, false, 75), 0))) {
                // line 76
                echo "                    ";
                $context["navigationChildrenCount"] = (($context["navigationChildrenCount"] ?? null) + 1);
                // line 77
                echo "                ";
            }
            // line 78
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
            ";
        // line 80
        if ((1 === twig_compare(($context["navigationChildrenCount"] ?? null), 0))) {
            // line 81
            echo "                ";
            $this->displayBlock('layout_main_navigation_menu_flyout_container', $context, $blocks);
            // line 101
            echo "            ";
        }
        // line 102
        echo "        ";
    }

    // line 81
    public function block_layout_main_navigation_menu_flyout_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                    <div class=\"navigation-flyouts\">
                        ";
        // line 83
        $this->displayBlock('layout_main_navigation_menu_flyouts', $context, $blocks);
        // line 99
        echo "                    </div>
                ";
    }

    // line 83
    public function block_layout_main_navigation_menu_flyouts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 84), "navigation", [], "any", false, false, false, 84), "tree", [], "any", false, false, false, 84));
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
            // line 85
            echo "                                ";
            if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, $context["treeItem"], "children", [], "any", false, false, false, 85)), 0))) {
                // line 86
                echo "                                    ";
                $this->displayBlock('layout_main_navigation_menu_flyout', $context, $blocks);
                // line 96
                echo "                                ";
            }
            // line 97
            echo "                            ";
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
        // line 98
        echo "                        ";
    }

    // line 86
    public function block_layout_main_navigation_menu_flyout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "                                        <div class=\"navigation-flyout\"
                                             data-flyout-menu-id=\"";
        // line 88
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "html", null, true);
        echo "\">
                                            <div class=\"container\">
                                                ";
        // line 90
        $this->displayBlock('layout_main_navigation_menu_flyout_include', $context, $blocks);
        // line 93
        echo "                                            </div>
                                        </div>
                                    ";
    }

    // line 90
    public function block_layout_main_navigation_menu_flyout_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                                                    ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/flyout.html.twig", "@Storefront/storefront/layout/navigation/navigation.html.twig", 91)->display(twig_to_array(["navigationTree" => ($context["treeItem"] ?? null), "level" => (($context["level"] ?? null) + 1), "page" => ($context["page"] ?? null)]));
        // line 92
        echo "                                                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  425 => 92,  422 => 91,  418 => 90,  412 => 93,  410 => 90,  405 => 88,  402 => 87,  398 => 86,  394 => 98,  380 => 97,  377 => 96,  374 => 86,  371 => 85,  353 => 84,  349 => 83,  344 => 99,  342 => 83,  339 => 82,  335 => 81,  331 => 102,  328 => 101,  325 => 81,  323 => 80,  320 => 79,  314 => 78,  311 => 77,  308 => 76,  305 => 75,  300 => 74,  297 => 73,  293 => 72,  289 => 64,  282 => 60,  276 => 58,  271 => 57,  265 => 56,  260 => 54,  253 => 53,  246 => 49,  240 => 47,  234 => 45,  232 => 44,  229 => 43,  226 => 42,  222 => 41,  218 => 66,  204 => 65,  202 => 41,  199 => 40,  196 => 39,  193 => 37,  190 => 36,  187 => 35,  170 => 34,  167 => 33,  164 => 32,  161 => 31,  158 => 30,  155 => 29,  152 => 28,  148 => 27,  144 => 25,  137 => 21,  132 => 19,  127 => 17,  120 => 16,  117 => 15,  113 => 14,  108 => 67,  106 => 27,  103 => 26,  101 => 14,  98 => 13,  96 => 12,  91 => 9,  87 => 8,  82 => 69,  80 => 8,  77 => 7,  73 => 6,  68 => 103,  66 => 72,  63 => 71,  61 => 6,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/navigation.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/navigation.html.twig");
    }
}
