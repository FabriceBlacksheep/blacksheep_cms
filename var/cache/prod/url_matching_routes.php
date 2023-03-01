<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
        '/agence' => [[['_route' => 'app_agence_index', '_controller' => 'App\\Controller\\AgenceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/agence/new' => [[['_route' => 'app_agence_new', '_controller' => 'App\\Controller\\AgenceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/campervan' => [[['_route' => 'app_campervan_index', '_controller' => 'App\\Controller\\CampervanController::index'], null, ['GET' => 0], null, true, false, null]],
        '/campervan/new' => [[['_route' => 'app_campervan_new', '_controller' => 'App\\Controller\\CampervanController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/content' => [[['_route' => 'app_content_index', '_controller' => 'App\\Controller\\ContentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/content/new' => [[['_route' => 'app_content_new', '_controller' => 'App\\Controller\\ContentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                            .'|agences(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:535)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:561)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:599)'
                                .')'
                            .')'
                            .'|users(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:643)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:669)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:707)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|gence/([^/]++)(?'
                        .'|(*:736)'
                        .'|/edit(*:749)'
                        .'|(*:757)'
                    .')'
                .')'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:808)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:851)'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|mpervan/([^/]++)(?'
                            .'|(*:888)'
                            .'|/edit(*:901)'
                            .'|(*:909)'
                        .')'
                        .'|tegory/([^/]++)(?'
                            .'|(*:936)'
                            .'|/edit(*:949)'
                            .'|(*:957)'
                        .')'
                    .')'
                    .'|ontent/([^/]++)(?'
                        .'|(*:985)'
                        .'|/edit(*:998)'
                        .'|(*:1006)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1053)'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:1082)'
                        .'|/edit(*:1096)'
                        .'|(*:1105)'
                    .')'
                    .'|reset\\-password/([^/]++)(*:1139)'
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
        535 => [[['_route' => '_api_/agences/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        561 => [
            [['_route' => '_api_/agences{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/agences{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        599 => [
            [['_route' => '_api_/agences/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/agences/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/agences/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        643 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        669 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        707 => [
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        736 => [[['_route' => 'app_agence_show', '_controller' => 'App\\Controller\\AgenceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        749 => [[['_route' => 'app_agence_edit', '_controller' => 'App\\Controller\\AgenceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        757 => [[['_route' => 'app_agence_delete', '_controller' => 'App\\Controller\\AgenceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        808 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        851 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        888 => [[['_route' => 'app_campervan_show', '_controller' => 'App\\Controller\\CampervanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        901 => [[['_route' => 'app_campervan_edit', '_controller' => 'App\\Controller\\CampervanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        909 => [[['_route' => 'app_campervan_delete', '_controller' => 'App\\Controller\\CampervanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        936 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        949 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        957 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        985 => [[['_route' => 'app_content_show', '_controller' => 'App\\Controller\\ContentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        998 => [[['_route' => 'app_content_edit', '_controller' => 'App\\Controller\\ContentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1006 => [[['_route' => 'app_content_delete', '_controller' => 'App\\Controller\\ContentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1053 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1082 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1096 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1105 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1139 => [
            [['_route' => 'app_user_reset_password', '_controller' => 'App\\Controller\\UserController::resetPassword'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
