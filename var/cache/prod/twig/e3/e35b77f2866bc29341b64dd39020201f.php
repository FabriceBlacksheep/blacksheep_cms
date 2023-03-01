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

/* agence/edit.html.twig */
class __TwigTemplate_e0c4a33faca9be39868bb24323072c8c extends Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "agence/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit Agence";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container bg-white mt-4 p-4\">
    <h4>Edition de l'Agence</h4>
    ";
        // line 9
        echo "    ";
        // line 10
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_index");
        echo "\" class=\"btn btn-primary btn-sm mb-2\">Retour</a>
        ";
        // line 11
        echo twig_include($this->env, $context, "agence/_delete_form.html.twig");
        echo "
    ";
        // line 13
        echo "

    ";
        // line 15
        echo twig_include($this->env, $context, "agence/_form.html.twig", ["button_label" => "Mettre à jour"]);
        echo "
    ";
        // line 17
        echo "

</div>
<script>


document.addEventListener(\"DOMContentLoaded\", function(event) {



let fileUploaded = \"/upload/";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agence"] ?? null), "visuel", [], "any", false, false, false, 27), "html", null, true);
        echo "\";





var input = document.querySelector('input[type=\"file\"]');


// set value of input file with current image
//input.value = fileUploaded;





// prefill input file with current image


if (fileUploaded !== \"/upload/\") {
    // create thumbnail of current image
    var img = document.createElement(\"img\");
    img.src = fileUploaded;
    img.width = 100;
    img.height = 100;
    img.style.margin = \"10px\";
    img.style.border = \"1px solid #ccc\";
    img.style.borderRadius = \"5px\";
    img.style.display = \"inline-block\";
    img.style.verticalAlign = \"middle\";
    img.style.objectFit = \"cover\";
    img.style.objectPosition = \"center\";

    // append thumbnail to div before input file
    input.parentNode.insertBefore(img, input);



}



});



</script>
";
    }

    public function getTemplateName()
    {
        return "agence/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  81 => 17,  77 => 15,  73 => 13,  69 => 11,  64 => 10,  62 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agence/edit.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\agence\\edit.html.twig");
    }
}
