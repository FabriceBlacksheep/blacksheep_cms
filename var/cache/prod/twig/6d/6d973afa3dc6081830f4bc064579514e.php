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

/* @ArtgrisFileManager/manager.html.twig */
class __TwigTemplate_983fd16497377562da716607716b25ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'progress_bar' => [$this, 'block_progress_bar'],
            'actions' => [$this, 'block_actions'],
            'display' => [$this, 'block_display'],
            'tree' => [$this, 'block_tree'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "bootstrap_3_layout.html.twig"], true);
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["formRename"] ?? null), [0 => "bootstrap_3_layout.html.twig"], true);
        // line 3
        echo "<!doctype html>
<html lang=\"en\" id=\"dropzone\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 142
        $this->displayBlock('javascripts', $context, $blocks);
        // line 200
        echo "</body>
</html>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        <link rel=\"stylesheet\"
              href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\"
              integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/jstree/dist/themes/default/style.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/css/jquery.fileupload.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/css/manager.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/jQuery-contextMenu/dist/jquery.contextMenu.min.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 23
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "File Manager";
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    <div class=\"container-fluid \">
        ";
        // line 28
        $this->displayBlock('progress_bar', $context, $blocks);
        // line 36
        echo "        <div class=\"row top-bar\" id=\"top-bar\">
            ";
        // line 37
        $this->displayBlock('actions', $context, $blocks);
        // line 94
        echo "            ";
        $this->displayBlock('display', $context, $blocks);
        // line 117
        echo "        </div>
        <div class=\"row\">
            ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "tree", [], "any", false, false, false, 119)) {
            // line 120
            echo "            <div class=\"col-xs-12  col-sm-4 col-md-3 col-lg-2\">
                ";
            // line 121
            $this->displayBlock('tree', $context, $blocks);
            // line 126
            echo "            </div>
            <div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-10 no-tree-blk\">
                ";
        } else {
            // line 129
            echo "                <div class=\"col-lg-12\">
                    ";
        }
        // line 131
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "                </div>
            </div>
        </div>
        ";
        // line 139
        $this->loadTemplate("@ArtgrisFileManager/views/_modals.html.twig", "@ArtgrisFileManager/manager.html.twig", 139)->display($context);
        // line 140
        echo "    </div>
