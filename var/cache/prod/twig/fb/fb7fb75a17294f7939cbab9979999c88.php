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

/* @ArkounayUxMedia/ux_media_form_theme.html.twig */
class __TwigTemplate_4d07f9eaead306c533fd9c3b8b9020af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ux_media_widget' => [$this, 'block_ux_media_widget'],
            'ux_media_collection_row' => [$this, 'block_ux_media_collection_row'],
            'ux_media_collection_widget' => [$this, 'block_ux_media_collection_widget'],
            'ux_media_row' => [$this, 'block_ux_media_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('ux_media_widget', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('ux_media_collection_row', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('ux_media_collection_widget', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('ux_media_row', $context, $blocks);
    }

    // line 1
    public function block_ux_media_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->loadTemplate("@ArkounayUxMedia/ux_media_form_theme.html.twig", "@ArkounayUxMedia/ux_media_form_theme.html.twig", 2, "586338010")->display($context);
    }

    // line 5
    public function block_ux_media_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_ux_media_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 10), "")) : ("")) . " arkounay-ux-collection arkounay-ux-collection--no-highlight ux-media-collection"))]);
        // line 11
        echo "    ";
        $this->displayBlock("ux_collection_widget", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_ux_media_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        if (twig_in_filter("ux_media_collection_entry", ($context["block_prefixes"] ?? null))) {
            // line 16
            $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-arkounay--ux-collection--collection-target" => "collectionElement"]);
        }
        // line 18
        echo "<div ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("row_attr", $context)) ? (_twig_default_filter(($context["row_attr"] ?? null))) : ("")));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
        <div ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? null))) : ("")));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@ArkounayUxMedia/ux_media_form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 23,  140 => 22,  136 => 21,  122 => 20,  118 => 19,  103 => 18,  100 => 16,  98 => 15,  94 => 14,  87 => 11,  84 => 10,  80 => 9,  73 => 6,  69 => 5,  64 => 2,  60 => 1,  56 => 14,  53 => 13,  51 => 9,  48 => 8,  46 => 5,  43 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ArkounayUxMedia/ux_media_form_theme.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\arkounay\\ux-media\\templates\\ux_media_form_theme.html.twig");
    }
}


/* @ArkounayUxMedia/ux_media_form_theme.html.twig */
class __TwigTemplate_4d07f9eaead306c533fd9c3b8b9020af___586338010 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@ArkounayUxMedia/_ux_media_widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@ArkounayUxMedia/_ux_media_widget.html.twig", "@ArkounayUxMedia/ux_media_form_theme.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ArkounayUxMedia/ux_media_form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 2,  144 => 23,  140 => 22,  136 => 21,  122 => 20,  118 => 19,  103 => 18,  100 => 16,  98 => 15,  94 => 14,  87 => 11,  84 => 10,  80 => 9,  73 => 6,  69 => 5,  64 => 2,  60 => 1,  56 => 14,  53 => 13,  51 => 9,  48 => 8,  46 => 5,  43 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ArkounayUxMedia/ux_media_form_theme.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\arkounay\\ux-media\\templates\\ux_media_form_theme.html.twig");
    }
}
