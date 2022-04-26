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

/* @Storefront/storefront/component/checkout/offcanvas-cart.html.twig */
class __TwigTemplate_14cbc8b546b210f1c1910ea096b3821a8957753f226fc87a4313a3c67c7be51b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_meta' => [$this, 'block_utilities_offcanvas_meta'],
            'utilities_offcanvas_close_text' => [$this, 'block_utilities_offcanvas_close_text'],
            'utilities_offcanvas_close_icon' => [$this, 'block_utilities_offcanvas_close_icon'],
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'component_offcanvas_cart' => [$this, 'block_component_offcanvas_cart'],
            'component_offcanvas_cart_header' => [$this, 'block_component_offcanvas_cart_header'],
            'component_offcanvas_cart_header_item_counter' => [$this, 'block_component_offcanvas_cart_header_item_counter'],
            'component_offcanvas_cart_flashbags' => [$this, 'block_component_offcanvas_cart_flashbags'],
            'component_offcanvas_cart_items' => [$this, 'block_component_offcanvas_cart_items'],
            'component_offcanvas_cart_item' => [$this, 'block_component_offcanvas_cart_item'],
            'component_offcanvas_cart_empty' => [$this, 'block_component_offcanvas_cart_empty'],
            'component_offcanvas_summary' => [$this, 'block_component_offcanvas_summary'],
            'component_offcanvas_cart_actions' => [$this, 'block_component_offcanvas_cart_actions'],
            'component_offcanvas_cart_actions_promotion' => [$this, 'block_component_offcanvas_cart_actions_promotion'],
            'component_offcanvas_cart_actions_promotion_form' => [$this, 'block_component_offcanvas_cart_actions_promotion_form'],
            'component_offcanvas_cart_actions_promotion_form_csrf' => [$this, 'block_component_offcanvas_cart_actions_promotion_form_csrf'],
            'component_offcanvas_cart_actions_promotion_redirect' => [$this, 'block_component_offcanvas_cart_actions_promotion_redirect'],
            'component_offcanvas_cart_actions_promotion_input_group' => [$this, 'block_component_offcanvas_cart_actions_promotion_input_group'],
            'component_offcanvas_cart_actions_promotion_label' => [$this, 'block_component_offcanvas_cart_actions_promotion_label'],
            'component_offcanvas_cart_actions_promotion_input' => [$this, 'block_component_offcanvas_cart_actions_promotion_input'],
            'component_offcanvas_cart_actions_promotion_submit' => [$this, 'block_component_offcanvas_cart_actions_promotion_submit'],
            'component_offcanvas_cart_actions_checkout' => [$this, 'block_component_offcanvas_cart_actions_checkout'],
            'component_offcanvas_cart_actions_cart' => [$this, 'block_component_offcanvas_cart_actions_cart'],
            'component_offcanvas_cart_hidden_line_items_information' => [$this, 'block_component_offcanvas_cart_hidden_line_items_information'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_utilities_offcanvas_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["isAjaxOffcanvas"] = true;
        // line 5
        echo "
    ";
        // line 6
        $this->displayParentBlock("utilities_offcanvas_meta", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_utilities_offcanvas_close_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.continueShopping"));
        echo "
";
    }

    // line 13
    public function block_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 14);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-left"]));
    }

    // line 17
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        $this->displayBlock('component_offcanvas_cart', $context, $blocks);
    }

    public function block_component_offcanvas_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        ";
        $context["isCartNotEmpty"] = (1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 19), "lineItems", [], "any", false, false, false, 19)), 0));
        // line 20
        echo "
        <div class=\"offcanvas-cart\">
            ";
        // line 22
        $this->displayBlock('component_offcanvas_cart_header', $context, $blocks);
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('component_offcanvas_cart_flashbags', $context, $blocks);
        // line 52
        echo "
            ";
        // line 53
        if (($context["isCartNotEmpty"] ?? null)) {
            // line 54
            echo "                ";
            $this->displayBlock('component_offcanvas_cart_items', $context, $blocks);
            // line 63
            echo "            ";
        } else {
            // line 64
            echo "                ";
            $this->displayBlock('component_offcanvas_cart_empty', $context, $blocks);
            // line 70
            echo "            ";
        }
        // line 71
        echo "
            ";
        // line 72
        if (($context["isCartNotEmpty"] ?? null)) {
            // line 73
            echo "                ";
            $this->displayBlock('component_offcanvas_summary', $context, $blocks);
            // line 76
            echo "            ";
        }
        // line 77
        echo "
            ";
        // line 78
        $this->displayBlock('component_offcanvas_cart_actions', $context, $blocks);
        // line 182
        echo "        </div>

        ";
        // line 184
        $this->displayBlock('component_offcanvas_cart_hidden_line_items_information', $context, $blocks);
        // line 190
        echo "    ";
    }

    // line 22
    public function block_component_offcanvas_cart_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                <div class=\"row align-items-center h4 offcanvas-cart-header\">
                    <div class=\"col\">
                        ";
        // line 25
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeader"));
        echo "
                    </div>

                    ";
        // line 28
        $context["checkoutItemCounter"] = twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 28), "lineItems", [], "any", false, false, false, 28));
        // line 29
        echo "
                    ";
        // line 30
        $this->displayBlock('component_offcanvas_cart_header_item_counter', $context, $blocks);
        // line 39
        echo "                </div>
            ";
    }

    // line 30
    public function block_component_offcanvas_cart_header_item_counter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                        ";
        if (($context["isCartNotEmpty"] ?? null)) {
            // line 32
            echo "                            <div class=\"col-auto\">
                                <small class=\"offcanvas-cart-header-count\">
                                    ";
            // line 34
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.itemCounter", ["%count%" => ($context["checkoutItemCounter"] ?? null)]));
            echo "
                                </small>
                            </div>
                        ";
        }
        // line 38
        echo "                    ";
    }

    // line 42
    public function block_component_offcanvas_cart_flashbags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                <div class=\"flashbags\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 44));
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
            // line 45
            echo "                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 45)->display(twig_array_merge($context, ["type" =>             // line 46
