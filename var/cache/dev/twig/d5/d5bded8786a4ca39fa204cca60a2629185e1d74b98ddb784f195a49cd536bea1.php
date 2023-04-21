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

/* Main/home.html.twig */
class __TwigTemplate_f9e5eaf69cac05689f2770ad99b6e1ff6655351872b3f78c7584dd104842349a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Main/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Main/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Main/home.html.twig", 1);
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

        // line 4
        echo "    SnowTricks | Accueil
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"bloc-homepage\">
        <div class=\"bloc-img container-fluid\">
            <div class=\"text-bloc-img \">
                <h1> SnowTricks</h1>
                <h2>Le <strong>snowboard</strong> c’est juste pour le fun... <br>Bienvenue dans l'univers des <strong>Riders</strong>
                </h2>
            </div>
            <a href=\"#list-tricks\"><img class=\"icon-down\" src=\"/img/icons/down-arrow.png\" alt=\"icon-down\"></a>
        </div>
        <hr class=\"separator-list-homepage\" id=\"list-tricks\">
        <h3 class=\"title-list-homepage\">Tous les Tricks</h3>
        <h4 class=\"subtitle-list-homepage\">Prenez part à la communauté en ajoutant ou en modifiant des tricks</h4>
        <hr class=\"separator-list-homepage\">
        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "        <div class=\"bloc-btn-new-tricks\">
            <a class=\"btn btn-primary\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_new");
            echo "\">Ajouter une nouvelle figure</a>
        </div>
        ";
        }
        // line 26
        echo "
        <div class=\"bloc-list-tricks\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 29
            echo "                <div class=\"trick-card \">
                    <img class=\"img-trick-card\" src=\"/img/test-img-card.jpg\" alt=\"img-trick-card\">
                    <div class=\"footer-trick-card\">
                        <div class=\"col-8 title-card\">
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_show", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" target=\"_blank\">
                                <h5>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</h5></a>
                            <h6>Catégorie : ";
            // line 35
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "categorie", [], "any", false, false, false, 35)), "html", null, true);
            echo "</h6>
                        </div>
                        ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) {
                // line 38
                echo "                        <div class=\"col-4 bloc-btn-footer-card\">
                            <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\" target=\"_blank\"><img
                                        class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" target=\"_blank\"><img
                                        class=\"icon-card\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                        ";
            }
            // line 48
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Main/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 51,  163 => 48,  154 => 42,  148 => 39,  145 => 38,  143 => 37,  138 => 35,  134 => 34,  130 => 33,  124 => 29,  120 => 28,  116 => 26,  110 => 23,  107 => 22,  105 => 21,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    SnowTricks | Accueil
{% endblock %}

{% block body %}
    <div class=\"bloc-homepage\">
        <div class=\"bloc-img container-fluid\">
            <div class=\"text-bloc-img \">
                <h1> SnowTricks</h1>
                <h2>Le <strong>snowboard</strong> c’est juste pour le fun... <br>Bienvenue dans l'univers des <strong>Riders</strong>
                </h2>
            </div>
            <a href=\"#list-tricks\"><img class=\"icon-down\" src=\"/img/icons/down-arrow.png\" alt=\"icon-down\"></a>
        </div>
        <hr class=\"separator-list-homepage\" id=\"list-tricks\">
        <h3 class=\"title-list-homepage\">Tous les Tricks</h3>
        <h4 class=\"subtitle-list-homepage\">Prenez part à la communauté en ajoutant ou en modifiant des tricks</h4>
        <hr class=\"separator-list-homepage\">
        {% if app.user %}
        <div class=\"bloc-btn-new-tricks\">
            <a class=\"btn btn-primary\" href=\"{{ path('app_tricks_new') }}\">Ajouter une nouvelle figure</a>
        </div>
        {% endif %}

        <div class=\"bloc-list-tricks\">
            {% for trick in tricks %}
                <div class=\"trick-card \">
                    <img class=\"img-trick-card\" src=\"/img/test-img-card.jpg\" alt=\"img-trick-card\">
                    <div class=\"footer-trick-card\">
                        <div class=\"col-8 title-card\">
                            <a href=\"{{ path('app_tricks_show', {'id': trick.id}) }}\" target=\"_blank\">
                                <h5>{{ trick.name }}</h5></a>
                            <h6>Catégorie : {{ trick.categorie | capitalize }}</h6>
                        </div>
                        {% if app.user %}
                        <div class=\"col-4 bloc-btn-footer-card\">
                            <a href=\"{{ path('app_tricks_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_tricks_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}

        </div>
    </div>

{% endblock %}
", "Main/home.html.twig", "C:\\wamp64\\www\\SnowTricks\\templates\\Main\\home.html.twig");
    }
}
