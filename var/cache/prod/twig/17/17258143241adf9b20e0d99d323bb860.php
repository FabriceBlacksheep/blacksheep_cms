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

/* @FMElfinder/Elfinder/helper/_tinymce5.html.twig */
class __TwigTemplate_3b83840642e8b7179595e0661e1ae6a7 extends Template
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
        echo "<script type=\"text/javascript\">
(function() {
    const mceElf = new tinymceElfinder({
        // connector URL (Use elFinder Demo site's connector for this demo)
        url: \"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("elfinder", ["instance" => ($context["instance"] ?? null)]), "html", null, true);
        echo "\",
        nodeId: 'elfinder'
    });
})();
</script>
";
    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/helper/_tinymce5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FMElfinder/Elfinder/helper/_tinymce5.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Resources\\views\\Elfinder\\helper\\_tinymce5.html.twig");
    }
}
