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

/* @ArtgrisFileManager/views/_list.html.twig */
class __TwigTemplate_ce260130a41dd8f7434a7f6eb2009cb9 extends Template
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
            'file_action' => [$this, 'block_file_action'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"table-responsive list-blk\">
    <table class=\"table\">
        <colgroup>
            <col>
            <col>
            <col class=\"col-lg-7\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-1\">
            <col class=\"col-lg-2\">
        </colgroup>
        <thead class=\"thead-default\">
        <tr>
            <th>
                ";
        // line 15
        $this->displayBlock('select_all', $context, $blocks);
        // line 18
        echo "            </th>
            <th></th>
            <th>
                ";
        // line 21
        echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, ($context["fileManager"] ?? null), "name");
        echo "
            </th>
            <th class=\"hidden-xs\">
                ";
        // line 24
        echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, ($context["fileManager"] ?? null), "date");
        echo "
            </th>
            <th class=\"hidden-xs\">
                ";
        // line 27
        echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, ($context["fileManager"] ?? null), "size");
        echo "
            </th>
            <th class=\"hidden-xs\">
                ";
        // line 30
        echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, ($context["fileManager"] ?? null), "dimension");
        echo "
            </th>
            <th class=\"text-right\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("table.actions"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 36
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
            // line 37
            echo "            ";
            $context["file"] = twig_get_attribute($this->env, $this->source, $context["fileEntity"], "file", [], "any", false, false, false, 37);
            // line 38
            echo "            <tr class=\"file-wrapper ";
            ((twig_get_attribute($this->env, $this->source, $context["fileEntity"], "isImage", [], "method", false, false, false, 38)) ? (print ("img")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "type", [], "any", false, false, false, 38), "html", null, true))));
            echo "\">
                <td>
                    ";
            // line 40
            $this->displayBlock('file_checkbox', $context, $blocks);
            // line 44
            echo "                </td>
                <td>
                    ";
            // line 46
            $this->displayBlock('file_preview', $context, $blocks);
            // line 49
            echo "                </td>
                <td data-value=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 50), "html", null, true);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, $context["fileEntity"], "attribut", [], "any", false, false, false, 50);
            echo ">
                    ";
            // line 51
            $this->displayBlock('file_name', $context, $blocks);
            // line 54
            echo "                </td>
                <td class=\"hidden-xs\">
                    ";
            // line 56
            $this->displayBlock('file_date', $context, $blocks);
            // line 59
            echo "                </td>
                <td class=\"hidden-xs\">
                    ";
            // line 61
            $this->displayBlock('file_size', $context, $blocks);
            // line 64
            echo "                </td>
                <td class=\"hidden-xs\">
                    ";
            // line 66
            $this->displayBlock('file_dimension', $context, $blocks);
            // line 69
            echo "                </td>
                <td class=\"text-right\">
                    ";
            // line 71
            $this->displayBlock('file_action', $context, $blocks);
            // line 123
            echo "                </td>
            </tr>
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
        // line 126
        echo "        </tbody>
    </table>
