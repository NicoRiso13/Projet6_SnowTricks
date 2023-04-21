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
class __TwigTemplate_60c78117ab33a771616d2f50fd5414f2827ffe37008633375c340936967f7317 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                    <li class=\"nav-footer-link-logout\">
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
                ";
        // line 66
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) {
            // line 67
            echo "                    <li class=\"nav-footer-link-login\">
                        <a class=\"nav-link \" href=\"/login\">Se connecter/S'inscrire</a>
                    </li>
                ";
        }
        // line 71
        echo "
                <li class=\"nav-footer-link\">
                    <a class=\"nav-link \" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_index");
        echo "\">Les Tricks</a>
                </li>
                ";
        // line 75
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 76
            echo "                    <li class=\"nav-footer-link\">
                        <a class=\"nav-link link-admin \" href=\"/admin-manager\">Administration</a>
                    </li>
                ";
        }
        // line 80
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Template";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  213 => 28,  203 => 27,  184 => 7,  152 => 80,  146 => 76,  144 => 75,  139 => 73,  135 => 71,  129 => 67,  127 => 66,  120 => 61,  114 => 58,  111 => 57,  109 => 56,  81 => 30,  79 => 27,  69 => 20,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Template{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
    <link rel=\"manifest\" href=\"/site.webmanifest\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/style.css\">
    <link rel=\"icon\" href=\"/favicon.ico\">

</head>


<body class=\"container-fluid body-contain\">

<header class=\"container-fluid header-contain\">
    {{ include('elements/nav.twig') }}
</header>


<main class=\"main-content\">


    {% block body %}

    {% endblock %}

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
                {% if app.user %}
                    <li class=\"nav-footer-link-logout\">
                        <a class=\"nav-link logout\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                    </li>
                {% endif %}


                <li class=\"nav-footer-link\">
                    <a class=\"nav-link active\" href=\"/\">Accueil</a>
                </li>
                {% if not app.user %}
                    <li class=\"nav-footer-link-login\">
                        <a class=\"nav-link \" href=\"/login\">Se connecter/S'inscrire</a>
                    </li>
                {% endif %}

                <li class=\"nav-footer-link\">
                    <a class=\"nav-link \" href=\"{{ path('app_tricks_index') }}\">Les Tricks</a>
                </li>
                {% if is_granted(\"ROLE_ADMIN\") %}
                    <li class=\"nav-footer-link\">
                        <a class=\"nav-link link-admin \" href=\"/admin-manager\">Administration</a>
                    </li>
                {% endif %}

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

", "base.html.twig", "C:\\wamp64\\www\\SnowTricks\\templates\\base.html.twig");
    }
}
