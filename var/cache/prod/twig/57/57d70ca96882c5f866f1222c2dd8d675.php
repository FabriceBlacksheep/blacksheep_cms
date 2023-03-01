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
class __TwigTemplate_9850588b664e40755c9ba0746f405480 extends Template
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
        // line 1
        $this->loadTemplate((("@ArtgrisFileManager/views/_" . twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "view", [], "any", false, false, false, 1)) . ".html.twig"), "@ArtgrisFileManager/views/_manager_view.html.twig", 1)->display(twig_to_array(["fileManager" => ($context["fileManager"] ?? null), "fileArray" => ($context["fileArray"] ?? null), "formDelete" => ($context["formDelete"] ?? null)]));
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ArtgrisFileManager/views/_manager_view.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\views\\_manager_view.html.twig");
    }
}
