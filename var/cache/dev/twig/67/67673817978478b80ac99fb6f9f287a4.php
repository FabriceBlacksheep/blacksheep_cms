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
class __TwigTemplate_4a3f19bdf36b76ddd27e3d5a8a4b2367 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/extension/_order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/extension/_order.html.twig"));

        // line 1
        echo "<a class=\"";
        (( !(isset($context["islist"]) || array_key_exists("islist", $context) ? $context["islist"] : (function () { throw new RuntimeError('Variable "islist" does not exist.', 1, $this->source); })())) ? (print (twig_escape_filter($this->env, ("btn btn-sm btn-default" . (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 1, $this->source); })())) ? (" active") : (""))), "html", null, true))) : (print ("")));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("table." . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 2, $this->source); })()))), "html", null, true);
        echo "
    <span class=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " ";
        echo (((isset($context["islist"]) || array_key_exists("islist", $context) ? $context["islist"] : (function () { throw new RuntimeError('Variable "islist" does not exist.', 3, $this->source); })())) ? ("pull-right") : (""));
        echo " fas fa-sort";
        echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\"></span>
</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  54 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"{{ not islist ? ('btn btn-sm btn-default'~(active ? ' active'))  }}\" href=\"{{ href }}\">
    {{ ('table.'~type)|trans }}
    <span class=\"{{ active }} {{ islist ? 'pull-right'}} fas fa-sort{{ icon }}\"></span>
</a>
", "@ArtgrisFileManager/extension/_order.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\extension\\_order.html.twig");
    }
}
