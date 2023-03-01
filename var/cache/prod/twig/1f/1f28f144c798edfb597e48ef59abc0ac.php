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

/* @ArtgrisFileManager/views/_thumbnail.html.twig */
class __TwigTemplate_f5183f7621903a4bcbffdf18ea8ca2d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'select_all' => [$this, 'block_select_all'],
            'file_checkbox' => [$this, 'block_file_checkbox'],
            'file_preview' => [$this, 'block_file_preview'],
            'file_name' => [$this, 'block_file_name'],
            'file_date' => [$this, 'block_file_date'],
            'file_size' => [$this, 'block_file_size'],
            'file_dimension' => [$this, 'block_file_dimension'],
            'list_action' => [$this, 'block_list_action'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row margin-bottom thumbnail-blk\">
    ";
        // line 2
        $this->displayBlock('select_all', $context, $blocks);
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fileArray"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["fileEntity"]) {
            // line 9
            echo "        ";
            $context["file"] = twig_get_attribute($this->env, $this->source, $context["fileEntity"], "file", [], "any", false, false, false, 9);
            // line 10
            echo "        <div class=\"file-wrapper ";
            ((twig_get_attribute($this->env, $this->source, $context["fileEntity"], "isImage", [], "method", false, false, false, 10)) ? (print ("img")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "type", [], "any", false, false, false, 10), "html", null, true))));
            echo " col-xs-6 col-sm-4 col-md-";
            echo (((twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "tree", [], "any", false, false, false, 10) == 0)) ? (3) : (4));
            echo " col-lg-2 text-center thumbnail\">
            ";
            // line 11
            $this->displayBlock('file_checkbox', $context, $blocks);
            // line 16
            echo "            ";
            $this->displayBlock('file_preview', $context, $blocks);
            // line 21
            echo "            <p ";
            echo twig_get_attribute($this->env, $this->source, $context["fileEntity"], "attribut", [], "any", false, false, false, 21);
            echo ">
                ";
            // line 22
            $this->displayBlock('file_name', $context, $blocks);
            // line 25
            echo "                <small>";
            $this->displayBlock('file_date', $context, $blocks);
            echo " ";
            $this->displayBlock('file_size', $context, $blocks);
            echo "</small>
                <br>
                ";
            // line 27
            $this->displayBlock('file_dimension', $context, $blocks);
            // line 30
            echo "                <br>
            </p>
            <div class=\"row\">
                ";
            // line 33
            $this->displayBlock('list_action', $context, $blocks);
            // line 85
            echo "            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fileEntity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "</div>
