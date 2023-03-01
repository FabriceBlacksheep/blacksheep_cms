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

/* @ArkounayUxCollection/ux_collection_form_theme.html.twig */
class __TwigTemplate_b27d9b5caf591b1aaae9b2a9ef357657 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ux_collection_row' => [$this, 'block_ux_collection_row'],
            'ux_collection_entry_row' => [$this, 'block_ux_collection_entry_row'],
            'ux_collection_widget' => [$this, 'block_ux_collection_widget'],
            'ux_tabbed_collection_row' => [$this, 'block_ux_tabbed_collection_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArkounayUxCollection/ux_collection_form_theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArkounayUxCollection/ux_collection_form_theme.html.twig"));

        // line 1
        $this->displayBlock('ux_collection_row', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('ux_collection_entry_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('ux_collection_widget', $context, $blocks);
        // line 118
        echo "
";
        // line 119
        $this->displayBlock('ux_tabbed_collection_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_ux_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_collection_row"));

        // line 2
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_ux_collection_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_collection_entry_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_collection_entry_row"));

        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        $context["allow_insert"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "parent", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "allow_add", [], "any", false, false, false, 7) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "parent", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "display_insert_button", [], "any", false, false, false, 7));
        // line 8
        echo "        <div ";
        if ( !((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 8), false)) : (false))) {
            echo "class=\"pt-0 ";
            echo (((isset($context["allow_insert"]) || array_key_exists("allow_insert", $context) ? $context["allow_insert"] : (function () { throw new RuntimeError('Variable "allow_insert" does not exist.', 8, $this->source); })())) ? ("collection-element-with-insert") : ("mb-3"));
            echo "\"";
        }
        echo " data-arkounay--ux-collection--collection-target=\"collectionElement\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("row_attr", $context)) ? (_twig_default_filter((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 8, $this->source); })()))) : ("")));
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
            <div class=\"";
        // line 9
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 9), "vars", [], "any", false, true, false, 9), "entry_class", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 9), "vars", [], "any", false, true, false, 9), "entry_class", [], "any", false, false, false, 9))) : ("")), "html", null, true);
        echo "\">
                <div class=\"btn-collection-container d-flex ";
        // line 10
        echo ((twig_in_filter("ux_tabbed_collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "parent", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "block_prefixes", [], "any", false, false, false, 10))) ? ("btn-tabbed-collection-container") : (""));
        echo "\">
                    ";
        // line 11
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 11), "vars", [], "any", false, true, false, 11), "display_sort_buttons", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 11), "vars", [], "any", false, true, false, 11), "display_sort_buttons", [], "any", false, false, false, 11), false)) : (false))) {
            // line 12
            echo "                        <button data-action=\"arkounay--ux-collection--collection#moveUp\" data-arkounay--ux-collection--collection-target=\"up\" class=\"collection-up btn btn-collection\">
                            ";
            // line 13
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 13), "vars", [], "any", false, true, false, 13), "icon_up", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 13), "vars", [], "any", false, true, false, 13), "icon_up", [], "any", false, false, false, 13), false)) : (false))) {
                // line 14
                echo "                                ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "parent", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "icon_up", [], "any", false, false, false, 14);
                echo "
                            ";
            } else {
                // line 16
                echo "                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\" />
                                    <line x1=\"18\" y1=\"11\" x2=\"12\" y2=\"5\" />
                                    <line x1=\"6\" y1=\"11\" x2=\"12\" y2=\"5\" />
                                </svg>
                            ";
            }
            // line 23
            echo "                        </button>
                        <button data-action=\"arkounay--ux-collection--collection#moveDown\" data-arkounay--ux-collection--collection-target=\"down\" class=\"collection-down btn btn-collection\">
                            ";
            // line 25
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 25), "vars", [], "any", false, true, false, 25), "icon_down", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 25), "vars", [], "any", false, true, false, 25), "icon_down", [], "any", false, false, false, 25), false)) : (false))) {
                // line 26
                echo "                                ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "parent", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "icon_down", [], "any", false, false, false, 26);
                echo "
                            ";
            } else {
                // line 28
                echo "                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\" />
                                    <line x1=\"18\" y1=\"13\" x2=\"12\" y2=\"19\" />
                                    <line x1=\"6\" y1=\"13\" x2=\"12\" y2=\"19\" />
                                </svg>
                            ";
            }
            // line 35
            echo "                        </button>
                    ";
        }
        // line 37
        echo "                    <div class=\"w-100\"></div>
                    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "parent", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "allow_delete", [], "any", false, false, false, 38)) {
            // line 39
            echo "                        <button data-collection-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "parent", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" data-arkounay--ux-collection--collection-target=\"delete\" data-action=\"arkounay--ux-collection--collection#remove\" class=\"collection-remove btn btn-collection btn-collection-remove align-self-end\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\" />
                                <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\" />
                            </svg>
                        </button>
                    ";
        }
        // line 47
        echo "                </div>
                <div class=\"";
        // line 48
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 48), "vars", [], "any", false, true, false, 48), "entry_element_class", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 48), "vars", [], "any", false, true, false, 48), "entry_element_class", [], "any", false, false, false, 48))) : ("")), "html", null, true);
        echo "\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'widget');
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'errors');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'rest');
        echo "
                </div>
                ";
        // line 53
        if ((isset($context["allow_insert"]) || array_key_exists("allow_insert", $context) ? $context["allow_insert"] : (function () { throw new RuntimeError('Variable "allow_insert" does not exist.', 53, $this->source); })())) {
            // line 54
            echo "                    <button class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "parent", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "insert_class", [], "any", false, false, false, 54), "html", null, true);
            echo "\" data-action=\"arkounay--ux-collection--collection#insert\" data-arkounay--ux-collection--collection-target=\"insert\">
                        <svg class=\"me-1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"1.75\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                            <path d=\"M12 5l0 14\"></path>
                            <path d=\"M5 12l14 0\"></path>
                        </svg>
                        <span data-arkounay--ux-collection--collection-target=\"insertText\" data-add-text=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("add_label", $context)) ? (_twig_default_filter((isset($context["add_label"]) || array_key_exists("add_label", $context) ? $context["add_label"] : (function () { throw new RuntimeError('Variable "add_label" does not exist.', 60, $this->source); })()), "Add")) : ("Add"))), "html", null, true);
            echo "\" data-insert-text=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("insert_label", $context)) ? (_twig_default_filter((isset($context["insert_label"]) || array_key_exists("insert_label", $context) ? $context["insert_label"] : (function () { throw new RuntimeError('Variable "insert_label" does not exist.', 60, $this->source); })()), "Insert")) : ("Insert"))), "html", null, true);
            echo "\"></span>
                    </button>
                ";
        }
        // line 63
        echo "            </div>
        </div>
    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        echo twig_spaceless($___internal_parse_0_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_ux_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_collection_widget"));

        // line 69
        echo "    ";
        ob_start();
        // line 70
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 71
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 71, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 71, $this->source); })()), 'row')]);
            // line 72
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 72, $this->source); })()), ["data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72)]);
            // line 73
            echo "        ";
        }
        // line 74
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 74, $this->source); })()), ["data-allow-add" => (((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 74, $this->source); })())) ? (1) : (0))]);
        // line 75
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 75, $this->source); })()), ["data-allow-remove" => (((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 75, $this->source); })())) ? (1) : (0))]);
        // line 76
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 76, $this->source); })()), ["data-name-prefix" => (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 76, $this->source); })())]);
        // line 77
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 77, $this->source); })()), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 77)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 77), "collection arkounay-ux-collection")) : ("collection arkounay-ux-collection"))]);
        // line 78
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 78, $this->source); })()), ["data-controller" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-controller", [], "array", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-controller", [], "array", false, false, false, 78), "")) : ("")) . " arkounay--ux-collection--collection"))]);
        // line 79
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 79, $this->source); })()), ["data-arkounay--ux-collection--collection-allow-drag-and-drop-value" => (isset($context["allow_drag_and_drop"]) || array_key_exists("allow_drag_and_drop", $context) ? $context["allow_drag_and_drop"] : (function () { throw new RuntimeError('Variable "allow_drag_and_drop" does not exist.', 79, $this->source); })())]);
        // line 80
        echo "        ";
        if ( !(null === (isset($context["drag_and_drop_filter"]) || array_key_exists("drag_and_drop_filter", $context) ? $context["drag_and_drop_filter"] : (function () { throw new RuntimeError('Variable "drag_and_drop_filter" does not exist.', 80, $this->source); })()))) {
            // line 81
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 81, $this->source); })()), ["data-arkounay--ux-collection--collection-drag-and-drop-filter-value" => (isset($context["drag_and_drop_filter"]) || array_key_exists("drag_and_drop_filter", $context) ? $context["drag_and_drop_filter"] : (function () { throw new RuntimeError('Variable "drag_and_drop_filter" does not exist.', 81, $this->source); })())]);
            // line 82
            echo "        ";
        }
        // line 83
        echo "        ";
        if ( !(null === (isset($context["drag_and_drop_prevent_on_filter"]) || array_key_exists("drag_and_drop_prevent_on_filter", $context) ? $context["drag_and_drop_prevent_on_filter"] : (function () { throw new RuntimeError('Variable "drag_and_drop_prevent_on_filter" does not exist.', 83, $this->source); })()))) {
            // line 84
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 84, $this->source); })()), ["data-arkounay--ux-collection--collection-drag-and-drop-prevent-on-filter-value" => json_encode((isset($context["drag_and_drop_prevent_on_filter"]) || array_key_exists("drag_and_drop_prevent_on_filter", $context) ? $context["drag_and_drop_prevent_on_filter"] : (function () { throw new RuntimeError('Variable "drag_and_drop_prevent_on_filter" does not exist.', 84, $this->source); })()))]);
            // line 85
            echo "        ";
        }
        // line 86
        echo "        ";
        if (((array_key_exists("position_selector", $context)) ? (_twig_default_filter((isset($context["position_selector"]) || array_key_exists("position_selector", $context) ? $context["position_selector"] : (function () { throw new RuntimeError('Variable "position_selector" does not exist.', 86, $this->source); })()), false)) : (false))) {
            // line 87
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 87, $this->source); })()), ["data-arkounay--ux-collection--collection-position-selector-value" => (isset($context["position_selector"]) || array_key_exists("position_selector", $context) ? $context["position_selector"] : (function () { throw new RuntimeError('Variable "position_selector" does not exist.', 87, $this->source); })())]);
            // line 88
            echo "        ";
        }
        // line 89
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 89, $this->source); })()), ["data-arkounay--ux-collection--collection-display-sort-buttons-value" => json_encode((isset($context["display_sort_buttons"]) || array_key_exists("display_sort_buttons", $context) ? $context["display_sort_buttons"] : (function () { throw new RuntimeError('Variable "display_sort_buttons" does not exist.', 89, $this->source); })()))]);
        // line 90
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 90, $this->source); })()), ["data-arkounay--ux-collection--collection-display-insert-button-value" => json_encode((isset($context["display_insert_button"]) || array_key_exists("display_insert_button", $context) ? $context["display_insert_button"] : (function () { throw new RuntimeError('Variable "display_insert_button" does not exist.', 90, $this->source); })()))]);
        // line 91
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 91, $this->source); })()), ["data-arkounay--ux-collection--collection-min-value" => (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 91, $this->source); })())]);
        // line 92
        echo "        ";
        if ( !(null === (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 92, $this->source); })()))) {
            // line 93
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 93, $this->source); })()), ["data-arkounay--ux-collection--collection-max-value" => (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 93, $this->source); })())]);
            // line 94
            echo "        ";
        }
        // line 95
        echo "
        <div ";
        // line 96
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 97
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()))) {
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'errors');
        }
        // line 100
        $this->displayBlock("form_rows", $context, $blocks);
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'rest');
        // line 103
        if ((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 103, $this->source); })())) {
            // line 104
            echo "                <div class=\"collection-add-wrapper ";
            echo twig_escape_filter($this->env, (isset($context["add_wrapper_class"]) || array_key_exists("add_wrapper_class", $context) ? $context["add_wrapper_class"] : (function () { throw new RuntimeError('Variable "add_wrapper_class" does not exist.', 104, $this->source); })()), "html", null, true);
            echo "\" data-arkounay--ux-collection--collection-target=\"addWrapper\">
                    <button class=\"";
            // line 105
            echo twig_escape_filter($this->env, (isset($context["add_class"]) || array_key_exists("add_class", $context) ? $context["add_class"] : (function () { throw new RuntimeError('Variable "add_class" does not exist.', 105, $this->source); })()), "html", null, true);
            echo "\" data-collection-id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 105, $this->source); })()), "html", null, true);
            echo "\" data-arkounay--ux-collection--collection-target=\"add\" data-action=\"arkounay--ux-collection--collection#add\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-plus\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\" />
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\" />
                        </svg>
                        ";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("add_label", $context)) ? (_twig_default_filter((isset($context["add_label"]) || array_key_exists("add_label", $context) ? $context["add_label"] : (function () { throw new RuntimeError('Variable "add_label" does not exist.', 111, $this->source); })()), "Add")) : ("Add"))), "html", null, true);
            echo "
                    </button>
                </div>
            ";
        }
        // line 115
        echo "        </div>
    ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        echo twig_spaceless($___internal_parse_1_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 119
    public function block_ux_tabbed_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_tabbed_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_tabbed_collection_row"));

        // line 120
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'label', ["required" => false]);
        echo "
    <div data-controller=\"arkounay--ux-collection--tabbed-collection\" data-arkounay--ux-collection--tabbed-collection-id-value=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "\" data-arkounay--ux-collection--tabbed-collection-empty-tab-name-value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["empty_tab_name"]) || array_key_exists("empty_tab_name", $context) ? $context["empty_tab_name"] : (function () { throw new RuntimeError('Variable "empty_tab_name" does not exist.', 121, $this->source); })())), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("row_attr", $context)) ? (_twig_default_filter((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 121, $this->source); })()))) : ("")));
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
        <ul class=\"nav nav-tabs\" role=\"tablist\" data-arkounay--ux-collection--tabbed-collection-target=\"tabs\">
        </ul>
        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), 'widget');
        echo "
    </div>
    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), 'help');
        echo "
    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'errors');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@ArkounayUxCollection/ux_collection_form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  445 => 127,  441 => 126,  436 => 124,  416 => 121,  411 => 120,  401 => 119,  391 => 69,  387 => 115,  380 => 111,  369 => 105,  364 => 104,  362 => 103,  360 => 101,  358 => 100,  355 => 98,  353 => 97,  350 => 96,  347 => 95,  344 => 94,  341 => 93,  338 => 92,  335 => 91,  332 => 90,  329 => 89,  326 => 88,  323 => 87,  320 => 86,  317 => 85,  314 => 84,  311 => 83,  308 => 82,  305 => 81,  302 => 80,  299 => 79,  296 => 78,  293 => 77,  290 => 76,  287 => 75,  284 => 74,  281 => 73,  278 => 72,  275 => 71,  272 => 70,  269 => 69,  259 => 68,  249 => 6,  244 => 63,  236 => 60,  226 => 54,  224 => 53,  219 => 51,  215 => 50,  211 => 49,  207 => 48,  204 => 47,  192 => 39,  190 => 38,  187 => 37,  183 => 35,  174 => 28,  168 => 26,  166 => 25,  162 => 23,  153 => 16,  147 => 14,  145 => 13,  142 => 12,  140 => 11,  136 => 10,  132 => 9,  111 => 8,  108 => 7,  105 => 6,  95 => 5,  82 => 2,  72 => 1,  62 => 119,  59 => 118,  57 => 68,  54 => 67,  52 => 5,  49 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block ux_collection_row %}
    {{ block('form_row') }}
{% endblock %}

