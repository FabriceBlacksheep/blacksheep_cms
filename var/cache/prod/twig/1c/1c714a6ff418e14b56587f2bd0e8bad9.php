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

/* page.html.twig */
class __TwigTemplate_a35bfd01c47bf31f49a409c3b7402d81 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css\" integrity=\"sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        \t\t<link rel=\"shortcut icon\" href=\"./../assets/media/logos/favicon.ico\" />
\t\t<!--begin::Fonts(mandatory for all pages)-->
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;900&display=swap\" rel=\"stylesheet\">
\t\t<!--end::Fonts-->


        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "    </head>
\t<body id=\"kt_app_body\" data-kt-app-layout=\"light-sidebar\" data-kt-app-header-fixed=\"true\" data-kt-app-sidebar-enabled=\"true\" data-kt-app-sidebar-fixed=\"true\" data-kt-app-sidebar-hoverable=\"true\" data-kt-app-sidebar-push-header=\"true\" data-kt-app-sidebar-push-toolbar=\"true\" data-kt-app-sidebar-push-footer=\"true\" data-kt-app-toolbar-enabled=\"true\" class=\"app-default\">
\t\t<!--begin::Theme mode setup on page load-->
\t\t<script>var defaultThemeMode = \"light\"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute(\"data-bs-theme-mode\")) { themeMode = document.documentElement.getAttribute(\"data-bs-theme-mode\"); } else { if ( localStorage.getItem(\"data-bs-theme\") !== null ) { themeMode = localStorage.getItem(\"data-bs-theme\"); } else { themeMode = defaultThemeMode; } } if (themeMode === \"system\") { themeMode = window.matchMedia(\"(prefers-color-scheme: dark)\").matches ? \"dark\" : \"light\"; } document.documentElement.setAttribute(\"data-bs-theme\", themeMode); }</script>
\t\t<div class=\"d-flex flex-column flex-root app-root\" id=\"kt_app_root\">
\t\t\t<!--begin::Page-->
\t\t\t<div class=\"app-page flex-column flex-column-fluid\" id=\"kt_app_page\">
\t\t\t\t<!--begin::Header-->
\t\t\t\t<div id=\"kt_app_header\" class=\"app-header\">
\t\t\t\t\t<!--begin::Header container-->
\t\t\t\t\t<div class=\"app-container container-fluid d-flex align-items-stretch justify-content-between\" id=\"kt_app_header_container\">
\t\t\t\t\t\t<!--begin::sidebar mobile toggle-->
\t\t\t\t\t\t<div class=\"d-flex align-items-center d-lg-none ms-n2 me-2\" title=\"Show sidebar menu\">
\t\t\t\t\t\t\t<div class=\"btn btn-icon btn-active-color-primary w-35px h-35px\" id=\"kt_app_sidebar_mobile_toggle\">
\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::sidebar mobile toggle-->
\t\t\t\t\t\t<!--begin::Mobile logo-->
\t\t\t\t\t\t<div class=\"d-flex align-items-center flex-grow-1 flex-lg-grow-0\">
\t\t\t\t\t\t\t<a href=\"/\" class=\"d-lg-none\">
\t\t\t\t\t\t\t\t<img alt=\"Logo\" src=\"/img/logo_bs_black.png\" class=\"theme-light-show h-30px\" />
\t\t\t\t\t\t\t\t<img alt=\"Logo\" src=\"/img/logo_bs_black.png\" class=\"theme-dark-show h-30px\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Mobile logo-->
\t\t\t\t\t\t<!--begin::Header wrapper-->
\t\t\t\t\t\t<div class=\"d-flex align-items-stretch justify-content-between flex-lg-grow-1\" id=\"kt_app_header_wrapper\">
\t\t\t\t\t\t\t<!--begin::Menu wrapper-->
\t\t\t\t\t\t\t<div class=\"app-header-menu app-header-mobile-drawer align-items-stretch\" data-kt-drawer=\"true\" data-kt-drawer-name=\"app-header-menu\" data-kt-drawer-activate=\"{default: true, lg: false}\" data-kt-drawer-overlay=\"true\" data-kt-drawer-width=\"225px\" data-kt-drawer-direction=\"end\" data-kt-drawer-toggle=\"#kt_app_header_menu_toggle\" data-kt-swapper=\"true\" data-kt-swapper-mode=\"{default: 'append', lg: 'prepend'}\" data-kt-swapper-parent=\"{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}\">
\t\t\t\t\t\t\t\t<!--begin::Menu-->
\t\t\t\t\t\t\t\t<div class=\"menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0\" id=\"kt_app_header_menu\" data-kt-menu=\"true\">

