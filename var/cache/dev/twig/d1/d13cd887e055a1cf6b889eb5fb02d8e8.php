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

/* user/index.html.twig */
class __TwigTemplate_9bb028362c97a839fdf6a74baabc3b4f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("page.html.twig", "user/index.html.twig", 1);
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

        echo "User index";
        
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
        echo "<div class=\"container-fluid my-4 py-4 bg-white\">
    <h4>Gestion des utilisateurs</h4>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Roles</th>
                ";
        // line 18
        echo "                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                ";
            // line 27
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                ";
            // line 29
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>

                ";
            // line 32
            echo "
                ";
            // line 34
            echo "                <td>
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 36
                echo "                        ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 37
                    echo "                            <span class=\"badge bg-danger\">";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "</span>
                        ";
                } elseif ((                // line 38
$context["role"] == "ROLE_USER")) {
                    // line 39
                    echo "                            <span class=\"badge bg-dark\">";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "</span>
                        ";
                }
                // line 41
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                </td>

                ";
            // line 45
            echo "
                ";
            // line 47
            echo "                <td>
                    <a class=\"btn btn-success btn-sm\"  href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i> Voir</a>
                    <a class=\"btn btn-warning btn-sm\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"><i class=\"fa fa-pen\"></i> Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"5\">WTF !!! Aucun utilisateur ????</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

    <a class=\"btn btn-secondary btn-sm\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\"><i class=\"fa fa-plus\"></i> Créer un utilisateur</a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 60,  198 => 57,  189 => 53,  180 => 49,  176 => 48,  173 => 47,  170 => 45,  166 => 42,  160 => 41,  154 => 39,  152 => 38,  147 => 37,  144 => 36,  140 => 35,  137 => 34,  134 => 32,  128 => 29,  123 => 27,  119 => 25,  115 => 24,  112 => 23,  107 => 22,  101 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'page.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}
<div class=\"container-fluid my-4 py-4 bg-white\">
    <h4>Gestion des utilisateurs</h4>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Roles</th>
                {# <th>Mot de passe</th> #}
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.email }}</td>
                {# nom #}
                <td>{{ user.nom}}</td>
                {# prenom #}
                <td>{{ user.prenom }}</td>

                {# <td>{{ user.roles ? user.roles|json_encode : '' }}</td> #}

                {# bagde per role  #}
                <td>
                    {% for role in user.roles %}
                        {% if role == 'ROLE_ADMIN' %}
                            <span class=\"badge bg-danger\">{{ role }}</span>
                        {% elseif role == 'ROLE_USER' %}
                            <span class=\"badge bg-dark\">{{ role }}</span>
                        {% endif %}
                    {% endfor %}
                </td>

                {# user password plain #}

                {# <td>{{ user.password }}</td> #}
                <td>
                    <a class=\"btn btn-success btn-sm\"  href=\"{{ path('app_user_show', {'id': user.id}) }}\"><i class=\"fa fa-eye\"></i> Voir</a>
                    <a class=\"btn btn-warning btn-sm\" href=\"{{ path('app_user_edit', {'id': user.id}) }}\"><i class=\"fa fa-pen\"></i> Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">WTF !!! Aucun utilisateur ????</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-secondary btn-sm\" href=\"{{ path('app_user_new') }}\"><i class=\"fa fa-plus\"></i> Créer un utilisateur</a>
</div>
{% endblock %}
", "user/index.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\user\\index.html.twig");
    }
}
