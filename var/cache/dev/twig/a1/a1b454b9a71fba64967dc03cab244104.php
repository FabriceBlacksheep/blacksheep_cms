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

/* campervan/show.html.twig */
class __TwigTemplate_1dbcca0f70c3ced655d81488aafe2367 extends Template
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
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campervan/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campervan/show.html.twig"));

        $this->parent = $this->loadTemplate("page.html.twig", "campervan/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Campervan";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container bg-white mt-4 p-4\">

    <h4>Campervan</h4>

    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campervan_index");
        echo "\">Retour</a>
        ";
        // line 12
        echo twig_include($this->env, $context, "campervan/_delete_form.html.twig");
        echo "
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campervan"]) || array_key_exists("campervan", $context) ? $context["campervan"] : (function () { throw new RuntimeError('Variable "campervan" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campervan"]) || array_key_exists("campervan", $context) ? $context["campervan"] : (function () { throw new RuntimeError('Variable "campervan" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modele</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campervan"]) || array_key_exists("campervan", $context) ? $context["campervan"] : (function () { throw new RuntimeError('Variable "campervan" does not exist.', 25, $this->source); })()), "modele", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 29
        echo twig_get_attribute($this->env, $this->source, (isset($context["campervan"]) || array_key_exists("campervan", $context) ? $context["campervan"] : (function () { throw new RuntimeError('Variable "campervan" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29);
        echo "</td>
            </tr>
            <tr>
                <th>Options</th>
                <td>";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["campervan"]) || array_key_exists("campervan", $context) ? $context["campervan"] : (function () { throw new RuntimeError('Variable "campervan" does not exist.', 33, $this->source); })()), "options", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["campervan"]) || array_key_exists("campervan", $context) ? $context["campervan"] : (function () { throw new RuntimeError('Variable "campervan" does not exist.', 33, $this->source); })()), "options", [], "any", false, false, false, 33), ", "), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>VisiteVirtuelle</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campervan"]) || array_key_exists("campervan", $context) ? $context["campervan"] : (function () { throw new RuntimeError('Variable "campervan" does not exist.', 37, $this->source); })()), "visiteVirtuelle", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Visuel</th>
                <td><img src=\"/upload/";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campervan"]) || array_key_exists("campervan", $context) ? $context["campervan"] : (function () { throw new RuntimeError('Variable "campervan" does not exist.', 41, $this->source); })()), "visuel", [], "any", false, false, false, 41), "html", null, true);
        echo "\" width=\"200px\"></td>
            </tr>
            <tr>
                <th>LienDescriptif</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campervan"]) || array_key_exists("campervan", $context) ? $context["campervan"] : (function () { throw new RuntimeError('Variable "campervan" does not exist.', 45, $this->source); })()), "lienDescriptif", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>


    <a class=\"btn btn-sm btn-success\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campervan_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["campervan"]) || array_key_exists("campervan", $context) ? $context["campervan"] : (function () { throw new RuntimeError('Variable "campervan" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\">Modifier</a>



</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "campervan/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 51,  156 => 45,  149 => 41,  142 => 37,  135 => 33,  128 => 29,  121 => 25,  114 => 21,  107 => 17,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'page.html.twig' %}

{% block title %}Campervan{% endblock %}

{% block body %}

<div class=\"container bg-white mt-4 p-4\">

    <h4>Campervan</h4>

    <a class=\"btn btn-sm btn-secondary\" href=\"{{ path('app_campervan_index') }}\">Retour</a>
        {{ include('campervan/_delete_form.html.twig') }}
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ campervan.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ campervan.nom }}</td>
            </tr>
            <tr>
                <th>Modele</th>
                <td>{{ campervan.modele }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ campervan.description|raw }}</td>
            </tr>
            <tr>
                <th>Options</th>
                <td>{{ campervan.options ? campervan.options|join(', ') : '' }}</td>
            </tr>
            <tr>
                <th>VisiteVirtuelle</th>
                <td>{{ campervan.visiteVirtuelle }}</td>
            </tr>
            <tr>
                <th>Visuel</th>
                <td><img src=\"/upload/{{ campervan.visuel }}\" width=\"200px\"></td>
            </tr>
            <tr>
                <th>LienDescriptif</th>
                <td>{{ campervan.lienDescriptif }}</td>
            </tr>
        </tbody>
    </table>


    <a class=\"btn btn-sm btn-success\" href=\"{{ path('app_campervan_edit', {'id': campervan.id}) }}\">Modifier</a>



</div>
{% endblock %}
", "campervan/show.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\campervan\\show.html.twig");
    }
}
