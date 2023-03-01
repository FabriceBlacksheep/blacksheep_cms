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

/* @ArtgrisFileManager/views/preview.html.twig */
class __TwigTemplate_53faf8c772fb7b1452e83ec1566f2a3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/preview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArtgrisFileManager/views/preview.html.twig"));

        // line 1
        if ((isset($context["lazy"]) || array_key_exists("lazy", $context) ? $context["lazy"] : (function () { throw new RuntimeError('Variable "lazy" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            if ((isset($context["twig_extension"]) || array_key_exists("twig_extension", $context) ? $context["twig_extension"] : (function () { throw new RuntimeError('Variable "twig_extension" does not exist.', 2, $this->source); })())) {
                // line 3
                echo "        ";
                $context["filename"] = twig_include($this->env, $context, twig_template_from_string($this->env, (("{{" . (isset($context["image_template"]) || array_key_exists("image_template", $context) ? $context["image_template"] : (function () { throw new RuntimeError('Variable "image_template" does not exist.', 3, $this->source); })())) . "}}")));
                // line 4
                echo "    ";
            }
            // line 5
            echo "    <img class=\"lazy\" data-src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 5, $this->source); })())), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\">
";
        } else {
            // line 7
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\">
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/views/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if lazy %}
    {% if twig_extension %}
        {% set filename = include(template_from_string(\"{{\"~image_template~\"}}\")) %}
    {% endif %}
    <img class=\"lazy\" data-src=\"{{ asset(filename) }}\" height=\"{{ size }}\">
{% else %}
    <img src=\"{{ asset(filename) }}\" height=\"{{ size }}\">
{% endif %}
", "@ArtgrisFileManager/views/preview.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\views\\preview.html.twig");
    }
}