\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t<div data-kt-menu-trigger=\"{default: 'click', lg: 'hover'}\" data-kt-menu-placement=\"bottom-start\" class=\"menu-item menu-lg-down-accordion me-0 me-lg-2\">
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title btn btn-light\">
<i class=\"fa-solid fa-bars\"></i>
                       MENU</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow d-lg-none\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu sub-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Pages menu-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-active-bg px-4 px-lg-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Tabs nav-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex w-100 overflow-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-stretch nav-line-tabs fw-semibold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Nav item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-3 py-lg-6 active text-active-primary\" href=\"#\" data-bs-toggle=\"tab\" data-bs-target=\"#kt_app_header_menu_pages_agences\">AGENCES</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Nav item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Nav item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-3 py-lg-6 text-active-primary\" href=\"#\" data-bs-toggle=\"tab\" data-bs-target=\"#kt_app_header_menu_pages_account\">CAMPERVANS</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Nav item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Nav item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-3 py-lg-6 text-active-primary\" href=\"#\" data-bs-toggle=\"tab\" data-bs-target=\"#kt_app_header_menu_pages_authentication\">CMS</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Nav item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Nav item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-3 py-lg-6 text-active-primary\" href=\"#\" data-bs-toggle=\"tab\" data-bs-target=\"#kt_app_header_menu_pages_utilities\">MEDIA</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
                            <!-- USER MENU TOP -->
                            \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-3 py-lg-6 text-active-primary\" href=\"#\" data-bs-toggle=\"tab\" data-bs-target=\"#kt_app_header_menu_pages_users\">UTILISATEURS</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
                            <!-- API MENU TOP -->
                            \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link py-3 py-lg-6 text-active-primary\" href=\"#\" data-bs-toggle=\"tab\" data-bs-target=\"#kt_app_header_menu_pages_api\">API REST</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Nav item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Tabs nav-->
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Tab content-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content py-4 py-lg-8 px-lg-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active w-lg-600px\" id=\"kt_app_header_menu_pages_agences\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 mb-6 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu heading-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"fs-6 fs-lg-4 fw-semibold mb-3 ms-4\">Gestion des agences</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu heading-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item p-0 m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/agence\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Liste des agences</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item p-0 m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/agence/new\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Créer une agence</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/Grenoble.jpg\" class=\"rounded mw-100\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane w-lg-600px\" id=\"kt_app_header_menu_pages_account\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-6 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
                                  <h4 class=\"fs-6 fs-lg-4 fw-semibold mb-3 ms-4\">Gestion des Campervans</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item p-0 m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/campervan\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Liste des Campervans</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item p-0 m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/campervan/new\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Créer un Campervan</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/FlorianKeller.Images_6706-scaled-e1669024570782.webp\" class=\"rounded mw-100\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane w-lg-600px\" id=\"kt_app_header_menu_pages_authentication\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-6 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
                                  <h4 class=\"fs-6 fs-lg-4 fw-semibold mb-3 ms-4\">Gestion des contenus</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item p-0 m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/content\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Liste des contenus</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item p-0 m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/content/new\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Créer un contenu</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/cms.png\" class=\"rounded mw-100\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane w-lg-600px\" id=\"kt_app_header_menu_pages_utilities\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-6 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
                                  <h4 class=\"fs-6 fs-lg-4 fw-semibold mb-3 ms-4\">Gestion des médias</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item p-0 m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/libray\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Accès à la médiathèque</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/media.png\" class=\"rounded mw-100\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                         <div class=\"tab-pane w-lg-600px\" id=\"kt_app_header_menu_pages_users\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-6 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
                                  <h4 class=\"fs-6 fs-lg-4 fw-semibold mb-3 ms-4\">Gestion des utilisateurs</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item p-0 m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/user\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Liste des utilisateurs</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                 \t<div class=\"menu-item p-0 m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/user/new\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Créer un utilisateur</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/users.png\" class=\"rounded mw-100\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Tab pane-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane w-lg-600px\" id=\"kt_app_header_menu_pages_api\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-6 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
                                  <h4 class=\"fs-6 fs-lg-4 fw-semibold mb-3 ms-4\">Gestion de l'API Rest</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item p-0 m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/api\" target=\"_blank\" class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Accès à la Sandbox</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/api.png\" class=\"rounded mw-100\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Row-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>



                        </div>


