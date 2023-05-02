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
class __TwigTemplate_8883532711a9766359e6080e4d8ca36a96441f8cf226c87e7718859ee9ed91fc extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Main/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    SnowTricks | Accueil
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"bloc-homepage\">
        <div class=\"bloc-img container-fluid\">
            <div class=\"text-bloc-img \">
                <h1> SnowTricks</h1>
                <h2>Le <strong>snowboard</strong> c’est juste pour le fun... <br>Bienvenue dans l'univers des <strong>Riders</strong> </h2>
            </div>
            <a href=\"#list-tricks\"><img class=\"icon-down\" src=\"/img/icons/down-arrow.png\" alt=\"icon-down\"></a>
        </div>
        <hr class=\"separator-list-homepage\"  id=\"list-tricks\">
        <h3 class=\"title-list-homepage\">Tous les Tricks</h3>
        <h4 class=\"subtitle-list-homepage\">Prenez part à la communauté en ajoutant ou en modifiant des tricks</h4>
        <hr class=\"separator-list-homepage\">


        <div class=\"bloc-list-tricks\" >

            <div class=\"trick-card \">
                <img class=\"img-trick-card\" src=\"/img/default-img.jpg\" alt=\"img-trick-card\">
                <div class=\"footer-trick-card\">
                    <div class=\"col-6 title-card\">
                        <a href=\"#\" target=\"_blank\"><h5>Trick name</h5></a>
                    </div>
                    <div class=\"col-5 bloc-btn-footer-card\">
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                                         src=\"/img/icons/edit.png\"></a>
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-delete\" title=\"supprimer un trick\"
                                                         src=\"/img/icons/delete.png\"></a>
                    </div>
                </div>
            </div>

            <div class=\"trick-card \">
                <img class=\"img-trick-card\" src=\"/img/default-img.jpg\" alt=\"img-trick-card\">
                <div class=\"footer-trick-card\">
                    <div class=\"col-6 title-card\">
                        <a href=\"#\" target=\"_blank\"><h5>Trick name</h5></a>
                    </div>
                    <div class=\"col-5 bloc-btn-footer-card\">
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                                         src=\"/img/icons/edit.png\"></a>
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-delete\" title=\"supprimer un trick\"
                                                         src=\"/img/icons/delete.png\"></a>
                    </div>
                </div>
            </div>

            <div class=\"trick-card \">
                <img class=\"img-trick-card\" src=\"/img/default-img.jpg\" alt=\"img-trick-card\">
                <div class=\"footer-trick-card\">
                    <div class=\"col-6 title-card\">
                        <a href=\"#\" target=\"_blank\"><h5>Trick name</h5></a>
                    </div>
                    <div class=\"col-5 bloc-btn-footer-card\">
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                                         src=\"/img/icons/edit.png\"></a>
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-delete\" title=\"supprimer un trick\"
                                                         src=\"/img/icons/delete.png\"></a>
                    </div>
                </div>
            </div>

            <div class=\"trick-card \">
                <img class=\"img-trick-card\" src=\"/img/default-img.jpg\" alt=\"img-trick-card\">
                <div class=\"footer-trick-card\">
                    <div class=\"col-6 title-card\">
                        <a href=\"#\" target=\"_blank\"><h5>Trick name</h5></a>
                    </div>
                    <div class=\"col-5 bloc-btn-footer-card\">
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                                         src=\"/img/icons/edit.png\"></a>
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-delete\" title=\"supprimer un trick\"
                                                         src=\"/img/icons/delete.png\"></a>
                    </div>
                </div>
            </div>

            <div class=\"trick-card \">
                <img class=\"img-trick-card\" src=\"/img/default-img.jpg\" alt=\"img-trick-card\">
                <div class=\"footer-trick-card\">
                    <div class=\"col-6 title-card\">
                        <a href=\"#\" target=\"_blank\"><h5>Trick name</h5></a>
                    </div>
                    <div class=\"col-5 bloc-btn-footer-card\">
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                                         src=\"/img/icons/edit.png\"></a>
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-delete\" title=\"supprimer un trick\"
                                                         src=\"/img/icons/delete.png\"></a>
                    </div>
                </div>
            </div>

            <div class=\"trick-card \">
                <img class=\"img-trick-card\" src=\"/img/default-img.jpg\" alt=\"img-trick-card\">
                <div class=\"footer-trick-card\">
                    <div class=\"col-6 title-card\">
                        <a href=\"#\" target=\"_blank\"><h5>Trick name</h5></a>
                    </div>
                    <div class=\"col-5 bloc-btn-footer-card\">
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                                         src=\"/img/icons/edit.png\"></a>
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-delete\" title=\"supprimer un trick\"
                                                         src=\"/img/icons/delete.png\"></a>
                    </div>
                </div>
            </div>

            <div class=\"trick-card \">
                <img class=\"img-trick-card\" src=\"/img/default-img.jpg\" alt=\"img-trick-card\">
                <div class=\"footer-trick-card\">
                    <div class=\"col-6 title-card\">
                        <a href=\"#\" target=\"_blank\"><h5>Trick name</h5></a>
                    </div>
                    <div class=\"col-5 bloc-btn-footer-card\">
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                                         src=\"/img/icons/edit.png\"></a>
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-delete\" title=\"supprimer un trick\"
                                                         src=\"/img/icons/delete.png\"></a>
                    </div>
                </div>
            </div>

            <div class=\"trick-card \">
                <img class=\"img-trick-card\" src=\"/img/default-img.jpg\" alt=\"img-trick-card\">
                <div class=\"footer-trick-card\">
                    <div class=\"col-6 title-card\">
                        <a href=\"#\" target=\"_blank\"><h5>Trick name</h5></a>
                    </div>
                    <div class=\"col-5 bloc-btn-footer-card\">
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                                         src=\"/img/icons/edit.png\"></a>
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-delete\" title=\"supprimer un trick\"
                                                         src=\"/img/icons/delete.png\"></a>
                    </div>
                </div>
            </div>

            <div class=\"trick-card \">
                <img class=\"img-trick-card\" src=\"/img/default-img.jpg\" alt=\"img-trick-card\">
                <div class=\"footer-trick-card\">
                    <div class=\"col-6 title-card\">
                        <a href=\"#\" target=\"_blank\"><h5>Trick name</h5></a>
                    </div>
                    <div class=\"col-5 bloc-btn-footer-card\">
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                                         src=\"/img/icons/edit.png\"></a>
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-delete\" title=\"supprimer un trick\"
                                                         src=\"/img/icons/delete.png\"></a>
                    </div>
                </div>
            </div>

            <div class=\"trick-card \">
                <img class=\"img-trick-card\" src=\"/img/default-img.jpg\" alt=\"img-trick-card\">
                <div class=\"footer-trick-card\">
                    <div class=\"col-6 title-card\">
                        <a href=\"#\" target=\"_blank\"><h5>Trick name</h5></a>
                    </div>
                    <div class=\"col-5 bloc-btn-footer-card\">
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                                         src=\"/img/icons/edit.png\"></a>
                        <a href=\"#\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-delete\" title=\"supprimer un trick\"
                                                         src=\"/img/icons/delete.png\"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

";
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
        return array (  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/home.html.twig", "C:\\wamp64\\www\\SnowTricks\\templates\\Main\\home.html.twig");
    }
}
