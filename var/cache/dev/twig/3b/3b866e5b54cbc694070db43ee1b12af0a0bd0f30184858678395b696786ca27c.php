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
        // line 10
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "isVerified", [], "any", false, false, false, 10), 1)))) {
            // line 11
            echo "                    <div class=\"bloc-icon-poster\">
                        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\"><img
                                    class=\"icon-card-show-details\" alt=\"btn-edit\" title=\"éditer un trick\"
                                    src=\"/img/icons/edit.png\"></a>
                        ";
            // line 15
            echo twig_include($this->env, $context, "tricks/_delete_form_show.html.twig");
            echo "
                    </div>
                ";
        }
        // line 18
        echo "                <div class=\"title-poster \">
                    <h1>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
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
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 32, $this->source); })()), "poster", [], "any", false, false, false, 32), "html", null, true);
        echo "')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                    <div class=\"card-trick-details\">
                        <div id=\"img-card-details\"
                             style=\"background-image: url('/uploads/poster/";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 47, $this->source); })()), "poster", [], "any", false, false, false, 47), "html", null, true);
        echo "')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                    <div class=\"card-trick-details\">
                        <div id=\"img-card-details\"
                             style=\"background-image: url('/uploads/poster/";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 62, $this->source); })()), "poster", [], "any", false, false, false, 62), "html", null, true);
        echo "')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
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
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
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
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
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
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)]), "html", null, true);
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
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 134, $this->source); })()), "description", [], "any", false, false, false, 134), "html", null, true);
        echo "</p>
        </div>
        <div class=\"bloc-info-details-tricks\">
            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">créé le
                : ";
        // line 138
        ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 138, $this->source); })()), "createdAt", [], "any", false, false, false, 138)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 138, $this->source); })()), "createdAt", [], "any", false, false, false, 138), "medium", "medium", "dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true))) : (print ("")));
        echo " par <span
                        class=\"orange-bold-span\">";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
        echo "</span></p>
            ";
        // line 140
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 140, $this->source); })()), "modifiedAT", [], "any", false, false, false, 140))) {
            // line 141
            echo "                <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Aucune modification n'a été effectuée</p>
            ";
        }
        // line 143
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 143, $this->source); })()), "modifiedAT", [], "any", false, false, false, 143))) {
            // line 144
            echo "                <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Dernière modification le
                    : <strong>";
            // line 145
            ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 145, $this->source); })()), "modifiedAt", [], "any", false, false, false, 145)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 145, $this->source); })()), "modifiedAt", [], "any", false, false, false, 145), "medium", "medium", "", null, "gregorian", "fr"), "html", null, true))) : (print ("")));
            echo "</strong></p>
            ";
        }
        // line 147
        echo "            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Catégorie : <span
                        class=\"orange-bold-span\"> ";
        // line 148
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 148, $this->source); })()), "categorie", [], "any", false, false, false, 148)), "html", null, true);
        echo "</span></p>
        </div>
        ";
        // line 151
        echo "        <div class=\"section-trick-commentarys col-10\">
            <h4>Espace commentaires</h4>
            ";
        // line 153
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153)) {
            // line 154
            echo "                <div class=\"bloc-form-commentary col-12\">
                    ";
            // line 155
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCommentary"]) || array_key_exists("formCommentary", $context) ? $context["formCommentary"] : (function () { throw new RuntimeError('Variable "formCommentary" does not exist.', 155, $this->source); })()), 'form_start');
            echo "
                    <div class=\"content-commentary\">";
            // line 156
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formCommentary"]) || array_key_exists("formCommentary", $context) ? $context["formCommentary"] : (function () { throw new RuntimeError('Variable "formCommentary" does not exist.', 156, $this->source); })()), 'widget');
            echo "</div>
                    <button class=\"btn btn-success\">";
            // line 157
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 157, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
            echo "</button>
                    ";
            // line 158
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCommentary"]) || array_key_exists("formCommentary", $context) ? $context["formCommentary"] : (function () { throw new RuntimeError('Variable "formCommentary" does not exist.', 158, $this->source); })()), 'form_end');
            echo "
                </div>
            ";
        }
        // line 161
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "user", [], "any", false, false, false, 161)) {
            // line 162
            echo "                <div class=\"section-message-connect-commentary\">
                    <p class=\"message-connect-commentary\"> Pour laisser un commentaire veuillez vous <a href=\"/login\">identifier</a>
                        ou <a href=\"/register\">créer un compte </a> !!</p>
                </div>
            ";
        }
        // line 167
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 167, $this->source); })()), "commentarys", [], "any", false, false, false, 167), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 167, $this->source); })()), "createdAt", [], "any", false, false, false, 167) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 167, $this->source); })()), "createdAt", [], "any", false, false, false, 167)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["commentary"]) {
            // line 168
            echo "                <div class=\"bloc-commentary\">
                    ";
            // line 169
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentary"], "user", [], "any", false, false, false, 169), "picture", [], "any", false, false, false, 169))) {
                // line 170
                echo "                        <div class=\"float-picture\"
                             style=\"background-image: url('/uploads/userPicture/defaut_user_picture.png')\">
                        </div>
                    ";
            } else {
                // line 174
                echo "                        <div class=\"float-picture\"
                             style=\"background-image: url('/uploads/userPicture/";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentary"], "user", [], "any", false, false, false, 175), "picture", [], "any", false, false, false, 175), "html", null, true);
                echo "')\">
                        </div>
                    ";
            }
            // line 178
            echo "
                    <p>";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentary"], "content", [], "any", false, false, false, 179), "html", null, true);
            echo "</p>
                    <h5>Réponse publiée par : <span class=\"span-author\">";
            // line 180
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentary"], "user", [], "any", false, false, false, 180), "name", [], "any", false, false, false, 180)), "html", null, true);
            echo "</span>
                    </h5>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentary'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "        </div>

        ";
        // line 186
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "user", [], "any", false, false, false, 186)) {
            // line 187
            echo "            <a class=\"btn btn-primary link-modify-trick\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 187, $this->source); })()), "id", [], "any", false, false, false, 187)]), "html", null, true);
            echo "\">Modifier la figure</a>
        ";
        }
        // line 189
        echo "        <div class=\"return-list\">
            <a href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_index");
        echo "\">Retour à la liste des figures</a>
        </div>
    </div>
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
        return array (  415 => 190,  412 => 189,  406 => 187,  404 => 186,  400 => 184,  390 => 180,  386 => 179,  383 => 178,  377 => 175,  374 => 174,  368 => 170,  366 => 169,  363 => 168,  358 => 167,  351 => 162,  348 => 161,  342 => 158,  338 => 157,  334 => 156,  330 => 155,  327 => 154,  325 => 153,  321 => 151,  316 => 148,  313 => 147,  308 => 145,  305 => 144,  302 => 143,  298 => 141,  296 => 140,  292 => 139,  288 => 138,  281 => 134,  265 => 121,  257 => 116,  242 => 104,  234 => 99,  219 => 87,  211 => 82,  195 => 69,  187 => 64,  182 => 62,  171 => 54,  163 => 49,  158 => 47,  147 => 39,  139 => 34,  134 => 32,  118 => 19,  115 => 18,  109 => 15,  103 => 12,  100 => 11,  98 => 10,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SnowTricks | {{ trick.name }}{% endblock %}

{% block body %}
    <div class=\"bloc-details-tricks\">
        <div class=\"bloc-title-details-tricks\">
            <div class=\"poster col-12\" style=\"background-image: url('/uploads/poster/{{ trick.poster }}') \">

                {% if app.user and app.user.isVerified == 1 %}
                    <div class=\"bloc-icon-poster\">
                        <a href=\"{{ path('app_trick_edit', {'id': trick.id}) }}\"><img
                                    class=\"icon-card-show-details\" alt=\"btn-edit\" title=\"éditer un trick\"
                                    src=\"/img/icons/edit.png\"></a>
                        {{ include('tricks/_delete_form_show.html.twig') }}
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
                            <a href=\"{{ path('app_trick_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_trick_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                    <div class=\"card-trick-details\">
                        <div id=\"img-card-details\"
                             style=\"background-image: url('/uploads/poster/{{ trick.poster }}')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"{{ path('app_trick_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_trick_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>
                        </div>
                    </div>
                    <div class=\"card-trick-details\">
                        <div id=\"img-card-details\"
                             style=\"background-image: url('/uploads/poster/{{ trick.poster }}')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"{{ path('app_trick_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_trick_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
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
                            <a href=\"{{ path('app_trick_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_trick_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
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
                            <a href=\"{{ path('app_trick_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_trick_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
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
                            <a href=\"{{ path('app_trick_edit', {'id': trick.id}) }}\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"{{ path('app_trick_delete', {'id': trick.id}) }}\" target=\"_blank\"><img
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
                    {{ form_start(formCommentary) }}
                    <div class=\"content-commentary\">{{ form_widget(formCommentary) }}</div>
                    <button class=\"btn btn-success\">{{ button_label|default('Envoyer') }}</button>
                    {{ form_end(formCommentary) }}
                </div>
            {% endif %}
            {% if not app.user %}
                <div class=\"section-message-connect-commentary\">
                    <p class=\"message-connect-commentary\"> Pour laisser un commentaire veuillez vous <a href=\"/login\">identifier</a>
                        ou <a href=\"/register\">créer un compte </a> !!</p>
                </div>
            {% endif %}
            {% for commentary in trick.commentarys | sort((a, b) => b.createdAt <=> a.createdAt) %}
                <div class=\"bloc-commentary\">
                    {% if commentary.user.picture is empty %}
                        <div class=\"float-picture\"
                             style=\"background-image: url('/uploads/userPicture/defaut_user_picture.png')\">
                        </div>
                    {% else %}
                        <div class=\"float-picture\"
                             style=\"background-image: url('/uploads/userPicture/{{ commentary.user.picture }}')\">
                        </div>
                    {% endif %}

                    <p>{{ commentary.content }}</p>
                    <h5>Réponse publiée par : <span class=\"span-author\">{{ commentary.user.name | capitalize }}</span>
                    </h5>
                </div>
            {% endfor %}
        </div>

        {% if app.user %}
            <a class=\"btn btn-primary link-modify-trick\" href=\"{{ path('app_trick_edit', {'id': trick.id}) }}\">Modifier la figure</a>
        {% endif %}
        <div class=\"return-list\">
            <a href=\"{{ path('app_trick_index') }}\">Retour à la liste des figures</a>
        </div>
    </div>
{% endblock %}
", "tricks/show.html.twig", "C:\\wamp64\\www\\SnowTricks\\templates\\tricks\\show.html.twig");
    }
}
