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

/* @Storefront/storefront/page/checkout/checkout-aside-item.html.twig */
class __TwigTemplate_2c9b48646aaa7957e6a25faedead8cd706de75f133dd6fa311c912bcb019ca2b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_aside_item' => [$this, 'block_page_checkout_aside_item'],
            'page_checkout_aside_item_container' => [$this, 'block_page_checkout_aside_item_container'],
            'page_checkout_aside_item_image' => [$this, 'block_page_checkout_aside_item_image'],
            'page_checkout_aside_item_image_inner' => [$this, 'block_page_checkout_aside_item_image_inner'],
            'page_checkout_aside_item_data' => [$this, 'block_page_checkout_aside_item_data'],
            'page_checkout_aside_item_title' => [$this, 'block_page_checkout_aside_item_title'],
            'page_checkout_aside_item_variant_characteristics' => [$this, 'block_page_checkout_aside_item_variant_characteristics'],
            'page_checkout_aside_item_info_features' => [$this, 'block_page_checkout_aside_item_info_features'],
            'page_checkout_aside_item_quantity' => [$this, 'block_page_checkout_aside_item_quantity'],
            'page_checkout_aside_item_price' => [$this, 'block_page_checkout_aside_item_price'],
            'page_checkout_aside_item_children_template' => [$this, 'block_page_checkout_aside_item_children_template'],
            'page_checkout_aside_item_children' => [$this, 'block_page_checkout_aside_item_children'],
            'page_checkout_aside_item_child' => [$this, 'block_page_checkout_aside_item_child'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_checkout_aside_item', $context, $blocks);
    }

    public function block_page_checkout_aside_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["isDiscount"] = ( !sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "good", [], "any", false, false, false, 2) && (0 >= twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 2), "totalPrice", [], "any", false, false, false, 2), 0)));
        // line 3
        echo "    ";
        $context["isNested"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "children", [], "any", false, false, false, 3), "count", [], "any", false, false, false, 3), 0));
        // line 4
        echo "    ";
        $context["childrenTemplate"] = "@Storefront/storefront/page/checkout/checkout-aside-item-children.html.twig";
        // line 5
        echo "
    ";
        // line 6
        $context["PRODUCT_LINE_ITEM_TYPE"] = twig_constant("Shopware\\Core\\Checkout\\Cart\\LineItem\\LineItem::PRODUCT_LINE_ITEM_TYPE");
        // line 7
        echo "
    ";
        // line 9
        echo "    ";
        $context["cartItemClasses"] = "";
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('page_checkout_aside_item_container', $context, $blocks);
        // line 118
        echo "
        ";
        // line 120
        echo "        ";
        $this->displayBlock('page_checkout_aside_item_child', $context, $blocks);
    }

    // line 11
    public function block_page_checkout_aside_item_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        <div class=\"row checkout-aside-item cart-item cart-item-";
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 12), "html", null, true);
        if (($context["isDiscount"] ?? null)) {
            echo " is-discount";
        }
        echo twig_escape_filter($this->env, ($context["cartItemClasses"] ?? null), "html", null, true);
        echo "\">

            ";
        // line 14
        $this->displayBlock('page_checkout_aside_item_image', $context, $blocks);
        // line 53
        echo "
            ";
        // line 54
        $this->displayBlock('page_checkout_aside_item_data', $context, $blocks);
        // line 106
        echo "
            ";
        // line 107
        $this->displayBlock('page_checkout_aside_item_children_template', $context, $blocks);
        // line 115
        echo "
        </div>
    ";
    }

    // line 14
    public function block_page_checkout_aside_item_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                <div class=\"col-4 checkout-aside-item-image\">

                    ";
        // line 17
        $this->displayBlock('page_checkout_aside_item_image_inner', $context, $blocks);
        // line 50
        echo "
                </div>
            ";
    }

    // line 17
    public function block_page_checkout_aside_item_image_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                        ";
        if (($context["isDiscount"] ?? null)) {
            // line 19
            echo "                            <div class=\"cart-item-discount-icon cart-item-img\">
                                ";
            // line 20
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 20);
            })())->display(twig_array_merge($context, ["color" => "success", "name" => "marketing"]));
            // line 23
            echo "                            </div>
                        ";
        } elseif (        // line 24
($context["isNested"] ?? null)) {
            // line 25
            echo "                            <div class=\"cart-item-nested-icon\">
                                ";
            // line 26
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 26);
            })())->display(twig_array_merge($context, ["color" => "light", "name" => "bag-product"]));
            // line 29
            echo "                            </div>
                        ";
        } else {
            // line 31
            echo "                            ";
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 31), "url", [], "any", false, false, false, 31)) {
                // line 32
                echo "                                ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 32);
                })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,                 // line 33
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 33), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid cart-item-img", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,                 // line 39
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 39), "translated", [], "any", false, false, false, 39), "alt", [], "any", false, false, false, 39)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 39), "translated", [], "any", false, false, false, 39), "alt", [], "any", false, false, false, 39)) : ("")), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,                 // line 40
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 40), "translated", [], "any", false, false, false, 40), "title", [], "any", false, false, false, 40)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 40), "translated", [], "any", false, false, false, 40), "title", [], "any", false, false, false, 40)) : (""))], "name" => "cart-item-img-thumbnails"]));
                // line 43
                echo "                            ";
            } else {
                // line 44
                echo "                                ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 44);
                })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
                // line 47
                echo "                            ";
            }
            // line 48
            echo "                        ";
        }
        // line 49
        echo "                    ";
    }

    // line 54
    public function block_page_checkout_aside_item_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                <div class=\"col-8 checkout-aside-item-data\">

                    ";
        // line 57
        $this->displayBlock('page_checkout_aside_item_title', $context, $blocks);
        // line 64
        echo "
                    ";
        // line 65
        $this->displayBlock('page_checkout_aside_item_variant_characteristics', $context, $blocks);
        // line 79
        echo "
                    ";
        // line 80
        $this->displayBlock('page_checkout_aside_item_info_features', $context, $blocks);
        // line 87
        echo "
                    ";
        // line 88
        $this->displayBlock('page_checkout_aside_item_quantity', $context, $blocks);
        // line 97
        echo "
                    ";
        // line 98
        $this->displayBlock('page_checkout_aside_item_price', $context, $blocks);
        // line 103
        echo "
                </div>
            ";
    }

    // line 57
    public function block_page_checkout_aside_item_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                        <div class=\"checkout-aside-item-title\">
                            ";
        // line 59
        $context["label"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 59)));
        // line 60
        echo "                            ";
        $context["label"] = (((($context["label"] ?? null) !== "")) ? (($context["label"] ?? null)) : (sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 60)));
        // line 61
        echo "                            ";
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["label"] ?? null)), "truncate", [0 => 60], "method", false, false, false, 61), "html", null, true);
        echo "
                        </div>
                    ";
    }

    // line 65
    public function block_page_checkout_aside_item_variant_characteristics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                        <div class=\"checkout-aside-item-characteristics\">

                            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 68), "options", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 69
            echo "                                ";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 69), "html", null, true);
            echo ":
                                <span class=\"checkout-aside-item-characteristics-option\">";
            // line 70
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 70), "html", null, true);
            echo "</span>

                                ";
            // line 72
            if ((0 !== twig_compare(twig_last($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 72), "options", [], "any", false, false, false, 72)), $context["option"]))) {
                // line 73
                echo "                                    ";
                echo " | ";
                echo "
                                ";
            }
            // line 75
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
                        </div>
                    ";
    }

    // line 80
    public function block_page_checkout_aside_item_info_features($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "                        ";
        if (((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 81), ($context["PRODUCT_LINE_ITEM_TYPE"] ?? null))) &&  !(null === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 81), "features", [], "any", false, false, false, 81)))) {
            // line 82
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/product/feature/list.html.twig", "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 82)->display(twig_array_merge($context, ["features" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 83
($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 83), "features", [], "any", false, false, false, 83)]));
            // line 85
            echo "                        ";
        }
        // line 86
        echo "                    ";
    }

    // line 88
    public function block_page_checkout_aside_item_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                        <div class=\"checkout-aside-item-link-quantity\">

                            ";
        // line 91
        if ((sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 91) && (0 !== twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 91), "promotion")))) {
            // line 92
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderQuantity"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 92), "html", null, true);
            echo "
                            ";
        }
        // line 94
        echo "
                        </div>
                    ";
    }

    // line 98
    public function block_page_checkout_aside_item_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                        <div class=\"checkout-aside-item-link-price\">
                            ";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 100), "totalPrice", [], "any", false, false, false, 100)), "html", null, true);
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                        </div>
                    ";
    }

    // line 107
    public function block_page_checkout_aside_item_children_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "                ";
        if (($context["isNested"] ?? null)) {
            // line 109
            echo "                    ";
            // line 110
            echo "                    ";
            $this->displayBlock('page_checkout_aside_item_children', $context, $blocks);
            // line 113
            echo "                ";
        }
        // line 114
        echo "            ";
    }

    // line 110
    public function block_page_checkout_aside_item_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find(($context["childrenTemplate"] ?? null));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 111);
        })())->display($context);
        // line 112
        echo "                    ";
    }

    // line 120
    public function block_page_checkout_aside_item_child($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  404 => 120,  400 => 112,  391 => 111,  387 => 110,  383 => 114,  380 => 113,  377 => 110,  375 => 109,  372 => 108,  368 => 107,  360 => 100,  357 => 99,  353 => 98,  347 => 94,  339 => 92,  337 => 91,  333 => 89,  329 => 88,  325 => 86,  322 => 85,  320 => 83,  318 => 82,  315 => 81,  311 => 80,  305 => 76,  299 => 75,  293 => 73,  291 => 72,  286 => 70,  281 => 69,  277 => 68,  273 => 66,  269 => 65,  261 => 61,  258 => 60,  256 => 59,  253 => 58,  249 => 57,  243 => 103,  241 => 98,  238 => 97,  236 => 88,  233 => 87,  231 => 80,  228 => 79,  226 => 65,  223 => 64,  221 => 57,  217 => 55,  213 => 54,  209 => 49,  206 => 48,  203 => 47,  194 => 44,  191 => 43,  189 => 40,  188 => 39,  187 => 33,  179 => 32,  176 => 31,  172 => 29,  164 => 26,  161 => 25,  159 => 24,  156 => 23,  148 => 20,  145 => 19,  142 => 18,  138 => 17,  132 => 50,  130 => 17,  126 => 15,  122 => 14,  116 => 115,  114 => 107,  111 => 106,  109 => 54,  106 => 53,  104 => 14,  94 => 12,  90 => 11,  85 => 120,  82 => 118,  80 => 11,  77 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 5,  63 => 4,  60 => 3,  57 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/page/checkout/checkout-aside-item.html.twig");
    }
}
