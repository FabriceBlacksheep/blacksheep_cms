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

/* @ArkounayUxMedia/_ux_media_widget.html.twig */
class __TwigTemplate_b4e88a40f1b89186f5fdba9a95c51c42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'file_preview' => [$this, 'block_file_preview'],
            'fields' => [$this, 'block_fields'],
            'media_buttons' => [$this, 'block_media_buttons'],
            'filemanager_modal' => [$this, 'block_filemanager_modal'],
            'collection_buttons' => [$this, 'block_collection_buttons'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArkounayUxMedia/_ux_media_widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ArkounayUxMedia/_ux_media_widget.html.twig"));

        // line 1
        $context["collection"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 1), "vars", [], "any", false, true, false, 1), "collection", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 1), "vars", [], "any", false, true, false, 1), "collection", [], "any", false, false, false, 1), false)) : (false));
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"ux-media mb-2 border bg-white rounded ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "errors", [], "any", false, false, false, 3)) > 0)) {
            echo "error";
        }
        echo "\" data-controller=\"arkounay--ux-media--media\" data-arkounay--ux-media--media-path-value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "html", null, true);
        echo "\" data-filemanager-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager_upload", ["conf" => (isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 3, $this->source); })()), "extra" => (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 3, $this->source); })())]), "html", null, true);
        echo "\" data-action=\"dragenter->arkounay--ux-media--media#dragenter dragleave->arkounay--ux-media--media#dragleave dragover->arkounay--ux-media--media#dragover drop->arkounay--ux-media--media#drop\">

        <div class=\"d-flex flex-column flex-sm-row align-items-center p-2\">

            <div class=\"d-flex flex-column align-content-center align-items-center\">
                ";
        // line 8
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 8), "vars", [], "any", false, true, false, 8), "display_sort_buttons", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 8), "vars", [], "any", false, true, false, 8), "display_sort_buttons", [], "any", false, false, false, 8), false)) : (false))) {
            // line 9
            echo "                    <a href=\"#\" data-action=\"arkounay--ux-collection--collection#moveUp\" data-arkounay--ux-collection--collection-target=\"up\" class=\"collection-up btn btn-collection\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-arrow-up\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"1\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\" />
                            <line x1=\"18\" y1=\"11\" x2=\"12\" y2=\"5\" />
                            <line x1=\"6\" y1=\"11\" x2=\"12\" y2=\"5\" />
                        </svg>
                    </a>
                    <a href=\"#\" data-action=\"arkounay--ux-collection--collection#moveDown\" data-arkounay--ux-collection--collection-target=\"down\" class=\"collection-down btn btn-collection\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-arrow-down\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"1\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\" />
                            <line x1=\"18\" y1=\"13\" x2=\"12\" y2=\"19\" />
                            <line x1=\"6\" y1=\"13\" x2=\"12\" y2=\"19\" />
                        </svg>
                    </a>
                ";
        }
        // line 26
        echo "            </div>

            ";
        // line 28
        $context["base_path"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "allow_crop", [], "any", false, false, false, 28)) ? ($this->extensions['Arkounay\Bundle\UxMediaBundle\Service\FileManagerConfigurationService']->getWebPath((isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 28, $this->source); })()), (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 28, $this->source); })()))) : (1));
        // line 29
        echo "            ";
        $this->displayBlock('file_preview', $context, $blocks);
        // line 33
        echo "
            ";
        // line 35
        echo "            <div class=\"flex-grow-1\">
                ";
        // line 36
        $this->displayBlock('fields', $context, $blocks);
        // line 42
        echo "            </div>

            <div class=\"p-2 text-center d-flex align-items-center\">
                <div class=\"btn-group\" role=\"group\" style=\"height: 40px\">
                    ";
        // line 46
        $this->displayBlock('media_buttons', $context, $blocks);
        // line 80
        echo "                </div>

                ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "vars", [], "any", false, false, false, 82), "display_file_manager", [], "any", false, false, false, 82)) {
            // line 83
            echo "                    ";
            $this->displayBlock('filemanager_modal', $context, $blocks);
            // line 106
            echo "                ";
        }
        // line 107
        echo "
                ";
        // line 108
        if ((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 108, $this->source); })())) {
            // line 109
            echo "                    ";
            $this->displayBlock('collection_buttons', $context, $blocks);
            // line 118
            echo "                ";
        }
        // line 119
        echo "
            </div>
        </div>

        <div data-arkounay--ux-media--media-target=\"fileError\" class=\"small text-danger m-2 mx-sm-3 text-center text-sm-start d-none\">
            <span data-arkounay--ux-media--media-target=\"fileErrorMessage\"></span>
            <button type=\"button\" data-action=\"arkounay--ux-media--media#clearErrorMessage\" class=\"collection-error-message-button btn text-danger\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-x\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"#FF0000\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                    <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\" />
                    <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\" />
                </svg>
            </button>
        </div>
    </div>
