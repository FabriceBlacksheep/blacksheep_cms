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
class __TwigTemplate_8f50038cc76e509fb5ccbdc0ee3a661a extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "User index";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container-fluid my-4 py-4 \">
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
        return array (  173 => 60,  168 => 57,  159 => 53,  150 => 49,  146 => 48,  143 => 47,  140 => 45,  136 => 42,  130 => 41,  124 => 39,  122 => 38,  117 => 37,  114 => 36,  110 => 35,  107 => 34,  104 => 32,  98 => 29,  93 => 27,  89 => 25,  85 => 24,  82 => 23,  77 => 22,  71 => 18,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/index.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\user\\index.html.twig");
    }
}