$context["type"], "list" =>             // line 47
$context["messages"]]));
            // line 49
            echo "                    ";
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
        // line 50
        echo "                </div>
            ";
    }

    // line 54
    public function block_component_offcanvas_cart_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                    <div class=\"offcanvas-cart-items\">
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 56), "lineItems", [], "any", false, false, false, 56));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
            // line 57
            echo "                            ";
            $this->displayBlock('component_offcanvas_cart_item', $context, $blocks);
            // line 60
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </div>
                ";
    }

    // line 57
    public function block_component_offcanvas_cart_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/offcanvas-item.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 58)->display($context);
        // line 59
        echo "                            ";
    }

    // line 64
    public function block_component_offcanvas_cart_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 65)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.emptyCart"))]));
        // line 69
        echo "                ";
    }

    // line 73
    public function block_component_offcanvas_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/offcanvas-cart-summary.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 74)->display($context);
        // line 75
        echo "                ";
    }

    // line 78
    public function block_component_offcanvas_cart_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "                <div class=\"offcanvas-cart-actions\">
                    ";
        // line 80
        $this->displayBlock('component_offcanvas_cart_actions_promotion', $context, $blocks);
        // line 142
        echo "
                    ";
        // line 143
        $this->displayBlock('component_offcanvas_cart_actions_checkout', $context, $blocks);
        // line 161
        echo "
                    ";
        // line 162
        $this->displayBlock('component_offcanvas_cart_actions_cart', $context, $blocks);
        // line 180
        echo "                </div>
            ";
    }

    // line 80
    public function block_component_offcanvas_cart_actions_promotion($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "                        ";
        if (($context["isCartNotEmpty"] ?? null)) {
            // line 82
            echo "                            <div class=\"js-offcanvas-cart-promotion\">
                                ";
            // line 83
            $this->displayBlock('component_offcanvas_cart_actions_promotion_form', $context, $blocks);
            // line 139
            echo "                            </div>
                        ";
        }
        // line 141
        echo "                    ";
    }

    // line 83
    public function block_component_offcanvas_cart_actions_promotion_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "                                    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.promotion.add");
        echo "\"
                                          class=\"offcanvas-cart-promotion-form js-offcanvas-cart-add-promotion\"
                                          method=\"post\">

                                        ";
        // line 88
        $this->displayBlock('component_offcanvas_cart_actions_promotion_form_csrf', $context, $blocks);
        // line 91
        echo "
                                        ";
        // line 92
        $this->displayBlock('component_offcanvas_cart_actions_promotion_redirect', $context, $blocks);
        // line 97
        echo "
                                        ";
        // line 98
        $this->displayBlock('component_offcanvas_cart_actions_promotion_input_group', $context, $blocks);
        // line 137
        echo "                                    </form>
                                ";
    }

    // line 88
    public function block_component_offcanvas_cart_actions_promotion_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.promotion.add");
        echo "
                                        ";
    }

    // line 92
    public function block_component_offcanvas_cart_actions_promotion_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                                            <input type=\"hidden\"
                                                   name=\"redirectTo\"
                                                   value=\"frontend.cart.offcanvas\">
                                        ";
    }

    // line 98
    public function block_component_offcanvas_cart_actions_promotion_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                                            <div class=\"input-group\">
                                                ";
        // line 100
        $this->displayBlock('component_offcanvas_cart_actions_promotion_label', $context, $blocks);
        // line 105
        echo "
                                                ";
        // line 106
        $this->displayBlock('component_offcanvas_cart_actions_promotion_input', $context, $blocks);
        // line 116
        echo "
                                                ";
        // line 117
        $this->displayBlock('component_offcanvas_cart_actions_promotion_submit', $context, $blocks);
        // line 135
        echo "                                            </div>
                                        ";
    }

    // line 100
    public function block_component_offcanvas_cart_actions_promotion_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                                                    <label class=\"";
        echo twig_escape_filter($this->env, ($context["visuallyHiddenClass"] ?? null), "html", null, true);
        echo "\" for=\"addPromotionOffcanvasCartInput\">
                                                        ";
        // line 102
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionLabel"));
        echo "
                                                    </label>
                                                ";
    }

    // line 106
    public function block_component_offcanvas_cart_actions_promotion_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "                                                    <input type=\"text\"
                                                           name=\"code\"
                                                           class=\"form-control\"
                                                           id=\"addPromotionOffcanvasCartInput\"
                                                           placeholder=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionPlaceholder")), "html", null, true);
        echo "\"
                                                           aria-label=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionLabel")), "html", null, true);
        echo "\"
                                                           aria-describedby=\"addPromotionOffcanvasCart\"
                                                           required=\"required\">
                                                ";
    }

    // line 117
    public function block_component_offcanvas_cart_actions_promotion_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "                                                    ";
        // line 119
        echo "                                                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 120
            echo "                                                        <button class=\"btn btn-secondary\"
                                                                type=\"submit\"
                                                                id=\"addPromotionOffcanvasCart\">
                                                            ";
            // line 123
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 123);
            })())->display(twig_array_merge($context, ["name" => "checkmark"]));
            // line 124
            echo "                                                        </button>
                                                    ";
        } else {
            // line 126
            echo "                                                        <div class=\"input-group-append\">
                                                            <button class=\"btn btn-secondary\"
                                                                    type=\"submit\"
                                                                    id=\"addPromotionOffcanvasCart\">
                                                                ";
            // line 130
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 130);
            })())->display(twig_array_merge($context, ["name" => "checkmark"]));
            // line 131
            echo "                                                            </button>
                                                        </div>
                                                    ";
        }
        // line 134
        echo "                                                ";
    }

    // line 143
    public function block_component_offcanvas_cart_actions_checkout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "                        ";
        // line 145
        echo "                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 146
            echo "                            <div class=\"d-grid\">
                                <a href=\"";
            // line 147
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.confirm.page");
            echo "\"
                                   class=\"btn begin-checkout-btn";
            // line 148
            if (($context["isCartNotEmpty"] ?? null)) {
                echo " btn-primary";
            } else {
                echo " btn-light disabled";
            }
            echo "\"
                                   title=\"";
            // line 149
            echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCheckout")), "html", null, true);
            echo "\">
                                    ";
            // line 150
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCheckout"));
            echo "
                                </a>
                            </div>
                        ";
        } else {
            // line 154
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.confirm.page");
            echo "\"
                               class=\"btn btn-block begin-checkout-btn";
            // line 155
            if (($context["isCartNotEmpty"] ?? null)) {
                echo " btn-primary";
            } else {
                echo " btn-light disabled";
            }
            echo "\"
                               title=\"";
            // line 156
            echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCheckout")), "html", null, true);
            echo "\">
                                ";
            // line 157
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCheckout"));
            echo "
                            </a>
                        ";
        }
        // line 160
        echo "                    ";
    }

    // line 162
    public function block_component_offcanvas_cart_actions_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "                        ";
        // line 164
        echo "                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 165
            echo "                            <div class=\"d-grid\">
                                <a href=\"";
            // line 166
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.cart.page");
            echo "\"
                                   class=\"btn btn-link\"
                                   title=\"";
            // line 168
            echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCart")), "html", null, true);
            echo "\">
                                    ";
            // line 169
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCart"));
            echo "
                                </a>
                            </div>
                        ";
        } else {
            // line 173
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.cart.page");
            echo "\"
                               class=\"btn btn-block btn-link\"
                               title=\"";
            // line 175
            echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCart")), "html", null, true);
            echo "\">
                                ";
            // line 176
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCart"));
            echo "
                            </a>
                        ";
        }
        // line 179
        echo "                    ";
    }

    // line 184
    public function block_component_offcanvas_cart_hidden_line_items_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 185)->display(twig_array_merge($context, ["cart" => sw_get_attribute($this->env, $this->source,         // line 186
($context["page"] ?? null), "cart", [], "any", false, false, false, 186), "lineItems" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 187
($context["page"] ?? null), "cart", [], "any", false, false, false, 187), "lineItems", [], "any", false, false, false, 187)]));
        // line 189
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  680 => 189,  678 => 187,  677 => 186,  675 => 185,  671 => 184,  667 => 179,  661 => 176,  657 => 175,  651 => 173,  644 => 169,  640 => 168,  635 => 166,  632 => 165,  629 => 164,  627 => 163,  623 => 162,  619 => 160,  613 => 157,  609 => 156,  601 => 155,  596 => 154,  589 => 150,  585 => 149,  577 => 148,  573 => 147,  570 => 146,  567 => 145,  565 => 144,  561 => 143,  557 => 134,  552 => 131,  544 => 130,  538 => 126,  534 => 124,  526 => 123,  521 => 120,  518 => 119,  516 => 118,  512 => 117,  504 => 112,  500 => 111,  494 => 107,  490 => 106,  483 => 102,  478 => 101,  474 => 100,  469 => 135,  467 => 117,  464 => 116,  462 => 106,  459 => 105,  457 => 100,  454 => 99,  450 => 98,  443 => 93,  439 => 92,  432 => 89,  428 => 88,  423 => 137,  421 => 98,  418 => 97,  416 => 92,  413 => 91,  411 => 88,  403 => 84,  399 => 83,  395 => 141,  391 => 139,  389 => 83,  386 => 82,  383 => 81,  379 => 80,  374 => 180,  372 => 162,  369 => 161,  367 => 143,  364 => 142,  362 => 80,  359 => 79,  355 => 78,  351 => 75,  348 => 74,  344 => 73,  340 => 69,  337 => 65,  333 => 64,  329 => 59,  326 => 58,  322 => 57,  317 => 61,  303 => 60,  300 => 57,  283 => 56,  280 => 55,  276 => 54,  271 => 50,  257 => 49,  255 => 47,  254 => 46,  252 => 45,  235 => 44,  232 => 43,  228 => 42,  224 => 38,  217 => 34,  213 => 32,  210 => 31,  206 => 30,  201 => 39,  199 => 30,  196 => 29,  194 => 28,  188 => 25,  184 => 23,  180 => 22,  176 => 190,  174 => 184,  170 => 182,  168 => 78,  165 => 77,  162 => 76,  159 => 73,  157 => 72,  154 => 71,  151 => 70,  148 => 64,  145 => 63,  142 => 54,  140 => 53,  137 => 52,  135 => 42,  132 => 41,  130 => 22,  126 => 20,  123 => 19,  115 => 18,  111 => 17,  100 => 14,  96 => 13,  89 => 10,  85 => 9,  79 => 6,  76 => 5,  73 => 4,  69 => 3,  58 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/component/checkout/offcanvas-cart.html.twig");
    }
}
