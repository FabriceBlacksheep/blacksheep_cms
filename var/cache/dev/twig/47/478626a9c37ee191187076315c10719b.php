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

/* agence/show.html.twig */
class __TwigTemplate_92e44ee20d86c6b634335d339cc37264 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agence/show.html.twig"));

        $this->parent = $this->loadTemplate("page.html.twig", "agence/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Agence";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container my-4 p-4\">




    <a class=\"btn btn-primary mb-4\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_index");
        echo "\"><i class=\"fa fa-arrow-left\"></i> Retour</a>

<div class=\"card card-flush h-lg-100\" id=\"kt_contacts_main\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Card header-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header pt-7\" id=\"kt_chat_contacts_header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Card title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-1 me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 style=\"font-weight:300\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Card title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Card toolbar-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-toolbar gap-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Chat-->

                                                        ";
        // line 34
        echo "                                                        <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_active", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Etes vous sur de vouloir activer cette agence ?');\">
                                                            <input type=\"hidden\" name=\"_method\" value=\"POST\" />
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("app_agence_active" . twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36))), "html", null, true);
        echo "\">
                                                            <button class=\"btn btn-sm btn-light btn-active-light-primary\" type=\"submit\">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                                                                <span class=\"svg-icon svg-icon-2\">
                                                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                        <rect x=\"10\" y=\"10\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
                                                                        <rect x=\"17\" y=\"10\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
                                                                        <rect x=\"3\" y=\"10\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
                                                                        <rect x=\"10\" y=\"17\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
                                                                        <rect x=\"17\" y=\"17\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
                                                                        <rect x=\"3\" y=\"17\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->Activer
                                                            </button>
                                                        </form>





\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Chat-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Chat-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../../demo1/dist/apps/inbox/reply.html\" class=\"btn btn-sm btn-light btn-active-light-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/communication/com007.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->Message</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Chat-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action menu-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-icon btn-light btn-active-light-primary\" data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"10\" y=\"10\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"17\" y=\"10\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"3\" y=\"10\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Menu-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4\" data-kt-menu=\"true\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item px-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agence_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
        echo "\" class=\"menu-link px-3\">Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item px-3\">
                                                            ";
        // line 90
        echo twig_include($this->env, $context, "agence/_delete_form.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 92
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Menu-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action menu-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Card toolbar-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Card header-->
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Card body-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body pt-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Profile-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex gap-7 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Avatar-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"symbol symbol-circle symbol-100px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/upload/";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 107, $this->source); })()), "visuel", [], "any", false, false, false, 107), "html", null, true);
        echo "\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Avatar-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Contact details-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Name-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mb-0\">#Responsable Agence#</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Name-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Email-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted text-hover-primary\">";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 125, $this->source); })()), "email", [], "any", false, false, false, 125), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Email-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Phone-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M19 4H5V20H19V4Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted text-hover-primary\">";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 138, $this->source); })()), "telephone", [], "any", false, false, false, 138), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
<i class=\"fa-solid fa-house-flag\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 149, $this->source); })()), "type", [], "any", false, false, false, 149));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 150
            echo "                 ";
            if (($context["type"] == "Agence propre")) {
                // line 151
                echo "                    <span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "</span>
                                            ";
            } elseif ((            // line 152
$context["type"] == "Franchise")) {
                // line 153
                echo "                            <span class=\"badge bg-warning\">";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "</span>
                        ";
            }
            // line 155
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Phone-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Contact details-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Profile-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tabs-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-semibold mt-6 mb-8\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tab item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-active-primary pb-4 active\" data-bs-toggle=\"tab\" href=\"#kt_contact_view_general\" aria-selected=\"true\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-4 me-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->Description</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tab item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tab item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-active-primary pb-4\" data-bs-toggle=\"tab\" href=\"#kt_contact_view_meetings\" aria-selected=\"false\" role=\"tab\" tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-4 me-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->Horaires</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tab item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tab item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-active-primary pb-4\" data-bs-toggle=\"tab\" href=\"#kt_contact_view_activity\" aria-selected=\"false\" role=\"tab\" tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen056.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-4 me-1\">
                                                                    ";
        // line 200
        echo "                                                            <i class=\"fa-solid fa-map-pin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->Adresse</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tab item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tabs-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Tab content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade active show\" id=\"kt_contact_view_general\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Additional details-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column gap-5 mt-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Company name-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Country-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Notes-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column gap-1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 219
        echo twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 219, $this->source); })()), "description", [], "any", false, false, false, 219);
        echo "


                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Notes-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Additional details-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"kt_contact_view_meetings\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Dates-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Dates-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Tab Content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
                                                            ";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 235, $this->source); })()), "horaires", [], "any", false, false, false, 235), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Day-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Day-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Day-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Day-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Day-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Day-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Day-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Day-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Day-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Day-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Tab Content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"kt_contact_view_activity\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Timeline-->
                                                        ";
        // line 259
        echo "                                                        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agence"]) || array_key_exists("agence", $context) ? $context["agence"] : (function () { throw new RuntimeError('Variable "agence" does not exist.', 259, $this->source); })()), "adresse", [], "any", false, false, false, 259), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Timeline-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Tab content-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Card body-->
