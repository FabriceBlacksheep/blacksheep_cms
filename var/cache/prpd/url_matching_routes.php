<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
        '/adresse' => [[['_route' => 'app_adresse_index', '_controller' => 'App\\Controller\\AdresseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/adresse/new' => [[['_route' => 'app_adresse_new', '_controller' => 'App\\Controller\\AdresseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/agence' => [[['_route' => 'app_agence_index', '_controller' => 'App\\Controller\\AgenceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/agence/new' => [[['_route' => 'app_agence_new', '_controller' => 'App\\Controller\\AgenceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/assurance' => [[['_route' => 'app_assurance_index', '_controller' => 'App\\Controller\\AssuranceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/assurance/new' => [[['_route' => 'app_assurance_new', '_controller' => 'App\\Controller\\AssuranceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/campervan' => [[['_route' => 'app_campervan_index', '_controller' => 'App\\Controller\\CampervanController::index'], null, ['GET' => 0], null, true, false, null]],
        '/campervan/new' => [[['_route' => 'app_campervan_new', '_controller' => 'App\\Controller\\CampervanController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/content' => [[['_route' => 'app_content_index', '_controller' => 'App\\Controller\\ContentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/content/new' => [[['_route' => 'app_content_new', '_controller' => 'App\\Controller\\ContentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'app_media', '_controller' => 'App\\Controller\\MediaController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/manager' => [[['_route' => 'file_manager', '_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::indexAction'], null, null, null, true, false, null]],
        '/manager/upload' => [[['_route' => 'file_manager_upload', '_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::uploadFileAction'], null, null, null, true, false, null]],
        '/manager/delete' => [[['_route' => 'file_manager_delete', '_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::deleteAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:81)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:111)'
                            .'|c(?'
                                .'|onte(?'
                                    .'|xts/([^.]+)(?:\\.(jsonld))?(*:156)'
                                    .'|nts(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:196)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:222)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:260)'
                                        .')'
                                    .')'
                                .')'
                                .'|a(?'
                                    .'|mpervans(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:312)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:338)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:376)'
                                        .')'
                                    .')'
                                    .'|tegories(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:423)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:449)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:487)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|a(?'
                                .'|dresse(?'
                                    .'|s(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:542)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:568)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:606)'
                                        .')'
                                    .')'
                                    .'|_agences(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:653)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:679)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:717)'
                                        .')'
                                    .')'
                                .')'
                                .'|gences(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:763)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:789)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:827)'
                                    .')'
                                .')'
                                .'|ssurances(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:875)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:901)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:939)'
                                    .')'
                                .')'
                            .')'
                            .'|users(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:984)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1010)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1049)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dresse/([^/]++)(?'
                        .'|(*:1080)'
                        .'|/edit(*:1094)'
                        .'|(*:1103)'
                    .')'
                    .'|gence/(?'
                        .'|([^/]++)(?'
                            .'|(*:1133)'
                            .'|/(?'
                                .'|edit(*:1150)'
                                .'|active(*:1165)'
                            .')'
                            .'|(*:1175)'
                        .')'
                        .'|search(*:1191)'
                        .'|([^/]++)/adresse(*:1216)'
                    .')'
                    .'|ssurance/([^/]++)(?'
                        .'|(*:1246)'
                        .'|/edit(*:1260)'
                        .'|(*:1269)'
                    .')'
                .')'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:1321)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:1365)'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|mpervan/([^/]++)(?'
                            .'|(*:1403)'
                            .'|/edit(*:1417)'
                            .'|(*:1426)'
                        .')'
                        .'|tegory/([^/]++)(?'
                            .'|(*:1454)'
                            .'|/(?'
                                .'|edit(*:1471)'
                                .'|content(*:1487)'
                            .')'
                            .'|(*:1497)'
                        .')'
                    .')'
                    .'|ontent/([^/]++)(?'
                        .'|(*:1526)'
                        .'|/edit(*:1540)'
                        .'|(*:1549)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1596)'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:1625)'
                        .'|/edit(*:1639)'
                        .'|(*:1648)'
                    .')'
                    .'|reset\\-password/([^/]++)(*:1682)'
                .')'
                .'|/manager/(?'
                    .'|rename/([^/]++)(*:1719)'
                    .'|file/([^/]++)(*:1741)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        111 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        156 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        196 => [[['_route' => '_api_/contents/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Content', '_api_operation_name' => '_api_/contents/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        222 => [
            [['_route' => '_api_/contents{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Content', '_api_operation_name' => '_api_/contents{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/contents{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Content', '_api_operation_name' => '_api_/contents{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        260 => [
            [['_route' => '_api_/contents/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Content', '_api_operation_name' => '_api_/contents/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/contents/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Content', '_api_operation_name' => '_api_/contents/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/contents/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Content', '_api_operation_name' => '_api_/contents/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        312 => [[['_route' => '_api_/campervans/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Campervan', '_api_operation_name' => '_api_/campervans/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        338 => [
            [['_route' => '_api_/campervans{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Campervan', '_api_operation_name' => '_api_/campervans{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/campervans{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Campervan', '_api_operation_name' => '_api_/campervans{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        376 => [
            [['_route' => '_api_/campervans/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Campervan', '_api_operation_name' => '_api_/campervans/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/campervans/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Campervan', '_api_operation_name' => '_api_/campervans/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/campervans/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Campervan', '_api_operation_name' => '_api_/campervans/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        423 => [[['_route' => '_api_/categories/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        449 => [
            [['_route' => '_api_/categories{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/categories{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        487 => [
            [['_route' => '_api_/categories/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/categories/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/categories/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        542 => [[['_route' => '_api_/adresses/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        568 => [
            [['_route' => '_api_/adresses{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/adresses{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        606 => [
            [['_route' => '_api_/adresses/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/adresses/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/adresses/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        653 => [[['_route' => '_api_/adresse_agences/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\AdresseAgence', '_api_operation_name' => '_api_/adresse_agences/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        679 => [
            [['_route' => '_api_/adresse_agences{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\AdresseAgence', '_api_operation_name' => '_api_/adresse_agences{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/adresse_agences{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\AdresseAgence', '_api_operation_name' => '_api_/adresse_agences{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        717 => [
            [['_route' => '_api_/adresse_agences/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\AdresseAgence', '_api_operation_name' => '_api_/adresse_agences/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/adresse_agences/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\AdresseAgence', '_api_operation_name' => '_api_/adresse_agences/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/adresse_agences/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\AdresseAgence', '_api_operation_name' => '_api_/adresse_agences/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        763 => [[['_route' => '_api_/agences/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        789 => [
            [['_route' => '_api_/agences{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/agences{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        827 => [
            [['_route' => '_api_/agences/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/agences/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/agences/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        875 => [[['_route' => '_api_/assurances/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Assurance', '_api_operation_name' => '_api_/assurances/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        901 => [
            [['_route' => '_api_/assurances{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Assurance', '_api_operation_name' => '_api_/assurances{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/assurances{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Assurance', '_api_operation_name' => '_api_/assurances{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        939 => [
            [['_route' => '_api_/assurances/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Assurance', '_api_operation_name' => '_api_/assurances/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/assurances/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Assurance', '_api_operation_name' => '_api_/assurances/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/assurances/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Assurance', '_api_operation_name' => '_api_/assurances/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        984 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1010 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1049 => [
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1080 => [[['_route' => 'app_adresse_show', '_controller' => 'App\\Controller\\AdresseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1094 => [[['_route' => 'app_adresse_edit', '_controller' => 'App\\Controller\\AdresseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1103 => [[['_route' => 'app_adresse_delete', '_controller' => 'App\\Controller\\AdresseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1133 => [[['_route' => 'app_agence_show', '_controller' => 'App\\Controller\\AgenceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1150 => [[['_route' => 'app_agence_edit', '_controller' => 'App\\Controller\\AgenceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1165 => [[['_route' => 'app_agence_active', '_controller' => 'App\\Controller\\AgenceController::active'], ['id'], ['POST' => 0], null, false, false, null]],
        1175 => [[['_route' => 'app_agence_delete', '_controller' => 'App\\Controller\\AgenceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1191 => [[['_route' => 'app_agence_search', '_controller' => 'App\\Controller\\AgenceController::search'], [], ['POST' => 0], null, false, false, null]],
        1216 => [[['_route' => 'app_agence_adresse', '_controller' => 'App\\Controller\\AgenceController::adresse'], ['id'], ['GET' => 0], null, false, false, null]],
        1246 => [[['_route' => 'app_assurance_show', '_controller' => 'App\\Controller\\AssuranceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1260 => [[['_route' => 'app_assurance_edit', '_controller' => 'App\\Controller\\AssuranceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1269 => [[['_route' => 'app_assurance_delete', '_controller' => 'App\\Controller\\AssuranceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1321 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        1365 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        1403 => [[['_route' => 'app_campervan_show', '_controller' => 'App\\Controller\\CampervanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1417 => [[['_route' => 'app_campervan_edit', '_controller' => 'App\\Controller\\CampervanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1426 => [[['_route' => 'app_campervan_delete', '_controller' => 'App\\Controller\\CampervanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1454 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1471 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1487 => [[['_route' => 'app_category_content', '_controller' => 'App\\Controller\\CategoryController::content'], ['id'], ['GET' => 0], null, false, false, null]],
        1497 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1526 => [[['_route' => 'app_content_show', '_controller' => 'App\\Controller\\ContentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1540 => [[['_route' => 'app_content_edit', '_controller' => 'App\\Controller\\ContentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1549 => [[['_route' => 'app_content_delete', '_controller' => 'App\\Controller\\ContentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1596 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1625 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1639 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1648 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1682 => [[['_route' => 'app_user_reset_password', '_controller' => 'App\\Controller\\UserController::resetPassword'], ['token'], null, null, false, true, null]],
        1719 => [[['_route' => 'file_manager_rename', '_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::renameFileAction'], ['fileName'], null, null, false, true, null]],
        1741 => [
            [['_route' => 'file_manager_file', '_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::binaryFileResponseAction'], ['fileName'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
