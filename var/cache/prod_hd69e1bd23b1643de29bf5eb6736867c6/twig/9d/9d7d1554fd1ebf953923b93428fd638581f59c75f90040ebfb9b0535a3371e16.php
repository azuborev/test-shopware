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

/* @Storefront/storefront/layout/navigation/flyout.html.twig */
class __TwigTemplate_d11fb7d7e5cd2bd944ddd6cc1accb8a375f5b98464f8e749c796d85dc2c7e45d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_flyout' => [$this, 'block_layout_navigation_flyout'],
            'layout_navigation_flyout_bar' => [$this, 'block_layout_navigation_flyout_bar'],
            'layout_navigation_flyout_bar_category' => [$this, 'block_layout_navigation_flyout_bar_category'],
            'layout_navigation_flyout_bar_category_link' => [$this, 'block_layout_navigation_flyout_bar_category_link'],
            'layout_navigation_flyout_bar_category_link_text' => [$this, 'block_layout_navigation_flyout_bar_category_link_text'],
            'layout_navigation_flyout_bar_close' => [$this, 'block_layout_navigation_flyout_bar_close'],
            'layout_navigation_flyout_bar_close_content' => [$this, 'block_layout_navigation_flyout_bar_close_content'],
            'layout_utilities_offcanvas_close_icon' => [$this, 'block_layout_utilities_offcanvas_close_icon'],
            'layout_navigation_flyout_content' => [$this, 'block_layout_navigation_flyout_content'],
            'layout_navigation_flyout_categories' => [$this, 'block_layout_navigation_flyout_categories'],
            'layout_navigation_flyout_categories_recoursion' => [$this, 'block_layout_navigation_flyout_categories_recoursion'],
            'layout_navigation_flyout_teaser' => [$this, 'block_layout_navigation_flyout_teaser'],
            'layout_navigation_flyout_teaser_image' => [$this, 'block_layout_navigation_flyout_teaser_image'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_navigation_flyout', $context, $blocks);
    }

    public function block_layout_navigation_flyout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["category"] = sw_get_attribute($this->env, $this->source, ($context["navigationTree"] ?? null), "category", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $this->displayBlock('layout_navigation_flyout_bar', $context, $blocks);
        // line 42
        echo "
    ";
        // line 43
        $this->displayBlock('layout_navigation_flyout_content', $context, $blocks);
    }

    // line 4
    public function block_layout_navigation_flyout_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <div class=\"row navigation-flyout-bar\">
            ";
        // line 6
        $this->displayBlock('layout_navigation_flyout_bar_category', $context, $blocks);
        // line 28
        echo "
            ";
        // line 29
        $this->displayBlock('layout_navigation_flyout_bar_close', $context, $blocks);
        // line 40
        echo "        </div>
    ";
    }

    // line 6
    public function block_layout_navigation_flyout_bar_category($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                <div class=\"col\">
                    <div class=\"navigation-flyout-category-link\">
                        ";
        // line 9
        $this->displayBlock('layout_navigation_flyout_bar_category_link', $context, $blocks);
        // line 25
        echo "                    </div>
                </div>
            ";
    }

    // line 9
    public function block_layout_navigation_flyout_bar_category_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                            ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 10), "page"))) {
            // line 11
            echo "                                <a class=\"nav-link\"
                                   href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\"
                                   itemprop=\"url\"
                                   title=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                    ";
            // line 15
            $this->displayBlock('layout_navigation_flyout_bar_category_link_text', $context, $blocks);
            // line 22
            echo "                                </a>
                            ";
        }
        // line 24
        echo "                        ";
    }

    // line 15
    public function block_layout_navigation_flyout_bar_category_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                                        ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.toCategory"));
        echo " ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                                        ";
        // line 17
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/flyout.html.twig", 17);
        })())->display(twig_array_merge($context, ["color" => "primary", "pack" => "solid", "name" => "arrow-right"]));
        // line 21
        echo "                                    ";
    }

    // line 29
    public function block_layout_navigation_flyout_bar_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                <div class=\"col-auto\">
                    <div class=\"navigation-flyout-close js-close-flyout-menu\">
                        ";
        // line 32
        $this->displayBlock('layout_navigation_flyout_bar_close_content', $context, $blocks);
        // line 37
        echo "                    </div>
                </div>
            ";
    }

    // line 32
    public function block_layout_navigation_flyout_bar_close_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                            ";
        $this->displayBlock('layout_utilities_offcanvas_close_icon', $context, $blocks);
        // line 36
        echo "                        ";
    }

    // line 33
    public function block_layout_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/flyout.html.twig", 34);
        })())->display(twig_array_merge($context, ["name" => "x"]));
        // line 35
        echo "                            ";
    }

    // line 43
    public function block_layout_navigation_flyout_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "        <div class=\"row navigation-flyout-content\">
            ";
        // line 45
        $this->displayBlock('layout_navigation_flyout_categories', $context, $blocks);
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('layout_navigation_flyout_teaser', $context, $blocks);
        // line 88
        echo "        </div>
    ";
    }

    // line 45
    public function block_layout_navigation_flyout_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "                <div class=\"";
        if (sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 46)) {
            echo "col-8 col-xl-9";
        } else {
            echo "col";
        }
        echo "\">
                    <div class=\"navigation-flyout-categories\">
                        ";
        // line 48
        $this->displayBlock('layout_navigation_flyout_categories_recoursion', $context, $blocks);
        // line 55
        echo "                    </div>
                </div>
            ";
    }

    // line 48
    public function block_layout_navigation_flyout_categories_recoursion($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                            ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/categories.html.twig", "@Storefront/storefront/layout/navigation/flyout.html.twig", 49)->display(twig_to_array(["navigationTree" => sw_get_attribute($this->env, $this->source,         // line 50
($context["navigationTree"] ?? null), "children", [], "any", false, false, false, 50), "navigationMedia" => sw_get_attribute($this->env, $this->source,         // line 51
($context["category"] ?? null), "media", [], "any", false, false, false, 51), "page" =>         // line 52
($context["page"] ?? null)]));
        // line 54
        echo "                        ";
    }

    // line 59
    public function block_layout_navigation_flyout_teaser($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                ";
        if (sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 60)) {
            // line 61
            echo "                <div class=\"col-4 col-xl-3\">
                    <div class=\"navigation-flyout-teaser\">
                        ";
            // line 63
            $this->displayBlock('layout_navigation_flyout_teaser_image', $context, $blocks);
            // line 84
            echo "                    </div>
                </div>
                ";
        }
        // line 87
        echo "            ";
    }

    // line 63
    public function block_layout_navigation_flyout_teaser_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "                            <a class=\"navigation-flyout-teaser-image-container\"
                               href=\"";
        // line 65
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
        echo "\"
                               ";
        // line 66
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
            echo "target=\"_blank\"
                                   ";
            // line 67
            if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "linkType", [], "any", false, false, false, 67), "external"))) {
                echo "rel=\"noopener noreferrer\"";
            }
            // line 68
            echo "                               ";
        }
        // line 69
        echo "                               title=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 70
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/flyout.html.twig", 70);
        })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,         // line 71
