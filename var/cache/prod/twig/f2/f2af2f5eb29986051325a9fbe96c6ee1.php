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

/* @ArtgrisFileManager/extension/_order.html.twig */
class __TwigTemplate_5cd10584b471e9aaf1b5591dd9bfd349 extends Template
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
        echo "<a class=\"";
        (( !($context["islist"] ?? null)) ? (print (twig_escape_filter($this->env, ("btn btn-sm btn-default" . ((($context["active"] ?? null)) ? (" active") : (""))), "html", null, true))) : (print ("")));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("table." . ($context["type"] ?? null))), "html", null, true);
        echo "
    <span class=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
        echo " ";
        echo ((($context["islist"] ?? null)) ? ("pull-right") : (""));
        echo " fas fa-sort";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo "\"></span>
</a>
";
    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/extension/_order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ArtgrisFileManager/extension/_order.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\extension\\_order.html.twig");
    }
}