";
    }

    // line 28
    public function block_progress_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            <div class=\"row\">
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0\" aria-valuenow=\"0\" aria-valuemin=\"0\"
                         aria-valuemax=\"100\"></div>
                </div>
            </div>
        ";
    }

    // line 37
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                <a type=\"button\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.tree"), "html", null, true);
        echo "\"
                   href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager", twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 39), ["tree" => (((twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "tree", [], "any", false, false, false, 39) == true)) ? (0) : (1))])), "html", null, true);
        echo "\"
                   class=\"btn btn-sm btn-default ";
        // line 40
        echo ((twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "tree", [], "any", false, false, false, 40)) ? ("active") : (""));
        echo "\">
                    <span class=\"fas fa-bars\"></span>
                </a>
                ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "parent", [], "any", false, false, false, 43)) {
            // line 44
            echo "                    <a class=\"btn btn-default btn-sm\"
                       title=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.parent"), "html", null, true);
            echo "\"
                       href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "parent", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
                        <span class=\"fas fa-level-up-alt\"></span></a>
                ";
        }
        // line 49
        echo "                <button type=\"button\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.refresh"), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm \"
                        onClick=\"window.location.reload()\">
                    <span class=\"fas fa-sync\"></span>
                </button>

                <span class=\"btn btn-success btn-sm fileinput-button btn-action\">
                    <span class=\"far fa-file\"></span>
                    <span class=\"bar-action\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.add.files"), "html", null, true);
        echo "</span>
                        <input id=\"fileupload\" type=\"file\"
                               data-url=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_upload", twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 58)), "html", null, true);
        echo "\"
                               name=\"files[]\" multiple=\"\"
                               accept=\"";
        // line 60
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "configuration", [], "any", false, true, false, 60), "accept", [], "any", true, true, false, 60)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "configuration", [], "any", false, false, false, 60), "accept", [], "any", false, false, false, 60), "html", null, true))) : (print (((twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "type", [], "any", false, false, false, 60)) ? ($this->extensions['Artgris\Bundle\FileManagerBundle\Twig\FileTypeExtension']->accept(twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "type", [], "any", false, false, false, 60))) : ("")))));
        echo "\">
                </span>
                <button type=\"button\" class=\"btn btn-primary btn-sm btn-action\" data-toggle=\"modal\"
                        data-target=\"#addFolder\">
                    <span class=\"far fa-folder-open\"></span>
                    <span class=\"bar-action\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.add.folder"), "html", null, true);
        echo "</span>
                </button>
                ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "parent", [], "any", false, false, false, 67)) {
            // line 68
            echo "                    <button type=\"button\"
                            class=\"btn btn-sm btn-danger btn-action js-delete-modal\"
                            data-trigger=\"click\"
                            data-container=\"body\"
                            data-toggle=\"modal\"
                            data-target=\"#js-confirm-delete\"
                            data-placement=\"left\"
                            data-html=\"true\"
                            data-href='";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_delete", twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 76)), "html", null, true);
            echo "'>
                        <span class=\"far fa-trash-alt\"></span>
                        <span class=\"bar-action\">";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.delete.current"), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 81
        echo "                <a id=\"js-delete-multiple-modal\"
                   class=\"btn btn-sm btn-danger btn-action disabled\"
                   type=\"button\"
                   data-trigger=\"click\"
                   data-container=\"body\"
                   data-toggle=\"modal\"
                   data-target=\"#js-confirm-delete\"
                   data-placement=\"left\"
                   data-html=\"true\">
                    <span class=\"far fa-check-square\"></span>
                    <span class=\"bar-action\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("button.delete.selected"), "html", null, true);
        echo "</span>
                </a>
            ";
    }

    // line 94
    public function block_display($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "                <div class=\"btn-group pull-right\">
                    <input type=\"search\" class=\"form-control search\"
                           name=\"search\" id=\"search\" placeholder=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.placeholder"), "html", null, true);
        echo "\" aria-describedby=\"search\">

                    ";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "view", [], "any", false, false, false, 99) != "list")) {
            // line 100
            echo "                        ";
            echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, ($context["fileManager"] ?? null), "name");
            echo "
                        ";
            // line 101
            echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, ($context["fileManager"] ?? null), "date");
            echo "
                        ";
            // line 102
            echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, ($context["fileManager"] ?? null), "size");
            echo "
                        ";
            // line 103
            echo $this->extensions['Artgris\Bundle\FileManagerBundle\Twig\OrderExtension']->order($this->env, ($context["fileManager"] ?? null), "dimension");
            echo "
                    ";
        }
        // line 105
        echo "                    <a type=\"button\"
                       href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager", twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 106), ["view" => "list"])), "html", null, true);
        echo "\"
                       class=\"btn btn-sm btn-default ";
        // line 107
        echo (((twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "view", [], "any", false, false, false, 107) == "list")) ? ("active") : (""));
        echo "\">
                        <span class=\"fas fa-th-list\"></span>
                    </a>
                    <a type=\"button\"
                       href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager", twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 111), ["view" => "thumbnail"])), "html", null, true);
        echo "\"
                       class=\"btn btn-sm btn-default ";
        // line 112
        echo (((twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "view", [], "any", false, false, false, 112) == "thumbnail")) ? ("active") : (""));
        echo "\">
                        <span class=\"fas fa-th\"></span>
                    </a>
                </div>
            ";
    }

    // line 121
    public function block_tree($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "                    <div class=\"table-responsive\">
                        <div id=\"tree\"></div>
                    </div>
                ";
    }

    // line 131
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "                        <form id=\"form-multiple-delete\">
                            ";
        // line 133
        $this->loadTemplate("@ArtgrisFileManager/views/_manager_view.html.twig", "@ArtgrisFileManager/manager.html.twig", 133)->display(twig_to_array(["fileManager" => ($context["fileManager"] ?? null), "fileArray" => ($context["fileArray"] ?? null), "formDelete" => ($context["formDelete"] ?? null)]));
        // line 134
        echo "                        </form>
                    ";
    }

    // line 142
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/jstree/dist/jstree.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/blueimp-file-upload/js/jquery.fileupload-process.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/sticky-kit/jquery.sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/jQuery-contextMenu/dist/jquery.contextMenu.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/libs/jquery-lazy/jquery.lazy.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var treedata = ";
        // line 156
        echo ($context["treeData"] ?? null);
        echo ";
        var tree = ";
        // line 157
        echo ((twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "tree", [], "any", false, false, false, 157)) ? ("true") : ("false"));
        echo "
        var moduleName = '";
        // line 158
        ((twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "module", [], "any", false, false, false, 158)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "module", [], "any", false, false, false, 158), "html", null, true))) : (print (0)));
        echo "';
        var successMessage = '";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file.add.success"), "html", null, true);
        echo "';
        var url = \"";
        // line 160
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager", twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 160), ["json" => true])), "js"), "html", null, true);
        echo "\"
        var urldelete = \"";
        // line 161
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_delete", twig_get_attribute($this->env, $this->source, ($context["fileManager"] ?? null), "queryParameters", [], "any", false, false, false, 161)), "js"), "html", null, true);
        echo "\"
        var deleteMessage = \"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.delete"), "html", null, true);
        echo "\"
        var renameMessage = \"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.rename.file"), "html", null, true);
        echo "\"
        var downloadMessage = \"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.download"), "html", null, true);
        echo "\"
        var previewMessage = \"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.preview.file"), "html", null, true);
        echo "\"
    </script>
    <script>
        // display alert
        function displayAlert(type, msg) {
            \$.notify({
                message: msg
            }, {
                type: type,
                placement: {
                    from: \"bottom\",
                    align: \"left\"
                },
                template: '<div data-notify=\"container\" class=\"col-xs-5 col-md-4 col-lg-3 alert alert-{0}\" role=\"alert\">' +
                    '<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">×</button>' +
                    '<span data-notify=\"icon\"></span> ' +
                    '<span data-notify=\"title\">{1}</span> ' +
                    '<span data-notify=\"message\">{2}</span>' +
                    '<div class=\"progress\" data-notify=\"progressbar\">' +
                    '<div class=\"progress-bar progress-bar-{0}\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
                    '</div>' +
                    '<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
                    '</div>'
            });
        }

        // display session flash messages
        ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 192), "flashbag", [], "any", false, false, false, 192), "all", [], "any", false, false, false, 192));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 193
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 194
                echo "        displayAlert('";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "js"), "html", null, true);
                echo "')
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "    </script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/artgrisfilemanager/js/manager.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ArtgrisFileManager/manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 198,  523 => 197,  517 => 196,  506 => 194,  501 => 193,  497 => 192,  467 => 165,  463 => 164,  459 => 163,  455 => 162,  451 => 161,  447 => 160,  443 => 159,  439 => 158,  435 => 157,  431 => 156,  426 => 154,  421 => 152,  417 => 151,  413 => 150,  409 => 149,  405 => 148,  401 => 147,  397 => 146,  393 => 145,  389 => 144,  384 => 143,  380 => 142,  375 => 134,  373 => 133,  370 => 132,  366 => 131,  359 => 122,  355 => 121,  346 => 112,  342 => 111,  335 => 107,  331 => 106,  328 => 105,  323 => 103,  319 => 102,  315 => 101,  310 => 100,  308 => 99,  303 => 97,  299 => 95,  295 => 94,  288 => 91,  276 => 81,  270 => 78,  265 => 76,  255 => 68,  253 => 67,  248 => 65,  240 => 60,  235 => 58,  230 => 56,  219 => 49,  213 => 46,  209 => 45,  206 => 44,  204 => 43,  198 => 40,  194 => 39,  189 => 38,  185 => 37,  175 => 29,  171 => 28,  166 => 140,  164 => 139,  159 => 136,  156 => 131,  152 => 129,  147 => 126,  145 => 121,  142 => 120,  140 => 119,  136 => 117,  133 => 94,  131 => 37,  128 => 36,  126 => 28,  123 => 27,  119 => 26,  112 => 23,  106 => 21,  101 => 19,  97 => 18,  92 => 16,  84 => 11,  81 => 10,  77 => 9,  71 => 200,  69 => 142,  67 => 26,  60 => 23,  58 => 9,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ArtgrisFileManager/manager.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\artgris\\filemanager-bundle\\Resources\\views\\manager.html.twig");
    }
}
