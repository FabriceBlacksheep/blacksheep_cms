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

/* @ArtgrisFileManager/views/_modals.html.twig */
class __TwigTemplate_bb05076d9bef0457205d9a82b52f6245 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'delete_modal' => [$this, 'block_delete_modal'],
            'rename_modal' => [$this, 'block_rename_modal'],
            'add_modal' => [$this, 'block_add_modal'],
            'preview_modal' => [$this, 'block_preview_modal'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('delete_modal', $context, $blocks);
        // line 24
        $this->displayBlock('rename_modal', $context, $blocks);
        // line 48
        $this->displayBlock('add_modal', $context, $blocks);
        // line 72
        $this->displayBlock('preview_modal', $context, $blocks);
    }

    // line 1
    public function block_delete_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"modal fade\" id=\"js-confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.delete"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.delete"), "html", null, true);
        echo "
                </div>
                <div class=\"modal-footer\">
                    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formDelete"] ?? null), 'form_start', ["attr" => ["class" => "pull-right"]]);
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formDelete"] ?? null), 'widget');
        echo "
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formDelete"] ?? null), 'form_end');
        echo "
                    <button type=\"button\" class=\"btn btn-default pull-left\" title=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.cancel"), "html", null, true);
        echo "\"
                            data-dismiss=\"modal\"> ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.cancel"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_rename_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    <div class=\"modal fade\" id=\"js-confirm-rename\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formRename"] ?? null), 'form_start');
        echo "
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.rename.file"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRename"] ?? null), "name", [], "any", false, false, false, 35), 'row');
        echo "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default pull-left\"
                            data-dismiss=\"modal\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.cancel"), "html", null, true);
        echo "
                    </button>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRename"] ?? null), "send", [], "any", false, false, false, 41), 'row');
        echo "
                </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formRename"] ?? null), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 48
    public function block_add_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    <div class=\"modal fade\" id=\"addFolder\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.add.folder"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 59), 'row');
        echo "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default pull-left\"
                            data-dismiss=\"modal\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.cancel"), "html", null, true);
        echo "
                    </button>
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "send", [], "any", false, false, false, 65), 'row');
        echo "
                </div>
                ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 72
    public function block_preview_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    <div class=\"modal fade\" id=\"js-display-image\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                </div>
                <div class=\"modal-body\">
                    <img src=\"\" class=\"img-responsive\" alt=\"\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default pull-left\"
                            data-dismiss=\"modal\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.cancel"), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/views/_modals.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  215 => 85,  201 => 73,  197 => 72,  188 => 67,  183 => 65,  178 => 63,  171 => 59,  165 => 56,  158 => 52,  153 => 49,  149 => 48,  140 => 43,  135 => 41,  130 => 39,  123 => 35,  117 => 32,  110 => 28,  105 => 25,  101 => 24,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  69 => 11,  63 => 8,  55 => 2,  51 => 1,  47 => 72,  45 => 48,  43 => 24,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ArtgrisFileManager/views/_modals.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\views\\_modals.html.twig");
    }
}
