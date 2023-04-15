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

/* base.html.twig */
class __TwigTemplate_a70ed9eb76f6cc3d3443e8dcdb53e1d844611c8f5fee17678d7b31a92aa5ca54 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
    <link rel=\"manifest\" href=\"/site.webmanifest\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/style.css\">
    <link rel=\"icon\" href=\"/favicon.ico\">

</head>


<body class=\"container-fluid body-contain\">

<header class=\"container-fluid header-contain\">
    ";
        // line 20
        echo twig_include($this->env, $context, "elements/nav.twig");
        echo "
</header>


<main class=\"main-content\">


    ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "
</main>


<footer class=\"footer-content\">

    <div class=\"bloc-footer\">
        <div class=\"right-bloc-picto\">
            <div class=\"bloc-picto\">
                <a href=\"https://fr-fr.facebook.com/\" target=\"_blank\"><img class=\"picto\" alt=\"logo-facebook\"
                                                                           src=\"/img/facebook.svg\"></a>
                <a href=\"https://www.instagram.com/\" target=\"_blank\"><img class=\"picto\" alt=\"logo-facebook\"
                                                                          src=\"/img/instagram.svg\"></a>
                <a href=\"https://twitter.com/\" target=\"_blank\"><img class=\"picto\" alt=\"logo-facebook\"
                                                                    src=\"/img/twitter.svg\"></a>
            </div>
            <div class=\"join-us\">
                <hr class=\"separator-join-us-up\">
                <p>Rejoingez-Nous</p>
                <hr class=\"separator-join-us\">
            </div>
        </div>

        <div class=\" link-footer \">

            <ul>
                ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                <li class=\"nav-footer-link-logout\">
                    <a class=\"nav-link logout\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
                </li>
                ";
        }
        // line 61
        echo "

                <li class=\"nav-footer-link\">
                    <a class=\"nav-link active\" href=\"/\">Accueil</a>
                </li>

                <li class=\"nav-footer-link-login\">
                    <a class=\"nav-link \" href=\"/login\">Se connecter/S'inscrire</a>
                </li>

                <li class=\"nav-footer-link\">
                    <a class=\"nav-link \" href=\"/#list-tricks\">Les Tricks</a>
                </li>
                ";
        // line 74
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 75
            echo "                    <li class=\"nav-footer-link\">
                        <a class=\"nav-link link-admin \" href=\"/admin-manager\">Administration</a>
                    </li>
                ";
        }
        // line 79
        echo "
                <li class=\"nav-footer-link\">
                    <a class=\"nav-link \" href=\"#\">▲ Haut de page ▲</a>
                </li>
            </ul>
        </div>


    </div>
    <div class=\"copyright\">
        <p class=\"copyright\"> &copy; SnowTricks | 2022-2023</p>
    </div>
</footer>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\"
        crossorigin=\"anonymous\"></script>
</body>


</html>

";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Template";
    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 28,  170 => 27,  163 => 7,  137 => 79,  131 => 75,  129 => 74,  114 => 61,  108 => 58,  105 => 57,  103 => 56,  75 => 30,  73 => 27,  63 => 20,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\SnowTricks\\templates\\base.html.twig");
    }
}
