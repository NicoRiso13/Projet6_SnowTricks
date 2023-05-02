<?php

use Twig\Environment;
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

/* tricks/edit.html.twig */
class __TwigTemplate_7126b135e5019eddc5583057f94863243f6a882a5c3925f482ec7228c6faf610 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tricks/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SnowTricks | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"bloc-details-tricks\">

        <div class=\"bloc-title-details-tricks\">
            <div class=\"poster col-12\" style=\"background-image: url('/uploads/images/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 9, $this->source); })()), "poster", [], "any", false, false, false, 9), "html", null, true);
        echo "') \">

                ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "                    <div class=\"bloc-icon-poster\">
                        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\" ><img
                                    class=\"icon-card-show-details\" alt=\"btn-edit\" title=\"éditer un trick\"
                                    src=\"/img/icons/edit.png\"></a>
                        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\" target=\"_blank\"><img
                                    class=\"icon-card-show-details\" alt=\"btn-delete\"
                                    title=\"supprimer un trick\"
                                    src=\"/img/icons/delete.png\"></a>
                    </div>
                ";
        }
        // line 22
        echo "                <div class=\"title-poster \">
                    <h1>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>

        <div class=\"bloc-info-details-tricks\">
            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">créé le
                : ";
        // line 30
        ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 30, $this->source); })()), "createdAt", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 30, $this->source); })()), "createdAt", [], "any", false, false, false, 30), "medium", "medium", "dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true))) : (print ("")));
        echo " par <span
                        class=\"orange-bold-span\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "</span></p>
            ";
        // line 32
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 32, $this->source); })()), "modifiedAT", [], "any", false, false, false, 32))) {
            // line 33
            echo "                <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Aucune modification n'a été effectuée</p>
            ";
        }
        // line 35
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 35, $this->source); })()), "modifiedAT", [], "any", false, false, false, 35))) {
            // line 36
            echo "                <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Dernière modification le
                    : ";
            // line 37
            ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 37, $this->source); })()), "modifiedAt", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 37, $this->source); })()), "modifiedAt", [], "any", false, false, false, 37), "medium", "medium", "", null, "gregorian", "fr"), "html", null, true))) : (print ("")));
            echo "</p>
            ";
        }
        // line 39
        echo "            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Catégorie : <span
                        class=\"orange-bold-span\"> ";
        // line 40
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 40, $this->source); })()), "categorie", [], "any", false, false, false, 40)), "html", null, true);
        echo "</span></p>
        </div>

    </div>

    <h1 class=\"edit-title\">Modifier la figure</h1>

    <div class=\"form-edit-tricks \">
        ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start');
        echo "
        <div class=\"div-form-edit-trick\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), 'row');
        echo "</div>
        <div class=\"div-form-edit-trick-description\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), 'row');
        echo "</div>
        <div class=\"div-form-edit-trick\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "imageFile", [], "any", false, false, false, 51), 'row');
        echo "</div>
        <div class=\"div-form-edit-trick\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "categorie", [], "any", false, false, false, 52), 'row');
        echo "</div>
        <div class=\"form-button\">
            <button class=\"btn btn-primary\">";
        // line 54
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 54, $this->source); })()), "Mettre à jour")) : ("Mettre à jour")), "html", null, true);
        echo "</button>
        </div>
        ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "
    </div>

    <div class=\"link-list\"><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_index");
        echo "\">Retour à la liste des figures</a></div>

    <div class=\"link-delete\">";
        // line 61
        echo twig_include($this->env, $context, "tricks/_delete_form.html.twig");
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tricks/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 61,  203 => 59,  197 => 56,  192 => 54,  187 => 52,  183 => 51,  179 => 50,  175 => 49,  171 => 48,  160 => 40,  157 => 39,  152 => 37,  149 => 36,  146 => 35,  142 => 33,  140 => 32,  136 => 31,  132 => 30,  122 => 23,  119 => 22,  110 => 16,  104 => 13,  101 => 12,  99 => 11,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SnowTricks | {{ trick.name }}{% endblock %}

{% block body %}
    <div class=\"bloc-details-tricks\">

        <div class=\"bloc-title-details-tricks\">
            <div class=\"poster col-12\" style=\"background-image: url('/uploads/images/{{ trick.poster }}') \">

                {% if app.user %}
                    <div class=\"bloc-icon-poster\">
                        <a href=\"{{ path('app_tricks_edit', {'id': trick.id}) }}\" ><img
                                    class=\"icon-card-show-details\" alt=\"btn-edit\" title=\"éditer un trick\"
                                    src=\"/img/icons/edit.png\"></a>
                        <a href=\"{{ path('app_tricks_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
                                    class=\"icon-card-show-details\" alt=\"btn-delete\"
                                    title=\"supprimer un trick\"
                                    src=\"/img/icons/delete.png\"></a>
                    </div>
                {% endif %}
                <div class=\"title-poster \">
                    <h1>{{ trick.name }}</h1>
                </div>
            </div>
        </div>

        <div class=\"bloc-info-details-tricks\">
            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">créé le
                : {{ trick.createdAt ? trick.createdAt|format_datetime(locale='fr',pattern=\"dd MMMM YYYY\") }} par <span
                        class=\"orange-bold-span\">{{ trick.user.name }}</span></p>
            {% if trick.modifiedAT is empty %}
                <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Aucune modification n'a été effectuée</p>
            {% endif %}
            {% if trick.modifiedAT is not empty %}
                <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Dernière modification le
                    : {{ trick.modifiedAt ? trick.modifiedAt|format_datetime(locale='fr') }}</p>
            {% endif %}
            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Catégorie : <span
                        class=\"orange-bold-span\"> {{ trick.categorie | capitalize }}</span></p>
        </div>

    </div>

    <h1 class=\"edit-title\">Modifier la figure</h1>

    <div class=\"form-edit-tricks \">
        {{ form_start(form) }}
        <div class=\"div-form-edit-trick\">{{ form_row(form.name) }}</div>
        <div class=\"div-form-edit-trick-description\">{{ form_row(form.description) }}</div>
        <div class=\"div-form-edit-trick\">{{ form_row(form.imageFile) }}</div>
        <div class=\"div-form-edit-trick\">{{ form_row(form.categorie) }}</div>
        <div class=\"form-button\">
            <button class=\"btn btn-primary\">{{ button_label|default('Mettre à jour') }}</button>
        </div>
        {{ form_end(form) }}
    </div>

    <div class=\"link-list\"><a href=\"{{ path('app_tricks_index') }}\">Retour à la liste des figures</a></div>

    <div class=\"link-delete\">{{ include('tricks/_delete_form.html.twig') }}</div>
{% endblock %}







", "tricks/edit.html.twig", "C:\\wamp64\\www\\SnowTricks\\templates\\tricks\\edit.html.twig");
    }
}