\t\t\t\t\t\t\t\t\t\t\t</div>

    ";
        // line 270
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "agence/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 270,  398 => 259,  372 => 235,  353 => 219,  332 => 200,  287 => 156,  281 => 155,  275 => 153,  273 => 152,  268 => 151,  265 => 150,  261 => 149,  247 => 138,  231 => 125,  210 => 107,  193 => 92,  189 => 90,  181 => 85,  129 => 36,  123 => 34,  113 => 26,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'page.html.twig' %}

{% block title %}Agence{% endblock %}

{% block body %}
<div class=\"container my-4 p-4\">




    <a class=\"btn btn-primary mb-4\" href=\"{{ path('app_agence_index') }}\"><i class=\"fa fa-arrow-left\"></i> Retour</a>

<div class=\"card card-flush h-lg-100\" id=\"kt_contacts_main\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Card header-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header pt-7\" id=\"kt_chat_contacts_header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Card title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-1 me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 style=\"font-weight:300\">{{ agence.nom }}</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Card title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Card toolbar-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-toolbar gap-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Chat-->

                                                        {# app_agence_active post method#}
                                                        <form method=\"post\" action=\"{{ path('app_agence_active', {'id': agence.id}) }}\" onsubmit=\"return confirm('Etes vous sur de vouloir activer cette agence ?');\">
                                                            <input type=\"hidden\" name=\"_method\" value=\"POST\" />
                                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('app_agence_active' ~ agence.id) }}\">
                                                            <button class=\"btn btn-sm btn-light btn-active-light-primary\" type=\"submit\">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                                                                <span class=\"svg-icon svg-icon-2\">
                                                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                        <rect x=\"10\" y=\"10\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
                                                                        <rect x=\"17\" y=\"10\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
                                                                        <rect x=\"3\" y=\"10\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
                                                                        <rect x=\"10\" y=\"17\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
                                                                        <rect x=\"17\" y=\"17\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
                                                                        <rect x=\"3\" y=\"17\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->Activer
                                                            </button>
                                                        </form>





\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Chat-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Chat-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../../demo1/dist/apps/inbox/reply.html\" class=\"btn btn-sm btn-light btn-active-light-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/communication/com007.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->Message</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Chat-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action menu-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-icon btn-light btn-active-light-primary\" data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"10\" y=\"10\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"17\" y=\"10\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"3\" y=\"10\" width=\"4\" height=\"4\" rx=\"2\" fill=\"currentColor\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Menu-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4\" data-kt-menu=\"true\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item px-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_agence_edit', {'id': agence.id}) }}\" class=\"menu-link px-3\">Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item px-3\">
                                                            {{ include('agence/_delete_form.html.twig') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{ path('app_agence_delete', {'id': agence.id}) }}\" class=\"menu-link px-3\" id=\"kt_contact_delete\">Supprimer</a> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Menu-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action menu-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Card toolbar-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Card header-->
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Card body-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body pt-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Profile-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex gap-7 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Avatar-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"symbol symbol-circle symbol-100px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/upload/{{ agence.visuel }}\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Avatar-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Contact details-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Name-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mb-0\">#Responsable Agence#</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Name-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Email-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted text-hover-primary\">{{ agence.email }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Email-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Phone-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M19 4H5V20H19V4Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted text-hover-primary\">{{ agence.telephone}}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
<i class=\"fa-solid fa-house-flag\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                {% for type in agence.type %}
                 {% if type == 'Agence propre' %}
                    <span class=\"badge bg-success\">{{ type }}</span>
                                            {% elseif type == 'Franchise' %}
                            <span class=\"badge bg-warning\">{{ type }}</span>
                        {% endif %}
                {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Phone-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Contact details-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Profile-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tabs-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-semibold mt-6 mb-8\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tab item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-active-primary pb-4 active\" data-bs-toggle=\"tab\" href=\"#kt_contact_view_general\" aria-selected=\"true\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-4 me-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->Description</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tab item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tab item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-active-primary pb-4\" data-bs-toggle=\"tab\" href=\"#kt_contact_view_meetings\" aria-selected=\"false\" role=\"tab\" tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-4 me-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z\" fill=\"currentColor\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->Horaires</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tab item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tab item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-active-primary pb-4\" data-bs-toggle=\"tab\" href=\"#kt_contact_view_activity\" aria-selected=\"false\" role=\"tab\" tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen056.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-4 me-1\">
                                                                    {# fa icon map #}
                                                            <i class=\"fa-solid fa-map-pin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->Adresse</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tab item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tabs-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Tab content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade active show\" id=\"kt_contact_view_general\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Additional details-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column gap-5 mt-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Company name-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Country-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Notes-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column gap-1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ agence.description|raw }}


                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Notes-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Additional details-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"kt_contact_view_meetings\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Dates-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Dates-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Tab Content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
                                                            {{ agence.horaires }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Day-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Day-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Day-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Day-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Day-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Day-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Day-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Day-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Day-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Day-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Tab Content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:::Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"kt_contact_view_activity\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Timeline-->
                                                        {# agence adresse #}
                                                        {{ agence.adresse }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Timeline-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:::Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Tab content-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Card body-->
\t\t\t\t\t\t\t\t\t\t\t</div>

    {# {{ include('agence/_delete_form.html.twig') }} #}
    </div>
{% endblock %}
", "agence/show.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\agence\\show.html.twig");
    }
}
