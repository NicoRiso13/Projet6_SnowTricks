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
            <div class=\"poster col-12\" style=\"background-image: url('/uploads/poster/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 9, $this->source); })()), "poster", [], "any", false, false, false, 9), "html", null, true);
        echo "') \">


                <div class=\"title-poster \">
                    <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>

        <div class=\"bloc-info-details-tricks\">
            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">créé le
                : ";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 20, $this->source); })()), "createdAt", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 20, $this->source); })()), "createdAt", [], "any", false, false, false, 20), "medium", "medium", "dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true))) : (print ("")));
        echo " par <span
                        class=\"orange-bold-span\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</span></p>
            ";
        // line 22
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 22, $this->source); })()), "modifiedAT", [], "any", false, false, false, 22))) {
            // line 23
            echo "                <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Aucune modification n'a été effectuée</p>
            ";
        }
        // line 25
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 25, $this->source); })()), "modifiedAT", [], "any", false, false, false, 25))) {
            // line 26
            echo "                <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Dernière modification le
                    : ";
            // line 27
            ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 27, $this->source); })()), "modifiedAt", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 27, $this->source); })()), "modifiedAt", [], "any", false, false, false, 27), "medium", "medium", "", null, "gregorian", "fr"), "html", null, true))) : (print ("")));
            echo "</p>
            ";
        }
        // line 29
        echo "            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Catégorie : <span
                        class=\"orange-bold-span\"> ";
        // line 30
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 30, $this->source); })()), "categorie", [], "any", false, false, false, 30)), "html", null, true);
        echo "</span></p>
        </div>

    </div>

    <h1 class=\"edit-title\">Modifier la figure</h1>

    <div class=\"form-edit-tricks \">
        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
        <div class=\"div-form-edit-trick\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), 'row');
        echo "</div>
        <div class=\"div-form-edit-trick-description\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), 'row');
        echo "</div>
        <div class=\"div-form-edit-trick\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "imageFile", [], "any", false, false, false, 41), 'row');
        echo "</div>
        <div class=\"div-form-edit-trick\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "categorie", [], "any", false, false, false, 42), 'row');
        echo "</div>
        <div class=\"form-button\">
            <button class=\"btn btn-primary\">";
        // line 44
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 44, $this->source); })()), "Mettre à jour")) : ("Mettre à jour")), "html", null, true);
        echo "</button>
        </div>
        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
    </div>

    <div class=\"link-list\"><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_index");
        echo "\">Retour à la liste des figures</a></div>

    <div class=\"link-delete\">";
        // line 51
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
        return array (  187 => 51,  182 => 49,  176 => 46,  171 => 44,  166 => 42,  162 => 41,  158 => 40,  154 => 39,  150 => 38,  139 => 30,  136 => 29,  131 => 27,  128 => 26,  125 => 25,  121 => 23,  119 => 22,  115 => 21,  111 => 20,  101 => 13,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SnowTricks | {{ trick.name }}{% endblock %}

{% block body %}
    <div class=\"bloc-details-tricks\">

        <div class=\"bloc-title-details-tricks\">
            <div class=\"poster col-12\" style=\"background-image: url('/uploads/poster/{{ trick.poster }}') \">


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

    <div class=\"link-list\"><a href=\"{{ path('app_trick_index') }}\">Retour à la liste des figures</a></div>

    <div class=\"link-delete\">{{ include('tricks/_delete_form.html.twig') }}</div>
{% endblock %}







", "tricks/edit.html.twig", "C:\\wamp64\\www\\SnowTricks\\templates\\tricks\\edit.html.twig");
    }
}
