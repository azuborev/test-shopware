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

/* @Storefront/storefront/component/checkout/offcanvas-item.html.twig */
class __TwigTemplate_50c94453b22624e494b980b745842134ffc3071b6df7bc894d8adcdf27647d54 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_offcanvas_cart_item_inner' => [$this, 'block_component_offcanvas_cart_item_inner'],
            'component_offcanvas_cart_item_container' => [$this, 'block_component_offcanvas_cart_item_container'],
            'component_offcanvas_product_image' => [$this, 'block_component_offcanvas_product_image'],
            'component_offcanvas_product_image_inner' => [$this, 'block_component_offcanvas_product_image_inner'],
            'component_offcanvas_product_details' => [$this, 'block_component_offcanvas_product_details'],
            'component_offcanvas_product_details_inner' => [$this, 'block_component_offcanvas_product_details_inner'],
            'component_offcanvas_product_label' => [$this, 'block_component_offcanvas_product_label'],
            'cart_item_variant_characteristics' => [$this, 'block_cart_item_variant_characteristics'],
            'component_offcanvas_product_details_features' => [$this, 'block_component_offcanvas_product_details_features'],
            'component_offcanvas_product_quantity_price' => [$this, 'block_component_offcanvas_product_quantity_price'],
            'component_offcanvas_product_quantity' => [$this, 'block_component_offcanvas_product_quantity'],
            'component_offcanvas_product_quantity_form' => [$this, 'block_component_offcanvas_product_quantity_form'],
            'component_offcanvas_product_quantity_form_csrf' => [$this, 'block_component_offcanvas_product_quantity_form_csrf'],
            'component_offcanvas_product_quantity_form_redirect' => [$this, 'block_component_offcanvas_product_quantity_form_redirect'],
            'component_offcanvas_product_buy_quantity' => [$this, 'block_component_offcanvas_product_buy_quantity'],
            'component_offcanvas_product_total_price' => [$this, 'block_component_offcanvas_product_total_price'],
            'component_offcanvas_product_remove' => [$this, 'block_component_offcanvas_product_remove'],
            'component_offcanvas_product_remove_form' => [$this, 'block_component_offcanvas_product_remove_form'],
            'component_offcanvas_product_remove_form_csrf' => [$this, 'block_component_offcanvas_product_remove_form_csrf'],
            'component_offcanvas_product_remove_redirect' => [$this, 'block_component_offcanvas_product_remove_redirect'],
            'component_offcanvas_product_remove_submit' => [$this, 'block_component_offcanvas_product_remove_submit'],
            'component_offcanvas_children' => [$this, 'block_component_offcanvas_children'],
            'component_offcanvas_cart_item_children' => [$this, 'block_component_offcanvas_cart_item_children'],
            'component_offcanvas_cart_item_child' => [$this, 'block_component_offcanvas_cart_item_child'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_offcanvas_cart_item_inner', $context, $blocks);
    }

    public function block_component_offcanvas_cart_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["PRODUCT_LINE_ITEM_TYPE"] = twig_constant("Shopware\\Core\\Checkout\\Cart\\LineItem\\LineItem::PRODUCT_LINE_ITEM_TYPE");
        // line 3
        echo "    ";
        $context["DISCOUNT_LINE_ITEM_TYPE"] = twig_constant("Shopware\\Core\\Checkout\\Cart\\LineItem\\LineItem::DISCOUNT_LINE_ITEM");
        // line 4
        echo "
    ";
        // line 5
        $context["price"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 5);
        // line 6
        echo "    ";
        $context["isDiscount"] = (( !sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "good", [], "any", false, false, false, 6) && (0 >= twig_compare(sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "totalPrice", [], "any", false, false, false, 6), 0))) || (0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 6), ($context["DISCOUNT_LINE_ITEM_TYPE"] ?? null))));
        // line 7
        echo "    ";
        $context["isNested"] = (1 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "children", [], "any", false, false, false, 7), "count", [], "any", false, false, false, 7), 0));
        // line 8
        echo "    ";
        $context["label"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 8)));
        // line 9
        echo "    ";
        $context["label"] = (((($context["label"] ?? null) !== "")) ? (($context["label"] ?? null)) : (sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 9)));
        // line 10
        echo "
    ";
        // line 11
        $context["referencedId"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 11);
        // line 12
        echo "    ";
        $context["type"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 12);
        // line 13
        echo "    ";
        $context["quantity"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 13);
        // line 14
        echo "    ";
        $context["id"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 14);
        // line 15
        echo "    ";
        $context["childrenTemplate"] = "@Storefront/storefront/component/checkout/offcanvas-item-children.html.twig";
        // line 16
        echo "
    ";
        // line 18
        echo "    ";
        $context["cartItemClasses"] = "";
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('component_offcanvas_cart_item_container', $context, $blocks);
        // line 217
        echo "
    ";
        // line 219
        echo "    ";
        $this->displayBlock('component_offcanvas_cart_item_child', $context, $blocks);
    }

    // line 20
    public function block_component_offcanvas_cart_item_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "        <div class=\"cart-item cart-item-";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        if (($context["isDiscount"] ?? null)) {
            echo " is-discount";
        }
        echo twig_escape_filter($this->env, ($context["cartItemClasses"] ?? null), "html", null, true);
        echo " js-cart-item\">
            <div class=\"row cart-item-row\">
                ";
        // line 23
        $this->displayBlock('component_offcanvas_product_image', $context, $blocks);
        // line 66
        echo "
                ";
        // line 67
        $this->displayBlock('component_offcanvas_product_details', $context, $blocks);
        // line 172
        echo "
                ";
        // line 173
        $this->displayBlock('component_offcanvas_product_remove', $context, $blocks);
        // line 204
        echo "
                ";
        // line 205
        $this->displayBlock('component_offcanvas_children', $context, $blocks);
        // line 213
        echo "
            </div>
        </div>
    ";
    }

    // line 23
    public function block_component_offcanvas_product_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                    <div class=\"col-auto\">
                        ";
        // line 25
        $this->displayBlock('component_offcanvas_product_image_inner', $context, $blocks);
        // line 64
        echo "                    </div>
                ";
    }

    // line 25
    public function block_component_offcanvas_product_image_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                            <div class=\"cart-item-img\">
                                ";
        // line 27
        if (($context["isDiscount"] ?? null)) {
            // line 28
            echo "                                    <div class=\"cart-item-discount-icon\">
                                        ";
            // line 29
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 29);
            })())->display(twig_array_merge($context, ["color" => "success", "name" => "marketing"]));
            // line 32
            echo "                                    </div>
                                ";
        } elseif (        // line 33
($context["isNested"] ?? null)) {
            // line 34
            echo "                                    <div class=\"cart-item-nested-icon\">
                                        ";
            // line 35
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 35);
            })())->display(twig_array_merge($context, ["color" => "light", "name" => "bag-product"]));
            // line 38
            echo "                                    </div>
                                ";
        } else {
            // line 40
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["referencedId"] ?? null)]), "html", null, true);
            echo "\"
                                       class=\"cart-item-img-link\"
                                       title=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\">
                                        ";
            // line 43
            if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 43), "url", [], "any", false, false, false, 43)) {
                // line 44
                echo "                                            ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 44);
                })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,                 // line 45
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 45), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid cart-item-img-source", "alt" =>                 // line 51
($context["label"] ?? null), "title" =>                 // line 52
($context["label"] ?? null)], "name" => "cart-item-img-thumbnails"]));
                // line 55
                echo "                                        ";
            } else {
                // line 56
                echo "                                            ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 56);
                })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
                // line 59
                echo "                                        ";
            }
            // line 60
            echo "                                    </a>
                                ";
        }
        // line 62
        echo "                            </div>
                        ";
    }

    // line 67
    public function block_component_offcanvas_product_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                    <div class=\"col-7 cart-item-details\">
                        ";
        // line 69
        $this->displayBlock('component_offcanvas_product_details_inner', $context, $blocks);
        // line 170
        echo "                    </div>
                ";
    }

    // line 69
    public function block_component_offcanvas_product_details_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                            <div class=\"cart-item-details-container\">
                                ";
        // line 71
        $this->displayBlock('component_offcanvas_product_label', $context, $blocks);
        // line 86
        echo "
                                ";
        // line 87
        $this->displayBlock('cart_item_variant_characteristics', $context, $blocks);
        // line 99
        echo "
                                ";
        // line 100
        $this->displayBlock('component_offcanvas_product_details_features', $context, $blocks);
        // line 107
        echo "
                                ";
        // line 108
        $this->displayBlock('component_offcanvas_product_quantity_price', $context, $blocks);
        // line 168
        echo "                            </div>
                        ";
    }

    // line 71
    public function block_component_offcanvas_product_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                                    <div class=\"cart-item-details\">
                                        ";
        // line 73
        if ((0 === twig_compare(($context["type"] ?? null), ($context["PRODUCT_LINE_ITEM_TYPE"] ?? null)))) {
            // line 74
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["referencedId"] ?? null)]), "html", null, true);
            echo "\"
                                               class=\"cart-item-label\"
                                               title=\"";
            // line 76
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\">
                                                ";
            // line 77
            echo twig_escape_filter($this->env, ($context["quantity"] ?? null), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.quantityTimes"));
            echo " ";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["label"] ?? null)), "truncate", [0 => 60, 1 => "...", 2 => false], "method", false, false, false, 77), "html", null, true);
            echo "
                                            </a>
                                        ";
        } else {
            // line 80
            echo "                                            <div class=\"cart-item-label\">
                                                ";
            // line 81
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["label"] ?? null)), "truncate", [0 => 60, 1 => "...", 2 => false], "method", false, false, false, 81), "html", null, true);
            echo "
                                            </div>
                                        ";
        }
        // line 84
        echo "                                    </div>
                                ";
    }

    // line 87
    public function block_cart_item_variant_characteristics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                                    <div class=\"cart-item-characteristics\">
                                        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 89), "options", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 90
            echo "                                            ";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 90), "html", null, true);
            echo ":
                                            <span class=\"cart-item-characteristics-option\">";
            // line 91
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 91), "html", null, true);
            echo "</span>

                                            ";
            // line 93
            if ((0 !== twig_compare(twig_last($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 93), "options", [], "any", false, false, false, 93)), $context["option"]))) {
                // line 94
                echo "                                                ";
                echo " | ";
                echo "
                                            ";
            }
            // line 96
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                    </div>
                                ";
    }

    // line 100
    public function block_component_offcanvas_product_details_features($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                                    ";
        if (((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 101), ($context["PRODUCT_LINE_ITEM_TYPE"] ?? null))) &&  !(null === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 101), "features", [], "any", false, false, false, 101)))) {
            // line 102
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/component/product/feature/list.html.twig", "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 102)->display(twig_array_merge($context, ["features" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 103
($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 103), "features", [], "any", false, false, false, 103)]));
            // line 105
            echo "                                    ";
        }
        // line 106
        echo "                                ";
    }

    // line 108
    public function block_component_offcanvas_product_quantity_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "                                    <div class=\"cart-quantity-price\">
                                        ";
        // line 110
        $this->displayBlock('component_offcanvas_product_quantity', $context, $blocks);
        // line 151
        echo "
                                        ";
        // line 152
        $this->displayBlock('component_offcanvas_product_total_price', $context, $blocks);
        // line 166
        echo "                                    </div>
                                ";
    }

    // line 110
    public function block_component_offcanvas_product_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                                            <div class=\"cart-item-quantity\">
                                                ";
        // line 112
        $this->displayBlock('component_offcanvas_product_quantity_form', $context, $blocks);
        // line 149
        echo "                                            </div>
                                        ";
    }

    // line 112
    public function block_component_offcanvas_product_quantity_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "                                                    ";
        if ((sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 113) && sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "stackable", [], "any", false, false, false, 113))) {
            // line 114
            echo "                                                        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.change-quantity", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                                                              class=\"cart-item-quantity-container\"
                                                              method=\"post\">

                                                            ";
            // line 118
            $this->displayBlock('component_offcanvas_product_quantity_form_csrf', $context, $blocks);
            // line 121
            echo "
                                                            ";
            // line 122
            $this->displayBlock('component_offcanvas_product_quantity_form_redirect', $context, $blocks);
            // line 127
            echo "
                                                            ";
            // line 128
            $context["quantityInformation"] = sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 128);
            // line 129
            echo "                                                            ";
            if (sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 129)) {
                // line 130
                echo "                                                                ";
                $context["maxQuantity"] = sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 130);
                // line 131
                echo "                                                            ";
            } else {
                // line 132
                echo "                                                                ";
                $context["maxQuantity"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.maxQuantity");
                // line 133
                echo "                                                            ";
            }
            // line 134
            echo "
                                                            ";
            // line 135
            $this->displayBlock('component_offcanvas_product_buy_quantity', $context, $blocks);
            // line 146
            echo "                                                        </form>
                                                    ";
        }
        // line 148
        echo "                                                ";
    }

    // line 118
    public function block_component_offcanvas_product_quantity_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "                                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.change-quantity");
        echo "
                                                            ";
    }

    // line 122
    public function block_component_offcanvas_product_quantity_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "                                                                <input type=\"hidden\"
                                                                       name=\"redirectTo\"
                                                                       value=\"frontend.cart.offcanvas\"/>
                                                            ";
    }

    // line 135
    public function block_component_offcanvas_product_buy_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "                                                                <select name=\"quantity\"
                                                                        class=\"";
        // line 137
        echo twig_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        echo " quantity-select-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " js-offcanvas-cart-change-quantity\">
                                                                    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "minPurchase", [], "any", false, false, false, 138), ($context["maxQuantity"] ?? null), sw_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "purchaseSteps", [], "any", false, false, false, 138)));
        foreach ($context['_seq'] as $context["_key"] => $context["quantityItem"]) {
            // line 139
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["quantityItem"], "html", null, true);
            echo "\"
                                                                            ";
            // line 140
            if ((0 === twig_compare($context["quantityItem"], ($context["quantity"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                                                            ";
            // line 141
            echo twig_escape_filter($this->env, $context["quantityItem"], "html", null, true);
            echo "
                                                                        </option>
                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quantityItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                                                                </select>
                                                            ";
    }

    // line 152
    public function block_component_offcanvas_product_total_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "                                            <div class=\"cart-item-price\">
                                                ";
        // line 155
        echo "                                                ";
        if ((0 !== twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 155), "discountScope", [], "any", false, false, false, 155), "delivery"))) {
            // line 156
            echo "                                                    ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "totalPrice", [], "any", false, false, false, 156)), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "
                                                ";
        }
        // line 158
        echo "                                                ";
        $context["referencePrice"] = sw_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 158);
        // line 159
        echo "                                                ";
        if ( !(null === ($context["referencePrice"] ?? null))) {
            // line 160
            echo "                                                    <small class=\"cart-item-reference-price\">
                                                        (";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "price", [], "any", false, false, false, 161)), "html", null, true);
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 161), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 161), "html", null, true);
            echo ")
                                                    </small>
                                                ";
        }
        // line 164
        echo "                                            </div>
                                        ";
    }

    // line 173
    public function block_component_offcanvas_product_remove($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        echo "                    <div class=\"cart-item-remove\">
                        ";
        // line 175
        $this->displayBlock('component_offcanvas_product_remove_form', $context, $blocks);
        // line 202
        echo "                    </div>
                ";
    }

    // line 175
    public function block_component_offcanvas_product_remove_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "removable", [], "any", false, false, false, 176)) {
            // line 177
            echo "                                <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.delete", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                                      class=\"cart-item-remove js-offcanvas-cart-remove-product\"
                                      method=\"post\">

                                    ";
            // line 181
            $this->displayBlock('component_offcanvas_product_remove_form_csrf', $context, $blocks);
            // line 184
            echo "
                                    ";
            // line 185
            $this->displayBlock('component_offcanvas_product_remove_redirect', $context, $blocks);
            // line 190
            echo "
                                    ";
            // line 191
            $this->displayBlock('component_offcanvas_product_remove_submit', $context, $blocks);
            // line 199
            echo "                                </form>
                            ";
        }
        // line 201
        echo "                        ";
    }

    // line 181
    public function block_component_offcanvas_product_remove_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 182
        echo "                                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.delete");
        echo "
                                    ";
    }

    // line 185
    public function block_component_offcanvas_product_remove_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo "                                        <input type=\"hidden\"
                                               name=\"redirectTo\"
                                               value=\"frontend.cart.offcanvas\"/>
                                    ";
    }

    // line 191
    public function block_component_offcanvas_product_remove_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "                                        <button type=\"submit\"
                                                title=\"";
        // line 193
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.removeLineItem")), "html", null, true);
        echo "\"
                                                data-product-id=\"";
        // line 194
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 194), "html", null, true);
        echo "\"
                                                class=\"btn btn-light cart-item-remove-button\">
                                            ";
        // line 196
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 196);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 197
        echo "                                        </button>
                                    ";
    }

    // line 205
    public function block_component_offcanvas_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 206
        echo "                    ";
        if (($context["isNested"] ?? null)) {
            // line 207
            echo "                        ";
            // line 208
            echo "                        ";
            $this->displayBlock('component_offcanvas_cart_item_children', $context, $blocks);
            // line 211
            echo "                    ";
        }
        // line 212
        echo "                ";
    }

    // line 208
    public function block_component_offcanvas_cart_item_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 209
        echo "                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find(($context["childrenTemplate"] ?? null));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 209);
        })())->display($context);
        // line 210
        echo "                        ";
    }

    // line 219
    public function block_component_offcanvas_cart_item_child($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/checkout/offcanvas-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  740 => 219,  736 => 210,  727 => 209,  723 => 208,  719 => 212,  716 => 211,  713 => 208,  711 => 207,  708 => 206,  704 => 205,  699 => 197,  691 => 196,  686 => 194,  682 => 193,  679 => 192,  675 => 191,  668 => 186,  664 => 185,  657 => 182,  653 => 181,  649 => 201,  645 => 199,  643 => 191,  640 => 190,  638 => 185,  635 => 184,  633 => 181,  625 => 177,  622 => 176,  618 => 175,  613 => 202,  611 => 175,  608 => 174,  604 => 173,  599 => 164,  588 => 161,  585 => 160,  582 => 159,  579 => 158,  572 => 156,  569 => 155,  566 => 153,  562 => 152,  557 => 144,  548 => 141,  542 => 140,  537 => 139,  533 => 138,  527 => 137,  524 => 136,  520 => 135,  513 => 123,  509 => 122,  502 => 119,  498 => 118,  494 => 148,  490 => 146,  488 => 135,  485 => 134,  482 => 133,  479 => 132,  476 => 131,  473 => 130,  470 => 129,  468 => 128,  465 => 127,  463 => 122,  460 => 121,  458 => 118,  450 => 114,  447 => 113,  443 => 112,  438 => 149,  436 => 112,  433 => 111,  429 => 110,  424 => 166,  422 => 152,  419 => 151,  417 => 110,  414 => 109,  410 => 108,  406 => 106,  403 => 105,  401 => 103,  399 => 102,  396 => 101,  392 => 100,  387 => 97,  381 => 96,  375 => 94,  373 => 93,  368 => 91,  363 => 90,  359 => 89,  356 => 88,  352 => 87,  347 => 84,  341 => 81,  338 => 80,  329 => 77,  325 => 76,  319 => 74,  317 => 73,  314 => 72,  310 => 71,  305 => 168,  303 => 108,  300 => 107,  298 => 100,  295 => 99,  293 => 87,  290 => 86,  288 => 71,  285 => 70,  281 => 69,  276 => 170,  274 => 69,  271 => 68,  267 => 67,  262 => 62,  258 => 60,  255 => 59,  246 => 56,  243 => 55,  241 => 52,  240 => 51,  239 => 45,  231 => 44,  229 => 43,  225 => 42,  219 => 40,  215 => 38,  207 => 35,  204 => 34,  202 => 33,  199 => 32,  191 => 29,  188 => 28,  186 => 27,  183 => 26,  179 => 25,  174 => 64,  172 => 25,  169 => 24,  165 => 23,  158 => 213,  156 => 205,  153 => 204,  151 => 173,  148 => 172,  146 => 67,  143 => 66,  141 => 23,  131 => 21,  127 => 20,  122 => 219,  119 => 217,  117 => 20,  114 => 19,  111 => 18,  108 => 16,  105 => 15,  102 => 14,  99 => 13,  96 => 12,  94 => 11,  91 => 10,  88 => 9,  85 => 8,  82 => 7,  79 => 6,  77 => 5,  74 => 4,  71 => 3,  68 => 2,  61 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/component/checkout/offcanvas-item.html.twig");
    }
}