\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Tab content-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end:Pages menu-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu sub-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->

\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Menu-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Menu wrapper-->
\t\t\t\t\t\t\t<!--begin::Navbar-->
\t\t\t\t\t\t\t<div class=\"app-navbar flex-shrink-0\">
\t\t\t\t\t\t\t\t<!--begin::Search-->

\t\t\t\t\t\t\t\t<!--end::Search-->
\t\t\t\t\t\t\t\t<!--begin::Activities-->

\t\t\t\t\t\t\t\t<!--end::Activities-->
\t\t\t\t\t\t\t\t<!--begin::Notifications-->

\t\t\t\t\t\t\t\t<!--end::Notifications-->
\t\t\t\t\t\t\t\t<!--begin::Chat-->

\t\t\t\t\t\t\t\t<!--end::Chat-->
\t\t\t\t\t\t\t\t<!--begin::Languages-->

\t\t\t\t\t\t\t\t<!--end::Languages-->
\t\t\t\t\t\t\t\t<!--begin::Theme mode-->
\t\t\t\t\t\t\t\t<div class=\"app-navbar-item ms-1 ms-lg-3\">
\t\t\t\t\t\t\t\t\t<!--begin::Menu toggle-->
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px\" data-kt-menu-trigger=\"{default:'click', lg: 'hover'}\" data-kt-menu-attach=\"parent\" data-kt-menu-placement=\"bottom-end\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon theme-light-show svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon theme-dark-show svg-icon-2\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<!--begin::Menu toggle-->
\t\t\t\t\t\t\t\t\t<!--begin::Menu-->
\t\t\t\t\t\t\t\t\t<div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px\" data-kt-menu=\"true\" data-kt-element=\"theme-mode-menu\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Menu item-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item px-3 my-0\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"menu-link px-3 py-2\" data-kt-element=\"mode\" data-kt-value=\"light\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\" data-kt-element=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Clair</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Menu item-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item px-3 my-0\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"menu-link px-3 py-2\" data-kt-element=\"mode\" data-kt-value=\"dark\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\" data-kt-element=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Sombre</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Menu item-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item px-3 my-0\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"menu-link px-3 py-2\" data-kt-element=\"mode\" data-kt-value=\"system\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\" data-kt-element=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">System</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Menu-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Theme mode-->
\t\t\t\t\t\t\t\t<!--begin::User menu-->
\t\t\t\t\t\t\t\t<div class=\"app-navbar-item ms-1 ms-lg-3\" id=\"kt_header_user_menu_toggle\">
\t\t\t\t\t\t\t\t\t<!--begin::Menu wrapper-->
\t\t\t\t\t\t\t\t\t<div class=\"cursor-pointer symbol symbol-35px symbol-md-40px\" data-kt-menu-trigger=\"{default: 'click', lg: 'hover'}\" data-kt-menu-attach=\"parent\" data-kt-menu-placement=\"bottom-end\">
\t\t\t\t\t\t\t\t\t\t<img src=\"./../assets/media/avatars/300-3.jpg\" alt=\"user\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--begin::User account menu-->
\t\t\t\t\t\t\t\t\t<div class=\"menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px\" data-kt-menu=\"true\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Menu item-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item px-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-content d-flex align-items-center px-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Avatar-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"symbol symbol-50px me-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Logo\" src=\"./../assets/media/avatars/300-3.jpg\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Avatar-->
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Username-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold d-flex align-items-center fs-5\">

                          ";
        // line 555
        $context["user"] = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 555);
        // line 556
        echo "                          ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 556), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 556), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold text-muted text-hover-primary fs-7\">";
        // line 558
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 558), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Username-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Menu separator-->
\t\t\t\t\t\t\t\t\t\t<div class=\"separator my-2\"></div>
\t\t\t\t\t\t\t\t\t\t<!--end::Menu separator-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Menu item-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item px-5\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/user/";
        // line 569
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 569), "id", [], "any", false, false, false, 569), "html", null, true);
        echo "\" class=\"menu-link px-5\">Mon profil</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Menu item-->

