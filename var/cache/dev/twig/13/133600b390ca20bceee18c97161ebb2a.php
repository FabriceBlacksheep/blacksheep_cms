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

/* home/index.html.twig */
class __TwigTemplate_b9dda9fc02f1d17690a85136b2a799f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("page.html.twig", "home/index.html.twig", 1);
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

        echo "Hello HomeController!";
        
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
        echo "


<div class=\"col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10\">
<div class=\"card-xl-stretch me-md-6 shadow-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"latest-posts\" href=\"/agence\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px\" style=\"background-image:url('/img/Grenoble.jpg')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 p-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/agence\" class=\"fs-4 text-dark fw-bold text-hover-primary lh-base\"><i class=\"fa-solid fa-house\"></i> Agences BLACKSHEEP</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold fs-5 text-gray-600 pt-3\">Gestion des Agences BLACKSHEEP</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-wrap pt-4 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rounded border border-dashed fs-2 fw-bold text-dark py-1 px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold text-gray-400\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/agence\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

</div>


<div class=\"col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10\">
<div class=\"card-xl-stretch me-md-6 shadow-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"latest-posts\" href=\"/campervan\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px\" style=\"background-image:url('/img/FlorianKeller.Images_6706-scaled-e1669024570782.webp')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 p-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-4 text-dark fw-bold text-hover-primary lh-base\"><i class=\"fa-solid fa-van-shuttle\"></i> Campervans BLACKSHEEP</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold fs-5 text-gray-600 pt-3\">Gestion des Campervans BLACKSHEEP</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-wrap pt-4 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rounded border border-dashed fs-2 fw-bold text-dark py-1 px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold text-gray-400\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/campervan\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

</div>


<div class=\"col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10\">
<div class=\"card-xl-stretch me-md-6 shadow-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"latest-posts\" href=\"/content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px\" style=\"background-image:url('/img/cms.png')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 p-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-4 text-dark fw-bold text-hover-primary lh-base\"><i class=\"fa-solid fa-file-code\"></i> CMS BLACKSHEEP</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold fs-5 text-gray-600 pt-3\">Gestion des contenus BLACKSHEEP (Pages, articles, SEO...)</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-wrap pt-4 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rounded border border-dashed fs-2 fw-bold text-dark py-1 px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold text-gray-400\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/content\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

</div>

<div class=\"col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10\">
<div class=\"card-xl-stretch me-md-6 shadow-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"latest-posts\" href=\"/library\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px\" style=\"background-image:url('/img/media.png')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 p-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-4 text-dark fw-bold text-hover-primary lh-base\"><i class=\"fa-solid fa-image\"></i> MEDIA BLACKSHEEP</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold fs-5 text-gray-600 pt-3\">Gestion des médias BLACKSHEEP (Visuels, PDF...)</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-wrap pt-4 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rounded border border-dashed fs-2 fw-bold text-dark py-1 px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold text-gray-400\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/library\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

</div>

<div class=\"col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10\">
<div class=\"card-xl-stretch me-md-6 shadow-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"latest-posts\" href=\"/user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px\" style=\"background-image:url('/img/users.png')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 p-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-4 text-dark fw-bold text-hover-primary lh-base\"><i class=\"fa-solid fa-users\"></i> UTILISATEURS BLACKSHEEP</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold fs-5 text-gray-600 pt-3\">Gestion des utilisateurs BLACKSHEEP</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-wrap pt-4 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rounded border border-dashed fs-2 fw-bold text-dark py-1 px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold text-gray-400\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/user\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

</div>

<div class=\"col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10\">
<div class=\"card-xl-stretch me-md-6 shadow-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"latest-posts\" href=\"/api\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px\" style=\"background-image:url('/img/api.png')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 p-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-4 text-dark fw-bold text-hover-primary lh-base\"><i class=\"fa-solid fa-wrench\"></i> API BLACKSHEEP</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold fs-5 text-gray-600 pt-3\">Gestion de l'API Rest BLACKSHEEP</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-wrap pt-4 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rounded border border-dashed fs-2 fw-bold text-dark py-1 px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold text-gray-400\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/api\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'page.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}



