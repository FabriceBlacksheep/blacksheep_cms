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

/* @ArkounayUxMedia/_ux_crop_modal.html.twig */
class __TwigTemplate_79945b15e0c01f501a6608b51c82ed47 extends Template
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
        echo "<!-- Modal -->
<div class=\"modal fade ux-crop-modal\"
     data-bs-backdrop=\"static\"
     data-controller=\"arkounay--ux-media--crop\"
     data-arkounay--ux-media--media-target=\"cropModal\"
     data-arkounay--ux-media--crop-path-value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6), "html", null, true);
        echo "\"
     data-ratio=\"";
        // line 7
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["crop_options"] ?? null), "ratio", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["crop_options"] ?? null), "ratio", [], "any", false, false, false, 7), "free")) : ("free")), "html", null, true);
        echo "\"
     id=\"crop-modal-";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\"
     tabindex=\"-1\"
     role=\"dialog\"
     data-conf=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["conf"] ?? null), "html", null, true);
        echo "\"
     data-extra=\"";
        // line 12
        echo twig_escape_filter($this->env, json_encode(($context["extra"] ?? null)), "html", null, true);
        echo "\"
     aria-labelledby=\"crop-modal-label\"
>
    <div class=\"modal-dialog modal-xl\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Image crop"), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"btn-toolbar pb-3\">
                            <div class=\"btn-group me-2\">
                                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-toggle=\"button\" aria-pressed=\"true\" data-action=\"arkounay--ux-media--crop#toggleCrop\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-crop m-0\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                        <path d=\"M8 5v10a1 1 0 0 0 1 1h10\"></path>
                                        <path d=\"M5 8h10a1 1 0 0 1 1 1v10\"></path>
                                    </svg>
                                </button>
                            </div>

                            ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["crop_options"] ?? null), "allow_rotation", [], "any", false, false, false, 36)) {
            // line 37
            echo "                                <div class=\"btn-group me-2\">
                                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-action=\"arkounay--ux-media--crop#rotateLeft\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-rotate m-0\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                            <path d=\"M19.95 11a8 8 0 1 0 -.5 4m.5 5v-5h-5\"></path>
                                        </svg>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-action=\"arkounay--ux-media--crop#rotateRight\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-rotate-clockwise m-0\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                            <path d=\"M4.05 11a8 8 0 1 1 .5 4m-.5 5v-5h5\"></path>
                                        </svg>
                                    </button>
                                </div>
                            ";
        }
        // line 52
        echo "
                            ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["crop_options"] ?? null), "allow_flip", [], "any", false, false, false, 53)) {
            // line 54
            echo "                                <div class=\"btn-group me-2\">
                                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-action=\"arkounay--ux-media--crop#flipHorizontal\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-arrows-horizontal m-0\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                            <polyline points=\"7 8 3 12 7 16\"></polyline>
                                            <polyline points=\"17 8 21 12 17 16\"></polyline>
                                            <line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
                                        </svg>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-action=\"arkounay--ux-media--crop#flipVertical\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-arrows-vertical m-0\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                            <polyline points=\"8 7 12 3 16 7\"></polyline>
                                            <polyline points=\"8 17 12 21 16 17\"></polyline>
                                            <line x1=\"12\" y1=\"3\" x2=\"12\" y2=\"21\"></line>
                                        </svg>
                                    </button>
                                </div>
                            ";
        }
        // line 73
        echo "                        </div>
                    </div>
                    ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["crop_options"] ?? null), "display_crop_data", [], "any", false, false, false, 75)) {
            // line 76
            echo "                        <div class=\"col-md-6\">
                            <div class=\"float-end image-data py-2 \">
                                ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable([0 => "x", 1 => "y", 2 => "width", 3 => "height"]);
            foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
                // line 79
                echo "                                    <span class=\"label\"> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_capitalize_string_filter($this->env, ($context["el"] . ":"))), "html", null, true);
                echo " <span data-arkounay--ux-media--crop-target=\"";
                echo twig_escape_filter($this->env, $context["el"], "html", null, true);
                echo "\">0</span></span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                                ";
            if (((twig_get_attribute($this->env, $this->source, ($context["crop_options"] ?? null), "ratio", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["crop_options"] ?? null), "ratio", [], "any", false, false, false, 81))) : (""))) {
                // line 82
                echo "                                    <span class=\"label label-primary\"> ";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ratio: ") . twig_round(twig_get_attribute($this->env, $this->source, ($context["crop_options"] ?? null), "ratio", [], "any", false, false, false, 82), 2)), "html", null, true);
                echo "  </span>
                                ";
            }
            // line 84
            echo "                            </div>
                        </div>
                    ";
        }
        // line 87
        echo "                </div>
                <div class=\"modal-crop-container\" data-arkounay--ux-media--crop-target=\"container\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
                <button type=\"button\" class=\"btn btn-primary\" data-action=\"arkounay--ux-media--crop#save\" data-bs-dismiss=\"modal\" data-arkounay--ux-media--crop-target=\"saveButton\" data-crop-url=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ux_media_ajax_crop");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Apply"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ArkounayUxMedia/_ux_crop_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 92,  182 => 91,  176 => 87,  171 => 84,  165 => 82,  162 => 81,  151 => 79,  147 => 78,  143 => 76,  141 => 75,  137 => 73,  116 => 54,  114 => 53,  111 => 52,  94 => 37,  92 => 36,  71 => 18,  62 => 12,  58 => 11,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ArkounayUxMedia/_ux_crop_modal.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\vendor\\arkounay\\ux-media\\templates\\_ux_crop_modal.html.twig");
    }
}
