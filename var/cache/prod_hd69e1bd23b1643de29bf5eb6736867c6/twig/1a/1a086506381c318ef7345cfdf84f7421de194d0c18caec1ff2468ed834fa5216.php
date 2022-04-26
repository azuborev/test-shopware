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

/* @Storefront/storefront/layout/footer/footer.html.twig */
class __TwigTemplate_4862ca4c4835435e1530e9b131b0c59375eae637c980bd4f3c99222bad285aeb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_footer_inner_container' => [$this, 'block_layout_footer_inner_container'],
            'layout_footer_navigation' => [$this, 'block_layout_footer_navigation'],
            'layout_footer_navigation_hotline' => [$this, 'block_layout_footer_navigation_hotline'],
            'layout_footer_navigation_hotline_headline' => [$this, 'block_layout_footer_navigation_hotline_headline'],
            'layout_footer_navigation_hotline_icons' => [$this, 'block_layout_footer_navigation_hotline_icons'],
            'layout_footer_navigation_hotline_content' => [$this, 'block_layout_footer_navigation_hotline_content'],
            'layout_footer_navigation_columns' => [$this, 'block_layout_footer_navigation_columns'],
            'layout_footer_navigation_column' => [$this, 'block_layout_footer_navigation_column'],
            'layout_footer_navigation_information_headline' => [$this, 'block_layout_footer_navigation_information_headline'],
            'layout_footer_navigation_information_icons' => [$this, 'block_layout_footer_navigation_information_icons'],
            'layout_footer_navigation_information_content' => [$this, 'block_layout_footer_navigation_information_content'],
            'layout_footer_navigation_information_links' => [$this, 'block_layout_footer_navigation_information_links'],
            'layout_footer_navigation_information_link_item' => [$this, 'block_layout_footer_navigation_information_link_item'],
            'layout_footer_navigation_information_link' => [$this, 'block_layout_footer_navigation_information_link'],
            'layout_footer_payment_shipping_logos' => [$this, 'block_layout_footer_payment_shipping_logos'],
            'layout_footer_payment_logos' => [$this, 'block_layout_footer_payment_logos'],
            'layout_footer_payment_logo' => [$this, 'block_layout_footer_payment_logo'],
            'layout_footer_shipping_logos' => [$this, 'block_layout_footer_shipping_logos'],
            'layout_footer_shipping_logo' => [$this, 'block_layout_footer_shipping_logo'],
            'layout_footer_bottom' => [$this, 'block_layout_footer_bottom'],
            'layout_footer_service_menu' => [$this, 'block_layout_footer_service_menu'],
            'layout_footer_service_menu_content' => [$this, 'block_layout_footer_service_menu_content'],
            'layout_footer_service_menu_item' => [$this, 'block_layout_footer_service_menu_item'],
            'layout_footer_vat' => [$this, 'block_layout_footer_vat'],
            'layout_footer_copyright' => [$this, 'block_layout_footer_copyright'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_footer_inner_container', $context, $blocks);
    }

    public function block_layout_footer_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"container\">

        ";
        // line 4
        $this->displayBlock('layout_footer_navigation', $context, $blocks);
        // line 123
        echo "
        ";
        // line 124
        $this->displayBlock('layout_footer_payment_shipping_logos', $context, $blocks);
        // line 171
        echo "
    </div>

    ";
        // line 174
        $this->displayBlock('layout_footer_bottom', $context, $blocks);
    }

    // line 4
    public function block_layout_footer_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <div id=\"footerColumns\"
                 class=\"row footer-columns\"
                 data-collapse-footer=\"true\">
                ";
        // line 8
        $this->displayBlock('layout_footer_navigation_hotline', $context, $blocks);
        // line 48
        echo "
                ";
        // line 49
        $this->displayBlock('layout_footer_navigation_columns', $context, $blocks);
        // line 121
        echo "            </div>
        ";
    }

    // line 8
    public function block_layout_footer_navigation_hotline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                    <div class=\"col-md-4 footer-column js-footer-column\">
                        ";
        // line 10
        $this->displayBlock('layout_footer_navigation_hotline_headline', $context, $blocks);
        // line 29
        echo "
                        ";
        // line 30
        $this->displayBlock('layout_footer_navigation_hotline_content', $context, $blocks);
        // line 46
        echo "                    </div>
                ";
    }

    // line 10
    public function block_layout_footer_navigation_hotline_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                            <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger\"
                                 id=\"collapseFooterHotlineTitle\"
                                 ";
        // line 13
        echo twig_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
        echo "=\"#collapseFooterHotline\"
                                 aria-expanded=\"true\"
                                 aria-controls=\"collapseFooterHotline\">
                                ";
        // line 16
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotlineHeadline"));
        echo "
                                ";
        // line 17
        $this->displayBlock('layout_footer_navigation_hotline_icons', $context, $blocks);
        // line 27
        echo "                            </div>
                        ";
    }

    // line 17
    public function block_layout_footer_navigation_hotline_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                                    <div class=\"footer-column-toggle\">
                                        <span class=\"footer-plus-icon\">
                                            ";
        // line 20
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 20);
        })())->display(twig_array_merge($context, ["name" => "plus"]));
        // line 21
        echo "                                        </span>
                                        <span class=\"footer-minus-icon\">
                                            ";
        // line 23
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 23);
        })())->display(twig_array_merge($context, ["name" => "minus"]));
        // line 24
        echo "                                        </span>
                                    </div>
                                ";
    }

    // line 30
    public function block_layout_footer_navigation_hotline_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                            <div id=\"collapseFooterHotline\"
                                 class=\"footer-column-content collapse js-footer-column-content footer-contact\"
                                 aria-labelledby=\"collapseFooterHotlineTitle\">
                                <div class=\"footer-column-content-inner\">
                                    <p class=\"footer-contact-hotline\">
                                        ";
        // line 36
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotline"));
        echo "
                                    </p>
                                </div>
                                <div class=\"footer-contact-form\">
                                    ";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceContactLink", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.contactPage")])]);
        // line 42
        echo "
                                </div>
                            </div>
                        ";
    }

    // line 49
    public function block_layout_footer_navigation_columns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 50), "navigation", [], "any", false, false, false, 50), "tree", [], "any", false, false, false, 50));
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
        foreach ($context['_seq'] as $context["_key"] => $context["root"]) {
            // line 51
            echo "                        ";
            $this->displayBlock('layout_footer_navigation_column', $context, $blocks);
            // line 119
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['root'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                ";
    }

    // line 51
    public function block_layout_footer_navigation_column($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                            <div class=\"col-md-4 footer-column js-footer-column\">
                                ";
        // line 53
        $this->displayBlock('layout_footer_navigation_information_headline', $context, $blocks);
        // line 80
        echo "
                                ";
        // line 81
        $this->displayBlock('layout_footer_navigation_information_content', $context, $blocks);
        // line 117
        echo "                            </div>
                        ";
    }

    // line 53
    public function block_layout_footer_navigation_information_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                                    <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger\"
                                         ";
        // line 55
        echo twig_escape_filter($this->env, ($context["dataBsTargetAttr"] ?? null), "html", null, true);
        echo "=\"#collapseFooterTitle";
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 55), "html", null, true);
        echo "\"
                                         aria-expanded=\"true\"
                                         aria-controls=\"collapseFooter";
        // line 57
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 57), "html", null, true);
        echo "\">

                                        ";
        // line 59
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 59), "type", [], "any", false, false, false, 59), "folder"))) {
            // line 60
            echo "                                            ";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 60), "translated", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
            echo "
                                        ";
        } else {
            // line 62
            echo "                                            <a href=\"";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 62));
            echo "\"
                                               ";
            // line 63
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 63))) {
                echo "target=\"_blank\"";
            }
            // line 64
            echo "                                               title=\"";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 64), "translated", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "\">
                                                ";
            // line 65
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 65), "translated", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
            echo "
                                            </a>
                                        ";
        }
        // line 68
        echo "                                        ";
        $this->displayBlock('layout_footer_navigation_information_icons', $context, $blocks);
        // line 78
        echo "                                    </div>
                                ";
    }

    // line 68
    public function block_layout_footer_navigation_information_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "                                            <div class=\"footer-column-toggle\">
                                                <span class=\"footer-plus-icon\">
                                                    ";
        // line 71
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 71);
        })())->display(twig_array_merge($context, ["name" => "plus"]));
        // line 72
        echo "                                                </span>
                                                <span class=\"footer-minus-icon\">
                                                    ";
        // line 74
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 74);
        })())->display(twig_array_merge($context, ["name" => "minus"]));
        // line 75
        echo "                                                </span>
                                            </div>
                                        ";
    }

    // line 81
    public function block_layout_footer_navigation_information_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                                    <div id=\"collapseFooter";
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 82), "html", null, true);
        echo "\"
                                         class=\"footer-column-content collapse js-footer-column-content\"
                                         aria-labelledby=\"collapseFooterTitle";
        // line 84
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 84), "html", null, true);
        echo "\">
                                        <div class=\"footer-column-content-inner\">
                                            ";
        // line 86
        $this->displayBlock('layout_footer_navigation_information_links', $context, $blocks);
        // line 114
        echo "                                        </div>
                                    </div>
                                ";
    }

    // line 86
    public function block_layout_footer_navigation_information_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "                                                <ul class=\"list-unstyled\">
                                                    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "children", [], "any", false, false, false, 88));
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
            // line 89
            echo "                                                        ";
            $context["category"] = sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 89);
            // line 90
            echo "                                                        ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90);
            // line 91
            echo "
                                                        ";
            // line 93
            echo "                                                        ";
            $context["externalLink"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 93), "externalLink", [], "any", false, false, false, 93);
            // line 94
            echo "
                                                        ";
            // line 95
            $this->displayBlock('layout_footer_navigation_information_link_item', $context, $blocks);
            // line 111
            echo "                                                    ";
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
        // line 112
        echo "                                                </ul>
                                            ";
    }

    // line 95
    public function block_layout_footer_navigation_information_link_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "                                                            <li class=\"footer-link-item\">
                                                                ";
        // line 97
        $this->displayBlock('layout_footer_navigation_information_link', $context, $blocks);
        // line 109
        echo "                                                            </li>
                                                        ";
    }

    // line 97
    public function block_layout_footer_navigation_information_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "                                                                    ";
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 98), "folder"))) {
            // line 99
            echo "                                                                        <div>";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</div>
                                                                    ";
        } else {
            // line 101
            echo "                                                                        <a class=\"footer-link\"
                                                                           href=\"";
            // line 102
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
            echo "\"
                                                                           ";
            // line 103
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 104
            echo "                                                                           title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                                                            ";
            // line 105
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "
                                                                        </a>
                                                                    ";
        }
        // line 108
        echo "                                                                ";
    }

    // line 124
    public function block_layout_footer_payment_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "            <div class=\"footer-logos\">
                ";
        // line 126
        $this->displayBlock('layout_footer_payment_logos', $context, $blocks);
        // line 147
        echo "
                ";
        // line 148
        $this->displayBlock('layout_footer_shipping_logos', $context, $blocks);
        // line 169
        echo "            </div>
        ";
    }

    // line 126
    public function block_layout_footer_payment_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelPaymentMethods", [], "any", false, false, false, 127));
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
        foreach ($context['_seq'] as $context["_key"] => $context["paymentMethod"]) {
            // line 128
            echo "                        ";
            $this->displayBlock('layout_footer_payment_logo', $context, $blocks);
            // line 145
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                ";
    }

    // line 128
    public function block_layout_footer_payment_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 129)) {
            // line 130
            echo "                                <div class=\"footer-logo is-payment\">
                                    ";
            // line 131
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 131);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 132
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 132), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 138
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 138), "translated", [], "any", false, false, false, 138), "alt", [], "any", false, false, false, 138)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 138), "translated", [], "any", false, false, false, 138), "alt", [], "any", false, false, false, 138)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 139
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 139), "translated", [], "any", false, false, false, 139), "title", [], "any", false, false, false, 139)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 139), "translated", [], "any", false, false, false, 139), "title", [], "any", false, false, false, 139)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 139), "name", [], "any", false, false, false, 139)))], "name" => "footer-payment-image-thumbnails"]));
            // line 142
            echo "                                </div>
                            ";
        }
        // line 144
        echo "                        ";
    }

    // line 148
    public function block_layout_footer_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelShippingMethods", [], "any", false, false, false, 149));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shippingMethod"]) {
            // line 150
            echo "                        ";
            $this->displayBlock('layout_footer_shipping_logo', $context, $blocks);
            // line 167
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                ";
    }

    // line 150
    public function block_layout_footer_shipping_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 151)) {
            // line 152
            echo "                                <div class=\"footer-logo is-shipping\">
                                    ";
            // line 153
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 153);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 154
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 154), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 160
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 160), "translated", [], "any", false, false, false, 160), "alt", [], "any", false, false, false, 160)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 160), "translated", [], "any", false, false, false, 160), "alt", [], "any", false, false, false, 160)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 160), "name", [], "any", false, false, false, 160))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 161
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 161), "translated", [], "any", false, false, false, 161), "title", [], "any", false, false, false, 161)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 161), "translated", [], "any", false, false, false, 161), "title", [], "any", false, false, false, 161)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 161), "name", [], "any", false, false, false, 161)))], "name" => "footer-shipping-image-thumbnails"]));
            // line 164
            echo "                                </div>
                            ";
        }
        // line 166
        echo "                        ";
    }

    // line 174
    public function block_layout_footer_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "        <div class=\"footer-bottom\">
            ";
        // line 176
        $this->displayBlock('layout_footer_service_menu', $context, $blocks);
        // line 198
        echo "
            ";
        // line 199
        $this->displayBlock('layout_footer_vat', $context, $blocks);
        // line 216
        echo "
            ";
        // line 217
        $this->displayBlock('layout_footer_copyright', $context, $blocks);
        // line 223
        echo "        </div>
    ";
    }

    // line 176
    public function block_layout_footer_service_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "                <div class=\"container\">
                    ";
        // line 178
        $this->displayBlock('layout_footer_service_menu_content', $context, $blocks);
        // line 196
        echo "                </div>
            ";
    }

    // line 178
    public function block_layout_footer_service_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "                        ";
        ob_start(function () { return ''; });
        // line 180
        echo "                            <ul class=\"footer-service-menu-list list-unstyled\">
                                ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 181), "serviceMenu", [], "any", false, false, false, 181));
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
        foreach ($context['_seq'] as $context["_key"] => $context["serviceMenuItem"]) {
            // line 182
            echo "                                    ";
            $this->displayBlock('layout_footer_service_menu_item', $context, $blocks);
            // line 192
            echo "                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serviceMenuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                            </ul>
                        ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 179
        echo twig_spaceless($___internal_parse_3_);
        // line 195
        echo "                    ";
    }

    // line 182
    public function block_layout_footer_service_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 183
        echo "                                        <li class=\"footer-service-menu-item\">
                                            <a class=\"footer-service-menu-link\"
                                               href=\"";
        // line 185
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["serviceMenuItem"] ?? null));
        echo "\"
                                               ";
        // line 186
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["serviceMenuItem"] ?? null))) {
            echo "target=\"_blank\"";
        }
        // line 187
        echo "                                               title=\"";
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 187), "name", [], "any", false, false, false, 187), "html", null, true);
        echo "\">
                                                ";
        // line 188
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 188), "name", [], "any", false, false, false, 188), "html", null, true);
        echo "
                                            </a>
                                        </li>
                                    ";
    }

    // line 199
    public function block_layout_footer_vat($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        echo "                <div class=\"footer-vat\">
                    ";
        // line 201
        if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 201), "gross"))) {
            // line 202
            echo "                        <p>
                            ";
            // line 203
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.includeVat", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")])]);
            // line 205
            echo "
                        </p>
                    ";
        } else {
            // line 208
            echo "                        <p>
                            ";
            // line 209
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.excludeVat", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")])]);
            // line 211
            echo "
                        </p>
                    ";
        }
        // line 214
        echo "                </div>
            ";
    }

    // line 217
    public function block_layout_footer_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "                <div class=\"footer-copyright\">
                    ";
        // line 219
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 219);
        })())->display(twig_array_merge($context, ["size" => "xs", "name" => "shopware"]));
        // line 220
        echo "                    ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.copyrightInfo"));
        echo "
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/footer/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  835 => 220,  827 => 219,  824 => 218,  820 => 217,  815 => 214,  810 => 211,  808 => 209,  805 => 208,  800 => 205,  798 => 203,  795 => 202,  793 => 201,  790 => 200,  786 => 199,  778 => 188,  773 => 187,  769 => 186,  765 => 185,  761 => 183,  757 => 182,  753 => 195,  751 => 179,  747 => 193,  733 => 192,  730 => 182,  713 => 181,  710 => 180,  707 => 179,  703 => 178,  698 => 196,  696 => 178,  693 => 177,  689 => 176,  684 => 223,  682 => 217,  679 => 216,  677 => 199,  674 => 198,  672 => 176,  669 => 175,  665 => 174,  661 => 166,  657 => 164,  655 => 161,  654 => 160,  653 => 154,  646 => 153,  643 => 152,  640 => 151,  636 => 150,  632 => 168,  618 => 167,  615 => 150,  597 => 149,  593 => 148,  589 => 144,  585 => 142,  583 => 139,  582 => 138,  581 => 132,  574 => 131,  571 => 130,  568 => 129,  564 => 128,  560 => 146,  546 => 145,  543 => 128,  525 => 127,  521 => 126,  516 => 169,  514 => 148,  511 => 147,  509 => 126,  506 => 125,  502 => 124,  498 => 108,  492 => 105,  487 => 104,  483 => 103,  479 => 102,  476 => 101,  470 => 99,  467 => 98,  463 => 97,  458 => 109,  456 => 97,  453 => 96,  449 => 95,  444 => 112,  430 => 111,  428 => 95,  425 => 94,  422 => 93,  419 => 91,  416 => 90,  413 => 89,  396 => 88,  393 => 87,  389 => 86,  383 => 114,  381 => 86,  376 => 84,  370 => 82,  366 => 81,  360 => 75,  352 => 74,  348 => 72,  340 => 71,  336 => 69,  332 => 68,  327 => 78,  324 => 68,  318 => 65,  313 => 64,  309 => 63,  304 => 62,  298 => 60,  296 => 59,  291 => 57,  284 => 55,  281 => 54,  277 => 53,  272 => 117,  270 => 81,  267 => 80,  265 => 53,  262 => 52,  258 => 51,  254 => 120,  240 => 119,  237 => 51,  219 => 50,  215 => 49,  208 => 42,  206 => 40,  199 => 36,  192 => 31,  188 => 30,  182 => 24,  174 => 23,  170 => 21,  162 => 20,  158 => 18,  154 => 17,  149 => 27,  147 => 17,  143 => 16,  137 => 13,  133 => 11,  129 => 10,  124 => 46,  122 => 30,  119 => 29,  117 => 10,  114 => 9,  110 => 8,  105 => 121,  103 => 49,  100 => 48,  98 => 8,  93 => 5,  89 => 4,  85 => 174,  80 => 171,  78 => 124,  75 => 123,  73 => 4,  69 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/footer/footer.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/layout/footer/footer.html.twig");
    }
}
