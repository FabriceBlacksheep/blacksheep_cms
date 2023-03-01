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

/* media/index.html.twig */
class __TwigTemplate_fc1be2442d14a44876e48adbf6fa83b6 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

<div class=\"container-fluid\">

";
        // line 11
        echo "
<iframe id=\"mediaFrame\" width=\"100%\" height=\"900px\" src=\"/manager/?conf=button&module=1\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>



</div>


";
    }

    public function getTemplateName()
    {
        return "media/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  61 => 6,  57 => 5,  51 => 3,  47 => 5,  44 => 4,  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "media/index.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\media\\index.html.twig");
    }
}
