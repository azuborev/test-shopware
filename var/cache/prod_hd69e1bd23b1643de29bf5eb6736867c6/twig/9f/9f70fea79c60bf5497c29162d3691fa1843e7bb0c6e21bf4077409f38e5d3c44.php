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

/* @Storefront/storefront/component/address/address-personal-company.html.twig */
class __TwigTemplate_146bc2652af3bf26aa5cf4e15a9219be8ab75cf2b70f30a613f5359d488f506c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_account_register_company_fields' => [$this, 'block_component_account_register_company_fields'],
            'component_address_form_company_fields' => [$this, 'block_component_address_form_company_fields'],
            'component_address_form_company_name' => [$this, 'block_component_address_form_company_name'],
            'component_address_form_company_name_label' => [$this, 'block_component_address_form_company_name_label'],
            'component_address_form_company_name_input' => [$this, 'block_component_address_form_company_name_input'],
            'component_address_form_company_name_input_error' => [$this, 'block_component_address_form_company_name_input_error'],
            'component_address_form_company_department' => [$this, 'block_component_address_form_company_department'],
            'component_address_form_company_department_label' => [$this, 'block_component_address_form_company_department_label'],
            'component_address_form_company_department_input' => [$this, 'block_component_address_form_company_department_input'],
            'component_address_form_company_department_input_error' => [$this, 'block_component_address_form_company_department_input_error'],
            'component_address_form_company_vatId' => [$this, 'block_component_address_form_company_vatId'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_account_register_company_fields', $context, $blocks);
    }

    public function block_component_account_register_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["accountTypeRequired"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection");
        // line 3
        echo "
    ";
        // line 4
        if ((((($context["accountTypeRequired"] ?? null) || (0 === twig_compare(($context["prefix"] ?? null), "address"))) || (0 === twig_compare(($context["prefix"] ?? null), "shippingAddress"))) || ($context["hasSelectedBusiness"] ?? null))) {
            // line 5
            echo "        <div class=\"";
            if (($context["hasSelectedBusiness"] ?? null)) {
                echo "address-contact-type-company";
            } elseif ((0 === twig_compare(($context["prefix"] ?? null), "address"))) {
                echo "js-field-toggle-contact-type-company d-block";
            } else {
                echo "js-field-toggle-contact-type-company";
                if (($context["customToggleTarget"] ?? null)) {
                    echo "-";
                    echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
                }
                echo " d-none";
            }
            echo "\">
            ";
            // line 6
            $this->displayBlock('component_address_form_company_fields', $context, $blocks);
            // line 85
            echo "        </div>
    ";
        }
    }

    // line 6
    public function block_component_address_form_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                <div class=\"";
        echo twig_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 8
        $this->displayBlock('component_address_form_company_name', $context, $blocks);
        // line 40
        echo "                </div>
                <div class=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 42
        $this->displayBlock('component_address_form_company_department', $context, $blocks);
        // line 73
        echo "
                    ";
        // line 74
        $this->displayBlock('component_address_form_company_vatId', $context, $blocks);
        // line 83
        echo "                </div>
            ";
    }

    // line 8
    public function block_component_address_form_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                        <div class=\"form-group col-12\">
                            ";
        // line 10
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/company"], "method", false, false, false, 10))) {
            // line 11
            echo "                                ";
            $context["violationPath"] = "/company";
            // line 12
            echo "                            ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/company")], "method", false, false, false, 12))) {
            // line 13
            echo "                                ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/company");
            // line 14
            echo "                            ";
        }
        // line 15
        echo "
                            ";
        // line 16
        $this->displayBlock('component_address_form_company_name_label', $context, $blocks);
        // line 22
        echo "
                            ";
        // line 23
        $this->displayBlock('component_address_form_company_name_input', $context, $blocks);
        // line 32
        echo "
                            ";
        // line 33
        $this->displayBlock('component_address_form_company_name_input_error', $context, $blocks);
        // line 38
        echo "                        </div>
                    ";
    }

    // line 16
    public function block_component_address_form_company_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                                <label class=\"form-label\"
                                       for=\"";
        // line 18
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\">
                                    ";
        // line 19
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"));
        if (($context["accountTypeRequired"] ?? null)) {
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        }
        // line 20
        echo "                                </label>
                            ";
    }

    // line 23
    public function block_component_address_form_company_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                                <input type=\"text\"
                                       class=\"form-control";
        // line 25
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                       id=\"";
        // line 26
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\"
                                       placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNamePlaceholder")), "html", null, true);
        echo "\"
                                       name=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[company]\"
                                       value=\"";
        // line 29
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "get", [0 => "company"], "method", false, false, false, 29), "html", null, true);
        echo "\"
                                       ";
        // line 30
        if (($context["accountTypeRequired"] ?? null)) {
            echo "required=\"required\"";
        }
        echo ">
                            ";
    }

    // line 33
    public function block_component_address_form_company_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                                ";
        if (($context["violationPath"] ?? null)) {
            // line 35
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal-company.html.twig", 35)->display($context);
            // line 36
            echo "                                ";
        }
        // line 37
        echo "                            ";
    }

    // line 42
    public function block_component_address_form_company_department($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                        <div class=\"form-group col-md-6\">
                            ";
        // line 44
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/department"], "method", false, false, false, 44))) {
            // line 45
            echo "                                ";
            $context["violationPath"] = "/department";
            // line 46
            echo "                            ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/department")], "method", false, false, false, 46))) {
            // line 47
            echo "                                ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/department");
            // line 48
            echo "                            ";
        }
        // line 49
        echo "
                            ";
        // line 50
        $this->displayBlock('component_address_form_company_department_label', $context, $blocks);
        // line 56
        echo "
                            ";
        // line 57
        $this->displayBlock('component_address_form_company_department_input', $context, $blocks);
        // line 65
        echo "
                            ";
        // line 66
        $this->displayBlock('component_address_form_company_department_input_error', $context, $blocks);
        // line 71
        echo "                        </div>
                    ";
    }

    // line 50
    public function block_component_address_form_company_department_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                                <label class=\"form-label\"
                                       for=\"";
        // line 52
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "department\">
                                    ";
        // line 53
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentLabel"));
        echo "
                                </label>
                            ";
    }

    // line 57
    public function block_component_address_form_company_department_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                                <input type=\"text\"
                                       class=\"form-control";
        // line 59
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                       id=\"";
        // line 60
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "department\"
                                       placeholder=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentPlaceholder")), "html", null, true);
        echo "\"
                                       name=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[department]\"
                                       value=\"";
        // line 63
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "get", [0 => "department"], "method", false, false, false, 63), "html", null, true);
        echo "\">
                            ";
    }

    // line 66
    public function block_component_address_form_company_department_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                                ";
        if (($context["violationPath"] ?? null)) {
            // line 68
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal-company.html.twig", 68)->display($context);
            // line 69
            echo "                                ";
        }
        // line 70
        echo "                            ";
    }

    // line 74
    public function block_component_address_form_company_vatId($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                        ";
        if ((0 !== twig_compare(($context["prefix"] ?? null), "shippingAddress"))) {
            // line 76
            echo "                            <div class=\"form-group col-md-6\">
                                ";
            // line 77
            $this->loadTemplate("@Storefront/storefront/component/address/address-personal-vat-id.html.twig", "@Storefront/storefront/component/address/address-personal-company.html.twig", 77)->display(twig_array_merge($context, ["vatIds" => sw_get_attribute($this->env, $this->source,             // line 78
($context["data"] ?? null), "get", [0 => "vatIds"], "method", false, false, false, 78)]));
            // line 80
            echo "                            </div>
                        ";
        }
        // line 82
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-personal-company.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  357 => 82,  353 => 80,  351 => 78,  350 => 77,  347 => 76,  344 => 75,  340 => 74,  336 => 70,  333 => 69,  330 => 68,  327 => 67,  323 => 66,  317 => 63,  313 => 62,  309 => 61,  305 => 60,  299 => 59,  296 => 58,  292 => 57,  285 => 53,  281 => 52,  278 => 51,  274 => 50,  269 => 71,  267 => 66,  264 => 65,  262 => 57,  259 => 56,  257 => 50,  254 => 49,  251 => 48,  248 => 47,  245 => 46,  242 => 45,  240 => 44,  237 => 43,  233 => 42,  229 => 37,  226 => 36,  223 => 35,  220 => 34,  216 => 33,  208 => 30,  204 => 29,  200 => 28,  196 => 27,  192 => 26,  186 => 25,  183 => 24,  179 => 23,  174 => 20,  169 => 19,  165 => 18,  162 => 17,  158 => 16,  153 => 38,  151 => 33,  148 => 32,  146 => 23,  143 => 22,  141 => 16,  138 => 15,  135 => 14,  132 => 13,  129 => 12,  126 => 11,  124 => 10,  121 => 9,  117 => 8,  112 => 83,  110 => 74,  107 => 73,  105 => 42,  101 => 41,  98 => 40,  96 => 8,  91 => 7,  87 => 6,  81 => 85,  79 => 6,  63 => 5,  61 => 4,  58 => 3,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/address/address-personal-company.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/component/address/address-personal-company.html.twig");
    }
}
