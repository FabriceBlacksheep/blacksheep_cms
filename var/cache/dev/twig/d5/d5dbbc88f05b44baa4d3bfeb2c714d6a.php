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

/* campervan/index.html.twig */
class __TwigTemplate_8c8aac41961b536edfd46931ccbe826e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campervan/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "campervan/index.html.twig"));

        $this->parent = $this->loadTemplate("page.html.twig", "campervan/index.html.twig", 1);
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

        echo "Campervan index";
        
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
        echo "<div class=\"container-fluid my-4 py-4 \">
  <div class=\"flex flex-col\">
  <div class=\"overflow-x-auto sm:-mx-6 lg:-mx-8\">
    <div class=\"py-2 inline-block min-w-full sm:px-6 lg:px-8\">
      <div class=\"overflow-hidden\">
<h4>Gestion des Campervans</h4>

   <table class=\"table\">
        <thead>
           <tr class=\"border-b\">
                <th>Id</th>
                <th>IdLocpro</th>
                <th>Nom</th>
                <th>Modele</th>
                <th>Description</th>
                <th>Options</th>
                <th>VisiteVirtuelle</th>
                <th>Visuel</th>
                <th>LienDescriptif</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campervans"]) || array_key_exists("campervans", $context) ? $context["campervans"] : (function () { throw new RuntimeError('Variable "campervans" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["campervan"]) {
            // line 30
            echo "           <tr class=\"border-b\">
                  <td class=\"\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campervan"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                  ";
            // line 33
            echo "                    <td class=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campervan"], "idLocpro", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    ";
            // line 35
            echo "                  <td class=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campervan"], "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                  <td class=\"\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campervan"], "modele", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                  <td class=\" max-w-[50%]\">";
            // line 37
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["campervan"], "description", [], "any", false, false, false, 37)), 0, 50), "html", null, true);
            echo "</td>
                  <td class=\"\">";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["campervan"], "options", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["campervan"], "options", [], "any", false, false, false, 38), ", "), "html", null, true))) : (print ("")));
            echo "</td>
                  <td class=\"\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campervan"], "visiteVirtuelle", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                  <td class=\"\"><img src=\"/upload/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campervan"], "visuel", [], "any", false, false, false, 40), "html", null, true);
            echo "\" width=\"100px\"/></td>
                  <td class=\"\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["campervan"], "lienDescriptif", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                  <td class=\"\">
                    <a class=\"btn btn-success\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campervan_show", ["id" => twig_get_attribute($this->env, $this->source, $context["campervan"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i></a>
                    <a class=\"btn btn-warning\"href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campervan_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["campervan"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\"><i class=\"fa fa-pen\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "         <tr class=\"border-b\">
                <td colspan=\"9\">Aucun Campervan</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campervan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>

    <a class=\"btn btn-secondary\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campervan_new");
        echo "\">Créer</a>
      </div>
    </div>
  </div>
</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "campervan/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 55,  182 => 52,  173 => 48,  164 => 44,  160 => 43,  155 => 41,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  130 => 35,  125 => 33,  121 => 31,  118 => 30,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'page.html.twig' %}

{% block title %}Campervan index{% endblock %}

{% block body %}
<div class=\"container-fluid my-4 py-4 \">
  <div class=\"flex flex-col\">
  <div class=\"overflow-x-auto sm:-mx-6 lg:-mx-8\">
    <div class=\"py-2 inline-block min-w-full sm:px-6 lg:px-8\">
      <div class=\"overflow-hidden\">
<h4>Gestion des Campervans</h4>

   <table class=\"table\">
        <thead>
           <tr class=\"border-b\">
                <th>Id</th>
                <th>IdLocpro</th>
                <th>Nom</th>
                <th>Modele</th>
                <th>Description</th>
                <th>Options</th>
                <th>VisiteVirtuelle</th>
                <th>Visuel</th>
                <th>LienDescriptif</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for campervan in campervans %}
           <tr class=\"border-b\">
                  <td class=\"\">{{ campervan.id }}</td>
                  {# idLocpro #}
                    <td class=\"\">{{ campervan.idLocpro }}</td>
                    {# idLocpro #}
                  <td class=\"\">{{ campervan.nom }}</td>
                  <td class=\"\">{{ campervan.modele }}</td>
                  <td class=\" max-w-[50%]\">{{ campervan.description|striptags|slice(0, 50) }}</td>
                  <td class=\"\">{{ campervan.options ? campervan.options|join(', ') : '' }}</td>
                  <td class=\"\">{{ campervan.visiteVirtuelle }}</td>
                  <td class=\"\"><img src=\"/upload/{{ campervan.visuel }}\" width=\"100px\"/></td>
                  <td class=\"\">{{ campervan.lienDescriptif }}</td>
                  <td class=\"\">
                    <a class=\"btn btn-success\" href=\"{{ path('app_campervan_show', {'id': campervan.id}) }}\"><i class=\"fa fa-eye\"></i></a>
                    <a class=\"btn btn-warning\"href=\"{{ path('app_campervan_edit', {'id': campervan.id}) }}\"><i class=\"fa fa-pen\"></i></a>
                </td>
            </tr>
        {% else %}
         <tr class=\"border-b\">
                <td colspan=\"9\">Aucun Campervan</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-secondary\" href=\"{{ path('app_campervan_new') }}\">Créer</a>
      </div>
    </div>
  </div>
</div>
</div>
{% endblock %}
", "campervan/index.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\campervan\\index.html.twig");
    }
}
