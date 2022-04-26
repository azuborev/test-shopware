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

/* @Storefront/storefront/layout/meta.html.twig */
class __TwigTemplate_3cd8e6c74064ea501af62fc34d6ae18915a1042a7667179b6ddbcba0a2398089 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_head_inner' => [$this, 'block_layout_head_inner'],
            'layout_head_meta_tags' => [$this, 'block_layout_head_meta_tags'],
            'layout_head_meta_tags_charset' => [$this, 'block_layout_head_meta_tags_charset'],
            'layout_head_meta_tags_viewport' => [$this, 'block_layout_head_meta_tags_viewport'],
            'layout_head_meta_tags_general' => [$this, 'block_layout_head_meta_tags_general'],
            'layout_head_meta_tags_general_author' => [$this, 'block_layout_head_meta_tags_general_author'],
            'layout_head_meta_tags_robots' => [$this, 'block_layout_head_meta_tags_robots'],
            'layout_head_meta_tags_general_revisit' => [$this, 'block_layout_head_meta_tags_general_revisit'],
            'layout_head_meta_tags_keywords' => [$this, 'block_layout_head_meta_tags_keywords'],
            'layout_head_meta_tags_description' => [$this, 'block_layout_head_meta_tags_description'],
            'layout_head_meta_tags_opengraph' => [$this, 'block_layout_head_meta_tags_opengraph'],
            'layout_head_meta_tags_type_og' => [$this, 'block_layout_head_meta_tags_type_og'],
            'layout_head_meta_tags_sitename_og' => [$this, 'block_layout_head_meta_tags_sitename_og'],
            'layout_head_meta_tags_title_og' => [$this, 'block_layout_head_meta_tags_title_og'],
            'layout_head_meta_tags_description_og' => [$this, 'block_layout_head_meta_tags_description_og'],
            'layout_head_meta_tags_image_og' => [$this, 'block_layout_head_meta_tags_image_og'],
            'layout_head_meta_tags_card_twitter' => [$this, 'block_layout_head_meta_tags_card_twitter'],
            'layout_head_meta_tags_sitename_twitter' => [$this, 'block_layout_head_meta_tags_sitename_twitter'],
            'layout_head_meta_tags_title_twitter' => [$this, 'block_layout_head_meta_tags_title_twitter'],
            'layout_head_meta_tags_description_twitter' => [$this, 'block_layout_head_meta_tags_description_twitter'],
            'layout_head_meta_tags_image_twitter' => [$this, 'block_layout_head_meta_tags_image_twitter'],
            'layout_head_meta_tags_schema_webpage' => [$this, 'block_layout_head_meta_tags_schema_webpage'],
            'layout_head_meta_tags_copyright_holder' => [$this, 'block_layout_head_meta_tags_copyright_holder'],
            'layout_head_meta_tags_copyright_year' => [$this, 'block_layout_head_meta_tags_copyright_year'],
            'layout_head_meta_tags_family_friendly' => [$this, 'block_layout_head_meta_tags_family_friendly'],
            'layout_head_meta_tags_image_meta' => [$this, 'block_layout_head_meta_tags_image_meta'],
            'layout_head_meta_tags_hreflangs' => [$this, 'block_layout_head_meta_tags_hreflangs'],
            'layout_head_favicon' => [$this, 'block_layout_head_favicon'],
            'layout_head_apple' => [$this, 'block_layout_head_apple'],
            'layout_head_android' => [$this, 'block_layout_head_android'],
            'layout_head_canonical' => [$this, 'block_layout_head_canonical'],
            'layout_head_title' => [$this, 'block_layout_head_title'],
            'layout_head_title_inner' => [$this, 'block_layout_head_title_inner'],
            'layout_head_stylesheet' => [$this, 'block_layout_head_stylesheet'],
            'layout_head_javascript_feature' => [$this, 'block_layout_head_javascript_feature'],
            'layout_head_javascript_tracking' => [$this, 'block_layout_head_javascript_tracking'],
            'layout_head_javascript_recaptcha' => [$this, 'block_layout_head_javascript_recaptcha'],
            'layout_head_javascript_token' => [$this, 'block_layout_head_javascript_token'],
            'layout_head_javascript_router' => [$this, 'block_layout_head_javascript_router'],
            'layout_head_javascript_breakpoints' => [$this, 'block_layout_head_javascript_breakpoints'],
            'layout_head_javascript_csrf' => [$this, 'block_layout_head_javascript_csrf'],
            'layout_head_javascript_wishlist_state' => [$this, 'block_layout_head_javascript_wishlist_state'],
            'layout_head_javascript_jquery' => [$this, 'block_layout_head_javascript_jquery'],
            'layout_head_javascript_hmr_mode' => [$this, 'block_layout_head_javascript_hmr_mode'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_head_inner', $context, $blocks);
    }

    public function block_layout_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["metaInformation"] = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["basicConfig"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation");
        // line 4
        echo "    ";
        $context["maxLength"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "seo.descriptionMaxLength");
        // line 5
        echo "    ";
        $context["metaDescription"] = sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_trim_filter(twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaDescription", [], "any", false, false, false, 5)))), "truncate", [0 => (($context["maxLength"]) ?? (160)), 1 => "…"], "method", false, false, false, 5);
        // line 6
        echo "    ";
        $context["metaTitle"] = twig_trim_filter(twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaTitle", [], "any", false, false, false, 6)));
        // line 7
        echo "    ";
        $context["metaKeywords"] = twig_trim_filter(twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaKeywords", [], "any", false, false, false, 7)));
        // line 8
        echo "
    <head>
        ";
        // line 10
        $this->displayBlock('layout_head_meta_tags', $context, $blocks);
        // line 74
        echo "
        ";
        // line 75
        $this->displayBlock('layout_head_favicon', $context, $blocks);
        // line 79
        echo "
        ";
        // line 80
        $this->displayBlock('layout_head_apple', $context, $blocks);
        // line 85
        echo "
        ";
        // line 86
        $this->displayBlock('layout_head_android', $context, $blocks);
        // line 89
        echo "
        ";
        // line 90
        $this->displayBlock('layout_head_canonical', $context, $blocks);
        // line 95
        echo "
        ";
        // line 96
        $this->displayBlock('layout_head_title', $context, $blocks);
        // line 103
        echo "
        ";
        // line 104
        $this->displayBlock('layout_head_stylesheet', $context, $blocks);
        // line 115
        echo "
        ";
        // line 116
        $this->displayBlock('layout_head_javascript_feature', $context, $blocks);
        // line 119
        echo "
        ";
        // line 121
        echo "        ";
        $this->displayBlock('layout_head_javascript_tracking', $context, $blocks);
        // line 124
        echo "
        ";
        // line 125
        $this->displayBlock('layout_head_javascript_recaptcha', $context, $blocks);
        // line 128
        echo "
        ";
        // line 129
        $this->displayBlock('layout_head_javascript_token', $context, $blocks);
        // line 131
        echo "
        ";
        // line 132
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15917")) {
            // line 133
            echo "            ";
            $this->displayBlock('layout_head_javascript_router', $context, $blocks);
            // line 154
            echo "
            ";
            // line 155
            $this->displayBlock('layout_head_javascript_breakpoints', $context, $blocks);
            // line 169
            echo "
            ";
            // line 170
            $this->displayBlock('layout_head_javascript_csrf', $context, $blocks);
            // line 178
            echo "
            ";
            // line 179
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
                // line 180
                echo "                ";
                $this->displayBlock('layout_head_javascript_wishlist_state', $context, $blocks);
                // line 187
                echo "            ";
            }
            // line 188
            echo "
            ";
            // line 190
            echo "            ";
            $this->displayBlock('layout_head_javascript_jquery', $context, $blocks);
            // line 192
            echo "
            ";
            // line 193
            $this->displayBlock('layout_head_javascript_hmr_mode', $context, $blocks);
            // line 207
            echo "        ";
        }
        // line 208
        echo "    </head>
";
    }

    // line 10
    public function block_layout_head_meta_tags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        $this->displayBlock('layout_head_meta_tags_charset', $context, $blocks);
        // line 14
        echo "
            ";
        // line 15
        $this->displayBlock('layout_head_meta_tags_viewport', $context, $blocks);
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('layout_head_meta_tags_general', $context, $blocks);
        // line 32
        echo "
            ";
        // line 33
        $this->displayBlock('layout_head_meta_tags_opengraph', $context, $blocks);
        // line 56
        echo "
            ";
        // line 57
        $this->displayBlock('layout_head_meta_tags_schema_webpage', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $this->displayBlock('layout_head_meta_tags_hreflangs', $context, $blocks);
        // line 73
        echo "        ";
    }

    // line 11
    public function block_layout_head_meta_tags_charset($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                <meta charset=\"utf-8\">
            ";
    }

    // line 15
    public function block_layout_head_meta_tags_viewport($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            ";
    }

    // line 20
    public function block_layout_head_meta_tags_general($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                <meta name=\"author\"
                      content=\"";
        // line 22
        $this->displayBlock('layout_head_meta_tags_general_author', $context, $blocks);
        echo "\"/>
                <meta name=\"robots\"
                      content=\"";
        // line 24
        $this->displayBlock('layout_head_meta_tags_robots', $context, $blocks);
        echo "\"/>
                <meta name=\"revisit-after\"
                      content=\"";
        // line 26
        $this->displayBlock('layout_head_meta_tags_general_revisit', $context, $blocks);
        echo "\"/>
                <meta name=\"keywords\"
                      content=\"";
        // line 28
        $this->displayBlock('layout_head_meta_tags_keywords', $context, $blocks);
        echo "\"/>
                <meta name=\"description\"
                      content=\"";
        // line 30
        $this->displayBlock('layout_head_meta_tags_description', $context, $blocks);
        echo "\"/>
            ";
    }

    // line 22
    public function block_layout_head_meta_tags_general_author($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "author", [], "any", false, false, false, 22)), "html", null, true);
    }

    // line 24
    public function block_layout_head_meta_tags_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "robots", [], "any", false, false, false, 24), "html", null, true);
    }

    // line 26
    public function block_layout_head_meta_tags_general_revisit($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "revisit", [], "any", false, false, false, 26)), "html", null, true);
    }

    // line 28
    public function block_layout_head_meta_tags_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaKeywords"] ?? null), "html", null, true);
    }

    // line 30
    public function block_layout_head_meta_tags_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 33
    public function block_layout_head_meta_tags_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                <meta property=\"og:type\"
                      content=\"";
        // line 35
        $this->displayBlock('layout_head_meta_tags_type_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:site_name\"
                      content=\"";
        // line 37
        $this->displayBlock('layout_head_meta_tags_sitename_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:title\"
                      content=\"";
        // line 39
        $this->displayBlock('layout_head_meta_tags_title_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:description\"
                      content=\"";
        // line 41
        $this->displayBlock('layout_head_meta_tags_description_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:image\"
                      content=\"";
        // line 43
        $this->displayBlock('layout_head_meta_tags_image_og', $context, $blocks);
        echo "\"/>

                <meta name=\"twitter:card\"
                      content=\"";
        // line 46
        $this->displayBlock('layout_head_meta_tags_card_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:site\"
                      content=\"";
        // line 48
        $this->displayBlock('layout_head_meta_tags_sitename_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:title\"
                      content=\"";
        // line 50
        $this->displayBlock('layout_head_meta_tags_title_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:description\"
                      content=\"";
        // line 52
        $this->displayBlock('layout_head_meta_tags_description_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:image\"
                      content=\"";
        // line 54
        $this->displayBlock('layout_head_meta_tags_image_twitter', $context, $blocks);
        echo "\"/>
            ";
    }

    // line 35
    public function block_layout_head_meta_tags_type_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "website";
    }

    // line 37
    public function block_layout_head_meta_tags_sitename_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 37), "html", null, true);
    }

    // line 39
    public function block_layout_head_meta_tags_title_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
    }

    // line 41
    public function block_layout_head_meta_tags_description_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 43
    public function block_layout_head_meta_tags_image_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
    }

    // line 46
    public function block_layout_head_meta_tags_card_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "summary";
    }

    // line 48
    public function block_layout_head_meta_tags_sitename_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 48), "html", null, true);
    }

    // line 50
    public function block_layout_head_meta_tags_title_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
    }

    // line 52
    public function block_layout_head_meta_tags_description_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 54
    public function block_layout_head_meta_tags_image_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
    }

    // line 57
    public function block_layout_head_meta_tags_schema_webpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                <meta itemprop=\"copyrightHolder\"
                      content=\"";
        // line 59
        $this->displayBlock('layout_head_meta_tags_copyright_holder', $context, $blocks);
        echo "\"/>
                <meta itemprop=\"copyrightYear\"
                      content=\"";
        // line 61
        $this->displayBlock('layout_head_meta_tags_copyright_year', $context, $blocks);
        echo "\"/>
                <meta itemprop=\"isFamilyFriendly\"
                      content=\"";
        // line 63
        $this->displayBlock('layout_head_meta_tags_family_friendly', $context, $blocks);
        echo "\"/>
                <meta itemprop=\"image\"
                      content=\"";
        // line 65
        $this->displayBlock('layout_head_meta_tags_image_meta', $context, $blocks);
        echo "\"/>
            ";
    }

    // line 59
    public function block_layout_head_meta_tags_copyright_holder($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 59), "html", null, true);
    }

    // line 61
    public function block_layout_head_meta_tags_copyright_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "copyrightYear", [], "any", false, false, false, 61)), "html", null, true);
    }

    // line 63
    public function block_layout_head_meta_tags_family_friendly($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "familyFriendly", [], "any", false, false, false, 63)) {
            echo "true";
        } else {
            echo "false";
        }
    }

    // line 65
    public function block_layout_head_meta_tags_image_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
    }

    // line 68
    public function block_layout_head_meta_tags_hreflangs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hrefLang"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 70
            echo "                    <link rel=\"alternate\" hreflang=\"";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["link"], "locale", [], "any", false, false, false, 70), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 70), "html", null, true);
            echo "\" />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            ";
    }

    // line 75
    public function block_layout_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "            <link rel=\"shortcut icon\"
                  href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-favicon"), "html", null, true);
        echo "\">
        ";
    }

    // line 80
    public function block_layout_head_apple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "            <link rel=\"apple-touch-icon\"
                  sizes=\"180x180\"
                  href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-share"), "html", null, true);
        echo "\">
        ";
    }

    // line 86
    public function block_layout_head_android($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "            ";
        // line 88
        echo "        ";
    }

    // line 90
    public function block_layout_head_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 91), "canonical", [], "any", false, false, false, 91)) {
            // line 92
            echo "                <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 92), "canonical", [], "any", false, false, false, 92), "html", null, true);
            echo "\" />
            ";
        }
        // line 94
        echo "        ";
    }

    // line 96
    public function block_layout_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "            <title itemprop=\"name\">";
        ob_start(function () { return ''; });
        // line 98
        echo "                ";
        $this->displayBlock('layout_head_title_inner', $context, $blocks);
        // line 101
        echo "            ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        echo twig_spaceless($___internal_parse_0_);
        // line 101
        echo "</title>
        ";
    }

    // line 98
    public function block_layout_head_title_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "
                ";
    }

    // line 104
    public function block_layout_head_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 106
            echo "                ";
            // line 107
            echo "            ";
        } else {
            // line 108
            echo "                ";
            $context["assets"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "assets.css");
            // line 109
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["assets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 110
                echo "                    <link rel=\"stylesheet\"
                      href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "            ";
        }
        // line 114
        echo "        ";
    }

    // line 116
    public function block_layout_head_javascript_feature($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/feature.html.twig", "@Storefront/storefront/layout/meta.html.twig", 117)->display($context);
        // line 118
        echo "        ";
    }

    // line 121
    public function block_layout_head_javascript_tracking($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/analytics.html.twig", "@Storefront/storefront/layout/meta.html.twig", 122)->display($context);
        // line 123
        echo "        ";
    }

    // line 125
    public function block_layout_head_javascript_recaptcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/recaptcha.html.twig", "@Storefront/storefront/layout/meta.html.twig", 126)->display($context);
        // line 127
        echo "        ";
    }

    // line 129
    public function block_layout_head_javascript_token($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "        ";
    }

    // line 133
    public function block_layout_head_javascript_router($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                ";
        // line 135
        echo "                <script>
                    window.activeNavigationId = '";
        // line 136
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 136), "navigation", [], "any", false, false, false, 136), "active", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136), "html", null, true);
        echo "';
                    window.router = {
                        'frontend.cart.offcanvas': '";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cart.offcanvas");
        echo "',
                        'frontend.cookie.offcanvas': '";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cookie.offcanvas");
        echo "',
                        'frontend.checkout.finish.page': '";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.finish.page");
        echo "',
                        'frontend.checkout.info': '";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.info");
        echo "',
                        'frontend.menu.offcanvas': '";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        echo "',
                        'frontend.cms.page': '";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page");
        echo "',
                        'frontend.cms.navigation.page': '";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.navigation.page");
        echo "',
                        'frontend.account.addressbook': '";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.addressbook");
        echo "',
                        'frontend.csrf.generateToken': '";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.csrf.generateToken");
        echo "',
                        'frontend.country.country-data': '";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.country.country.data");
        echo "',
                        'frontend.store-api.proxy': '";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.store-api.proxy");
        echo "',
                    };
                    window.storeApiProxyToken = '";
        // line 150
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.store-api.proxy", ["mode" => "token"]);
        echo "';
                    window.salesChannelId = '";
        // line 151
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 151), "attributes", [], "any", false, false, false, 151), "get", [0 => "sw-sales-channel-id"], "method", false, false, false, 151), "html", null, true);
        echo "';
                </script>
            ";
    }

    // line 155
    public function block_layout_head_javascript_breakpoints($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "                ";
        // line 157
        echo "                <script>
                    ";
        // line 158
        $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
        // line 165
        echo "
                    window.breakpoints = ";
        // line 166
        echo call_user_func_array($this->env->getFilter('json_encode')->getCallable(), [($context["breakpoint"] ?? null)]);
        echo ";
                </script>
            ";
    }

    // line 170
    public function block_layout_head_javascript_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        echo "                <script>
                    window.csrf = {
                        'enabled': '";
        // line 173
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfEnabled", [], "any", false, false, false, 173), "html", null, true);
        echo "',
                        'mode': '";
        // line 174
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfMode", [], "any", false, false, false, 174), "html", null, true);
        echo "'
                    }
                </script>
            ";
    }

    // line 180
    public function block_layout_head_javascript_wishlist_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "                    <script>
                        window.customerLoggedInState = ";
        // line 182
        echo ((( !(null === sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 182)) &&  !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 182), "guest", [], "any", false, false, false, 182))) ? (1) : (0));
        echo ";

                        window.wishlistEnabled = ";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled"), "html", null, true);
        echo ";
                    </script>
                ";
    }

    // line 190
    public function block_layout_head_javascript_jquery($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
        echo "            ";
    }

    // line 193
    public function block_layout_head_javascript_hmr_mode($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 194
        echo "                ";
        if (($context["isHMRMode"] ?? null)) {
            // line 195
            echo "                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-node.js\" defer></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-shared.js\" defer></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/runtime.js\" defer></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/app.js\" defer></script>
                    ";
            // line 200
            echo "                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/storefront.js\" defer></script>
                ";
        } else {
            // line 202
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "assets.js"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 203
                echo "                        <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\" defer></script>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "                ";
        }
        // line 206
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  883 => 206,  880 => 205,  871 => 203,  866 => 202,  862 => 200,  856 => 195,  853 => 194,  849 => 193,  845 => 191,  841 => 190,  834 => 184,  829 => 182,  826 => 181,  822 => 180,  814 => 174,  810 => 173,  806 => 171,  802 => 170,  795 => 166,  792 => 165,  790 => 158,  787 => 157,  785 => 156,  781 => 155,  774 => 151,  770 => 150,  765 => 148,  761 => 147,  757 => 146,  753 => 145,  749 => 144,  745 => 143,  741 => 142,  737 => 141,  733 => 140,  729 => 139,  725 => 138,  720 => 136,  717 => 135,  715 => 134,  711 => 133,  707 => 130,  703 => 129,  699 => 127,  696 => 126,  692 => 125,  688 => 123,  685 => 122,  681 => 121,  677 => 118,  674 => 117,  670 => 116,  666 => 114,  663 => 113,  655 => 111,  652 => 110,  647 => 109,  644 => 108,  641 => 107,  639 => 106,  636 => 105,  632 => 104,  625 => 99,  621 => 98,  616 => 101,  614 => 97,  611 => 101,  608 => 98,  605 => 97,  601 => 96,  597 => 94,  591 => 92,  588 => 91,  584 => 90,  580 => 88,  578 => 87,  574 => 86,  568 => 83,  564 => 81,  560 => 80,  554 => 77,  551 => 76,  547 => 75,  543 => 72,  532 => 70,  527 => 69,  523 => 68,  516 => 65,  505 => 63,  498 => 61,  491 => 59,  485 => 65,  480 => 63,  475 => 61,  470 => 59,  467 => 58,  463 => 57,  456 => 54,  449 => 52,  442 => 50,  435 => 48,  428 => 46,  421 => 43,  414 => 41,  407 => 39,  400 => 37,  393 => 35,  387 => 54,  382 => 52,  377 => 50,  372 => 48,  367 => 46,  361 => 43,  356 => 41,  351 => 39,  346 => 37,  341 => 35,  338 => 34,  334 => 33,  327 => 30,  320 => 28,  313 => 26,  306 => 24,  299 => 22,  293 => 30,  288 => 28,  283 => 26,  278 => 24,  273 => 22,  270 => 21,  266 => 20,  260 => 16,  256 => 15,  251 => 12,  247 => 11,  243 => 73,  241 => 68,  238 => 67,  236 => 57,  233 => 56,  231 => 33,  228 => 32,  226 => 20,  223 => 19,  221 => 15,  218 => 14,  215 => 11,  211 => 10,  206 => 208,  203 => 207,  201 => 193,  198 => 192,  195 => 190,  192 => 188,  189 => 187,  186 => 180,  184 => 179,  181 => 178,  179 => 170,  176 => 169,  174 => 155,  171 => 154,  168 => 133,  166 => 132,  163 => 131,  161 => 129,  158 => 128,  156 => 125,  153 => 124,  150 => 121,  147 => 119,  145 => 116,  142 => 115,  140 => 104,  137 => 103,  135 => 96,  132 => 95,  130 => 90,  127 => 89,  125 => 86,  122 => 85,  120 => 80,  117 => 79,  115 => 75,  112 => 74,  110 => 10,  106 => 8,  103 => 7,  100 => 6,  97 => 5,  94 => 4,  91 => 3,  88 => 2,  81 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/meta.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/layout/meta.html.twig");
    }
}
