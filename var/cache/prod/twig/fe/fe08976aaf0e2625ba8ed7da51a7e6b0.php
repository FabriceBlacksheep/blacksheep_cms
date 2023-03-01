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
class __TwigTemplate_181aa04898ffa8267f854e20c256b0ea extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "campervan/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Campervan";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campervan"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campervan"] ?? null), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modele</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campervan"] ?? null), "modele", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["campervan"] ?? null), "description", [], "any", false, false, false, 29);
        echo "</td>
            </tr>
            <tr>
                <th>Options</th>
                <td>";
        // line 33
        ((twig_get_attribute($this->env, $this->source, ($context["campervan"] ?? null), "options", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["campervan"] ?? null), "options", [], "any", false, false, false, 33), ", "), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>VisiteVirtuelle</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campervan"] ?? null), "visiteVirtuelle", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Visuel</th>
                <td><img src=\"/upload/";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campervan"] ?? null), "visuel", [], "any", false, false, false, 41), "html", null, true);
        echo "\" width=\"200px\"></td>
            </tr>
            <tr>
                <th>LienDescriptif</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campervan"] ?? null), "lienDescriptif", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>


    <a class=\"btn btn-sm btn-success\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campervan_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["campervan"] ?? null), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\">Modifier</a>



</div>
";
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
        return array (  135 => 51,  126 => 45,  119 => 41,  112 => 37,  105 => 33,  98 => 29,  91 => 25,  84 => 21,  77 => 17,  69 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "campervan/show.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\campervan\\show.html.twig");
    }
}
