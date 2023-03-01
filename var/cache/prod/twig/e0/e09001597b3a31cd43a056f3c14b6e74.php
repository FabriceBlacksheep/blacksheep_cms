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

/* security/login.html.twig */
class __TwigTemplate_96ebe77b6628db67badce273fda3300b extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<!doctype html>

  <body>


  <div class=\"d-lg-flex half\">
    <div class=\"bg order-1 order-md-2\" style=\"background-image: url('/img/bgapp.jpg');\"></div>
    <div class=\"contents order-2 order-md-1\">

      <div class=\"container\">
        <div class=\"row align-items-center justify-content-center\">
          <div class=\"col-md-7\">
            <img src=\"/img/logo_bs_black.png\" width=\"180\"/>
            <p class=\"mb-4\">Gestionnaire de contenus</p>
            <form action=\"#\" method=\"post\">
                ";
        // line 21
        if (($context["error"] ?? null)) {
            // line 22
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 22), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27), "userIdentifier", [], "any", false, false, false, 27), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 30
        echo "              <div class=\"form-group first\">
                <label for=\"username\">Identifiant</label>
                <input type=\"email\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
              </div>
              <div class=\"form-group last mb-3\">
                <label for=\"password\">Mot de passe </label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
              </div>

              <div class=\"d-flex mb-5 align-items-center\">
                <span class=\"ml-auto\"><a href=\"/reset-password\" class=\"forgot-pass\">Mot de passe oublié</a></span>
              </div>
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
              <input type=\"submit\" value=\"Connexion\" class=\"btn btn-block btn-secondary\">

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>


";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 43,  103 => 32,  99 => 30,  91 => 27,  88 => 26,  86 => 25,  83 => 24,  77 => 22,  75 => 21,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\security\\login.html.twig");
    }
}