<div class=\"col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10\">
<div class=\"card-xl-stretch me-md-6 shadow-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"latest-posts\" href=\"/agence\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px\" style=\"background-image:url('/img/Grenoble.jpg')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 p-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/agence\" class=\"fs-4 text-dark fw-bold text-hover-primary lh-base\"><i class=\"fa-solid fa-house\"></i> Agences BLACKSHEEP</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold fs-5 text-gray-600 pt-3\">Gestion des Agences BLACKSHEEP</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-wrap pt-4 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rounded border border-dashed fs-2 fw-bold text-dark py-1 px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold text-gray-400\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/agence\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

</div>


<div class=\"col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10\">
<div class=\"card-xl-stretch me-md-6 shadow-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"latest-posts\" href=\"/campervan\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px\" style=\"background-image:url('/img/FlorianKeller.Images_6706-scaled-e1669024570782.webp')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 p-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-4 text-dark fw-bold text-hover-primary lh-base\"><i class=\"fa-solid fa-van-shuttle\"></i> Campervans BLACKSHEEP</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold fs-5 text-gray-600 pt-3\">Gestion des Campervans BLACKSHEEP</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-wrap pt-4 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rounded border border-dashed fs-2 fw-bold text-dark py-1 px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold text-gray-400\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/campervan\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

</div>


<div class=\"col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10\">
<div class=\"card-xl-stretch me-md-6 shadow-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"latest-posts\" href=\"/content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px\" style=\"background-image:url('/img/cms.png')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 p-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-4 text-dark fw-bold text-hover-primary lh-base\"><i class=\"fa-solid fa-file-code\"></i> CMS BLACKSHEEP</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold fs-5 text-gray-600 pt-3\">Gestion des contenus BLACKSHEEP (Pages, articles, SEO...)</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-wrap pt-4 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rounded border border-dashed fs-2 fw-bold text-dark py-1 px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold text-gray-400\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/content\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

</div>

<div class=\"col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10\">
<div class=\"card-xl-stretch me-md-6 shadow-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"latest-posts\" href=\"/library\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px\" style=\"background-image:url('/img/media.png')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 p-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-4 text-dark fw-bold text-hover-primary lh-base\"><i class=\"fa-solid fa-image\"></i> MEDIA BLACKSHEEP</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold fs-5 text-gray-600 pt-3\">Gestion des médias BLACKSHEEP (Visuels, PDF...)</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-wrap pt-4 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rounded border border-dashed fs-2 fw-bold text-dark py-1 px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold text-gray-400\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/library\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

</div>

<div class=\"col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10\">
<div class=\"card-xl-stretch me-md-6 shadow-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"latest-posts\" href=\"/user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px\" style=\"background-image:url('/img/users.png')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 p-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-4 text-dark fw-bold text-hover-primary lh-base\"><i class=\"fa-solid fa-users\"></i> UTILISATEURS BLACKSHEEP</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold fs-5 text-gray-600 pt-3\">Gestion des utilisateurs BLACKSHEEP</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-wrap pt-4 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rounded border border-dashed fs-2 fw-bold text-dark py-1 px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold text-gray-400\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/user\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

</div>

<div class=\"col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10\">
<div class=\"card-xl-stretch me-md-6 shadow-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block overlay\" data-fslightbox=\"latest-posts\" href=\"/api\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px\" style=\"background-image:url('/img/api.png')\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Image-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-layer card-rounded bg-dark bg-opacity-25\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye-fill fs-2x text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Overlay-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 p-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fs-4 text-dark fw-bold text-hover-primary lh-base\"><i class=\"fa-solid fa-wrench\"></i> API BLACKSHEEP</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold fs-5 text-gray-600 pt-3\">Gestion de l'API Rest BLACKSHEEP</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Text-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-stack flex-wrap pt-4 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rounded border border-dashed fs-2 fw-bold text-dark py-1 px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-6 fw-semibold text-gray-400\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Label-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/api\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-eye\"></i> Consulter</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Action-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Body-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

</div>
{% endblock %}
", "home/index.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\home\\index.html.twig");
    }
}
