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

/* content/index.html.twig */
class __TwigTemplate_e98676e0c994d18109ddd9962e897353 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "content/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Content index";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"container-fluid  mt-4\">
    <h4>Liste des contenus</h4>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                ";
        // line 15
        echo "                <th>Categorie</th>
                ";
        // line 17
        echo "                <th>H1</th>
                <th>Slug</th>
                <th>Visuel</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contents"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["content"], "description", [], "any", false, false, false, 28);
            echo "</td>
                ";
            // line 30
            echo "                <td>

               ";
            // line 33
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["content"], "categories", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 34
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 34), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
                </td>
                ";
            // line 39
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "h1", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "slug", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>
                 ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["content"], "visuel", [], "any", false, false, false, 42)) {
                // line 43
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, $context["content"], "visuel", [], "any", false, false, false, 43))), "html", null, true);
                echo "\" alt=\"content.visuel\" width=\"50px\"/>
                ";
            } else {
                // line 45
                echo "                    Aucun visuel
                ";
            }
            // line 47
            echo "                </td>
                <td>
                     <a class=\"btn btn-success\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_content_show", ["id" => twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i></a>
                    <a class=\"btn btn-warning\"href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_content_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"><i class=\"fa fa-pen\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <tr>
                <td colspan=\"7\">Aucun contenu :(</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>

    <a class=\"btn btn-secondary\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_content_new");
        echo "\">Créer un contenu</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "content/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  171 => 58,  162 => 54,  153 => 50,  149 => 49,  145 => 47,  141 => 45,  135 => 43,  133 => 42,  128 => 40,  123 => 39,  119 => 36,  110 => 34,  105 => 33,  101 => 30,  97 => 28,  93 => 27,  89 => 26,  86 => 25,  81 => 24,  72 => 17,  69 => 15,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/index.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\content\\index.html.twig");
    }
}
