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

/* page.html.twig */
class __TwigTemplate_769b50fa76092f46ca42d3a28e98f57d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css\" integrity=\"sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </head>
    <body class=\"\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\"><img src=\"/img/logo_bs_black.png\" height=\"40px\"/></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/agence\">AGENCES</a>
        </li>
                <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/campervan\">CAMPERVANS</a>
        </li>
                <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/content\">CONTENUS</a>
        </li>
                <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/user\">UTILISATEURS</a>
        </li>
      </ul>

        ";
        // line 43
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 43)) {
            // line 44
            echo "        <div class=\"\">
            <a class=\"btn btn-secondary\" href=\"/user/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45), "prenom", [], "any", false, false, false, 45), "html", null, true);
            echo "</a> <a class=\"btn btn-warning\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i> Déconnexion</a>
        </div>
    ";
        }
        // line 48
        echo "    </div>
  </div>
</nav>
        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "        ";
        // line 53
        echo "<div class=\"footer py-2\">
  <p>BLACKSHEEP VAN - 2023</p>
</div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
            ";
        // line 16
        echo "            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js\" integrity=\"sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
        ";
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 51,  149 => 16,  144 => 14,  140 => 13,  133 => 10,  129 => 9,  122 => 5,  113 => 53,  111 => 52,  109 => 51,  104 => 48,  94 => 45,  91 => 44,  88 => 43,  62 => 18,  60 => 13,  57 => 12,  55 => 9,  52 => 8,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\page.html.twig");
    }
}
