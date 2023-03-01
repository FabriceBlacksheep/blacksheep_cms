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
class __TwigTemplate_a18b9ad5c579bbfe0168ba00560bb3ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/edit.html.twig"));

        $this->parent = $this->loadTemplate("page.html.twig", "agence/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Agence";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container  mt-4 p-4\">
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
        echo "    <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_active", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" style=\"display: inline-block\">
        <input type=\"hidden\" name=\"_method\" value=\"POST\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("active" . twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17))), "html", null, true);
        echo "\">
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 18, $this->source); })()), "active", [], "any", false, false, false, 18) == 1)) {
            // line 19
            echo "            <button class=\"btn btn-success btn-sm mb-2\" type=\"submit\">Activer</button>
        ";
        } else {
            // line 21
            echo "            <button class=\"btn btn-danger btn-sm mb-2\" type=\"submit\">Désactiver</button>
        ";
        }
        // line 23
        echo "    </form>


    ";
        // line 26
        echo twig_include($this->env, $context, "agence/_form.html.twig", ["button_label" => "Mettre à jour"]);
        echo "
    ";
        // line 28
        echo "

</div>
<script>


document.addEventListener(\"DOMContentLoaded\", function(event) {



let fileUploaded = \"/upload/";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 38, $this->source); })()), "visuel", [], "any", false, false, false, 38), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  147 => 38,  135 => 28,  131 => 26,  126 => 23,  122 => 21,  118 => 19,  116 => 18,  112 => 17,  106 => 15,  103 => 13,  99 => 11,  94 => 10,  92 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'page.html.twig' %}

{% block title %}Edit Agence{% endblock %}

{% block body %}
<div class=\"container  mt-4 p-4\">
    <h4>Edition de l'Agence</h4>
    {# {{agence.visuel}} #}
    {# btn back #}
    <a href=\"{{ path('app_agence_index') }}\" class=\"btn btn-primary btn-sm mb-2\">Retour</a>
        {{ include('agence/_delete_form.html.twig') }}
    {# form #}

           {# btn post method to set active or not #}
    <form method=\"post\" action=\"{{ path('app_agence_active', {'id': agence.id}) }}\" style=\"display: inline-block\">
        <input type=\"hidden\" name=\"_method\" value=\"POST\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('active' ~ agence.id) }}\">
        {% if agence.active == 1 %}
            <button class=\"btn btn-success btn-sm mb-2\" type=\"submit\">Activer</button>
        {% else %}
            <button class=\"btn btn-danger btn-sm mb-2\" type=\"submit\">Désactiver</button>
        {% endif %}
    </form>


    {{ include('agence/_form.html.twig', {'button_label': 'Mettre à jour'}) }}
    {# btn delete #}


</div>
<script>


document.addEventListener(\"DOMContentLoaded\", function(event) {



let fileUploaded = \"/upload/{{agence.visuel}}\";





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
{% endblock %}
", "agence/edit.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\agence\\edit.html.twig");
    }
}
