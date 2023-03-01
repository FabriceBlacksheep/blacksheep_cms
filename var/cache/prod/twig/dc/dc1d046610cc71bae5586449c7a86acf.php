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
class __TwigTemplate_6fa090a442ec67f96d7dbf50df1a22c4 extends Template
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
        echo "<div>
    <h1 style=\"font-weight:300\">GESTION DES AGENCES</h1>

    ";
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <div class=\"alert alert-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "danger"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    ";
        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "warning"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
    ";
        // line 31
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "info"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            echo "        <div class=\"alert alert-info\">
            ";
            // line 33
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    ";
        // line 38
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "primary"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            echo "        <div class=\"alert alert-primary\">
            ";
            // line 40
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
    ";
        // line 45
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "secondary"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            echo "        <div class=\"alert alert-secondary\">
            ";
            // line 47
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
    ";
        // line 52
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "light"], "method", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 53
            echo "        <div class=\"alert alert-light\">
            ";
            // line 54
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
    ";
        // line 59
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "dark"], "method", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 60
            echo "        <div class=\"alert alert-dark\">
            ";
            // line 61
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
    ";
        // line 66
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "link"], "method", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 67
            echo "        <div class=\"alert alert-link\">
            ";
            // line 68
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
    ";
        // line 73
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "white"], "method", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 74
            echo "        <div class=\"alert alert-white\">
            ";
            // line 75
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
    ";
        // line 80
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "black"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 81
            echo "        <div class=\"alert alert-black\">
            ";
            // line 82
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
    ";
        // line 87
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "muted"], "method", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 88
            echo "        <div class=\"alert alert-muted\">
            ";
            // line 89
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "





    ";
        // line 99
        echo "
    <div class=\"container-fluid mt-5\">
        <div class=\"row\" id=\"list\">



        <div class=\"col-6 mb-4\">
        <a class=\"btn btn-sm btn-success pull-right\" href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_new");
        echo "\"><i class=\"fa fa-plus\"></i> Ajouter</a>
        </div>

             <div class=\"col-6 mb-4\">
       ";
        // line 111
        echo "        <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_search");
        echo "\" method=\"get\">
            <div class=\"input-group mb-3\">
                <input type=\"text\" id=\"searchTerm\" class=\"form-control searchTerm\" placeholder=\"Rechercher une Agence (Nom, ville...)\" name=\"search\" value=\"\">
                <button class=\"btn btn-outline-secondary\" type=\"submit\" id=\"button-addon2\"><i class=\"fa fa-search\"></i></button>
            </div>
        </form>
        </div>




         ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["agences"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["agence"]) {
            // line 123
            echo "            <div class=\"col-md-6 col-lg-3 col-sm-6 col-xs-6 ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agence"], "nom", [], "any", false, false, false, 123), "html", null, true);
            echo " mb-4 filtered\">
                <div class=\"card card-flush h-xl-100 ribbon ribbon-top ribbon-vertical\">

                  ";
            // line 126
            if ((twig_get_attribute($this->env, $this->source, $context["agence"], "active", [], "any", false, false, false, 126) == 0)) {
                // line 127
                echo "                                                                                  <div class=\"ribbon-label bg-success\">ACTIVE</div>
                                                                    ";
            } else {
                // line 129
                echo "                                                                                <div class=\"ribbon-label bg-danger\">INACTIVE</div>
                                                                    ";
            }
            // line 131
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body text-center pb-5\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"lightbox-hot-sales\" href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, $context["agence"], "visuel", [], "any", false, false, false, 138))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->

                                                                   ";
            // line 141
            if (twig_get_attribute($this->env, $this->source, $context["agence"], "visuel", [], "any", false, false, false, 141)) {
                // line 142
                echo "
                                            <div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7\" style=\"height: 266px;background-image:url('";
                // line 143
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/" . twig_get_attribute($this->env, $this->source, $context["agence"], "visuel", [], "any", false, false, false, 143))), "html", null, true);
                echo "')\"></div>

                                                                    ";
            } else {
                // line 146
                echo "                                                                        Aucun visuel
                                                                    ";
            }
            // line 148
            echo "

                                                        <!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-end flex-stack mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bold text-gray-800 cursor-pointer text-hover-primary fs-4 d-block\">";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agence"], "nom", [], "any", false, false, false, 162), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 164
            echo "                                                            ";
            // line 165
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Total-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Total-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Info-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex flex-stack pt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-primary flex-shrink-0 me-2\" href=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["agence"], "id", [], "any", false, false, false, 179)]), "html", null, true);
            echo "\" ><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-danger flex-shrink-0 me-2\" href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["agence"], "id", [], "any", false, false, false, 180)]), "html", null, true);
            echo "\" ><i class=\"fa fa-pen\"></i> Modifier</a>

                                                    <!--end::Link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Link-->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Link-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 191
            echo "            <tr>
                <td colspan=\"9\">Aucune agence :(</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "


    </div>




    </div>
</div>
<script>
";
        // line 207
        echo "var input = document.getElementById(\"searchTerm\");
input.addEventListener(\"input\", myFunction);

function myFunction(e) {

    var filter = e.target.value.toUpperCase();
    var list = document.getElementById(\"list\");
    var items = list.getElementsByClassName(\"filtered\");

    for (var i = 0; i < items.length; i++) {
        var item = items[i];
        var text = item.getElementsByClassName(\"card-body text-center pb-5\")[0].innerText.toUpperCase();
        if (text.indexOf(filter) > -1) {
            item.style.display = \"\";
        } else {
            item.style.display = \"none\";
        }
    }

}
</script>
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
        return array (  471 => 207,  458 => 195,  449 => 191,  433 => 180,  429 => 179,  413 => 165,  411 => 164,  407 => 162,  391 => 148,  387 => 146,  381 => 143,  378 => 142,  376 => 141,  370 => 138,  361 => 131,  357 => 129,  353 => 127,  351 => 126,  344 => 123,  339 => 122,  324 => 111,  317 => 106,  308 => 99,  300 => 92,  291 => 89,  288 => 88,  283 => 87,  280 => 85,  271 => 82,  268 => 81,  263 => 80,  260 => 78,  251 => 75,  248 => 74,  243 => 73,  240 => 71,  231 => 68,  228 => 67,  223 => 66,  220 => 64,  211 => 61,  208 => 60,  203 => 59,  200 => 57,  191 => 54,  188 => 53,  183 => 52,  180 => 50,  171 => 47,  168 => 46,  163 => 45,  160 => 43,  151 => 40,  148 => 39,  143 => 38,  140 => 36,  131 => 33,  128 => 32,  123 => 31,  120 => 29,  111 => 26,  108 => 25,  103 => 24,  100 => 22,  91 => 19,  88 => 18,  83 => 17,  80 => 15,  71 => 12,  68 => 11,  63 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agence/index.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\agence\\index.html.twig");
    }
}