{% block ux_collection_entry_row %}
    {% apply spaceless %}
        {% set allow_insert = form.parent.vars.allow_add and form.parent.vars.display_insert_button %}
        <div {% if not row_attr.class|default(false) %}class=\"pt-0 {{ allow_insert ? 'collection-element-with-insert' : 'mb-3' }}\"{% endif%} data-arkounay--ux-collection--collection-target=\"collectionElement\" {% for k, v in row_attr|default %}{{ k }}=\"{{ v }}\"{% endfor %}>
            <div class=\"{{ form.parent.vars.entry_class|default }}\">
                <div class=\"btn-collection-container d-flex {{ 'ux_tabbed_collection' in form.parent.vars.block_prefixes ? 'btn-tabbed-collection-container' -}}\">
                    {% if form.parent.vars.display_sort_buttons|default(false) %}
                        <button data-action=\"arkounay--ux-collection--collection#moveUp\" data-arkounay--ux-collection--collection-target=\"up\" class=\"collection-up btn btn-collection\">
                            {% if form.parent.vars.icon_up|default(false) %}
                                {{ form.parent.vars.icon_up|raw }}
                            {% else %}
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\" />
                                    <line x1=\"18\" y1=\"11\" x2=\"12\" y2=\"5\" />
                                    <line x1=\"6\" y1=\"11\" x2=\"12\" y2=\"5\" />
                                </svg>
                            {% endif %}
                        </button>
                        <button data-action=\"arkounay--ux-collection--collection#moveDown\" data-arkounay--ux-collection--collection-target=\"down\" class=\"collection-down btn btn-collection\">
                            {% if form.parent.vars.icon_down|default(false) %}
                                {{ form.parent.vars.icon_down|raw }}
                            {% else %}
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                    <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\" />
                                    <line x1=\"18\" y1=\"13\" x2=\"12\" y2=\"19\" />
                                    <line x1=\"6\" y1=\"13\" x2=\"12\" y2=\"19\" />
                                </svg>
                            {% endif %}
                        </button>
                    {% endif %}
                    <div class=\"w-100\"></div>
                    {% if form.parent.vars.allow_delete %}
                        <button data-collection-id=\"{{ form.parent.vars.id }}\" data-arkounay--ux-collection--collection-target=\"delete\" data-action=\"arkounay--ux-collection--collection#remove\" class=\"collection-remove btn btn-collection btn-collection-remove align-self-end\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\" />
                                <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\" />
                            </svg>
                        </button>
                    {% endif %}
                </div>
                <div class=\"{{ form.parent.vars.entry_element_class|default }}\">
                    {{ form_widget(form) }}
                    {{ form_errors(form) }}
                    {{ form_rest(form) }}
                </div>
                {% if allow_insert %}
                    <button class=\"{{ form.parent.vars.insert_class }}\" data-action=\"arkounay--ux-collection--collection#insert\" data-arkounay--ux-collection--collection-target=\"insert\">
                        <svg class=\"me-1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"1.75\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                            <path d=\"M12 5l0 14\"></path>
                            <path d=\"M5 12l14 0\"></path>
                        </svg>
                        <span data-arkounay--ux-collection--collection-target=\"insertText\" data-add-text=\"{{ (add_label|default('Add'))|trans }}\" data-insert-text=\"{{ (insert_label|default('Insert'))|trans }}\"></span>
                    </button>
                {% endif %}
            </div>
        </div>
    {% endapply %}
{% endblock %}