";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_parse_4_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_file_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_preview"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_preview"));

        // line 30
        echo "                <div class=\"img-preview text-center p-2\" data-arkounay--ux-media--media-target=\"filePreview\" id=\"preview-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" data-conf=\"";
        echo twig_escape_filter($this->env, (isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" data-extra=\"";
        echo twig_escape_filter($this->env, json_encode((isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 30, $this->source); })())), "html", null, true);
        echo "\" data-base-path=\"";
        echo twig_escape_filter($this->env, (isset($context["base_path"]) || array_key_exists("base_path", $context) ? $context["base_path"] : (function () { throw new RuntimeError('Variable "base_path" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\">
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fields"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fields"));

        // line 37
        echo "                    <input type=\"text\" class=\"form-control\" data-action=\"arkounay--ux-media--media#updatePathValue\" data-arkounay--ux-media--media-target=\"inputPath\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "full_name", [], "any", false, false, false, 37), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "required", [], "any", false, false, false, 37)) {
            echo "required=\"required\"";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ux_media.path.placeholder"), "html", null, true);
        echo "\" ";
        echo ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 37), "readonly", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 37), "readonly", [], "any", false, false, false, 37))) : (""))) ? ("readonly=\"readonly\"") : (""));
        echo ">
                    <div class=\"progress d-none\" data-arkounay--ux-media--media-target=\"progress\">
                        <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 25%\"></div>
                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_media_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "media_buttons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "media_buttons"));

        // line 47
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "allow_crop", [], "any", false, false, false, 47)) {
            // line 48
            echo "                            <button type=\"button\" class=\"btn btn-light\" data-base-path=\"";
            echo twig_escape_filter($this->env, (isset($context["base_path"]) || array_key_exists("base_path", $context) ? $context["base_path"] : (function () { throw new RuntimeError('Variable "base_path" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#crop-modal-";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "\" data-bs-backdrop=\"static\" data-arkounay--ux-media--media-target=\"cropButton\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-crop\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#2c3e50\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                    <path d=\"M8 5v10a1 1 0 0 0 1 1h10\" />
                                    <path d=\"M5 8h10a1 1 0 0 1 1 1v10\" />
                                </svg>
                            </button>
                            ";
            // line 55
            $this->loadTemplate("@ArkounayUxMedia/_ux_crop_modal.html.twig", "@ArkounayUxMedia/_ux_media_widget.html.twig", 55)->display(twig_array_merge($context, ["crop_options" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "vars", [], "any", false, false, false, 55), "crop_options", [], "any", false, false, false, 55)]));
            // line 56
            echo "                        ";
        }
        // line 57
        echo "
                        <button type=\"button\" class=\"btn btn-light btn-upload\" data-controller=\"arkounay--ux-media--upload\" data-action=\"arkounay--ux-media--upload#click\">
                            <span>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-upload\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                  <path d=\"M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2\" />
                                  <polyline points=\"7 9 12 4 17 9\" />
                                  <line x1=\"12\" y1=\"4\" x2=\"12\" y2=\"16\" />
                                </svg>
                            </span>
                            <input class=\"fileupload d-none\" data-arkounay--ux-media--upload-target=\"inputFile\" data-action=\"arkounay--ux-media--media#upload\" type=\"file\" name=\"files[]\" multiple=\"\">
                        </button>

                        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "vars", [], "any", false, false, false, 70), "display_file_manager", [], "any", false, false, false, 70)) {
            // line 71
            echo "                            <button type=\"button\" class=\"btn btn-light btn-manager\" data-bs-toggle=\"modal\" data-bs-target=\"#filemanager-modal-";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 71, $this->source); })()), "html", null, true);
            echo "\" data-action=\"arkounay--ux-media--media#openFileManager\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-folder\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                    <path d=\"M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2\" />
                                </svg>
                            </button>

                        ";
        }
        // line 79
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_filemanager_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filemanager_modal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filemanager_modal"));

        // line 84
        echo "                        <div class=\"modal fade media-modal\" id=\"filemanager-modal-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vars", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" data-arkounay--ux-media--media-target=\"fileManagerModal\">
                            <div class=\"modal-dialog modal-xl\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File Manager"), "html", null, true);
        echo "</h5>
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <iframe class=\"iframe\"
                                                data-src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_manager", ["module" => 1, "conf" => (isset($context["conf"]) || array_key_exists("conf", $context) ? $context["conf"] : (function () { throw new RuntimeError('Variable "conf" does not exist.', 94, $this->source); })()), "tree" => (isset($context["tree"]) || array_key_exists("tree", $context) ? $context["tree"] : (function () { throw new RuntimeError('Variable "tree" does not exist.', 94, $this->source); })()), "extra" => (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 94, $this->source); })())]), "html", null, true);
        echo "\"
                                                width=\"100%\"
                                                height=\"500\"
                                                frameborder=\"0\"></iframe>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_collection_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_buttons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_buttons"));

        // line 110
        echo "                        <button type=\"button\" data-action=\"arkounay--ux-collection--collection#remove\" data-arkounay--ux-collection--collection-target=\"delete\" style=\"height: 40px\" class=\"collection-remove btn btn-collection btn-collection-remove text-danger\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-x\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"#FF0000\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\" />
                                <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\" />
                            </svg>
                        </button>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@ArkounayUxMedia/_ux_media_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 110,  356 => 109,  340 => 100,  331 => 94,  322 => 88,  314 => 84,  304 => 83,  294 => 79,  282 => 71,  280 => 70,  265 => 57,  262 => 56,  260 => 55,  247 => 48,  244 => 47,  234 => 46,  206 => 37,  196 => 36,  174 => 30,  164 => 29,  154 => 2,  136 => 119,  133 => 118,  130 => 109,  128 => 108,  125 => 107,  122 => 106,  119 => 83,  117 => 82,  113 => 80,  111 => 46,  105 => 42,  103 => 36,  100 => 35,  97 => 33,  94 => 29,  92 => 28,  88 => 26,  69 => 9,  67 => 8,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set collection = form.parent.vars.collection|default(false) %}
{% apply spaceless %}
    <div class=\"ux-media mb-2 border bg-white rounded {% if form.vars.errors|length > 0 %}error{% endif %}\" data-controller=\"arkounay--ux-media--media\" data-arkounay--ux-media--media-path-value=\"{{ form.vars.value }}\" data-filemanager-url=\"{{ path('file_manager_upload', {conf: conf, extra: extra}) }}\" data-action=\"dragenter->arkounay--ux-media--media#dragenter dragleave->arkounay--ux-media--media#dragleave dragover->arkounay--ux-media--media#dragover drop->arkounay--ux-media--media#drop\">

        <div class=\"d-flex flex-column flex-sm-row align-items-center p-2\">

            <div class=\"d-flex flex-column align-content-center align-items-center\">
                {% if (form.parent.vars.display_sort_buttons)|default(false) %}
                    <a href=\"#\" data-action=\"arkounay--ux-collection--collection#moveUp\" data-arkounay--ux-collection--collection-target=\"up\" class=\"collection-up btn btn-collection\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-arrow-up\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"1\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\" />
                            <line x1=\"18\" y1=\"11\" x2=\"12\" y2=\"5\" />
                            <line x1=\"6\" y1=\"11\" x2=\"12\" y2=\"5\" />
                        </svg>
                    </a>
                    <a href=\"#\" data-action=\"arkounay--ux-collection--collection#moveDown\" data-arkounay--ux-collection--collection-target=\"down\" class=\"collection-down btn btn-collection\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-arrow-down\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"1\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                            <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\" />
                            <line x1=\"18\" y1=\"13\" x2=\"12\" y2=\"19\" />
                            <line x1=\"6\" y1=\"13\" x2=\"12\" y2=\"19\" />
                        </svg>
                    </a>
                {% endif %}
            </div>

            {% set base_path = form.vars.allow_crop ? get_web_path(conf, extra) : 1 %}
            {% block file_preview %}
                <div class=\"img-preview text-center p-2\" data-arkounay--ux-media--media-target=\"filePreview\" id=\"preview-{{ form.vars.id }}\" data-id=\"{{ id }}\" data-conf=\"{{ conf }}\" data-extra=\"{{ extra|json_encode }}\" data-base-path=\"{{ base_path }}\">
                </div>
            {% endblock %}

            {#label + input#}
            <div class=\"flex-grow-1\">
                {% block fields %}
                    <input type=\"text\" class=\"form-control\" data-action=\"arkounay--ux-media--media#updatePathValue\" data-arkounay--ux-media--media-target=\"inputPath\" id=\"{{ form.vars.id }}\" name=\"{{ form.vars.full_name }}\" {% if form.vars.required %}required=\"required\"{% endif %} value=\"{{ form.vars.value }}\" placeholder=\"{{ 'ux_media.path.placeholder'|trans }}\" {{ form.vars.readonly|default ? 'readonly=\"readonly\"' }}>
                    <div class=\"progress d-none\" data-arkounay--ux-media--media-target=\"progress\">
                        <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 25%\"></div>
                    </div>
                {% endblock %}
            </div>

            <div class=\"p-2 text-center d-flex align-items-center\">
                <div class=\"btn-group\" role=\"group\" style=\"height: 40px\">
                    {% block media_buttons %}
                        {% if form.vars.allow_crop %}
                            <button type=\"button\" class=\"btn btn-light\" data-base-path=\"{{ base_path }}\" data-bs-toggle=\"modal\" data-bs-target=\"#crop-modal-{{ id }}\" data-bs-backdrop=\"static\" data-arkounay--ux-media--media-target=\"cropButton\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-crop\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#2c3e50\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                    <path d=\"M8 5v10a1 1 0 0 0 1 1h10\" />
                                    <path d=\"M5 8h10a1 1 0 0 1 1 1v10\" />
                                </svg>
                            </button>
                            {% include '@ArkounayUxMedia/_ux_crop_modal.html.twig' with {crop_options: form.vars.crop_options} %}
                        {% endif %}

                        <button type=\"button\" class=\"btn btn-light btn-upload\" data-controller=\"arkounay--ux-media--upload\" data-action=\"arkounay--ux-media--upload#click\">
                            <span>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-upload\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                  <path d=\"M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2\" />
                                  <polyline points=\"7 9 12 4 17 9\" />
                                  <line x1=\"12\" y1=\"4\" x2=\"12\" y2=\"16\" />
                                </svg>
                            </span>
                            <input class=\"fileupload d-none\" data-arkounay--ux-media--upload-target=\"inputFile\" data-action=\"arkounay--ux-media--media#upload\" type=\"file\" name=\"files[]\" multiple=\"\">
                        </button>

                        {% if form.vars.display_file_manager %}
                            <button type=\"button\" class=\"btn btn-light btn-manager\" data-bs-toggle=\"modal\" data-bs-target=\"#filemanager-modal-{{ id }}\" data-action=\"arkounay--ux-media--media#openFileManager\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-folder\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                    <path d=\"M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2\" />
                                </svg>
                            </button>

                        {% endif %}
                    {% endblock %}
                </div>

                {% if form.vars.display_file_manager %}
                    {% block filemanager_modal %}
                        <div class=\"modal fade media-modal\" id=\"filemanager-modal-{{ form.vars.id }}\" tabindex=\"-1\" role=\"dialog\" data-arkounay--ux-media--media-target=\"fileManagerModal\">
                            <div class=\"modal-dialog modal-xl\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">{{ 'File Manager'|trans }}</h5>
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <iframe class=\"iframe\"
                                                data-src=\"{{ path('file_manager', {module:1, conf:conf, tree:tree, extra:extra}) }}\"
                                                width=\"100%\"
                                                height=\"500\"
                                                frameborder=\"0\"></iframe>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ 'Close'|trans }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endblock %}
                {% endif %}

                {% if collection %}
                    {% block collection_buttons %}
                        <button type=\"button\" data-action=\"arkounay--ux-collection--collection#remove\" data-arkounay--ux-collection--collection-target=\"delete\" style=\"height: 40px\" class=\"collection-remove btn btn-collection btn-collection-remove text-danger\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-x\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"#FF0000\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\" />
                                <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\" />
                            </svg>
                        </button>
                    {% endblock %}
                {% endif %}

            </div>
        </div>

        <div data-arkounay--ux-media--media-target=\"fileError\" class=\"small text-danger m-2 mx-sm-3 text-center text-sm-start d-none\">
            <span data-arkounay--ux-media--media-target=\"fileErrorMessage\"></span>
            <button type=\"button\" data-action=\"arkounay--ux-media--media#clearErrorMessage\" class=\"collection-error-message-button btn text-danger\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-x\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"#FF0000\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                    <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\" />
                    <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\" />
                </svg>
            </button>
        </div>
    </div>
{% endapply %}
", "@ArkounayUxMedia/_ux_media_widget.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\arkounay\\ux-media\\templates\\_ux_media_widget.html.twig");
    }
}
