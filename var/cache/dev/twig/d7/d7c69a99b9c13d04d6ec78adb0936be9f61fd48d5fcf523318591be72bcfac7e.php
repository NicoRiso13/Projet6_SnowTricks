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

/* tricks/index.html.twig */
class __TwigTemplate_9b33b0a2b8efcf56688ef460c112f794e6e58276402f42cb725196ee1781fa78 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tricks/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tricks/index.html.twig", 1);
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

        echo "Tricks index";
        
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
        echo "    <div class=\"p-5\">
        <h1>Tricks index</h1>

        <table class=\"p-5\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Categorie</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 20
            echo "                <tr class=\"bloc-index-tricks\">
                    <td class=\"col-2 p-2 back-grey\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                    <td class=\"col-8 p-2 index-description\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["trick"], "description", [], "any", false, false, false, 22)), "truncate", [0 => 250, 1 => "..."], "method", false, false, false, 22), "html", null, true);
            echo "</td>
                    <td class=\"col-1 p-2 back-grey\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "categorie", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td class=\"col-1 p-2\">
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_show", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"voir le details\"
                                                                                                       src=\"/img/icons/show.png\"></a>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                                                                                       src=\"/img/icons/edit.png\"></a>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-delete\"
                                                                                                         title=\"supprimer un trick\"
                                                                                                         src=\"/img/icons/delete.png\"></a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                <tr>
                    <td colspan=\"10\">Aucun résultat trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks_new");
        echo "\">Create new</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tricks/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 42,  154 => 39,  145 => 35,  134 => 29,  129 => 27,  124 => 25,  119 => 23,  115 => 22,  111 => 21,  108 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tricks index{% endblock %}

{% block body %}
    <div class=\"p-5\">
        <h1>Tricks index</h1>

        <table class=\"p-5\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Categorie</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            {% for trick in tricks %}
                <tr class=\"bloc-index-tricks\">
                    <td class=\"col-2 p-2 back-grey\">{{ trick.name }}</td>
                    <td class=\"col-8 p-2 index-description\">{{ trick.description | u.truncate (250,\"...\") }}</td>
                    <td class=\"col-1 p-2 back-grey\">{{ trick.categorie }}</td>
                    <td class=\"col-1 p-2\">
                        <a href=\"{{ path('app_tricks_show', {'id': trick.id}) }}\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"voir le details\"
                                                                                                       src=\"/img/icons/show.png\"></a>
                        <a href=\"{{ path('app_tricks_edit', {'id': trick.id}) }}\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-edit\" title=\"éditer un trick\"
                                                                                                       src=\"/img/icons/edit.png\"></a>
                        <a href=\"{{ path('app_tricks_delete', {'id': trick.id}) }}\" target=\"_blank\"><img class=\"icon-card\" alt=\"btn-delete\"
                                                                                                         title=\"supprimer un trick\"
                                                                                                         src=\"/img/icons/delete.png\"></a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"10\">Aucun résultat trouvé</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_tricks_new') }}\">Create new</a>
    </div>
{% endblock %}
", "tricks/index.html.twig", "C:\\wamp64\\www\\SnowTricks\\templates\\tricks\\index.html.twig");
    }
}
