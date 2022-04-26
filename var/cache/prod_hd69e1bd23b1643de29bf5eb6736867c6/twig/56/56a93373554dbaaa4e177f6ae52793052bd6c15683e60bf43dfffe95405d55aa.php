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

/* @Storefront/storefront/component/address/address-personal.html.twig */
class __TwigTemplate_6504ce5a720ca7e893b832a5423cd87a4c6444234c381be7407284eb01da9198 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address_personal_fields' => [$this, 'block_component_address_personal_fields'],
            'component_address_personal_account_type' => [$this, 'block_component_address_personal_account_type'],
            'component_address_personal_account_type_label' => [$this, 'block_component_address_personal_account_type_label'],
            'component_address_personal_account_type_select' => [$this, 'block_component_address_personal_account_type_select'],
            'component_address_personal_account_type_error' => [$this, 'block_component_address_personal_account_type_error'],
            'component_address_personal_fields_salutation_title' => [$this, 'block_component_address_personal_fields_salutation_title'],
            'component_address_personal_fields_salutation' => [$this, 'block_component_address_personal_fields_salutation'],
            'component_address_personal_fields_salutation_label' => [$this, 'block_component_address_personal_fields_salutation_label'],
            'component_address_form_salutation_select' => [$this, 'block_component_address_form_salutation_select'],
            'component_address_form_salutation_select_error' => [$this, 'block_component_address_form_salutation_select_error'],
            'component_address_personal_fields_title' => [$this, 'block_component_address_personal_fields_title'],
            'component_address_personal_fields_title_label' => [$this, 'block_component_address_personal_fields_title_label'],
            'component_address_personal_fields_title_input' => [$this, 'block_component_address_personal_fields_title_input'],
            'component_address_personal_fields_name' => [$this, 'block_component_address_personal_fields_name'],
            'component_address_personal_fields_first_name' => [$this, 'block_component_address_personal_fields_first_name'],
            'component_address_personal_fields_first_name_label' => [$this, 'block_component_address_personal_fields_first_name_label'],
            'component_address_personal_fields_first_name_input' => [$this, 'block_component_address_personal_fields_first_name_input'],
            'component_address_personal_fields_first_name_input_error' => [$this, 'block_component_address_personal_fields_first_name_input_error'],
            'component_address_personal_fields_last_name' => [$this, 'block_component_address_personal_fields_last_name'],
            'component_address_personal_fields_last_name_label' => [$this, 'block_component_address_personal_fields_last_name_label'],
            'component_address_personal_fields_last_name_input' => [$this, 'block_component_address_personal_fields_last_name_input'],
            'component_address_personal_fields_last_name_input_error' => [$this, 'block_component_address_personal_fields_last_name_input_error'],
            'component_address_personal_company' => [$this, 'block_component_address_personal_company'],
            'component_address_personal_company_fields' => [$this, 'block_component_address_personal_company_fields'],
            'component_address_personal_company_name' => [$this, 'block_component_address_personal_company_name'],
            'component_address_personal_company_name_label' => [$this, 'block_component_address_personal_company_name_label'],
            'component_address_personal_company_name_input' => [$this, 'block_component_address_personal_company_name_input'],
            'component_address_personal_company_name_input_error' => [$this, 'block_component_address_personal_company_name_input_error'],
            'component_address_personal_vat_id' => [$this, 'block_component_address_personal_vat_id'],
            'component_address_personal_vat_id_fields' => [$this, 'block_component_address_personal_vat_id_fields'],
            'component_address_personal_fields_birthday' => [$this, 'block_component_address_personal_fields_birthday'],
            'component_address_personal_fields_birthday_label' => [$this, 'block_component_address_personal_fields_birthday_label'],
            'component_address_personal_fields_birthday_selects' => [$this, 'block_component_address_personal_fields_birthday_selects'],
            'component_address_personal_fields_birthday_select_day' => [$this, 'block_component_address_personal_fields_birthday_select_day'],
            'component_address_personal_fields_birthday_select_day_error' => [$this, 'block_component_address_personal_fields_birthday_select_day_error'],
            'component_address_personal_fields_birthday_select_month' => [$this, 'block_component_address_personal_fields_birthday_select_month'],
            'component_address_personal_fields_birthday_select_month_error' => [$this, 'block_component_address_personal_fields_birthday_select_month_error'],
            'component_address_personal_fields_birthday_select_year' => [$this, 'block_component_address_personal_fields_birthday_select_year'],
            'component_address_personal_fields_birthday_select_year_error' => [$this, 'block_component_address_personal_fields_birthday_select_year_error'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->displayBlock('component_address_personal_fields', $context, $blocks);
    }

    public function block_component_address_personal_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        $this->displayBlock('component_address_personal_account_type', $context, $blocks);
        // line 75
        echo "
    ";
        // line 76
        $this->displayBlock('component_address_personal_fields_salutation_title', $context, $blocks);
        // line 144
        echo "
    ";
        // line 145
        $this->displayBlock('component_address_personal_fields_name', $context, $blocks);
        // line 208
        echo "
    ";
        // line 209
        $this->displayBlock('component_address_personal_company', $context, $blocks);
        // line 248
        echo "
    ";
        // line 249
        $this->displayBlock('component_address_personal_vat_id', $context, $blocks);
        // line 267
        echo "
    ";
        // line 268
        $this->displayBlock('component_address_personal_fields_birthday', $context, $blocks);
    }

    // line 3
    public function block_component_address_personal_account_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        ";
        if ((($context["onlyCompanyRegistration"] ?? null) || ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection") &&  !($context["hideCustomerTypeSelect"] ?? null)))) {
            // line 5
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
            echo "\">
                <div class=\"form-group col-md-3 col-sm-6 contact-type\">
                    ";
            // line 7
            $this->displayBlock('component_address_personal_account_type_label', $context, $blocks);
            // line 13
            echo "
                    ";
            // line 14
            $this->displayBlock('component_address_personal_account_type_select', $context, $blocks);
            // line 66
            echo "
                    ";
            // line 67
            $this->displayBlock('component_address_personal_account_type_error', $context, $blocks);
            // line 69
            echo "                </div>
            </div>
        ";
        } elseif ( !        // line 71
($context["hideCustomerTypeSelect"] ?? null)) {
            // line 72
            echo "            <input type=\"hidden\" name=\"accountType\">
        ";
        }
        // line 74
        echo "    ";
    }

    // line 7
    public function block_component_address_personal_account_type_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 9
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "accountType\">
                            ";
        // line 10
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 14
    public function block_component_address_personal_account_type_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                            ";
        if ((($context["onlyCompanyRegistration"] ?? null) || $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection"))) {
            // line 16
            echo "                                <select name=\"";
            if (($context["prefix"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
                echo "[accountType]";
            } else {
                echo "accountType";
            }
            echo "\"
                                    id=\"";
            // line 17
            echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
            echo "accountType\"
                                    ";
            // line 18
            if (($context["onlyCompanyRegistration"] ?? null)) {
                echo "disabled";
            }
            // line 19
            echo "                                    required=\"required\"
                                    class=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
            echo " contact-select\"
                                    data-form-field-toggle=\"true\"
                                    data-form-field-toggle-target=\".js-field-toggle-contact-type-company";
            // line 22
            if (($context["customToggleTarget"] ?? null)) {
                echo "-";
                echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            }
            echo "\"
                                    data-form-field-toggle-value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
            echo "\"
                                    data-form-field-toggle-scope=\"";
            // line 24
            if ((0 === twig_compare(($context["scope"] ?? null), "parent"))) {
                echo "parent";
            } else {
                echo "all";
            }
            echo "\"
                                    ";
            // line 25
            if ((0 === twig_compare(($context["scope"] ?? null), "parent"))) {
                echo "data-form-field-toggle-parent-selector=";
                echo twig_escape_filter($this->env, ($context["parentSelector"] ?? null), "html", null, true);
            }
            // line 26
            echo "                                >
                            ";
        }
        // line 28
        echo "
                            ";
        // line 29
        $context["isCompany"] = false;
        // line 30
        echo "
                            ";
        // line 31
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, false, 31), "company", [], "any", false, false, false, 31) ||  !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "company", [], "any", false, false, false, 31)))) {
            // line 32
            echo "                                ";
            $context["isCompany"] = true;
            // line 33
            echo "                            ";
        }
        // line 34
        echo "
                            ";
        // line 35
        if ((($context["onlyCompanyRegistration"] ?? null) || (($context["accountType"] ?? null) && (0 === twig_compare(($context["accountType"] ?? null), twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS")))))) {
            // line 36
            echo "                                ";
            $context["isCompany"] = true;
            // line 37
            echo "                            ";
        }
        // line 38
        echo "
                            ";
        // line 39
        $context["isLoginPage"] = false;
        // line 40
        echo "                            ";
        if ((0 === twig_compare(($context["activeRoute"] ?? null), "frontend.account.login.page"))) {
            // line 41
            echo "                                ";
            $context["isLoginPage"] = true;
            // line 42
            echo "                            ";
        }
        // line 43
        echo "
                            ";
        // line 44
        if (($context["isLoginPage"] ?? null)) {
            // line 45
            echo "                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    ";
            // line 48
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeLabel"));
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
            echo "
                                </option>
                            ";
        }
        // line 51
        echo "
                            ";
        // line 52
        if ( !($context["onlyCompanyRegistration"] ?? null)) {
            // line 53
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_PRIVATE"), "html", null, true);
            echo "\"
                                    ";
            // line 54
            if (((0 === twig_compare(($context["isCompany"] ?? null), false)) && (0 === twig_compare(($context["isLoginPage"] ?? null), false)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                    ";
            // line 55
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypePrivate"));
            echo "
                                </option>
                            ";
        }
        // line 58
        echo "
                            <option value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
        echo "\"
                                ";
        // line 60
        if (((0 === twig_compare(($context["isCompany"] ?? null), true)) && (0 === twig_compare(($context["isLoginPage"] ?? null), false)))) {
            echo " selected=\"selected\"";
        }
        echo ">
                                ";
        // line 61
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeBusiness"));
        echo "
                            </option>
                        </select>
                        ";
        // line 64
        if (($context["onlyCompanyRegistration"] ?? null)) {
            echo "<input type=\"hidden\" name=\"accountType\" value=\"";
            echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
            echo "\">";
        }
        // line 65
        echo "                    ";
    }

    // line 67
    public function block_component_address_personal_account_type_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                    ";
    }

    // line 76
    public function block_component_address_personal_fields_salutation_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "        <div class=\"";
        echo twig_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 78
        $this->displayBlock('component_address_personal_fields_salutation', $context, $blocks);
        // line 119
        echo "
            ";
        // line 120
        $this->displayBlock('component_address_personal_fields_title', $context, $blocks);
        // line 142
        echo "        </div>
    ";
    }

    // line 78
    public function block_component_address_personal_fields_salutation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "                <div class=\"form-group col-md-3 col-sm-6\">
                    ";
        // line 80
        $this->displayBlock('component_address_personal_fields_salutation_label', $context, $blocks);
        // line 86
        echo "
                    ";
        // line 87
        $this->displayBlock('component_address_form_salutation_select', $context, $blocks);
        // line 109
        echo "
                    ";
        // line 110
        $this->displayBlock('component_address_form_salutation_select_error', $context, $blocks);
        // line 117
        echo "                </div>
            ";
    }

    // line 80
    public function block_component_address_personal_fields_salutation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 82
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalSalutation\">
                            ";
        // line 83
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalSalutationLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 87
    public function block_component_address_form_salutation_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                        <select id=\"";
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalSalutation\"
                                class=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/salutationId"], "method", false, false, false, 89))) {
            echo " is-invalid";
        }
        echo "\"
                                name=\"";
        // line 90
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[salutationId]";
        } else {
            echo "salutationId";
        }
        echo "\"
                                required=\"required\">
                            ";
        // line 92
        if ( !sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "salutationId"], "method", false, false, false, 92)) {
            // line 93
            echo "                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    ";
            // line 96
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalSalutationPlaceholder"));
            echo "
                                </option>
                            ";
        }
        // line 99
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salutations", [], "any", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["salutation"]) {
            // line 100
            echo "                                <option ";
            if ((0 === twig_compare(sw_get_attribute($this->env, $this->source, $context["salutation"], "id", [], "any", false, false, false, 100), sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "salutationId"], "method", false, false, false, 100)))) {
                // line 101
                echo "                                    selected=\"selected\"
                                ";
            }
            // line 103
            echo "                                        value=\"";
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["salutation"], "id", [], "any", false, false, false, 103), "html", null, true);
            echo "\">
                                    ";
            // line 104
            echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["salutation"], "translated", [], "any", false, false, false, 104), "displayName", [], "any", false, false, false, 104), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salutation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                        </select>
                    ";
    }

    // line 110
    public function block_component_address_form_salutation_select_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                        ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/salutationId"], "method", false, false, false, 111))) {
            // line 112
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 112)->display(twig_array_merge($context, ["violationPath" => "/salutationId"]));
            // line 115
            echo "                        ";
        }
        // line 116
        echo "                    ";
    }

    // line 120
    public function block_component_address_personal_fields_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showTitleField")) {
            // line 122
            echo "                    <div class=\"form-group col-md-3 col-sm-6\">
                        ";
            // line 123
            $this->displayBlock('component_address_personal_fields_title_label', $context, $blocks);
            // line 129
            echo "
                        ";
            // line 130
            $this->displayBlock('component_address_personal_fields_title_input', $context, $blocks);
            // line 139
            echo "                    </div>
                ";
        }
        // line 141
        echo "            ";
    }

    // line 123
    public function block_component_address_personal_fields_title_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 125
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalTitle\">
                                ";
        // line 126
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTitleLabel"));
        echo "
                            </label>
                        ";
    }

    // line 130
    public function block_component_address_personal_fields_title_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   autocomplete=\"section-personal title\"
                                   id=\"";
        // line 134
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalTitle\"
                                   placeholder=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTitlePlaceholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 136
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[title]";
        } else {
            echo "title";
        }
        echo "\"
                                   value=\"";
        // line 137
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "title"], "method", false, false, false, 137), "html", null, true);
        echo "\">
                        ";
    }

    // line 145
    public function block_component_address_personal_fields_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "        <div class=\"";
        echo twig_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 147
        $this->displayBlock('component_address_personal_fields_first_name', $context, $blocks);
        // line 176
        echo "
            ";
        // line 177
        $this->displayBlock('component_address_personal_fields_last_name', $context, $blocks);
        // line 206
        echo "        </div>
    ";
    }

    // line 147
    public function block_component_address_personal_fields_first_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "                <div class=\"form-group col-sm-6\">
                    ";
        // line 149
        $this->displayBlock('component_address_personal_fields_first_name_label', $context, $blocks);
        // line 155
        echo "
                    ";
        // line 156
        $this->displayBlock('component_address_personal_fields_first_name_input', $context, $blocks);
        // line 166
        echo "
                    ";
        // line 167
        $this->displayBlock('component_address_personal_fields_first_name_input_error', $context, $blocks);
        // line 174
        echo "                </div>
            ";
    }

    // line 149
    public function block_component_address_personal_fields_first_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 151
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalFirstName\">
                            ";
        // line 152
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalFirstNameLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 156
    public function block_component_address_personal_fields_first_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 158
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/firstName"], "method", false, false, false, 158))) {
            echo " is-invalid";
        }
        echo "\"
                               autocomplete=\"section-personal given-name\"
                               id=\"";
        // line 160
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalFirstName\"
                               placeholder=\"";
        // line 161
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalFirstNamePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 162
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[firstName]";
        } else {
            echo "firstName";
        }
        echo "\"
                               value=\"";
        // line 163
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "firstName"], "method", false, false, false, 163), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
    }

    // line 167
    public function block_component_address_personal_fields_first_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "                        ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/firstName"], "method", false, false, false, 168))) {
            // line 169
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 169)->display(twig_array_merge($context, ["violationPath" => "/firstName"]));
            // line 172
            echo "                        ";
        }
        // line 173
        echo "                    ";
    }

    // line 177
    public function block_component_address_personal_fields_last_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "                <div class=\"form-group col-sm-6\">
                    ";
        // line 179
        $this->displayBlock('component_address_personal_fields_last_name_label', $context, $blocks);
        // line 185
        echo "
                    ";
        // line 186
        $this->displayBlock('component_address_personal_fields_last_name_input', $context, $blocks);
        // line 196
        echo "
                    ";
        // line 197
        $this->displayBlock('component_address_personal_fields_last_name_input_error', $context, $blocks);
        // line 204
        echo "                </div>
            ";
    }

    // line 179
    public function block_component_address_personal_fields_last_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 181
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalLastName\">
                            ";
        // line 182
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalLastNameLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
    }

    // line 186
    public function block_component_address_personal_fields_last_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 188
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/lastName"], "method", false, false, false, 188))) {
            echo " is-invalid";
        }
        echo "\"
                               autocomplete=\"section-personal family-name\"
                               id=\"";
        // line 190
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalLastName\"
                               placeholder=\"";
        // line 191
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalLastNamePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 192
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[lastName]";
        } else {
            echo "lastName";
        }
        echo "\"
                               value=\"";
        // line 193
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "lastName"], "method", false, false, false, 193), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
    }

    // line 197
    public function block_component_address_personal_fields_last_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "                        ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/lastName"], "method", false, false, false, 198))) {
            // line 199
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 199)->display(twig_array_merge($context, ["violationPath" => "/lastName"]));
            // line 202
            echo "                        ";
        }
        // line 203
        echo "                    ";
    }

    // line 209
    public function block_component_address_personal_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        echo "        ";
        if (((($context["onlyCompanyRegistration"] ?? null) || $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection")) && (0 === twig_compare(($context["activeRoute"] ?? null), "frontend.account.profile.page")))) {
            // line 211
            echo "            <div class=\"js-field-toggle-contact-type-company";
            if (($context["customToggleTarget"] ?? null)) {
                echo "-";
                echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            }
            echo "\">
                ";
            // line 212
            $this->displayBlock('component_address_personal_company_fields', $context, $blocks);
            // line 245
            echo "            </div>
        ";
        }
        // line 247
        echo "    ";
    }

    // line 212
    public function block_component_address_personal_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 213
        echo "                    <div class=\"";
        echo twig_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 214
        $this->displayBlock('component_address_personal_company_name', $context, $blocks);
        // line 243
        echo "                    </div>
                ";
    }

    // line 214
    public function block_component_address_personal_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        echo "                            <div class=\"form-group col-12\">
                                ";
        // line 216
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/company"], "method", false, false, false, 216))) {
            // line 217
            echo "                                    ";
            $context["violationPath"] = "/company";
            // line 218
            echo "                                ";
        }
        // line 219
        echo "
                                ";
        // line 220
        $this->displayBlock('component_address_personal_company_name_label', $context, $blocks);
        // line 225
        echo "
                                ";
        // line 226
        $this->displayBlock('component_address_personal_company_name_input', $context, $blocks);
        // line 235
        echo "
                                ";
        // line 236
        $this->displayBlock('component_address_personal_company_name_input_error', $context, $blocks);
        // line 241
        echo "                            </div>
                        ";
    }

    // line 220
    public function block_component_address_personal_company_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 221
        echo "                                    <label class=\"form-label\" for=\"";
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\">
                                        ";
        // line 222
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                    </label>
                                ";
    }

    // line 226
    public function block_component_address_personal_company_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 227
        echo "                                    <input type=\"text\"
                                           class=\"form-control";
        // line 228
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                           id=\"";
        // line 229
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "company\"
                                           placeholder=\"";
        // line 230
        echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNamePlaceholder")), "html", null, true);
        echo "\"
                                           name=\"company\"
                                           value=\"";
        // line 232
        echo twig_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "company"], "method", false, false, false, 232), "html", null, true);
        echo "\"
                                           required=\"required\">
                                ";
    }

    // line 236
    public function block_component_address_personal_company_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 237
        echo "                                    ";
        if (($context["violationPath"] ?? null)) {
            // line 238
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 238)->display($context);
            // line 239
            echo "                                    ";
        }
        // line 240
        echo "                                ";
    }

    // line 249
    public function block_component_address_personal_vat_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        echo "        ";
        if (($context["showVatIdField"] ?? null)) {
            // line 251
            echo "            ";
            if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showAccountTypeSelection") || ($context["onlyCompanyRegistration"] ?? null))) {
                // line 252
                echo "                <div class=\"js-field-toggle-contact-type-company";
                if (($context["customToggleTarget"] ?? null)) {
                    echo "-";
                    echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
                }
                echo " js-field-toggle-contact-type-vat-id\">
                    ";
                // line 253
                $this->displayBlock('component_address_personal_vat_id_fields', $context, $blocks);
                // line 263
                echo "                </div>
            ";
            }
            // line 265
            echo "        ";
        }
        // line 266
        echo "    ";
    }

    // line 253
    public function block_component_address_personal_vat_id_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 254
        echo "                        <div class=\"";
        echo twig_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                            <div class=\"form-group col-12\">
                                ";
        // line 256
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal-vat-id.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 256)->display(twig_array_merge($context, ["vatIds" => sw_get_attribute($this->env, $this->source,         // line 257
($context["data"] ?? null), "get", [0 => "vatIds"], "method", false, false, false, 257), "editMode" => true]));
        // line 260
        echo "                            </div>
                        </div>
                    ";
    }

    // line 268
    public function block_component_address_personal_fields_birthday($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 269
        echo "        ";
        if (($context["showBirthdayField"] ?? null)) {
            // line 270
            echo "            ";
            $this->displayBlock('component_address_personal_fields_birthday_label', $context, $blocks);
            // line 275
            echo "
            ";
            // line 276
            $this->displayBlock('component_address_personal_fields_birthday_selects', $context, $blocks);
            // line 370
            echo "        ";
        }
        // line 371
        echo "    ";
    }

    // line 270
    public function block_component_address_personal_fields_birthday_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 271
        echo "                <label for=\"";
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalBirthday\">
                    ";
        // line 272
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdayLabel"));
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.birthdayFieldRequired")) ? ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                </label>
            ";
    }

    // line 276
    public function block_component_address_personal_fields_birthday_selects($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 277
        echo "                <div class=\"";
        echo twig_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 278
        $this->displayBlock('component_address_personal_fields_birthday_select_day', $context, $blocks);
        // line 307
        echo "
                    ";
        // line 308
        $this->displayBlock('component_address_personal_fields_birthday_select_month', $context, $blocks);
        // line 336
        echo "
                    ";
        // line 337
        $this->displayBlock('component_address_personal_fields_birthday_select_year', $context, $blocks);
        // line 368
        echo "                </div>
            ";
    }

    // line 278
    public function block_component_address_personal_fields_birthday_select_day($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 279
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            <select id=\"";
        // line 280
        echo twig_escape_filter($this->env, (($context["idPrefix"] ?? null) . ($context["prefix"] ?? null)), "html", null, true);
        echo "personalBirthday\"
                                    name=\"";
        // line 281
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayDay]";
        } else {
            echo "birthdayDay";
        }
        echo "\"
                                    class=\"";
        // line 282
        echo twig_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 282))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 283
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.birthdayFieldRequired")) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 284
        if ( !sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayDay"], "method", false, false, false, 284)) {
            // line 285
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 287
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectDay"));
            echo "
                                    </option>
                                ";
        }
        // line 290
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 291
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "\"
                                            ";
            // line 292
            if ((0 === twig_compare($context["day"], sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayDay"], "method", false, false, false, 292)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 293
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                            </select>

                            ";
        // line 298
        $this->displayBlock('component_address_personal_fields_birthday_select_day_error', $context, $blocks);
        // line 305
        echo "                        </div>
                    ";
    }

    // line 298
    public function block_component_address_personal_fields_birthday_select_day_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 299
        echo "                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 299))) {
            // line 300
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 300)->display(twig_array_merge($context, ["violationPath" => "/birthdayDay"]));
            // line 303
            echo "                                ";
        }
        // line 304
        echo "                            ";
    }

    // line 308
    public function block_component_address_personal_fields_birthday_select_month($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 309
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            <select name=\"";
        // line 310
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayMonth]";
        } else {
            echo "birthdayMonth";
        }
        echo "\"
                                    class=\"";
        // line 311
        echo twig_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 311))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 312
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.birthdayFieldRequired")) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 313
        if ( !sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayMonth"], "method", false, false, false, 313)) {
            // line 314
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 316
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectMonth"));
            echo "
                                    </option>
                                ";
        }
        // line 319
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 320
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\"
                                            ";
            // line 321
            if ((0 === twig_compare($context["month"], sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayMonth"], "method", false, false, false, 321)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 322
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "                            </select>

                            ";
        // line 327
        $this->displayBlock('component_address_personal_fields_birthday_select_month_error', $context, $blocks);
        // line 334
        echo "                        </div>
                    ";
    }

    // line 327
    public function block_component_address_personal_fields_birthday_select_month_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 328
        echo "                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 328))) {
            // line 329
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 329)->display(twig_array_merge($context, ["violationPath" => "/birthdayMonth"]));
            // line 332
            echo "                                ";
        }
        // line 333
        echo "                            ";
    }

    // line 337
    public function block_component_address_personal_fields_birthday_select_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 338
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            ";
        // line 339
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 340
        echo "                            ";
        $context["startYear"] = (($context["currentYear"] ?? null) - 120);
        // line 341
        echo "
                            <select name=\"";
        // line 342
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayYear]";
        } else {
            echo "birthdayYear";
        }
        echo "\"
                                    class=\"";
        // line 343
        echo twig_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 343))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 344
        echo (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.birthdayFieldRequired")) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 345
        if ( !sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayYear"], "method", false, false, false, 345)) {
            // line 346
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 348
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectYear"));
            echo "
                                    </option>
                                ";
        }
        // line 351
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["currentYear"] ?? null), ($context["startYear"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 352
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\"
                                            ";
            // line 353
            if ((0 === twig_compare($context["year"], sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayYear"], "method", false, false, false, 353)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 354
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "                            </select>

                            ";
        // line 359
        $this->displayBlock('component_address_personal_fields_birthday_select_year_error', $context, $blocks);
        // line 366
        echo "                        </div>
                    ";
    }

    // line 359
    public function block_component_address_personal_fields_birthday_select_year_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 360
        echo "                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 360))) {
            // line 361
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 361)->display(twig_array_merge($context, ["violationPath" => "/birthdayYear"]));
            // line 364
            echo "                                ";
        }
        // line 365
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-personal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1330 => 365,  1327 => 364,  1324 => 361,  1321 => 360,  1317 => 359,  1312 => 366,  1310 => 359,  1306 => 357,  1297 => 354,  1291 => 353,  1286 => 352,  1281 => 351,  1275 => 348,  1271 => 346,  1269 => 345,  1265 => 344,  1258 => 343,  1249 => 342,  1246 => 341,  1243 => 340,  1241 => 339,  1238 => 338,  1234 => 337,  1230 => 333,  1227 => 332,  1224 => 329,  1221 => 328,  1217 => 327,  1212 => 334,  1210 => 327,  1206 => 325,  1197 => 322,  1191 => 321,  1186 => 320,  1181 => 319,  1175 => 316,  1171 => 314,  1169 => 313,  1165 => 312,  1158 => 311,  1149 => 310,  1146 => 309,  1142 => 308,  1138 => 304,  1135 => 303,  1132 => 300,  1129 => 299,  1125 => 298,  1120 => 305,  1118 => 298,  1114 => 296,  1105 => 293,  1099 => 292,  1094 => 291,  1089 => 290,  1083 => 287,  1079 => 285,  1077 => 284,  1073 => 283,  1066 => 282,  1057 => 281,  1053 => 280,  1050 => 279,  1046 => 278,  1041 => 368,  1039 => 337,  1036 => 336,  1034 => 308,  1031 => 307,  1029 => 278,  1024 => 277,  1020 => 276,  1012 => 272,  1007 => 271,  1003 => 270,  999 => 371,  996 => 370,  994 => 276,  991 => 275,  988 => 270,  985 => 269,  981 => 268,  975 => 260,  973 => 257,  972 => 256,  966 => 254,  962 => 253,  958 => 266,  955 => 265,  951 => 263,  949 => 253,  941 => 252,  938 => 251,  935 => 250,  931 => 249,  927 => 240,  924 => 239,  921 => 238,  918 => 237,  914 => 236,  907 => 232,  902 => 230,  898 => 229,  892 => 228,  889 => 227,  885 => 226,  877 => 222,  872 => 221,  868 => 220,  863 => 241,  861 => 236,  858 => 235,  856 => 226,  853 => 225,  851 => 220,  848 => 219,  845 => 218,  842 => 217,  840 => 216,  837 => 215,  833 => 214,  828 => 243,  826 => 214,  821 => 213,  817 => 212,  813 => 247,  809 => 245,  807 => 212,  799 => 211,  796 => 210,  792 => 209,  788 => 203,  785 => 202,  782 => 199,  779 => 198,  775 => 197,  768 => 193,  759 => 192,  755 => 191,  751 => 190,  744 => 188,  741 => 187,  737 => 186,  729 => 182,  725 => 181,  722 => 180,  718 => 179,  713 => 204,  711 => 197,  708 => 196,  706 => 186,  703 => 185,  701 => 179,  698 => 178,  694 => 177,  690 => 173,  687 => 172,  684 => 169,  681 => 168,  677 => 167,  670 => 163,  661 => 162,  657 => 161,  653 => 160,  646 => 158,  643 => 157,  639 => 156,  631 => 152,  627 => 151,  624 => 150,  620 => 149,  615 => 174,  613 => 167,  610 => 166,  608 => 156,  605 => 155,  603 => 149,  600 => 148,  596 => 147,  591 => 206,  589 => 177,  586 => 176,  584 => 147,  579 => 146,  575 => 145,  569 => 137,  560 => 136,  556 => 135,  552 => 134,  547 => 131,  543 => 130,  536 => 126,  532 => 125,  529 => 124,  525 => 123,  521 => 141,  517 => 139,  515 => 130,  512 => 129,  510 => 123,  507 => 122,  504 => 121,  500 => 120,  496 => 116,  493 => 115,  490 => 112,  487 => 111,  483 => 110,  478 => 107,  469 => 104,  464 => 103,  460 => 101,  457 => 100,  452 => 99,  446 => 96,  441 => 93,  439 => 92,  429 => 90,  422 => 89,  417 => 88,  413 => 87,  405 => 83,  401 => 82,  398 => 81,  394 => 80,  389 => 117,  387 => 110,  384 => 109,  382 => 87,  379 => 86,  377 => 80,  374 => 79,  370 => 78,  365 => 142,  363 => 120,  360 => 119,  358 => 78,  353 => 77,  349 => 76,  345 => 68,  341 => 67,  337 => 65,  331 => 64,  325 => 61,  319 => 60,  315 => 59,  312 => 58,  306 => 55,  300 => 54,  295 => 53,  293 => 52,  290 => 51,  283 => 48,  278 => 45,  276 => 44,  273 => 43,  270 => 42,  267 => 41,  264 => 40,  262 => 39,  259 => 38,  256 => 37,  253 => 36,  251 => 35,  248 => 34,  245 => 33,  242 => 32,  240 => 31,  237 => 30,  235 => 29,  232 => 28,  228 => 26,  223 => 25,  215 => 24,  211 => 23,  204 => 22,  199 => 20,  196 => 19,  192 => 18,  188 => 17,  178 => 16,  175 => 15,  171 => 14,  163 => 10,  159 => 9,  156 => 8,  152 => 7,  148 => 74,  144 => 72,  142 => 71,  138 => 69,  136 => 67,  133 => 66,  131 => 14,  128 => 13,  126 => 7,  120 => 5,  117 => 4,  113 => 3,  109 => 268,  106 => 267,  104 => 249,  101 => 248,  99 => 209,  96 => 208,  94 => 145,  91 => 144,  89 => 76,  86 => 75,  83 => 3,  76 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/address/address-personal.html.twig", "/var/www/shopwareloc/vendor/shopware/storefront/Resources/views/storefront/component/address/address-personal.html.twig");
    }
}
