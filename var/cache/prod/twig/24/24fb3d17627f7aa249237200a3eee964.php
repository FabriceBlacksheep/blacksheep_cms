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

/* agence/show.html.twig */
class __TwigTemplate_8440e0547b31da7f821528725416a7ab extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "agence/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Agence";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container-fluid my-4 p-4 bg-white\">
    <h4>Agence</h4>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IdLocpro</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "idLocpro", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
<tr>
     <th>Type</th>
<td>
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "type", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 27
            echo "                 ";
            if (($context["type"] == "Agence propre")) {
                // line 28
                echo "                    <span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "</span>
                                            ";
            } elseif ((            // line 29
$context["type"] == "Franchise")) {
                // line 30
                echo "                            <span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "</span>
                        ";
            }
            // line 32
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
</td>
            </tr>

            <tr>
                <th>Description</th>
                <td>";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "description", [], "any", false, false, false, 39);
        echo "</td>
            </tr>
            <tr>
                <th>Visuel</th>
                <td><img src=\"/upload/";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "visuel", [], "any", false, false, false, 43), "html", null, true);
        echo "\" width=\"250px\"/></td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "localisation", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "telephone", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Horaires</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "horaires", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_index");
        echo "\">Retour</a>



    ";
        // line 65
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "agence/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 65,  159 => 60,  151 => 55,  144 => 51,  137 => 47,  130 => 43,  123 => 39,  115 => 33,  109 => 32,  103 => 30,  101 => 29,  96 => 28,  93 => 27,  89 => 26,  81 => 21,  74 => 17,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agence/show.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\agence\\show.html.twig");
    }
}