</div>";
    }

    // line 15
    public function block_select_all($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                    <input type=\"checkbox\" id=\"select-all\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("select-all"), "html", null, true);
        echo "\">
                ";
    }

    // line 40
    public function block_file_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                        <input type=\"checkbox\" class=\"checkbox\" name=\"delete[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 41), "html", null, true);
        echo "\"
                               title=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                    ";
    }

    // line 46
    public function block_file_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                        ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "preview", [], "any", false, false, false, 47)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "preview", [], "any", false, false, false, 47), "html", [], "any", false, false, false, 47)) : (""));
        echo "
                    ";
    }

    // line 51
    public function block_file_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                        ";
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "preview", [], "any", false, true, false, 52), "folder", [], "any", true, true, false, 52)) ? (print (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "preview", [], "any", false, false, false, 52), "folder", [], "any", false, false, false, 52))) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 52), "html", null, true))));
        echo "
                    ";
    }

    // line 56
    public function block_file_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                        <small>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "mTime", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
        echo "</small>
                    ";
    }

    // line 61
    public function block_file_size($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                        <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "HTMLSize", [], "any", false, false, false, 62), "html", null, true);
        echo "</small>
                    ";
    }

    // line 66
    public function block_file_dimension($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                        <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "HTMLDimension", [], "any", false, false, false, 67), "html", null, true);
        echo "</small>
                    ";
    }

    // line 71
    public function block_file_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                        <span data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.delete"), "html", null, true);
        echo "\">
                        <button type=\"button\"
                                class=\"btn btn-xs btn-danger js-delete-modal\"
                                data-trigger=\"click\"
                                data-container=\"body\"
                                data-toggle=\"modal\"
                                data-target=\"#js-confirm-delete\"
                                data-placement=\"left\"
                                data-html=\"true\"
                                data-href='";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_delete", twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 81), ["delete[]" => twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 81)])), "html", null, true);
        echo "'>
                        <span class=\"far fa-trash-alt\"></span>
                        </button>
                    </span>
                        <span data-toggle=\"tooltip\" title=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.rename.file"), "html", null, true);
        echo "\">
                        <button type=\"button\"
                                class=\"btn btn-xs btn-default js-rename-modal\"
                                data-trigger=\"click\"
                                data-container=\"body\"
                                data-toggle=\"modal\"
                                data-target=\"#js-confirm-rename\"
                                data-placement=\"left\"
                                data-html=\"true\"
                                data-name='";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "basename", [0 => ("." . twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "extension", [], "any", false, false, false, 94))], "method", false, false, false, 94), "html", null, true);
        echo "'
                                data-extension='";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "extension", [], "any", false, false, false, 95), "html", null, true);
        echo "'
                                data-href='";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_rename", twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 96), ["fileName" => twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 96)])), "html", null, true);
        echo "'>
                        <span class=\"far fa-edit\"></span>
                        </button>
                    </span>
                        ";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "type", [], "any", false, false, false, 100) == "file")) {
            // line 101
            echo "                            <a data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.download"), "html", null, true);
            echo "\"
                               class=\"btn btn-xs btn-default js-download\"
                               href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_file", twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 103), ["fileName" => twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "fileName", [], "any", false, false, false, 103)])), "html", null, true);
            echo "\"
                               download=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "basename", [], "method", false, false, false, 104), "html", null, true);
            echo "\">
                                <span class=\"fas fa-download\"></span>
                            </a>
                            ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "isImage", [], "method", false, false, false, 107)) {
                // line 108
                echo "                                <span data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.preview.file"), "html", null, true);
                echo "\">
                                <button type=\"button\"
                                        class=\"btn btn-xs btn-default js-open-modal\"
                                        data-trigger=\"click\"
                                        data-container=\"body\"
                                        data-toggle=\"modal\"
                                        data-target=\"#js-display-image\"
                                        data-placement=\"left\"
                                        data-href='";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileEntity"] ?? null), "preview", [], "any", false, false, false, 116), "path", [], "any", false, false, false, 116), "html", null, true);
                echo "'>
                                <span class=\"fas fa-eye\"></span>
                                </button>
                            </span>
                            ";
            }
            // line 121
            echo "                        ";
        }
        // line 122
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/views/_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 122,  361 => 121,  353 => 116,  341 => 108,  339 => 107,  333 => 104,  329 => 103,  323 => 101,  321 => 100,  314 => 96,  310 => 95,  306 => 94,  294 => 85,  287 => 81,  274 => 72,  270 => 71,  263 => 67,  259 => 66,  252 => 62,  248 => 61,  241 => 57,  237 => 56,  230 => 52,  226 => 51,  219 => 47,  215 => 46,  209 => 42,  204 => 41,  200 => 40,  193 => 16,  189 => 15,  183 => 126,  167 => 123,  165 => 71,  161 => 69,  159 => 66,  155 => 64,  153 => 61,  149 => 59,  147 => 56,  143 => 54,  141 => 51,  135 => 50,  132 => 49,  130 => 46,  126 => 44,  124 => 40,  118 => 38,  115 => 37,  98 => 36,  91 => 32,  86 => 30,  80 => 27,  74 => 24,  68 => 21,  63 => 18,  61 => 15,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ArtgrisFileManager/views/_list.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\views\\_list.html.twig");
    }
}
