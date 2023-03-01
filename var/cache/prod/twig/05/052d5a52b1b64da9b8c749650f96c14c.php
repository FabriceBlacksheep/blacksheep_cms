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

/* campervan/edit.html.twig */
class __TwigTemplate_cdc487f3e7f63d664fb12ecd45893d76 extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "campervan/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit Campervan";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container bg-white mt-4 p-4\">
    <h4>Edition du Campervan</h4>
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_campervan_index");
        echo "\" class=\"btn btn-primary btn-sm mb-2\">Retour</a>
        ";
        // line 9
        echo twig_include($this->env, $context, "campervan/_delete_form.html.twig");
        echo "

    ";
        // line 11
        echo twig_include($this->env, $context, "campervan/_form.html.twig", ["button_label" => "Mettre à jour"]);
        echo "


</div>
";
    }

    public function getTemplateName()
    {
        return "campervan/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  66 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "campervan/edit.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\campervan\\edit.html.twig");
    }
}