{% block ux_collection_widget %}
    {% apply spaceless %}
        {% if prototype is defined %}
            {% set attr = attr|merge({'data-prototype': form_row(prototype)}) %}
            {% set attr = attr|merge({'data-prototype-name': prototype.vars.name}) %}
        {% endif %}
        {% set attr = attr|merge({'data-allow-add': allow_add ? 1 : 0}) %}
        {% set attr = attr|merge({'data-allow-remove': allow_delete ? 1 : 0 }) %}
        {% set attr = attr|merge({'data-name-prefix': full_name}) %}
        {% set attr = attr|merge({'class': attr.class|default('collection arkounay-ux-collection')}) %}
        {% set attr = attr|merge({'data-controller': (attr['data-controller']|default('') ~ ' arkounay--ux-collection--collection')|trim}) %}
        {% set attr = attr|merge({'data-arkounay--ux-collection--collection-allow-drag-and-drop-value': allow_drag_and_drop}) %}
        {% if drag_and_drop_filter is not null %}
            {% set attr = attr|merge({'data-arkounay--ux-collection--collection-drag-and-drop-filter-value': drag_and_drop_filter}) %}
        {% endif %}
        {% if drag_and_drop_prevent_on_filter is not null %}
            {% set attr = attr|merge({'data-arkounay--ux-collection--collection-drag-and-drop-prevent-on-filter-value': drag_and_drop_prevent_on_filter|json_encode}) %}
        {% endif %}
        {% if position_selector|default(false) %}
            {% set attr = attr|merge({'data-arkounay--ux-collection--collection-position-selector-value': position_selector}) %}
        {% endif %}
        {% set attr = attr|merge({'data-arkounay--ux-collection--collection-display-sort-buttons-value': display_sort_buttons|json_encode}) %}
        {% set attr = attr|merge({'data-arkounay--ux-collection--collection-display-insert-button-value': display_insert_button|json_encode}) %}
        {% set attr = attr|merge({'data-arkounay--ux-collection--collection-min-value': min}) %}
        {% if max is not null %}
            {% set attr = attr|merge({'data-arkounay--ux-collection--collection-max-value': max}) %}
        {% endif %}

        <div {{ block('widget_container_attributes') }}>
            {%- if form is rootform -%}
                {{ form_errors(form) }}
            {%- endif -%}
            {{- block('form_rows') -}}
            {{- form_rest(form) -}}

            {% if allow_add %}
                <div class=\"collection-add-wrapper {{ add_wrapper_class }}\" data-arkounay--ux-collection--collection-target=\"addWrapper\">
                    <button class=\"{{ add_class }}\" data-collection-id=\"{{ id }}\" data-arkounay--ux-collection--collection-target=\"add\" data-action=\"arkounay--ux-collection--collection#add\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-plus\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\" />
                            <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\" />
                        </svg>
                        {{ (add_label|default('Add'))|trans }}
                    </button>
                </div>
            {% endif %}
        </div>
    {% endapply %}
{% endblock %}

{% block ux_tabbed_collection_row %}
    {{ form_label(form, null, {required: false}) }}
    <div data-controller=\"arkounay--ux-collection--tabbed-collection\" data-arkounay--ux-collection--tabbed-collection-id-value=\"{{ id }}\" data-arkounay--ux-collection--tabbed-collection-empty-tab-name-value=\"{{ empty_tab_name|trans }}\" {% for k, v in row_attr|default %}{{ k }}=\"{{ v }}\"{% endfor %}>
        <ul class=\"nav nav-tabs\" role=\"tablist\" data-arkounay--ux-collection--tabbed-collection-target=\"tabs\">
        </ul>
        {{ form_widget(form) }}
    </div>
    {{ form_help(form) }}
    {{ form_errors(form) }}
{% endblock %}", "@ArkounayUxCollection/ux_collection_form_theme.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\arkounay\\ux-collection\\templates\\ux_collection_form_theme.html.twig");
    }
}