\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item px-5\" data-kt-menu-trigger=\"{default: 'click', lg: 'hover'}\" data-kt-menu-placement=\"left-start\" data-kt-menu-offset=\"-15px, 0\">


\t\t\t\t\t\t\t\t\t\t\t<!--end::Menu sub-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Menu item-->

\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Menu separator-->
\t\t\t\t\t\t\t\t\t\t<div class=\"separator my-2\"></div>

\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Menu item-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item px-5\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/logout\" class=\"menu-link px-5\">Se déconnecter</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end::Menu item-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::User account menu-->
\t\t\t\t\t\t\t\t\t<!--end::Menu wrapper-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::User menu-->
\t\t\t\t\t\t\t\t<!--begin::Header menu toggle-->
\t\t\t\t\t\t\t\t<div class=\"app-navbar-item d-lg-none ms-2 me-n3\" title=\"Show header menu\">
\t\t\t\t\t\t\t\t\t<div class=\"btn btn-icon btn-active-color-primary w-35px h-35px\" id=\"kt_app_header_menu_toggle\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-1\">
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.3\" d=\"M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Header menu toggle-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Navbar-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Header wrapper-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Header container-->
\t\t\t\t</div>
\t\t\t\t<!--end::Header-->
\t\t\t\t<!--begin::Wrapper-->
\t\t\t\t<div class=\"app-wrapper flex-column flex-row-fluid\" id=\"kt_app_wrapper\">
\t\t\t\t\t<!--begin::Sidebar-->
\t\t\t\t\t<div id=\"kt_app_sidebar\" class=\"app-sidebar flex-column\" data-kt-drawer=\"true\" data-kt-drawer-name=\"app-sidebar\" data-kt-drawer-activate=\"{default: true, lg: false}\" data-kt-drawer-overlay=\"true\" data-kt-drawer-width=\"225px\" data-kt-drawer-direction=\"start\" data-kt-drawer-toggle=\"#kt_app_sidebar_mobile_toggle\">
\t\t\t\t\t\t<!--begin::Logo-->
\t\t\t\t\t\t<div class=\"app-sidebar-logo px-6\" id=\"kt_app_sidebar_logo\">
\t\t\t\t\t\t\t<!--begin::Logo image-->
\t\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t\t<img alt=\"Logo\" src=\"/img/logo_bs_black.png\" class=\"h-50px app-sidebar-logo-default\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!--end::Logo image-->
\t\t\t\t\t\t\t<!--begin::Sidebar toggle-->
\t\t\t\t\t\t\t<div id=\"kt_app_sidebar_toggle\" class=\"app-sidebar-toggle btn btn-icon btn-sm h-30px w-30px rotate\" data-kt-toggle=\"true\" data-kt-toggle-state=\"active\" data-kt-toggle-target=\"body\" data-kt-toggle-name=\"app-sidebar-minimize\">
\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2 rotate-180\">
\t\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t<path opacity=\"0.5\" d=\"M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t\t<path d=\"M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z\" fill=\"currentColor\" />
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Sidebar toggle-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Logo-->
\t\t\t\t\t\t<!--begin::sidebar menu-->
\t\t\t\t\t\t<div class=\"app-sidebar-menu overflow-hidden flex-column-fluid\">
\t\t\t\t\t\t\t<!--begin::Menu wrapper-->
\t\t\t\t\t\t\t<div id=\"kt_app_sidebar_menu_wrapper\" class=\"app-sidebar-wrapper hover-scroll-overlay-y my-5\" data-kt-scroll=\"true\" data-kt-scroll-activate=\"true\" data-kt-scroll-height=\"auto\" data-kt-scroll-dependencies=\"#kt_app_sidebar_logo, #kt_app_sidebar_footer\" data-kt-scroll-wrappers=\"#kt_app_sidebar_menu\" data-kt-scroll-offset=\"5px\">
\t\t\t\t\t\t\t\t<!--begin::Menu-->
\t\t\t\t\t\t\t\t<div class=\"menu menu-column menu-rounded menu-sub-indention fw-semibold px-3\" id=\"#kt_app_sidebar_menu\" data-kt-menu=\"true\" data-kt-menu-expand=\"false\">
<!-- MENU SIDE -->
\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t<div data-kt-menu-trigger=\"click\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
<i class=\"fa-solid fa-house\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">AGENCES</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu sub-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-sub menu-sub-accordion\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"/agence\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Liste des agences</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"/agence/new\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Créer une agence</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->


