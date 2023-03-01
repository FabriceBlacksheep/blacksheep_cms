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
class __TwigTemplate_230064019404a03b74d096b41b6d27a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArkounayUxMedia/ux_media_form_theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArkounayUxMedia/ux_media_form_theme.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_ux_media_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_media_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_media_widget"));

        // line 2
        echo "    ";
        $this->loadTemplate("@ArkounayUxMedia/ux_media_form_theme.html.twig", "@ArkounayUxMedia/ux_media_form_theme.html.twig", 2, "2005644942")->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_ux_media_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_media_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_media_collection_row"));

        // line 6
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_ux_media_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_media_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_media_collection_widget"));

        // line 10
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 10, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 10), "")) : ("")) . " arkounay-ux-collection arkounay-ux-collection--no-highlight ux-media-collection"))]);
        // line 11
        echo "    ";
        $this->displayBlock("ux_collection_widget", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_ux_media_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_media_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_media_row"));

        // line 15
        if (twig_in_filter("ux_media_collection_entry", (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 15, $this->source); })()))) {
            // line 16
            $context["row_attr"] = twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 16, $this->source); })()), ["data-arkounay--ux-collection--collection-target" => "collectionElement"]);
        }
        // line 18
        echo "<div ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("row_attr", $context)) ? (_twig_default_filter((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 18, $this->source); })()))) : ("")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'label');
        echo "
        <div ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 20, $this->source); })()))) : ("")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'widget');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'errors');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'rest');
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@ArkounayUxMedia/ux_media_form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 23,  194 => 22,  190 => 21,  176 => 20,  172 => 19,  157 => 18,  154 => 16,  152 => 15,  142 => 14,  129 => 11,  126 => 10,  116 => 9,  103 => 6,  93 => 5,  82 => 2,  72 => 1,  62 => 14,  59 => 13,  57 => 9,  54 => 8,  52 => 5,  49 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block ux_media_widget %}
    {% embed '@ArkounayUxMedia/_ux_media_widget.html.twig' %}{% endembed %}
{% endblock %}

{% block ux_media_collection_row %}
    {{ block('form_row') }}
{% endblock %}

{% block ux_media_collection_widget %}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' arkounay-ux-collection arkounay-ux-collection--no-highlight ux-media-collection')|trim}) %}
    {{ block('ux_collection_widget') }}
{% endblock %}

{% block ux_media_row %}
    {%- if 'ux_media_collection_entry' in block_prefixes -%}
        {%- set row_attr = row_attr|merge({'data-arkounay--ux-collection--collection-target': 'collectionElement'}) -%}
    {%- endif -%}
    <div {% for k, v in row_attr|default %}{{ k }}=\"{{ v }}\"{% endfor %}>
        {{ form_label(form) }}
        <div {% for k, v in attr|default %}{{ k }}=\"{{ v }}\"{% endfor %}>
            {{ form_widget(form) }}
            {{ form_errors(form) }}
            {{ form_rest(form) }}
        </div>
    </div>
{% endblock %}", "@ArkounayUxMedia/ux_media_form_theme.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\arkounay\\ux-media\\templates\\ux_media_form_theme.html.twig");
    }
}


/* @ArkounayUxMedia/ux_media_form_theme.html.twig */
class __TwigTemplate_230064019404a03b74d096b41b6d27a1___2005644942 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArkounayUxMedia/ux_media_form_theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArkounayUxMedia/ux_media_form_theme.html.twig"));

        $this->parent = $this->loadTemplate("@ArkounayUxMedia/_ux_media_widget.html.twig", "@ArkounayUxMedia/ux_media_form_theme.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  272 => 2,  198 => 23,  194 => 22,  190 => 21,  176 => 20,  172 => 19,  157 => 18,  154 => 16,  152 => 15,  142 => 14,  129 => 11,  126 => 10,  116 => 9,  103 => 6,  93 => 5,  82 => 2,  72 => 1,  62 => 14,  59 => 13,  57 => 9,  54 => 8,  52 => 5,  49 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block ux_media_widget %}
    {% embed '@ArkounayUxMedia/_ux_media_widget.html.twig' %}{% endembed %}
{% endblock %}

{% block ux_media_collection_row %}
    {{ block('form_row') }}
{% endblock %}

{% block ux_media_collection_widget %}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' arkounay-ux-collection arkounay-ux-collection--no-highlight ux-media-collection')|trim}) %}
    {{ block('ux_collection_widget') }}
{% endblock %}

{% block ux_media_row %}
    {%- if 'ux_media_collection_entry' in block_prefixes -%}
        {%- set row_attr = row_attr|merge({'data-arkounay--ux-collection--collection-target': 'collectionElement'}) -%}
    {%- endif -%}
    <div {% for k, v in row_attr|default %}{{ k }}=\"{{ v }}\"{% endfor %}>
        {{ form_label(form) }}
        <div {% for k, v in attr|default %}{{ k }}=\"{{ v }}\"{% endfor %}>
            {{ form_widget(form) }}
            {{ form_errors(form) }}
            {{ form_rest(form) }}
        </div>
    </div>
{% endblock %}", "@ArkounayUxMedia/ux_media_form_theme.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\arkounay\\ux-media\\templates\\ux_media_form_theme.html.twig");
    }
}