($context["category"] ?? null), "media", [], "any", false, false, false, 71), "sizes" => ["default" => "310px"], "attributes" => ["class" => "navigation-flyout-teaser-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 77
($context["category"] ?? null), "media", [], "any", false, false, false, 77), "translated", [], "any", false, false, false, 77), "alt", [], "any", false, false, false, 77)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 77), "translated", [], "any", false, false, false, 77), "alt", [], "any", false, false, false, 77)) : ("")), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 78
($context["category"] ?? null), "media", [], "any", false, false, false, 78), "translated", [], "any", false, false, false, 78), "title", [], "any", false, false, false, 78)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 78), "translated", [], "any", false, false, false, 78), "title", [], "any", false, false, false, 78)) : ("")), "data-object-fit" => "cover"], "name" => "navigation-flyout-teaser-image-thumbnails"]));
        // line 82
        echo "                            </a>
                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/flyout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  319 => 82,  317 => 78,  316 => 77,  315 => 71,  308 => 70,  303 => 69,  300 => 68,  296 => 67,  292 => 66,  288 => 65,  285 => 64,  281 => 63,  277 => 87,  272 => 84,  270 => 63,  266 => 61,  263 => 60,  259 => 59,  255 => 54,  253 => 52,  252 => 51,  251 => 50,  249 => 49,  245 => 48,  239 => 55,  237 => 48,  227 => 46,  223 => 45,  218 => 88,  216 => 59,  213 => 58,  211 => 45,  208 => 44,  204 => 43,  200 => 35,  191 => 34,  187 => 33,  183 => 36,  180 => 33,  176 => 32,  170 => 37,  168 => 32,  164 => 30,  160 => 29,  156 => 21,  148 => 17,  141 => 16,  137 => 15,  133 => 24,  129 => 22,  127 => 15,  123 => 14,  118 => 12,  115 => 11,  112 => 10,  108 => 9,  102 => 25,  100 => 9,  96 => 7,  92 => 6,  87 => 40,  85 => 29,  82 => 28,  80 => 6,  77 => 5,  73 => 4,  69 => 43,  66 => 42,  63 => 4,  60 => 3,  57 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/flyout.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/flyout.html.twig");
    }
}
