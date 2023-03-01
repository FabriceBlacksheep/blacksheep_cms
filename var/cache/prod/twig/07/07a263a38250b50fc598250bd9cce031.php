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

/* agence/index.html.twig */
class __TwigTemplate_3b332b0bdc84328ce9d05953aac7c5b6 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "agence/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Agence index";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container-fluid my-4 p-4 bg-white\">
    <h4>Gestion des Agences</h4>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>IdLocpro</th>
";
        // line 16
        echo "                <th>Type</th>
                ";
        // line 18
        echo "                <th>Visuel</th>
                <th>Localisation</th>
                <th>Telephone</th>
                <th>Horaires</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["agences"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["agence"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agence"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agence"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agence"], "idLocpro", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
";
            // line 32
            echo "                <td>

                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["agence"], "type", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 35
                echo "                 ";
                if (($context["type"] == "Agence propre")) {
                    // line 36
                    echo "                    <span class=\"badge bg-success\">";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "</span>
                                            ";
                } elseif ((                // line 37
$context["type"] == "Franchise")) {
                    // line 38
                    echo "                            <span class=\"badge bg-warning\">";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "</span>
                        ";
                }
                // line 40
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
                </td>

                ";
            // line 45
            echo "

                <td>

                ";
            // line 50
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["agence"], "visuel", [], "any", false, false, false, 50)) {
                // line 51
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, $context["agence"], "visuel", [], "any", false, false, false, 51))), "html", null, true);
                echo "\" alt=\"agence.visuel\" width=\"50px\"/>
                ";
            } else {
                // line 53
                echo "                    Aucun visuel
                ";
            }
            // line 55
            echo "
                ";
            // line 57
            echo "

                </td>

                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agence"], "localisation", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agence"], "telephone", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agence"], "horaires", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-success\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["agence"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i></a>
                    <a class=\"btn btn-warning\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["agence"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"><i class=\"fa fa-pen\"></i></a>
                    ";
            // line 68
            echo "
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 72
            echo "            <tr>
                <td colspan=\"9\">Aucune agence :(</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </tbody>
    </table>

    <a class=\"btn btn-secondary\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_new");
        echo "\">Créer une agence</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "agence/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 79,  203 => 76,  194 => 72,  186 => 68,  182 => 66,  178 => 65,  173 => 63,  169 => 62,  165 => 61,  159 => 57,  156 => 55,  152 => 53,  146 => 51,  143 => 50,  137 => 45,  132 => 41,  126 => 40,  120 => 38,  118 => 37,  113 => 36,  110 => 35,  106 => 34,  102 => 32,  98 => 30,  94 => 29,  90 => 28,  87 => 27,  82 => 26,  72 => 18,  69 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agence/index.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\agence\\index.html.twig");
    }
}
