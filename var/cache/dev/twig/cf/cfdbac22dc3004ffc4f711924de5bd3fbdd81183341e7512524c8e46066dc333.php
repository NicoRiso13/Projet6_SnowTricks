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

/* elements/nav.twig */
class __TwigTemplate_f5eed20d0ef39fe1a19c6a9397ae2635beeef62f1056f96ee274f618e9033283 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/nav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/nav.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg bloc-nav\" data-bs-theme=\"dark\">
    <div class=\"bloc-nav-1 container-fluid\" id=\"bloc-nav-1\">
        <div class=\"bloc-logo-text col-6\">
            <a class=\"navbar-brand\" href=\"/\"><img alt=\"iconBlog\" class=\"logo-navbar\" src=\"/img/logo_snowTricks.png\"></a>
            <div class=\"title-nav\">
                <h4> SnowTricks</h4>
                <h6>Le site de freestyle N°1 en Europe</h6>
            </div>

        </div>

        <div class=\"bloc-user-connected \">
            ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "                <div class=\"bloc-connected\">
                    <img class=\"icon-Connect\" src=\"/img/icons/iconConnect.png\" alt=\"iconConnect\">
                    <p class=\"connected\">Connecté avec le compte :<span
                                class=\"user-email\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "userIdentifier", [], "any", false, false, false, 17), "html", null, true);
            echo "</span></p>
                    <p class=\"connected-pseudo\"></p>

                </div>
            ";
        }
        // line 22
        echo "

        </div>
    </div>
    <div class=\"bloc-link\">

        <button class=\"navbar-toggler btn-navbar\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon btn-line\"></span>
        </button>
        <div class=\" collapse navbar-collapse background-link col-6 \" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mb-2 mb-lg-0 \" id=\"nav\">

                <li class=\"nav-item\" id=\"hover-nav\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Accueil</a>
                </li>
                ";
        // line 39
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "                    <li class=\"nav-item active\">
                        <a class=\"nav-link nav-link-active\" title=\"login\" href=\"/login\">Se connecter/S'inscrire</a>
                    </li>
                ";
        }
        // line 44
        echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link-active\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_index");
        echo "\">Les tricks</a>
                </li>
                ";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 49
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/admin-manager\">Administration</a>
                    </li>
                ";
        }
        // line 53
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"/logout\">Se déconnecter</a>
                    </li>
                ";
        }
        // line 58
        echo "

            </ul>
        </div>

    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "elements/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 58,  119 => 54,  116 => 53,  110 => 49,  108 => 48,  103 => 46,  99 => 44,  93 => 40,  91 => 39,  72 => 22,  64 => 17,  59 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bloc-nav\" data-bs-theme=\"dark\">
    <div class=\"bloc-nav-1 container-fluid\" id=\"bloc-nav-1\">
        <div class=\"bloc-logo-text col-6\">
            <a class=\"navbar-brand\" href=\"/\"><img alt=\"iconBlog\" class=\"logo-navbar\" src=\"/img/logo_snowTricks.png\"></a>
            <div class=\"title-nav\">
                <h4> SnowTricks</h4>
                <h6>Le site de freestyle N°1 en Europe</h6>
            </div>

        </div>

        <div class=\"bloc-user-connected \">
            {% if app.user %}
                <div class=\"bloc-connected\">
                    <img class=\"icon-Connect\" src=\"/img/icons/iconConnect.png\" alt=\"iconConnect\">
                    <p class=\"connected\">Connecté avec le compte :<span
                                class=\"user-email\">{{ app.user.userIdentifier }}</span></p>
                    <p class=\"connected-pseudo\"></p>

                </div>
            {% endif %}


        </div>
    </div>
    <div class=\"bloc-link\">

        <button class=\"navbar-toggler btn-navbar\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon btn-line\"></span>
        </button>
        <div class=\" collapse navbar-collapse background-link col-6 \" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mb-2 mb-lg-0 \" id=\"nav\">

                <li class=\"nav-item\" id=\"hover-nav\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Accueil</a>
                </li>
                {% if not app.user %}
                    <li class=\"nav-item active\">
                        <a class=\"nav-link nav-link-active\" title=\"login\" href=\"/login\">Se connecter/S'inscrire</a>
                    </li>
                {% endif %}

                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link-active\" href=\"{{ path('app_tricks_index') }}\">Les tricks</a>
                </li>
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/admin-manager\">Administration</a>
                    </li>
                {% endif %}
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"/logout\">Se déconnecter</a>
                    </li>
                {% endif %}


            </ul>
        </div>

    </div>
</nav>
", "elements/nav.twig", "C:\\wamp64\\www\\SnowTricks\\templates\\elements\\nav.twig");
    }
}