";
    }

    // line 2
    public function block_select_all($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"col-md-12 select-all\">
            <input type=\"checkbox\" id=\"select-all\" title=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("select-all"), "html", null, true);
        echo "\"> <label
                    for=\"select-all\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("select-all"), "html", null, true);
        echo "</label>
        </div>
    ";
    }

    // line 11
    public function block_file_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                <input type=\"checkbox\" class=\"checkbox\" name=\"delete[]\"
                       value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 13), "html", null, true);
        echo "\"
                       title=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
            ";
    }

    // line 16
    public function block_file_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                <div class=\"thumbnail-img\">
                    ";
        // line 18
        echo ((twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "preview", [], "any", false, false, false, 18)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "preview", [], "any", false, false, false, 18), "html", [], "any", false, false, false, 18)) : (""));
        echo "
                </div>
            ";
    }

    // line 22
    public function block_file_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                    ";
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "preview", [], "any", false, true, false, 23), "folder", [], "any", true, true, false, 23)) ? (print (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "preview", [], "any", false, false, false, 23), "folder", [], "any", false, false, false, 23))) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 23), "html", null, true))));
        echo "<br>
                ";
    }

    // line 25
    public function block_file_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "file", [], "any", false, false, false, 25), "mTime", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
    }

    public function block_file_size($context, array $blocks = [])
    {
        $macros = $this->macros;
        ((twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "HTMLSize", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, (" - " . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "HTMLSize", [], "any", false, false, false, 25))), "html", null, true))) : (print ("")));
    }

    // line 27
    public function block_file_dimension($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                    <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "HTMLDimension", [], "any", false, false, false, 28), "html", null, true);
        echo "</small>
                ";
    }

    // line 33
    public function block_list_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                    <span data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.delete"), "html", null, true);
        echo "\">
                        <button type=\"button\"
                                class=\"btn btn-sm btn-danger js-delete-modal\"
                                data-trigger=\"click\"
                                data-container=\"body\"
                                data-toggle=\"modal\"
                                data-target=\"#js-confirm-delete\"
                                data-placement=\"left\"
                                data-html=\"true\"
                                data-href='";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_delete", twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 43), ["delete[]" => twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 43)])), "html", null, true);
        echo "'>
                           <span class=\"far fa-trash-alt\"></span>
                        </button>
                    </span>
                    <span data-toggle=\"tooltip\" title=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.rename.file"), "html", null, true);
        echo "\">
                    <button type=\"button\"
                            class=\"btn btn-sm btn-default js-rename-modal\"
                            data-trigger=\"click\"
                            data-container=\"body\"
                            data-toggle=\"modal\"
                            data-target=\"#js-confirm-rename\"
                            data-placement=\"left\"
                            data-html=\"true\"
                            data-name='";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "basename", [0 => ("." . twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "extension", [], "any", false, false, false, 56))], "method", false, false, false, 56), "html", null, true);
        echo "'
                            data-extension='";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "extension", [], "any", false, false, false, 57), "html", null, true);
        echo "'
                            data-href='";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_rename", twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 58), ["fileName" => twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 58)])), "html", null, true);
        echo "'>
                    <span class=\"far fa-edit\"></span>
                    </button>
                </span>
                    ";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "type", [], "any", false, false, false, 62) == "file")) {
            // line 63
            echo "                        <a data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.download"), "html", null, true);
            echo "\"
                           class=\"btn btn-sm btn-default js-download\"
                           href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_file", twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 65), ["fileName" => twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 65)])), "html", null, true);
            echo "\"
                           download>
                            <span class=\"fas fa-download\"></span>
                        </a>
                        ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "isImage", [], "method", false, false, false, 69)) {
                // line 70
                echo "                            <span data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.preview.file"), "html", null, true);
                echo "\">
                                <button type=\"button\"
                                        class=\"btn btn-sm btn-default js-open-modal\"
                                        data-trigger=\"click\"
                                        data-container=\"body\"
                                        data-toggle=\"modal\"
                                        data-target=\"#js-display-image\"
                                        data-placement=\"left\"
                                        data-href='";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "preview", [], "any", false, false, false, 78), "path", [], "any", false, false, false, 78), "html", null, true);
                echo "'>
                                <span class=\"fas fa-eye\"></span>
                                </button>
                            </span>
                        ";
            }
            // line 83
            echo "                    ";
        }
        // line 84
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/views/_thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 84,  300 => 83,  292 => 78,  280 => 70,  278 => 69,  271 => 65,  265 => 63,  263 => 62,  256 => 58,  252 => 57,  248 => 56,  236 => 47,  229 => 43,  216 => 34,  212 => 33,  205 => 28,  201 => 27,  188 => 25,  181 => 23,  177 => 22,  170 => 18,  167 => 17,  163 => 16,  157 => 14,  153 => 13,  150 => 12,  146 => 11,  139 => 5,  135 => 4,  132 => 3,  128 => 2,  123 => 88,  107 => 85,  105 => 33,  100 => 30,  98 => 27,  90 => 25,  88 => 22,  83 => 21,  80 => 16,  78 => 11,  71 => 10,  68 => 9,  50 => 8,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ArtgrisFileManager/views/_thumbnail.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\views\\_thumbnail.html.twig");
    }
}
