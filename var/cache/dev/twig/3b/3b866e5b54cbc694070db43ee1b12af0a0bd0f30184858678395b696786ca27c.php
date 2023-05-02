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

/* tricks/show.html.twig */
class __TwigTemplate_54b6024f2e438f3cb9e5b6a22d15e8f903c308288c8e30da857354bbfe5d4bc0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tricks/show.html.twig", 1);
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
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 8, $this->source); })()), "poster", [], "any", false, false, false, 8), "html", null, true);
        echo "') \">
                ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "                    <div class=\"bloc-icon-poster\">
                        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\"><img
                                    class=\"icon-card-show-details\" alt=\"btn-edit\" title=\"éditer un trick\"
                                    src=\"/img/icons/edit.png\"></a>
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" target=\"_blank\"><img
                                    class=\"icon-card-show-details\" alt=\"btn-delete\"
                                    title=\"supprimer un trick\"
                                    src=\"/img/icons/delete.png\"></a>
                    </div>
                ";
        }
        // line 20
        echo "                <div class=\"title-poster \">
                    <h1>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>
        <button class=\"btn btn-primary btn-display-media\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#view-medias\" aria-expanded=\"true\" aria-controls=\"collapseExample\">
            Voir les médias
        </button>
        <div class=\"collapsing \" id=\"view-medias\">
            <div class=\"bloc-medias\">
                <div class=\"section-pictures\">
                    <div class=\"card-trick-details\">
                        <div id=\"img-card-details\"
                             style=\"background-image: url('/uploads/poster/";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 34, $this->source); })()), "poster", [], "any", false, false, false, 34), "html", null, true);
        echo "')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                    <div class=\"card-trick-details\">
                        <div id=\"img-card-details\"
                             style=\"background-image: url('/uploads/poster/";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 49, $this->source); })()), "poster", [], "any", false, false, false, 49), "html", null, true);
        echo "')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                    <div class=\"card-trick-details\">
                        <div id=\"img-card-details\"
                             style=\"background-image: url('/uploads/poster/";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 64, $this->source); })()), "poster", [], "any", false, false, false, 64), "html", null, true);
        echo "')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"section-videos\">
                    <div class=\"card card-trick-details\">
                        <iframe src=\"https://www.youtube.com/embed/hBe2GDnQhU0\" title=\"YouTube video player\"
                                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                allowfullscreen></iframe>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                    <div class=\"card card-trick-details\">
                        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/kOyCsY4rBH0\"
                                title=\"YouTube video player\"
                                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                allowfullscreen></iframe>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                    <div class=\"card card-trick-details\">
                        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/U6bdYp7VpuE\"
                                title=\"YouTube video player\"
                                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                allowfullscreen></iframe>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bloc-description-tricks\">
            <div class=\"bloc-title-description\">
                <h3>Description</h3>
            </div>
            <p>";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 136, $this->source); })()), "description", [], "any", false, false, false, 136), "html", null, true);
        echo "</p>
        </div>
        <div class=\"bloc-info-details-tricks\">
            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">créé le
                : ";
        // line 140
        ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 140, $this->source); })()), "createdAt", [], "any", false, false, false, 140)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 140, $this->source); })()), "createdAt", [], "any", false, false, false, 140), "medium", "medium", "dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true))) : (print ("")));
        echo " par <span
                        class=\"orange-bold-span\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "name", [], "any", false, false, false, 141), "html", null, true);
        echo "</span></p>
            ";
        // line 142
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 142, $this->source); })()), "modifiedAT", [], "any", false, false, false, 142))) {
            // line 143
            echo "                <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Aucune modification n'a été effectuée</p>
            ";
        }
        // line 145
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 145, $this->source); })()), "modifiedAT", [], "any", false, false, false, 145))) {
            // line 146
            echo "                <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Dernière modification le
                    : <strong>";
            // line 147
            ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 147, $this->source); })()), "modifiedAt", [], "any", false, false, false, 147)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 147, $this->source); })()), "modifiedAt", [], "any", false, false, false, 147), "medium", "medium", "", null, "gregorian", "fr"), "html", null, true))) : (print ("")));
            echo "</strong></p>
            ";
        }
        // line 149
        echo "            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Catégorie : <span
                        class=\"orange-bold-span\"> ";
        // line 150
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 150, $this->source); })()), "categorie", [], "any", false, false, false, 150)), "html", null, true);
        echo "</span></p>
        </div>
        ";
        // line 153
        echo "        <div class=\"section-trick-commentarys col-10\">
            <h4>Espace commentaires</h4>
            ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155)) {
            // line 156
            echo "                <div class=\"bloc-form-commentary col-12\">
                    <form class=\"commentary-form\" action=\"#\" method=\"post\">
                        <label class=\"label-commentary\" for=\"comment\">Ajoutez votre commentaire</label>
                        <textarea class=\"col-12\" name=\"comment\" id=\"comment\" rows=\"5\"></textarea>

                        <div class=\"mb-3\">
                            <button class=\"btn btn-primary\" type=\"submit\">Valider</button>
                        </div>
                    </form>
                </div>
            ";
        }
        // line 167
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167)) {
            // line 168
            echo "                <div class=\"section-message-connect-commentary\">
                    <p class=\"message-connect-commentary\"> Pour laisser un commentaire veuillez vous <a href=\"/login\">identifier</a>
                        ou <a href=\"/register\">créer un compte </a> !!</p>
                </div>
            ";
        }
        // line 173
        echo "            <div class=\"bloc-commentary\">
                <div class=\"float-picture\"
                     style=\"background-image: url('/uploads/userPicture/userPicture1.png')\">
                </div>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                    impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand
                    un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de
                    polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la
                    bureautique informatique, sans que son contenu n'en soit modifié.</p>
                <h5>Réponse publiée par : <span class=\"span-author\">Carlito</span></h5>
            </div>
            <div class=\"bloc-commentary\">
                <div class=\"float-picture\"
                     style=\"background-image: url('/uploads/userPicture/userPicture1.png')\">
                </div>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                    impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand
                    un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de
                    polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la
                    bureautique informatique, sans que son contenu n'en soit modifié.</p>
                <h5>Réponse publiée par : <span class=\"span-author\">Carlito</span></h5>

            </div>
        </div>
        <div class=\"return-list\">
            <a href=\"";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_index");
        echo "\">Retour à la liste des figures</a>
        </div>
        ";
        // line 200
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200)) {
            // line 201
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 201, $this->source); })()), "id", [], "any", false, false, false, 201)]), "html", null, true);
            echo "\">Modifier la figure</a>
            ";
            // line 202
            echo twig_include($this->env, $context, "tricks/_delete_form.html.twig");
            echo "
        ";
        }
        // line 204
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tricks/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 204,  391 => 202,  386 => 201,  384 => 200,  379 => 198,  352 => 173,  345 => 168,  342 => 167,  329 => 156,  327 => 155,  323 => 153,  318 => 150,  315 => 149,  310 => 147,  307 => 146,  304 => 145,  300 => 143,  298 => 142,  294 => 141,  290 => 140,  283 => 136,  267 => 123,  259 => 118,  244 => 106,  236 => 101,  221 => 89,  213 => 84,  197 => 71,  189 => 66,  184 => 64,  173 => 56,  165 => 51,  160 => 49,  149 => 41,  141 => 36,  136 => 34,  120 => 21,  117 => 20,  108 => 14,  102 => 11,  99 => 10,  97 => 9,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SnowTricks | {{ trick.name }}{% endblock %}

