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

/* home/index.html.twig */
class __TwigTemplate_13fb3374923189c3b65a29050d761eed extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello HomeController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container mt-4 py-4\">

<div class=\"row mb-2\">
    <div class=\"col-md-12\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-550 position-relative  bg-white text-dark\">
        <div class=\"col p-4 d-flex flex-column position-static\">

          <h5 class=\"mb-0\"><i class=\"fa fa-newspaper\"></i> JOURNAL DE BORD</h5>

          <p class=\"card-text mb-auto py-4\">

          13/02/2022 : Mise en place de la page d'accueil du backoffice<br>
          12/02/2022 : API Rest




          </p>

        </div>
        <div class=\"col-auto d-none d-lg-block\">
         ";
        // line 29
        echo "        </div>
      </div>
    </div>
</div>
<div class=\"row mb-2\">
    <div class=\"col-md-4\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative  bg-white text-dark\">
        <div class=\"col p-4 d-flex flex-column position-static\">

          <h5 class=\"mb-0\"><i class=\"fa fa-building\"></i> AGENCES</h5>

          <p class=\"card-text mb-auto py-4\">Gestion des agences BLACKSHEEP</p>
          <a class=\"btnCustom btn btn-sm btn-success\" href=\"/agence\" class=\"stretched-link\">Poursuivre <i class=\"fa fa-arrow-right\"></i></a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
         ";
        // line 45
        echo "        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-white text-dark\">
        <div class=\"col p-4 d-flex flex-column position-static\">

          <h5 class=\"mb-0\"><i class=\"fa fa-van-shuttle\"></i> CAMPERVANS</h5>

          <p class=\"mb-auto py-4\">Gestion du parc de Campervans</p>
           <a class=\"btnCustom btn btn-sm btn-success\" href=\"/campervan\" class=\"stretched-link\">Poursuivre <i class=\"fa fa-arrow-right\"></i></a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
          ";
        // line 59
        echo "        </div>
      </div>
    </div>

    <div class=\"col-md-4\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-white text-dark\">
        <div class=\"col p-4 d-flex flex-column position-static\">

          <h5 class=\"mb-0\"><i class=\"fa fa-newspaper\"></i> CONTENUS</h5>

          <p class=\"card-text mb-auto py-4\">Gestion des ressources (SEO, Pages...)</p>
           <a class=\"btnCustom btn btn-sm btn-success\" href=\"/content\" class=\"stretched-link\" >Poursuivre <i class=\"fa fa-arrow-right\"></i></a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
      ";
        // line 74
        echo "       </div>
      </div>



</div>



<div class=\"row mb-2\">

    <div class=\"col-md-4\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-white text-dark\">
        <div class=\"col p-4 d-flex flex-column position-static\">

          <h5 class=\"mb-0\"><i class=\"fa fa-link\"></i> CATEGORIES</h5>

          <p class=\"card-text mb-auto py-4\">Gestion des categories (SEO, Pages...)</p>
           <a class=\"btnCustom btn btn-sm btn-success\" href=\"/category\" class=\"stretched-link\" >Poursuivre <i class=\"fa fa-arrow-right\"></i></a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
      ";
        // line 96
        echo "       </div>
      </div>



</div>

 ";
        // line 103
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 104
            echo "    <div class=\"col-md-4\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-white text-dark\">
        <div class=\"col p-4 d-flex flex-column position-static\">

          <h5 class=\"mb-0\"><i class=\"fa fa-user\"></i> UTILISATEURS</h5>

          <p class=\"mb-auto py-4\">Gestion des utilisateurs de la plateforme</p>
           <a class=\"btnCustom btn btn-sm btn-success\" href=\"/user\" class=\"stretched-link\">Poursuivre <i class=\"fa fa-arrow-right\"></i> </a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
         ";
            // line 115
            echo "        </div>
      </div>
    </div>

  ";
            // line 120
            echo "

    <div class=\"col-md-4\">
      <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-white text-dark\">
        <div class=\"col p-4 d-flex flex-column position-static\">

          <h5 class=\"mb-0\"><i class=\"fa fa-desktop\"></i> API</h5>

          <p class=\"card-text mb-auto py-4\">Accès API Restful</p>
           <a class=\"btnCustom btn btn-sm btn-success\" href=\"/api\" class=\"stretched-linwidth=\"200\" height=\"250\"k\">Poursuivre <i class=\"fa fa-arrow-right\"></i></a>
        </div>
        <div class=\"col-auto d-none d-lg-block\">
      ";
            // line 133
            echo "       </div>
      </div>
    </div>

  </div>
  </div>
";
        }
        // line 140
        echo "</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 140,  196 => 133,  182 => 120,  176 => 115,  164 => 104,  162 => 103,  153 => 96,  130 => 74,  114 => 59,  99 => 45,  82 => 29,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\home\\index.html.twig");
    }
}
