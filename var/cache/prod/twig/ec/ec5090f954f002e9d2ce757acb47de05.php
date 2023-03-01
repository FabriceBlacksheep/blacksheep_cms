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
class __TwigTemplate_c7b36894153e32288f5d3d460c238d2c extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "campervan/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Campervan index";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["campervans"] ?? null));
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
        return array (  157 => 55,  152 => 52,  143 => 48,  134 => 44,  130 => 43,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  100 => 35,  95 => 33,  91 => 31,  88 => 30,  83 => 29,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "campervan/index.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\campervan\\index.html.twig");
    }
}