{% block body %}
    <div class=\"bloc-details-tricks\">
        <div class=\"bloc-title-details-tricks\">
            <div class=\"poster col-12\" style=\"background-image: url('/uploads/poster/{{ trick.poster }}') \">
                {% if app.user %}
                    <div class=\"bloc-icon-poster\">
                        <a href=\"{{ path('app_tricks_edit', {'id': trick.id}) }}\"><img
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
        <button class=\"btn btn-primary btn-display-media\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#view-medias\" aria-expanded=\"true\" aria-controls=\"collapseExample\">
            Voir les médias
        </button>
        <div class=\"collapsing \" id=\"view-medias\">
            <div class=\"bloc-medias\">
                <div class=\"section-pictures\">
                    <div class=\"card-trick-details\">
                        <div id=\"img-card-details\"
                             style=\"background-image: url('/uploads/poster/{{ trick.poster }}')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"{{ path('app_tricks_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_tricks_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                    <div class=\"card-trick-details\">
                        <div id=\"img-card-details\"
                             style=\"background-image: url('/uploads/poster/{{ trick.poster }}')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"{{ path('app_tricks_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_tricks_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                    <div class=\"card-trick-details\">
                        <div id=\"img-card-details\"
                             style=\"background-image: url('/uploads/poster/{{ trick.poster }}')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"{{ path('app_tricks_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_tricks_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"section-videos\">
                    <div class=\"card card-trick-details\">
                        <iframe src=\"https://www.youtube.com/embed/hBe2GDnQhU0\" title=\"YouTube video player\"
                                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                allowfullscreen></iframe>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"{{ path('app_tricks_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_tricks_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                    <div class=\"card card-trick-details\">
                        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/kOyCsY4rBH0\"
                                title=\"YouTube video player\"
                                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                allowfullscreen></iframe>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"{{ path('app_tricks_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_tricks_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                    <div class=\"card card-trick-details\">
                        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/U6bdYp7VpuE\"
                                title=\"YouTube video player\"
                                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                allowfullscreen></iframe>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"{{ path('app_tricks_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_tricks_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bloc-description-tricks\">
            <div class=\"bloc-title-description\">
                <h3>Description</h3>
            </div>
            <p>{{ trick.description }}</p>
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
                    : <strong>{{ trick.modifiedAt ? trick.modifiedAt|format_datetime(locale='fr') }}</strong></p>
            {% endif %}
            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Catégorie : <span
                        class=\"orange-bold-span\"> {{ trick.categorie | capitalize }}</span></p>
        </div>
        {#   SECTION COMMENTAIRE #}
        <div class=\"section-trick-commentarys col-10\">
            <h4>Espace commentaires</h4>
            {% if app.user %}
                <div class=\"bloc-form-commentary col-12\">
                    <form class=\"commentary-form\" action=\"#\" method=\"post\">
                        <label class=\"label-commentary\" for=\"comment\">Ajoutez votre commentaire</label>
                        <textarea class=\"col-12\" name=\"comment\" id=\"comment\" rows=\"5\"></textarea>

                        <div class=\"mb-3\">
                            <button class=\"btn btn-primary\" type=\"submit\">Valider</button>
                        </div>
                    </form>
                </div>
            {% endif %}
            {% if not app.user %}
                <div class=\"section-message-connect-commentary\">
                    <p class=\"message-connect-commentary\"> Pour laisser un commentaire veuillez vous <a href=\"/login\">identifier</a>
                        ou <a href=\"/register\">créer un compte </a> !!</p>
                </div>
            {% endif %}
            <div class=\"bloc-commentary\">
                <div class=\"float-picture\"
                     style=\"background-image: url('/uploads/userPicture/userPicture1.png')\">
                </div>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                    impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand
                    un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de
                    polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la
                    bureautique informatique, sans que son contenu n'en soit modifié.</p>
                <h5>Réponse publiée par : <span class=\"span-author\">Carlito</span></h5>
            </div>
            <div class=\"bloc-commentary\">
                <div class=\"float-picture\"
                     style=\"background-image: url('/uploads/userPicture/userPicture1.png')\">
                </div>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                    impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand
                    un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de
                    polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la
                    bureautique informatique, sans que son contenu n'en soit modifié.</p>
                <h5>Réponse publiée par : <span class=\"span-author\">Carlito</span></h5>

            </div>
        </div>
        <div class=\"return-list\">
            <a href=\"{{ path('app_tricks_index') }}\">Retour à la liste des figures</a>
        </div>
        {% if app.user %}
            <a href=\"{{ path('app_tricks_edit', {'id': trick.id}) }}\">Modifier la figure</a>
            {{ include('tricks/_delete_form.html.twig') }}
        {% endif %}
    </div>
{% endblock %}
", "tricks/show.html.twig", "C:\\wamp64\\www\\SnowTricks\\templates\\tricks\\show.html.twig");
    }
}
