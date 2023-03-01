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
class __TwigTemplate_83367e02a5b59efb1d7309be3e05da73 extends Template
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
        if (($context["lazy"] ?? null)) {
            // line 2
            echo "    ";
            if (($context["twig_extension"] ?? null)) {
                // line 3
                echo "        ";
                $context["filename"] = twig_include($this->env, $context, twig_template_from_string($this->env, (("{{" . ($context["image_template"] ?? null)) . "}}")));
                // line 4
                echo "    ";
            }
            // line 5
            echo "    <img class=\"lazy\" data-src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["filename"] ?? null)), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo "\">
";
        } else {
            // line 7
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["filename"] ?? null)), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo "\">
";
        }
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
        return array (  56 => 7,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ArtgrisFileManager/views/preview.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\views\\preview.html.twig");
    }
}