\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu sub-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t<div data-kt-menu-trigger=\"click\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">

<i class=\"fa-solid fa-van-shuttle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">CAMPERVANS</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu sub-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-sub menu-sub-accordion\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"/campervan\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Liste des Campervans</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"/campervan/new\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Créer un Campervan</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu sub-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t<div data-kt-menu-trigger=\"click\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
<i class=\"fa-solid fa-file-code\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">CMS</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu sub-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-sub menu-sub-accordion\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<div data-kt-menu-trigger=\"click\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Gestion des pages</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu sub-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-sub menu-sub-accordion menu-active-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"/content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Liste des contenus</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"/content/new\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Créer un contenu</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu sub-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<div data-kt-menu-trigger=\"click\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Gestion des catégories</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu sub-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-sub menu-sub-accordion menu-active-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"/category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Liste des catégories</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"/category/new\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Créer une catégorie</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu sub-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu sub-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t<div data-kt-menu-trigger=\"click\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/files/fil003.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
<i class=\"fa-solid fa-image\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">MEDIA</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu sub-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-sub menu-sub-accordion\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"library\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Accès aux médias</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu sub-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t<div data-kt-menu-trigger=\"click\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
<i class=\"fa-solid fa-users\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">UTILISATEURS</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu sub-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-sub menu-sub-accordion\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"/user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Liste des utilisateurs</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"/user/new\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Créer un utilisateur</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu sub-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t<div data-kt-menu-trigger=\"click\" class=\"menu-item menu-accordion\">
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-link\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"svg-icon svg-icon-2\">
<i class=\"fa-solid fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Svg Icon-->
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">API</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-arrow\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t<!--begin:Menu sub-->
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-sub menu-sub-accordion menu-active-bg\">
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu-link\" href=\"/api\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-bullet\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bullet bullet-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">Accès à l'API Sandbox</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu link-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->
\t\t\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end:Menu sub-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end:Menu item-->
\t\t\t\t\t\t\t\t\t<!--begin:Menu item-->



\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Menu-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Menu wrapper-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::sidebar menu-->
\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end::Sidebar-->
\t\t\t\t\t<!--begin::Main-->
\t\t\t\t\t<div class=\"app-main flex-column flex-row-fluid\" id=\"kt_app_main\">
\t\t\t\t\t\t<!--begin::Content wrapper-->
\t\t\t\t\t\t<div class=\"d-flex flex-column flex-column-fluid\">
\t\t\t\t\t\t\t<!--begin::Toolbar-->
\t\t\t\t\t\t\t<div id=\"kt_app_toolbar\" class=\"app-toolbar py-3 py-lg-6\">
\t\t\t\t\t\t\t\t<!--begin::Toolbar container-->
\t\t\t\t\t\t\t\t<div id=\"kt_app_toolbar_container\" class=\"app-container container-fluid d-flex flex-stack\">
\t\t\t\t\t\t\t\t\t<!--begin::Page title-->
\t\t\t\t\t\t\t\t\t<div class=\"page-title d-flex flex-column justify-content-center flex-wrap me-3\">
\t\t\t\t\t\t\t\t\t\t<!--begin::Title-->
\t\t\t\t\t\t\t\t\t\t<h1 class=\"page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0\"></h1>
\t\t\t\t\t\t\t\t\t\t<!--end::Title-->
\t\t\t\t\t\t\t\t\t\t<!--begin::Breadcrumb-->


