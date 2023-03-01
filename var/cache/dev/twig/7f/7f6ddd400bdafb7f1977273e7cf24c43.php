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

/* @ArkounayUxMedia/_ux_filemanager_modal.html.twig */
class __TwigTemplate_1ba2bfa90e07e02acbe66bbf8e2ee3fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArkounayUxMedia/_ux_filemanager_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArkounayUxMedia/_ux_filemanager_modal.html.twig"));

        // line 1
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"filemanager-modal-";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\"tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-xl\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File Manager"), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <iframe class=\"iframe\"
                        data-src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager", ["module" => 1, "conf" => (isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 13, $this->source); })()), "tree" => (isset($context["tree"]) || array_key_exists("tree", $context) ? $context["tree"] : (function () { throw new RuntimeError('Variable "tree" does not exist.', 13, $this->source); })()), "extra" => (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 13, $this->source); })())]), "html", null, true);
        echo "\"
                        width=\"100%\"
                        height=\"500\"></iframe>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ArkounayUxMedia/_ux_filemanager_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  63 => 13,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal -->
<div class=\"modal fade\" id=\"filemanager-modal-{{ form.vars.id }}\"tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-xl\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ 'File Manager'|trans }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <iframe class=\"iframe\"
                        data-src=\"{{ path('file_manager', {module:1, conf:conf, tree:tree, extra: extra}) }}\"
                        width=\"100%\"
                        height=\"500\"></iframe>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{ 'Close'|trans }}</button>
            </div>
        </div>
    </div>
</div>
", "@ArkounayUxMedia/_ux_filemanager_modal.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\arkounay\\ux-media\\templates\\_ux_filemanager_modal.html.twig");
    }
}
