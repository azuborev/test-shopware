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

/* @Storefront/storefront/component/address/address-form.html.twig */
class __TwigTemplate_807e10533c6b660eb2a3e87de3edf6cd8544d73511a626958403af65d24b570c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address_form' => [$this, 'block_component_address_form'],
            'component_address_form_addressId' => [$this, 'block_component_address_form_addressId'],
            'component_address_form_company' => [$this, 'block_component_address_form_company'],
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
            'component_address_form_company_vatId_label' => [$this, 'block_component_address_form_company_vatId_label'],
            'component_address_form_company_vatId_input' => [$this, 'block_component_address_form_company_vatId_input'],
            'component_address_form_company_vatId_input_error' => [$this, 'block_component_address_form_company_vatId_input_error'],
            'component_address_form_address_fields' => [$this, 'block_component_address_form_address_fields'],
            'component_address_form_street' => [$this, 'block_component_address_form_street'],
            'component_address_form_street_label' => [$this, 'block_component_address_form_street_label'],
            'component_address_form_street_input' => [$this, 'block_component_address_form_street_input'],
            'component_address_form_street_input_error' => [$this, 'block_component_address_form_street_input_error'],
            'component_address_form_zipcode_city' => [$this, 'block_component_address_form_zipcode_city'],
            'component_address_form_zipcode_label' => [$this, 'block_component_address_form_zipcode_label'],
            'component_address_form_zipcode_input' => [$this, 'block_component_address_form_zipcode_input'],
            'component_address_form_zipcode_error' => [$this, 'block_component_address_form_zipcode_error'],
            'component_address_form_city_label' => [$this, 'block_component_address_form_city_label'],
            'component_address_form_city_input' => [$this, 'block_component_address_form_city_input'],
            'component_address_form_city_error' => [$this, 'block_component_address_form_city_error'],
            'component_address_form_additional_field1' => [$this, 'block_component_address_form_additional_field1'],
            'component_address_form_additional_field1_label' => [$this, 'block_component_address_form_additional_field1_label'],
            'component_address_form_additional_field1_input' => [$this, 'block_component_address_form_additional_field1_input'],
            'component_address_form_additional_field1_error' => [$this, 'block_component_address_form_additional_field1_error'],
            'component_address_form_additional_field2' => [$this, 'block_component_address_form_additional_field2'],
            'component_address_form_additional_field2_label' => [$this, 'block_component_address_form_additional_field2_label'],
            'component_address_form_additional_field2_input' => [$this, 'block_component_address_form_additional_field2_input'],
            'component_address_form_additional_field2_error' => [$this, 'block_component_address_form_additional_field2_error'],
            'component_address_form_country' => [$this, 'block_component_address_form_country'],
            'component_address_form_country_label' => [$this, 'block_component_address_form_country_label'],
            'component_address_form_country_select' => [$this, 'block_component_address_form_country_select'],
            'component_address_form_country_state_label' => [$this, 'block_component_address_form_country_state_label'],
            'component_address_form_country_state_select' => [$this, 'block_component_address_form_country_state_select'],
            'component_address_form_country_error' => [$this, 'block_component_address_form_country_error'],
            'component_address_form_phone_number' => [$this, 'block_component_address_form_phone_number'],
            'component_address_form_phone_number_label' => [$this, 'block_component_address_form_phone_number_label'],
            'component_address_form_phone_number_input' => [$this, 'block_component_address_form_phone_number_input'],
            'component_address_form_phone_error' => [$this, 'block_component_address_form_phone_error'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_address_form', $context, $blocks);
    }

    public function block_component_address_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('component_address_form_addressId', $context, $blocks);
        // line 9
        echo "
    ";
        // line 11
        echo "    ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15957")) {
            // line 12
            echo "        ";
            $context["showVatIdField"] = false;
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('component_address_form_company', $context, $blocks);
        // line 139
        echo "
    ";
        // line 140
        $this->displayBlock('component_address_form_address_fields', $context, $blocks);
    }

    // line 2
    public function block_component_address_form_addressId($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        if (sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "id"], "method", false, false, false, 3)) {
            // line 4
            echo "            <input type=\"hidden\"
                   name=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[id]\"
                   value=\"";
            // line 6
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "id"], "method", false, false, false, 6), "html", null, true);
            echo "\">
        ";
        }
        // line 8
        echo "    ";
    }

    // line 15
    public function block_component_address_form_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        ";
        if (($context["showFormCompany"] ?? null)) {
            // line 17
            echo "            ";
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection")) {
                // line 18
                echo "                ";
                $context["accountTypeRequired"] = true;
                // line 19
                echo "            ";
            }
            // line 20
            echo "
            ";
            // line 21
            if (((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection") || (0 === twig_compare(($context["prefix"] ?? null), "address"))) || (0 === twig_compare(($context["prefix"] ?? null), "shippingAddress"))) || ($context["hasSelectedBusiness"] ?? null))) {
                // line 22
                echo "                <div class=\"";
                if (((0 === twig_compare(($context["prefix"] ?? null), "shippingAddress")) || ($context["hasSelectedBusiness"] ?? null))) {
                    echo "address-contact-type-company";
                } elseif ((0 === twig_compare(($context["prefix"] ?? null), "address"))) {
                    echo "js-field-toggle-contact-type-company d-block";
                } else {
                    echo "js-field-toggle-contact-type-company d-none";
                }
                echo "\">
                    ";
                // line 23
                $this->displayBlock('component_address_form_company_fields', $context, $blocks);
                // line 135
                echo "                </div>
            ";
            }
            // line 137
            echo "        ";
        }
        // line 138
        echo "    ";
    }

    // line 23
    public function block_component_address_form_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                        <div class=\"";
        echo twig_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                            ";
        // line 25
        $this->displayBlock('component_address_form_company_name', $context, $blocks);
        // line 57
        echo "
                            ";
        // line 58
        $this->displayBlock('component_address_form_company_department', $context, $blocks);
        // line 89
        echo "
                            ";
        // line 90
        $this->displayBlock('component_address_form_company_vatId', $context, $blocks);
        // line 133
        echo "                        </div>
                    ";
    }

    // line 25
    public function block_component_address_form_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                                <div class=\"form-group col-6\">
                                    ";
        // line 27
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/company"], "method", false, false, false, 27))) {
            // line 28
            echo "                                        ";
            $context["violationPath"] = "/company";
            // line 29
            echo "                                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/company")], "method", false, false, false, 29))) {
            // line 30
            echo "                                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/company");
            // line 31
            echo "                                    ";
        }
        // line 32
        echo "
                                    ";
        // line 33
        $this->displayBlock('component_address_form_company_name_label', $context, $blocks);
        // line 39
        echo "
                                    ";
        // line 40
        $this->displayBlock('component_address_form_company_name_input', $context, $blocks);
        // line 49
        echo "
                                    ";
        // line 50
        $this->displayBlock('component_address_form_company_name_input_error', $context, $blocks);
        // line 55
        echo "                                </div>
                            ";
    }

    // line 33
    public function block_component_address_form_company_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                                        <label class=\"form-label\"
                                               for=\"";
        // line 35
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\">
                                            ";
        // line 36
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"));
        if (((0 !== twig_compare(($context["prefix"] ?? null), "shippingAddress")) && ($context["accountTypeRequired"] ?? null))) {
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        }
        // line 37
        echo "                                        </label>
                                    ";
    }

    // line 40
    public function block_component_address_form_company_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                                        <input type=\"text\"
                                               class=\"form-control";
        // line 42
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"";
        // line 43
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\"
                                               placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNamePlaceholder")), "html", null, true);
        echo "\"
                                               name=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[company]\"
                                               value=\"";
        // line 46
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "company"], "method", false, false, false, 46), "html", null, true);
        echo "\"
                                               ";
        // line 47
        if (((0 !== twig_compare(($context["prefix"] ?? null), "shippingAddress")) && ($context["accountTypeRequired"] ?? null))) {
            echo "required=\"required\"";
        }
        echo ">
                                    ";
    }

    // line 50
    public function block_component_address_form_company_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                                        ";
        if (($context["violationPath"] ?? null)) {
            // line 52
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 52)->display($context);
            // line 53
            echo "                                        ";
        }
        // line 54
        echo "                                    ";
    }

    // line 58
    public function block_component_address_form_company_department($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                                <div class=\"form-group col-md-6\">
                                    ";
        // line 60
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/department"], "method", false, false, false, 60))) {
            // line 61
            echo "                                        ";
            $context["violationPath"] = "/department";
            // line 62
            echo "                                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/department")], "method", false, false, false, 62))) {
            // line 63
            echo "                                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/department");
            // line 64
            echo "                                    ";
        }
        // line 65
        echo "
                                    ";
        // line 66
        $this->displayBlock('component_address_form_company_department_label', $context, $blocks);
        // line 72
        echo "
                                    ";
        // line 73
        $this->displayBlock('component_address_form_company_department_input', $context, $blocks);
        // line 81
        echo "
                                    ";
        // line 82
        $this->displayBlock('component_address_form_company_department_input_error', $context, $blocks);
        // line 87
        echo "                                </div>
                            ";
    }

    // line 66
    public function block_component_address_form_company_department_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                                        <label class=\"form-label\"
                                               for=\"";
        // line 68
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "department\">
                                            ";
        // line 69
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentLabel"));
        echo "
                                        </label>
                                    ";
    }

    // line 73
    public function block_component_address_form_company_department_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                                        <input type=\"text\"
                                               class=\"form-control";
        // line 75
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"";
        // line 76
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "department\"
                                               placeholder=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentPlaceholder")), "html", null, true);
        echo "\"
                                               name=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[department]\"
                                               value=\"";
        // line 79
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "department"], "method", false, false, false, 79), "html", null, true);
        echo "\">
                                    ";
    }

    // line 82
    public function block_component_address_form_company_department_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                                        ";
        if (($context["violationPath"] ?? null)) {
            // line 84
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 84)->display($context);
            // line 85
            echo "                                        ";
        }
        // line 86
        echo "                                    ";
    }

    // line 90
    public function block_component_address_form_company_vatId($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                                ";
        if (( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15957") && ($context["showVatIdField"] ?? null))) {
            // line 92
            echo "                                    <div class=\"form-group col-md-6\">
                                        ";
            // line 93
            if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/vatId"], "method", false, false, false, 93))) {
                // line 94
                echo "                                            ";
                $context["violationPath"] = "/vatId";
                // line 95
                echo "                                        ";
            } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/vatId")], "method", false, false, false, 95))) {
                // line 96
                echo "                                            ";
                $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/vatId");
                // line 97
                echo "                                        ";
            }
            // line 98
            echo "
                                        ";
            // line 100
            echo "                                        ";
            $this->displayBlock('component_address_form_company_vatId_label', $context, $blocks);
            // line 106
            echo "
                                        ";
            // line 108
            echo "                                        ";
            $this->displayBlock('component_address_form_company_vatId_input', $context, $blocks);
            // line 116
            echo "
                                        ";
            // line 118
            echo "                                        ";
            $this->displayBlock('component_address_form_company_vatId_input_error', $context, $blocks);
            // line 123
            echo "                                    </div>

                                ";
        } elseif ((($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15957") && (0 === twig_compare(        // line 125
($context["prefix"] ?? null), "address"))) && ($context["showVatIdField"] ?? null))) {
            // line 126
            echo "                                    <div class=\"form-group col-md-6\">
                                        ";
            // line 127
            $this->loadTemplate("@Storefront/storefront/component/address/address-personal-vat-id.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 127)->display(twig_array_merge($context, ["vatIds" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 128
($context["context"] ?? null), "customer", [], "any", false, false, false, 128), "vatIds", [], "any", false, false, false, 128)]));
            // line 130
            echo "                                    </div>
                                ";
        }
        // line 132
        echo "                            ";
    }

    // line 100
    public function block_component_address_form_company_vatId_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                                            <label class=\"form-label\"
                                                   for=\"";
        // line 102
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "vatId\">
                                                ";
        // line 103
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyVatLabel"));
        echo "
                                            </label>
                                        ";
    }

    // line 108
    public function block_component_address_form_company_vatId_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "                                            <input type=\"text\"
                                                   class=\"form-control";
        // line 110
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                                   id=\"";
        // line 111
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "vatId\"
                                                   placeholder=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyVatPlaceholder")), "html", null, true);
        echo "\"
                                                   name=\"";
        // line 113
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[vatId]\"
                                                   value=\"";
        // line 114
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "vatId"], "method", false, false, false, 114), "html", null, true);
        echo "\">
                                        ";
    }

    // line 118
    public function block_component_address_form_company_vatId_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "                                            ";
        if (($context["violationPath"] ?? null)) {
            // line 120
            echo "                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 120)->display($context);
            // line 121
            echo "                                            ";
        }
        // line 122
        echo "                                        ";
    }

    // line 140
    public function block_component_address_form_address_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "        <div class=\"";
        echo twig_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 142
        $this->displayBlock('component_address_form_street', $context, $blocks);
        // line 174
        echo "
            ";
        // line 175
        $this->displayBlock('component_address_form_zipcode_city', $context, $blocks);
        // line 258
        echo "
            ";
        // line 259
        $this->displayBlock('component_address_form_additional_field1', $context, $blocks);
        // line 293
        echo "
            ";
        // line 294
        $this->displayBlock('component_address_form_additional_field2', $context, $blocks);
        // line 327
        echo "        </div>

        <div class=\"";
        // line 329
        echo twig_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo " country-and-state-form-elements\" data-country-state-select=\"true\">
            ";
        // line 330
        $this->displayBlock('component_address_form_country', $context, $blocks);
        // line 416
        echo "        </div>

        <div class=\"";
        // line 418
        echo twig_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 419
        $this->displayBlock('component_address_form_phone_number', $context, $blocks);
        // line 453
        echo "        </div>
    ";
    }

    // line 142
    public function block_component_address_form_street($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "                <div class=\"form-group col-md-6\">
                    ";
        // line 144
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/street"], "method", false, false, false, 144))) {
            // line 145
            echo "                        ";
            $context["violationPath"] = "/street";
            // line 146
            echo "                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/street")], "method", false, false, false, 146))) {
            // line 147
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/street");
            // line 148
            echo "                    ";
        }
        // line 149
        echo "
                    ";
        // line 150
        $this->displayBlock('component_address_form_street_label', $context, $blocks);
        // line 156
        echo "
                    ";
        // line 157
        $this->displayBlock('component_address_form_street_input', $context, $blocks);
        // line 166
        echo "
                    ";
        // line 167
        $this->displayBlock('component_address_form_street_input_error', $context, $blocks);
        // line 172
        echo "                </div>
            ";
    }

    // line 150
    public function block_component_address_form_street_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 152
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressStreet\">
                            ";
        // line 153
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.streetLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 157
    public function block_component_address_form_street_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 159
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               id=\"";
        // line 160
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressStreet\"
                               placeholder=\"";
        // line 161
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.streetPlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 162
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[street]\"
                               value=\"";
        // line 163
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "street"], "method", false, false, false, 163), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
    }

    // line 167
    public function block_component_address_form_street_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 169
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 169)->display($context);
            // line 170
            echo "                        ";
        }
        // line 171
        echo "                    ";
    }

    // line 175
    public function block_component_address_form_zipcode_city($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "                ";
        ob_start(function () { return ''; });
        // line 177
        echo "                    ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/zipcode"], "method", false, false, false, 177))) {
            // line 178
            echo "                        ";
            $context["violationPath"] = "/zipcode";
            // line 179
            echo "                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/zipcode")], "method", false, false, false, 179))) {
            // line 180
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/zipcode");
            // line 181
            echo "                    ";
        }
        // line 182
        echo "
                    ";
        // line 183
        $this->displayBlock('component_address_form_zipcode_label', $context, $blocks);
        // line 189
        echo "
                    ";
        // line 190
        $this->displayBlock('component_address_form_zipcode_input', $context, $blocks);
        // line 199
        echo "
                    ";
        // line 200
        $this->displayBlock('component_address_form_zipcode_error', $context, $blocks);
        // line 205
        echo "                ";
        $context["zipcodeField"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 206
        echo "
                ";
        // line 207
        ob_start(function () { return ''; });
        // line 208
        echo "                    ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/city"], "method", false, false, false, 208))) {
            // line 209
            echo "                        ";
            $context["violationPath"] = "/city";
            // line 210
            echo "                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/city")], "method", false, false, false, 210))) {
            // line 211
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/city");
            // line 212
            echo "                    ";
        } else {
            // line 213
            echo "                        ";
            $context["violationPath"] = null;
            // line 214
            echo "                    ";
        }
        // line 215
        echo "
                    ";
        // line 216
        $this->displayBlock('component_address_form_city_label', $context, $blocks);
        // line 222
        echo "
                    ";
        // line 223
        $this->displayBlock('component_address_form_city_input', $context, $blocks);
        // line 232
        echo "
                    ";
        // line 233
        $this->displayBlock('component_address_form_city_error', $context, $blocks);
        // line 238
        echo "                ";
        $context["cityField"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 239
        echo "
                ";
        // line 240
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.address.showZipcodeInFrontOfCity")) {
            // line 241
            echo "                    <div class=\"form-group col-md-2 col-4\">
                        ";
            // line 242
            echo twig_escape_filter($this->env, ($context["zipcodeField"] ?? null), "html", null, true);
            echo "
                    </div>

                    <div class=\"form-group col-md-4 col-8\">
                        ";
            // line 246
            echo twig_escape_filter($this->env, ($context["cityField"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        } else {
            // line 249
            echo "                    <div class=\"form-group col-md-4 col-8\">
                        ";
            // line 250
            echo twig_escape_filter($this->env, ($context["cityField"] ?? null), "html", null, true);
            echo "
                    </div>

                    <div class=\"form-group col-md-2 col-4\">
                        ";
            // line 254
            echo twig_escape_filter($this->env, ($context["zipcodeField"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 257
        echo "            ";
    }

    // line 183
    public function block_component_address_form_zipcode_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 185
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressZipcode\">
                            ";
        // line 186
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.zipcodeLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 190
    public function block_component_address_form_zipcode_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 192
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               id=\"";
        // line 193
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressZipcode\"
                               placeholder=\"";
        // line 194
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.zipcodePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 195
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[zipcode]\"
                               value=\"";
        // line 196
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "zipcode"], "method", false, false, false, 196), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
    }

    // line 200
    public function block_component_address_form_zipcode_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 202
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 202)->display($context);
            // line 203
            echo "                        ";
        }
        // line 204
        echo "                    ";
    }

    // line 216
    public function block_component_address_form_city_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 217
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 218
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressCity\">
                            ";
        // line 219
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.cityLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 223
    public function block_component_address_form_city_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 224
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 225
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               id=\"";
        // line 226
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressCity\"
                               placeholder=\"";
        // line 227
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.cityPlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 228
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[city]\"
                               value=\"";
        // line 229
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "city"], "method", false, false, false, 229), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
    }

    // line 233
    public function block_component_address_form_city_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 235
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 235)->display($context);
            // line 236
            echo "                        ";
        }
        // line 237
        echo "                    ";
    }

    // line 259
    public function block_component_address_form_additional_field1($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 260
        echo "                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAdditionalAddressField1")) {
            // line 261
            echo "                    ";
            if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/additionalAddressLine1"], "method", false, false, false, 261))) {
                // line 262
                echo "                        ";
                $context["violationPath"] = "/additionalAddressLine1";
                // line 263
                echo "                    ";
            } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/additionalAddressLine1")], "method", false, false, false, 263))) {
                // line 264
                echo "                        ";
                $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/additionalAddressLine1");
                // line 265
                echo "                    ";
            }
            // line 266
            echo "
                    <div class=\"form-group col-md-6\">
                        ";
            // line 268
            $this->displayBlock('component_address_form_additional_field1_label', $context, $blocks);
            // line 274
            echo "
                        ";
            // line 275
            $this->displayBlock('component_address_form_additional_field1_input', $context, $blocks);
            // line 284
            echo "
                        ";
            // line 285
            $this->displayBlock('component_address_form_additional_field1_error', $context, $blocks);
            // line 290
            echo "                    </div>
                ";
        }
        // line 292
        echo "            ";
    }

    // line 268
    public function block_component_address_form_additional_field1_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 269
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 270
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AdditionalField1\">
                                ";
        // line 271
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField1Label"));
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.additionalAddressField1Required")) ? ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                            </label>
                        ";
    }

    // line 275
    public function block_component_address_form_additional_field1_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 276
        echo "                            <input type=\"text\"
                                   class=\"form-control ";
        // line 277
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                   id=\"";
        // line 278
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AdditionalField1\"
                                   placeholder=\"";
        // line 279
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField1Placeholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 280
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[additionalAddressLine1]\"
                                   value=\"";
        // line 281
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "additionalAddressLine1"], "method", false, false, false, 281), "html", null, true);
        echo "\"
                                    ";
        // line 282
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.additionalAddressField1Required")) ? ("required=\"true\"") : (""));
        echo ">
                        ";
    }

    // line 285
    public function block_component_address_form_additional_field1_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 286
        echo "                            ";
        if (($context["violationPath"] ?? null)) {
            // line 287
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 287)->display($context);
            // line 288
            echo "                            ";
        }
        // line 289
        echo "                        ";
    }

    // line 294
    public function block_component_address_form_additional_field2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 295
        echo "                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAdditionalAddressField2")) {
            // line 296
            echo "                    ";
            if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/additionalAddressLine2"], "method", false, false, false, 296))) {
                // line 297
                echo "                        ";
                $context["violationPath"] = "/additionalAddressLine2";
                // line 298
                echo "                    ";
            } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/additionalAddressLine2")], "method", false, false, false, 298))) {
                // line 299
                echo "                        ";
                $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/additionalAddressLine2");
                // line 300
                echo "                    ";
            }
            // line 301
            echo "                    <div class=\"form-group col-md-6\">
                        ";
            // line 302
            $this->displayBlock('component_address_form_additional_field2_label', $context, $blocks);
            // line 308
            echo "
                        ";
            // line 309
            $this->displayBlock('component_address_form_additional_field2_input', $context, $blocks);
            // line 318
            echo "
                        ";
            // line 319
            $this->displayBlock('component_address_form_additional_field2_error', $context, $blocks);
            // line 324
            echo "                    </div>
                ";
        }
        // line 326
        echo "            ";
    }

    // line 302
    public function block_component_address_form_additional_field2_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 303
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 304
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AdditionalField2\">
                                ";
        // line 305
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField2Label"));
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.additionalAddressField2Required")) ? ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                            </label>
                        ";
    }

    // line 309
    public function block_component_address_form_additional_field2_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 310
        echo "                            <input type=\"text\"
                                   class=\"form-control ";
        // line 311
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                   id=\"";
        // line 312
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AdditionalField2\"
                                   placeholder=\"";
        // line 313
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField2Placeholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 314
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[additionalAddressLine2]\"
                                   value=\"";
        // line 315
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "additionalAddressLine2"], "method", false, false, false, 315), "html", null, true);
        echo "\"
                                    ";
        // line 316
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.additionalAddressField2Required")) ? ("required=\"true\"") : (""));
        echo ">
                        ";
    }

    // line 319
    public function block_component_address_form_additional_field2_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 320
        echo "                            ";
        if (($context["violationPath"] ?? null)) {
            // line 321
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 321)->display($context);
            // line 322
            echo "                            ";
        }
        // line 323
        echo "                        ";
    }

    // line 330
    public function block_component_address_form_country($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 331
        echo "                <div class=\"form-group col-md-6\">
                    ";
        // line 332
        $context["initialCountryId"] = null;
        // line 333
        echo "
                    ";
        // line 334
        if (sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryId"], "method", false, false, false, 334)) {
            // line 335
            echo "                        ";
            $context["initialCountryId"] = sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryId"], "method", false, false, false, 335);
            // line 336
            echo "                    ";
        } elseif ((0 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "countries", [], "any", false, false, false, 336)), 1))) {
            // line 337
            echo "                        ";
            $context["initialCountryId"] = sw_get_attribute($this->env, $this->source, twig_first($this->env, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "countries", [], "any", false, false, false, 337)), "id", [], "any", false, false, false, 337);
            // line 338
            echo "                    ";
        }
        // line 339
        echo "
                    ";
        // line 340
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/countryId"], "method", false, false, false, 340))) {
            // line 341
            echo "                        ";
            $context["violationPath"] = "/countryId";
            // line 342
            echo "                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/countryId")], "method", false, false, false, 342))) {
            // line 343
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/countryId");
            // line 344
            echo "                    ";
        }
        // line 345
        echo "
                    ";
        // line 346
        $this->displayBlock('component_address_form_country_label', $context, $blocks);
        // line 352
        echo "
                    ";
        // line 353
        $this->displayBlock('component_address_form_country_select', $context, $blocks);
        // line 380
        echo "                </div>

                <div class=\"form-group col-md-6  d-none\">
                    ";
        // line 383
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/countryStateId"], "method", false, false, false, 383))) {
            // line 384
            echo "                        ";
            $context["violationPath"] = "/countryStateId";
            // line 385
            echo "                    ";
        } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/countryStateId")], "method", false, false, false, 385))) {
            // line 386
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/countryStateId");
            // line 387
            echo "                    ";
        }
        // line 388
        echo "
                    ";
        // line 389
        $this->displayBlock('component_address_form_country_state_label', $context, $blocks);
        // line 395
        echo "
                    ";
        // line 396
        $this->displayBlock('component_address_form_country_state_select', $context, $blocks);
        // line 408
        echo "
                    ";
        // line 409
        $this->displayBlock('component_address_form_country_error', $context, $blocks);
        // line 414
        echo "                </div>
            ";
    }

    // line 346
    public function block_component_address_form_country_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 347
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 348
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressCountry\">
                            ";
        // line 349
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 353
    public function block_component_address_form_country_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 354
        echo "                        <select class=\"country-select ";
        echo twig_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                id=\"";
        // line 355
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressCountry\"
                                name=\"";
        // line 356
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[countryId]\"
                                required=\"required\"
                                data-initial-country-id=\"";
        // line 358
        echo twig_escape_filter($this->env, ($context["initialCountryId"] ?? null), "html", null, true);
        echo "\">
                            ";
        // line 359
        if ( !($context["initialCountryId"] ?? null)) {
            // line 360
            echo "                                <option disabled=\"disabled\"
                                        value=\"\"
                                        selected=\"selected\">
                                    ";
            // line 363
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryPlaceholder"));
            echo "
                                </option>
                            ";
        }
        // line 366
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "countries", [], "any", false, false, false, 366));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 367
            echo "                                <option ";
            if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 367), ($context["initialCountryId"] ?? null)))) {
                // line 368
                echo "                                        selected=\"selected\"
                                        ";
            }
            // line 370
            echo "                                        value=\"";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 370), "html", null, true);
            echo "\"
                                        data-vat-id-required=\"";
            // line 371
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["country"], "vatIdRequired", [], "any", false, false, false, 371), "html", null, true);
            echo "\"
                                        ";
            // line 372
            if ((($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707") &&  !sw_get_attribute($this->env, $this->source, $context["country"], "shippingAvailable", [], "any", false, false, false, 372)) && ($context["disableNonShippableCountries"] ?? null))) {
                // line 373
                echo "                                            disabled=\"disabled\"
                                        ";
            }
            // line 374
            echo ">
                                    ";
            // line 375
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["country"], "translated", [], "any", false, false, false, 375), "name", [], "any", false, false, false, 375), "html", null, true);
            if ((($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707") && ($context["showNoShippingPostfix"] ?? null)) &&  !sw_get_attribute($this->env, $this->source, $context["country"], "shippingAvailable", [], "any", false, false, false, 375))) {
                echo " ";
                echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryPostfixNoShipping"));
            }
            // line 376
            echo "                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        echo "                        </select>
                    ";
    }

    // line 389
    public function block_component_address_form_country_state_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 390
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 391
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressCountry\">
                            ";
        // line 392
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryStateLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 396
    public function block_component_address_form_country_state_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 397
        echo "                        <select class=\"country-state-select ";
        echo twig_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                id=\"";
        // line 398
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressCountryState\"
                                name=\"";
        // line 399
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[countryStateId]\"
                                data-initial-country-state-id=\"";
        // line 400
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryStateId"], "method", false, false, false, 400), "html", null, true);
        echo "\">
                            <option value=\"\"
                                    selected=\"selected\"
                                    data-placeholder-option=\"true\">
                                ";
        // line 404
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryStatePlaceholder"));
        echo "
                            </option>
                        </select>
                    ";
    }

    // line 409
    public function block_component_address_form_country_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 410
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 411
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 411)->display($context);
            // line 412
            echo "                        ";
        }
        // line 413
        echo "                    ";
    }

    // line 419
    public function block_component_address_form_phone_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 420
        echo "                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showPhoneNumberField")) {
            // line 421
            echo "                    <div class=\"form-group col-md-6\">
                        ";
            // line 422
            if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/phoneNumber"], "method", false, false, false, 422))) {
                // line 423
                echo "                            ";
                $context["violationPath"] = "/phoneNumber";
                // line 424
                echo "                        ";
            } elseif ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/phoneNumber")], "method", false, false, false, 424))) {
                // line 425
                echo "                            ";
                $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/phoneNumber");
                // line 426
                echo "                        ";
            }
            // line 427
            echo "
                        ";
            // line 428
            $this->displayBlock('component_address_form_phone_number_label', $context, $blocks);
            // line 434
            echo "
                        ";
            // line 435
            $this->displayBlock('component_address_form_phone_number_input', $context, $blocks);
            // line 444
            echo "
                        ";
            // line 445
            $this->displayBlock('component_address_form_phone_error', $context, $blocks);
            // line 450
            echo "                    </div>
                ";
        }
        // line 452
        echo "            ";
    }

    // line 428
    public function block_component_address_form_phone_number_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 429
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 430
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressPhoneNumber\">
                                ";
        // line 431
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.phoneNumberLabel"));
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.phoneNumberFieldRequired")) ? ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                            </label>
                        ";
    }

    // line 435
    public function block_component_address_form_phone_number_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 436
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"";
        // line 438
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "AddressPhoneNumber\"
                                   placeholder=\"";
        // line 439
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.phoneNumberPlaceholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 440
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[phoneNumber]\"
                                   value=\"";
        // line 441
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "phoneNumber"], "method", false, false, false, 441), "html", null, true);
        echo "\"
                                ";
        // line 442
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.phoneNumberFieldRequired")) ? ("required=\"true\"") : (""));
        echo ">
                        ";
    }

    // line 445
    public function block_component_address_form_phone_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 446
        echo "                            ";
        if (($context["violationPath"] ?? null)) {
            // line 447
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 447)->display($context);
            // line 448
            echo "                            ";
        }
        // line 449
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1593 => 449,  1590 => 448,  1587 => 447,  1584 => 446,  1580 => 445,  1574 => 442,  1570 => 441,  1566 => 440,  1562 => 439,  1558 => 438,  1554 => 436,  1550 => 435,  1542 => 431,  1538 => 430,  1535 => 429,  1531 => 428,  1527 => 452,  1523 => 450,  1521 => 445,  1518 => 444,  1516 => 435,  1513 => 434,  1511 => 428,  1508 => 427,  1505 => 426,  1502 => 425,  1499 => 424,  1496 => 423,  1494 => 422,  1491 => 421,  1488 => 420,  1484 => 419,  1480 => 413,  1477 => 412,  1474 => 411,  1471 => 410,  1467 => 409,  1459 => 404,  1452 => 400,  1448 => 399,  1444 => 398,  1436 => 397,  1432 => 396,  1424 => 392,  1420 => 391,  1417 => 390,  1413 => 389,  1408 => 378,  1401 => 376,  1395 => 375,  1392 => 374,  1388 => 373,  1386 => 372,  1382 => 371,  1377 => 370,  1373 => 368,  1370 => 367,  1365 => 366,  1359 => 363,  1354 => 360,  1352 => 359,  1348 => 358,  1343 => 356,  1339 => 355,  1331 => 354,  1327 => 353,  1319 => 349,  1315 => 348,  1312 => 347,  1308 => 346,  1303 => 414,  1301 => 409,  1298 => 408,  1296 => 396,  1293 => 395,  1291 => 389,  1288 => 388,  1285 => 387,  1282 => 386,  1279 => 385,  1276 => 384,  1274 => 383,  1269 => 380,  1267 => 353,  1264 => 352,  1262 => 346,  1259 => 345,  1256 => 344,  1253 => 343,  1250 => 342,  1247 => 341,  1245 => 340,  1242 => 339,  1239 => 338,  1236 => 337,  1233 => 336,  1230 => 335,  1228 => 334,  1225 => 333,  1223 => 332,  1220 => 331,  1216 => 330,  1212 => 323,  1209 => 322,  1206 => 321,  1203 => 320,  1199 => 319,  1193 => 316,  1189 => 315,  1185 => 314,  1181 => 313,  1177 => 312,  1171 => 311,  1168 => 310,  1164 => 309,  1156 => 305,  1152 => 304,  1149 => 303,  1145 => 302,  1141 => 326,  1137 => 324,  1135 => 319,  1132 => 318,  1130 => 309,  1127 => 308,  1125 => 302,  1122 => 301,  1119 => 300,  1116 => 299,  1113 => 298,  1110 => 297,  1107 => 296,  1104 => 295,  1100 => 294,  1096 => 289,  1093 => 288,  1090 => 287,  1087 => 286,  1083 => 285,  1077 => 282,  1073 => 281,  1069 => 280,  1065 => 279,  1061 => 278,  1055 => 277,  1052 => 276,  1048 => 275,  1040 => 271,  1036 => 270,  1033 => 269,  1029 => 268,  1025 => 292,  1021 => 290,  1019 => 285,  1016 => 284,  1014 => 275,  1011 => 274,  1009 => 268,  1005 => 266,  1002 => 265,  999 => 264,  996 => 263,  993 => 262,  990 => 261,  987 => 260,  983 => 259,  979 => 237,  976 => 236,  973 => 235,  970 => 234,  966 => 233,  959 => 229,  955 => 228,  951 => 227,  947 => 226,  941 => 225,  938 => 224,  934 => 223,  926 => 219,  922 => 218,  919 => 217,  915 => 216,  911 => 204,  908 => 203,  905 => 202,  902 => 201,  898 => 200,  891 => 196,  887 => 195,  883 => 194,  879 => 193,  873 => 192,  870 => 191,  866 => 190,  858 => 186,  854 => 185,  851 => 184,  847 => 183,  843 => 257,  837 => 254,  830 => 250,  827 => 249,  821 => 246,  814 => 242,  811 => 241,  809 => 240,  806 => 239,  803 => 238,  801 => 233,  798 => 232,  796 => 223,  793 => 222,  791 => 216,  788 => 215,  785 => 214,  782 => 213,  779 => 212,  776 => 211,  773 => 210,  770 => 209,  767 => 208,  765 => 207,  762 => 206,  759 => 205,  757 => 200,  754 => 199,  752 => 190,  749 => 189,  747 => 183,  744 => 182,  741 => 181,  738 => 180,  735 => 179,  732 => 178,  729 => 177,  726 => 176,  722 => 175,  718 => 171,  715 => 170,  712 => 169,  709 => 168,  705 => 167,  698 => 163,  694 => 162,  690 => 161,  686 => 160,  680 => 159,  677 => 158,  673 => 157,  665 => 153,  661 => 152,  658 => 151,  654 => 150,  649 => 172,  647 => 167,  644 => 166,  642 => 157,  639 => 156,  637 => 150,  634 => 149,  631 => 148,  628 => 147,  625 => 146,  622 => 145,  620 => 144,  617 => 143,  613 => 142,  608 => 453,  606 => 419,  602 => 418,  598 => 416,  596 => 330,  592 => 329,  588 => 327,  586 => 294,  583 => 293,  581 => 259,  578 => 258,  576 => 175,  573 => 174,  571 => 142,  566 => 141,  562 => 140,  558 => 122,  555 => 121,  552 => 120,  549 => 119,  545 => 118,  539 => 114,  535 => 113,  531 => 112,  527 => 111,  521 => 110,  518 => 109,  514 => 108,  507 => 103,  503 => 102,  500 => 101,  496 => 100,  492 => 132,  488 => 130,  486 => 128,  485 => 127,  482 => 126,  480 => 125,  476 => 123,  473 => 118,  470 => 116,  467 => 108,  464 => 106,  461 => 100,  458 => 98,  455 => 97,  452 => 96,  449 => 95,  446 => 94,  444 => 93,  441 => 92,  438 => 91,  434 => 90,  430 => 86,  427 => 85,  424 => 84,  421 => 83,  417 => 82,  411 => 79,  407 => 78,  403 => 77,  399 => 76,  393 => 75,  390 => 74,  386 => 73,  379 => 69,  375 => 68,  372 => 67,  368 => 66,  363 => 87,  361 => 82,  358 => 81,  356 => 73,  353 => 72,  351 => 66,  348 => 65,  345 => 64,  342 => 63,  339 => 62,  336 => 61,  334 => 60,  331 => 59,  327 => 58,  323 => 54,  320 => 53,  317 => 52,  314 => 51,  310 => 50,  302 => 47,  298 => 46,  294 => 45,  290 => 44,  286 => 43,  280 => 42,  277 => 41,  273 => 40,  268 => 37,  263 => 36,  259 => 35,  256 => 34,  252 => 33,  247 => 55,  245 => 50,  242 => 49,  240 => 40,  237 => 39,  235 => 33,  232 => 32,  229 => 31,  226 => 30,  223 => 29,  220 => 28,  218 => 27,  215 => 26,  211 => 25,  206 => 133,  204 => 90,  201 => 89,  199 => 58,  196 => 57,  194 => 25,  189 => 24,  185 => 23,  181 => 138,  178 => 137,  174 => 135,  172 => 23,  161 => 22,  159 => 21,  156 => 20,  153 => 19,  150 => 18,  147 => 17,  144 => 16,  140 => 15,  136 => 8,  131 => 6,  127 => 5,  124 => 4,  121 => 3,  117 => 2,  113 => 140,  110 => 139,  108 => 15,  105 => 14,  102 => 13,  99 => 12,  96 => 11,  93 => 9,  90 => 2,  83 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/address/address-form.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/component/address/address-form.html.twig");
    }
}