\t\t\t\t\t\t\t\t\t\t<!--end::Breadcrumb-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end::Page title-->
\t\t\t\t\t\t\t\t\t<!--begin::Actions-->

\t\t\t\t\t\t\t\t\t<!--end::Actions-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Toolbar container-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Toolbar-->
\t\t\t\t\t\t\t<!--begin::Content-->
\t\t\t\t\t\t\t<div id=\"kt_app_content\" class=\"app-content flex-column-fluid\">
\t\t\t\t\t\t\t\t<!--begin::Content container-->
\t\t\t\t\t\t\t\t<div id=\"kt_app_content_container\" class=\"app-container container-fluid\">



                          <div class=\"row g-5 g-xl-10 mb-5 mb-xl-10\">

                            ";
        // line 1022
        $this->displayBlock('body', $context, $blocks);
        // line 1023
        echo "                          </div>


\t\t\t\t\t\t\t\t\t<!--end::Row-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Content container-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Content-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Content wrapper-->
\t\t\t\t\t\t<!--begin::Footer-->
\t\t\t\t\t\t<div id=\"kt_app_footer\" class=\"app-footer\">
\t\t\t\t\t\t\t<!--begin::Footer container-->
\t\t\t\t\t\t\t<div class=\"app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3\">
\t\t\t\t\t\t\t\t<!--begin::Copyright-->
\t\t\t\t\t\t\t\t<div class=\"text-dark order-2 order-md-1\">
\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-semibold me-1\">2023&copy;</span>
\t\t\t\t\t\t\t\t\t<a href=\"https://keenthemes.com\" target=\"_blank\" class=\"text-gray-800 text-hover-primary\">BLACKSHEEP</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end::Copyright-->
\t\t\t\t\t\t\t\t<!--begin::Menu-->
\t\t\t\t\t\t\t\t<ul class=\"menu menu-gray-600 menu-hover-primary fw-semibold order-1\">
\t\t\t\t\t\t\t\t\t<li class=\"menu-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"menu-link px-2\">Support</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!--end::Menu-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end::Footer container-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end::Footer-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end:::Main-->
\t\t\t\t</div>
\t\t\t\t<!--end::Wrapper-->
\t\t\t</div>
\t\t\t<!--end::Page-->
\t\t</div>


    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            ";
        // line 20
        echo "            \t\t<!--begin::Vendor Stylesheets(used for this page only)-->
\t\t<link href=\"/./../assets/plugins/custom/fullcalendar/fullcalendar.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"/./../assets/plugins/custom/datatables/datatables.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<!--end::Vendor Stylesheets-->
\t\t<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
\t\t<link href=\"/./../assets/plugins/global/plugins.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"/./../assets/css/style.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "
            ";
        // line 31
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
            ";
        // line 33
        echo "
            ";
        // line 35
        echo "            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js\" integrity=\"sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
            ";
        // line 37
        echo "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js\" integrity=\"sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
        \t\t<script src=\"/./../assets/plugins/global/plugins.bundle.js\"></script>
\t\t        <script src=\"/./../assets/js/scripts.bundle.js\"></script>
        ";
    }

    // line 1022
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1163 => 1022,  1155 => 37,  1152 => 35,  1149 => 33,  1145 => 31,  1142 => 30,  1138 => 29,  1127 => 20,  1125 => 19,  1121 => 18,  1114 => 5,  1068 => 1023,  1066 => 1022,  610 => 569,  596 => 558,  588 => 556,  586 => 555,  71 => 42,  69 => 29,  66 => 28,  64 => 18,  52 => 8,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\page.html.twig");
    }
}
