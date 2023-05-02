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
            echo "\"><img
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
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 38, $this->source); })()), "poster", [], "any", false, false, false, 38), "html", null, true);
        echo "')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>

                        </div>
                    </div>


                    <div class=\"card-trick-details\">
                        <div id=\"img-card-details\"
                             style=\"background-image: url('/uploads/poster/";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 56, $this->source); })()), "poster", [], "any", false, false, false, 56), "html", null, true);
        echo "')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\" alt=\"btn-delete\"
                                        title=\"supprimer un trick\"
                                        src=\"/img/icons/delete.png\"></a>

                        </div>
                    </div>


                    <div class=\"card-trick-details\">
                        <div id=\"img-card-details\"
                             style=\"background-image: url('/uploads/poster/";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 74, $this->source); })()), "poster", [], "any", false, false, false, 74), "html", null, true);
        echo "')\"></div>
                        <div class=\"bloc-btn-details-card\">
                            <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)]), "html", null, true);
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
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
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
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119)]), "html", null, true);
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
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 132, $this->source); })()), "id", [], "any", false, false, false, 132)]), "html", null, true);
        echo "\" target=\"_blank\"><img
                                        class=\"icon-card-details\"
                                        alt=\"btn-edit\"
                                        title=\"éditer un trick\"
                                        src=\"/img/icons/edit.png\"></a>
                            <a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137)]), "html", null, true);
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
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 153, $this->source); })()), "description", [], "any", false, false, false, 153), "html", null, true);
        echo "</p>
        </div>
        <div class=\"bloc-info-details-tricks\">
            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">créé le
                : ";
        // line 157
        ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 157, $this->source); })()), "createdAt", [], "any", false, false, false, 157)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 157, $this->source); })()), "createdAt", [], "any", false, false, false, 157), "medium", "medium", "dd MMMM YYYY", null, "gregorian", "fr"), "html", null, true))) : (print ("")));
        echo " par <span
                        class=\"orange-bold-span\">";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "name", [], "any", false, false, false, 158), "html", null, true);
        echo "</span></p>
            ";
        // line 159
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 159, $this->source); })()), "modifiedAT", [], "any", false, false, false, 159))) {
            // line 160
            echo "                <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Aucune modification n'a été effectuée</p>
            ";
        }
        // line 162
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 162, $this->source); })()), "modifiedAT", [], "any", false, false, false, 162))) {
            // line 163
            echo "                <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Dernière modification le
                    : <strong>";
            // line 164
            ((twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 164, $this->source); })()), "modifiedAt", [], "any", false, false, false, 164)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 164, $this->source); })()), "modifiedAt", [], "any", false, false, false, 164), "medium", "medium", "", null, "gregorian", "fr"), "html", null, true))) : (print ("")));
            echo "</strong></p>
            ";
        }
        // line 166
        echo "            <p class=\"info-tricks col-xl-3 col-lg-3 col-sm-3\">Catégorie : <span
                        class=\"orange-bold-span\"> ";
        // line 167
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 167, $this->source); })()), "categorie", [], "any", false, false, false, 167)), "html", null, true);
        echo "</span></p>
        </div>

        ";
        // line 171
        echo "
        <div class=\"section-trick-commentarys col-10\">
            <h4>Espace commentaires</h4>
            ";
        // line 174
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "user", [], "any", false, false, false, 174)) {
            // line 175
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
        // line 186
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "user", [], "any", false, false, false, 186)) {
            // line 187
            echo "                <div class=\"section-message-connect-commentary\">
                    <p class=\"message-connect-commentary\"> Pour laisser un commentaire veuillez vous <a href=\"/login\">identifier</a>
                        ou <a href=\"/register\">créer un compte </a> !!</p>
                </div>
            ";
        }
        // line 192
        echo "
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
            <a href=\"";
        // line 222
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_index");
        echo "\">Retour à la liste des figures</a>
        </div>
        ";
        // line 224
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "user", [], "any", false, false, false, 224)) {
            // line 225
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 225, $this->source); })()), "id", [], "any", false, false, false, 225)]), "html", null, true);
            echo "\">Modifier la figure</a>
            ";
            // line 226
            echo twig_include($this->env, $context, "tricks/_delete_form.html.twig");
            echo "
        ";
        }
        // line 228
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
        return array (  420 => 228,  415 => 226,  410 => 225,  408 => 224,  403 => 222,  371 => 192,  364 => 187,  361 => 186,  348 => 175,  346 => 174,  341 => 171,  335 => 167,  332 => 166,  327 => 164,  324 => 163,  321 => 162,  317 => 160,  315 => 159,  311 => 158,  307 => 157,  300 => 153,  281 => 137,  273 => 132,  257 => 119,  249 => 114,  233 => 101,  225 => 96,  207 => 81,  199 => 76,  194 => 74,  180 => 63,  172 => 58,  167 => 56,  153 => 45,  145 => 40,  140 => 38,  122 => 23,  119 => 22,  110 => 16,  104 => 13,  101 => 12,  99 => 11,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
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