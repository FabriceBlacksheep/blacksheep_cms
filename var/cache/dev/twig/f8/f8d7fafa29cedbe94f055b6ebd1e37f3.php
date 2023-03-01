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

/* @ArtgrisFileManager/views/_manager_view.html.twig */
class __TwigTemplate_ae4ee179fd21acebca42b17bb245161c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/_manager_view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/_manager_view.html.twig"));

        // line 1
        $this->loadTemplate((("@ArtgrisFileManager/views/_" . twig_get_attribute($this->env, $this->source, (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 1, $this->source); })()), "view", [], "any", false, false, false, 1)) . ".html.twig"), "@ArtgrisFileManager/views/_manager_view.html.twig", 1)->display(twig_to_array(["fileManager" => (isset($context["fileManager"]) || array_key_exists("fileManager", $context) ? $context["fileManager"] : (function () { throw new RuntimeError('Variable "fileManager" does not exist.', 1, $this->source); })()), "fileArray" => (isset($context["fileArray"]) || array_key_exists("fileArray", $context) ? $context["fileArray"] : (function () { throw new RuntimeError('Variable "fileArray" does not exist.', 1, $this->source); })()), "formDelete" => (isset($context["formDelete"]) || array_key_exists("formDelete", $context) ? $context["formDelete"] : (function () { throw new RuntimeError('Variable "formDelete" does not exist.', 1, $this->source); })())]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/views/_manager_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@ArtgrisFileManager/views/_'~fileManager.view~'.html.twig' with {'fileManager' :fileManager,  'fileArray' : fileArray, 'formDelete' : formDelete} only %}
", "@ArtgrisFileManager/views/_manager_view.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\views\\_manager_view.html.twig");
    }
}
