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
class __TwigTemplate_bdd01bc7e81d7851434a9ecb792dd5606c018227e3a36e6f6dea9b3f04b8364b extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "                <div class=\"bloc-connected\">
                    <img class=\"icon-Connect\" src=\"/img/icons/iconConnect.png\" alt=\"iconConnect\">
                    <p class=\"connected\">Connecté avec le compte :<span
                                class=\"user-email\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17), "userIdentifier", [], "any", false, false, false, 17), "html", null, true);
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "                    <li class=\"nav-item active\">
                        <a class=\"nav-link nav-link-active\" title=\"login\" href=\"/login\">Se connecter/S'inscrire</a>
                    </li>
                ";
        }
        // line 44
        echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link-active\" href=\"/#list-tricks\">Les tricks</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/contact\">Contact</a>
                </li>
                ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 53
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/admin-manager\">Administration</a>
                    </li>
                ";
        }
        // line 57
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 57)) {
            // line 58
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"/logout\">Se déconnecter</a>
                    </li>
                ";
        }
        // line 62
        echo "

            </ul>
        </div>

    </div>
</nav>
";
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
        return array (  120 => 62,  114 => 58,  111 => 57,  105 => 53,  103 => 52,  93 => 44,  87 => 40,  85 => 39,  66 => 22,  58 => 17,  53 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/nav.twig", "C:\\wamp64\\www\\SnowTricks\\templates\\elements\\nav.twig");
    }
}
