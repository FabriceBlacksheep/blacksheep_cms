<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_api_/adresses/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/adresses']], [], [], []],
    '_api_/adresses{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/adresses']], [], [], []],
    '_api_/adresses{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/adresses']], [], [], []],
    '_api_/adresses/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/adresses']], [], [], []],
    '_api_/adresses/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/adresses']], [], [], []],
    '_api_/adresses/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_operation_name' => '_api_/adresses/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/adresses']], [], [], []],
    '_api_/adresse_agences/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\AdresseAgence', '_api_operation_name' => '_api_/adresse_agences/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/adresse_agences']], [], [], []],
    '_api_/adresse_agences{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\AdresseAgence', '_api_operation_name' => '_api_/adresse_agences{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/adresse_agences']], [], [], []],
    '_api_/adresse_agences{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\AdresseAgence', '_api_operation_name' => '_api_/adresse_agences{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/adresse_agences']], [], [], []],
    '_api_/adresse_agences/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\AdresseAgence', '_api_operation_name' => '_api_/adresse_agences/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/adresse_agences']], [], [], []],
    '_api_/adresse_agences/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\AdresseAgence', '_api_operation_name' => '_api_/adresse_agences/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/adresse_agences']], [], [], []],
    '_api_/adresse_agences/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\AdresseAgence', '_api_operation_name' => '_api_/adresse_agences/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/adresse_agences']], [], [], []],
    '_api_/agences/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/agences']], [], [], []],
    '_api_/agences{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/agences']], [], [], []],
    '_api_/agences{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/agences']], [], [], []],
    '_api_/agences/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/agences']], [], [], []],
    '_api_/agences/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/agences']], [], [], []],
    '_api_/agences/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_operation_name' => '_api_/agences/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/agences']], [], [], []],
    '_api_/assurances/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Assurance', '_api_operation_name' => '_api_/assurances/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/assurances']], [], [], []],
    '_api_/assurances{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Assurance', '_api_operation_name' => '_api_/assurances{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/assurances']], [], [], []],
    '_api_/assurances{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Assurance', '_api_operation_name' => '_api_/assurances{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/assurances']], [], [], []],
    '_api_/assurances/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Assurance', '_api_operation_name' => '_api_/assurances/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/assurances']], [], [], []],
    '_api_/assurances/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Assurance', '_api_operation_name' => '_api_/assurances/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/assurances']], [], [], []],
    '_api_/assurances/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Assurance', '_api_operation_name' => '_api_/assurances/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/assurances']], [], [], []],
    '_api_/campervans/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Campervan', '_api_operation_name' => '_api_/campervans/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/campervans']], [], [], []],
    '_api_/campervans{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Campervan', '_api_operation_name' => '_api_/campervans{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/campervans']], [], [], []],
    '_api_/campervans{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Campervan', '_api_operation_name' => '_api_/campervans{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/campervans']], [], [], []],
    '_api_/campervans/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Campervan', '_api_operation_name' => '_api_/campervans/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/campervans']], [], [], []],
    '_api_/campervans/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Campervan', '_api_operation_name' => '_api_/campervans/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/campervans']], [], [], []],
    '_api_/campervans/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Campervan', '_api_operation_name' => '_api_/campervans/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/campervans']], [], [], []],
    '_api_/categories/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], [], []],
    '_api_/contents/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Content', '_api_operation_name' => '_api_/contents/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/contents']], [], [], []],
    '_api_/contents{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Content', '_api_operation_name' => '_api_/contents{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/contents']], [], [], []],
    '_api_/contents{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Content', '_api_operation_name' => '_api_/contents{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/contents']], [], [], []],
    '_api_/contents/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Content', '_api_operation_name' => '_api_/contents/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/contents']], [], [], []],
    '_api_/contents/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Content', '_api_operation_name' => '_api_/contents/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/contents']], [], [], []],
    '_api_/contents/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Content', '_api_operation_name' => '_api_/contents/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/contents']], [], [], []],
    '_api_/users/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    'ef_connect' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder', true], ['variable', '/', '[^/]++', 'instance', true], ['text', '/efconnect']], [], [], []],
    'ef_main_js' => [[], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], [], [['text', '/elfinder.main.js']], [], [], []],
    'elfinder' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder', true], ['variable', '/', '[^/]++', 'instance', true], ['text', '/elfinder']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_adresse_index' => [[], ['_controller' => 'App\\Controller\\AdresseController::index'], [], [['text', '/adresse/']], [], [], []],
    'app_adresse_new' => [[], ['_controller' => 'App\\Controller\\AdresseController::new'], [], [['text', '/adresse/new']], [], [], []],
    'app_adresse_show' => [['id'], ['_controller' => 'App\\Controller\\AdresseController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adresse']], [], [], []],
    'app_adresse_edit' => [['id'], ['_controller' => 'App\\Controller\\AdresseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/adresse']], [], [], []],
    'app_adresse_delete' => [['id'], ['_controller' => 'App\\Controller\\AdresseController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adresse']], [], [], []],
    'app_agence_index' => [[], ['_controller' => 'App\\Controller\\AgenceController::index'], [], [['text', '/agence/']], [], [], []],
    'app_agence_new' => [[], ['_controller' => 'App\\Controller\\AgenceController::new'], [], [['text', '/agence/new']], [], [], []],
    'app_agence_show' => [['id'], ['_controller' => 'App\\Controller\\AgenceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agence']], [], [], []],
    'app_agence_edit' => [['id'], ['_controller' => 'App\\Controller\\AgenceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/agence']], [], [], []],
    'app_agence_delete' => [['id'], ['_controller' => 'App\\Controller\\AgenceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agence']], [], [], []],
    'app_agence_active' => [['id'], ['_controller' => 'App\\Controller\\AgenceController::active'], [], [['text', '/active'], ['variable', '/', '[^/]++', 'id', true], ['text', '/agence']], [], [], []],
    'app_agence_search' => [[], ['_controller' => 'App\\Controller\\AgenceController::search'], [], [['text', '/agence/search']], [], [], []],
    'app_agence_adresse' => [['id'], ['_controller' => 'App\\Controller\\AgenceController::adresse'], [], [['text', '/adresse'], ['variable', '/', '[^/]++', 'id', true], ['text', '/agence']], [], [], []],
    'app_agence_langue' => [['id', 'langue'], ['_controller' => 'App\\Controller\\AgenceController::langue'], [], [['variable', '/', '[^/]++', 'langue', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/agence']], [], [], []],
    'app_assurance_index' => [[], ['_controller' => 'App\\Controller\\AssuranceController::index'], [], [['text', '/assurance/']], [], [], []],
    'app_assurance_new' => [[], ['_controller' => 'App\\Controller\\AssuranceController::new'], [], [['text', '/assurance/new']], [], [], []],
    'app_assurance_show' => [['id'], ['_controller' => 'App\\Controller\\AssuranceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/assurance']], [], [], []],
    'app_assurance_edit' => [['id'], ['_controller' => 'App\\Controller\\AssuranceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/assurance']], [], [], []],
    'app_assurance_delete' => [['id'], ['_controller' => 'App\\Controller\\AssuranceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/assurance']], [], [], []],
    'app_campervan_index' => [[], ['_controller' => 'App\\Controller\\CampervanController::index'], [], [['text', '/campervan/']], [], [], []],
    'app_campervan_new' => [[], ['_controller' => 'App\\Controller\\CampervanController::new'], [], [['text', '/campervan/new']], [], [], []],
    'app_campervan_show' => [['id'], ['_controller' => 'App\\Controller\\CampervanController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/campervan']], [], [], []],
    'app_campervan_edit' => [['id'], ['_controller' => 'App\\Controller\\CampervanController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/campervan']], [], [], []],
    'app_campervan_delete' => [['id'], ['_controller' => 'App\\Controller\\CampervanController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/campervan']], [], [], []],
    'app_category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], [], []],
    'app_category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], [], []],
    'app_category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_category_content' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::content'], [], [['text', '/content'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_content_index' => [[], ['_controller' => 'App\\Controller\\ContentController::index'], [], [['text', '/content/']], [], [], []],
    'app_content_new' => [[], ['_controller' => 'App\\Controller\\ContentController::new'], [], [['text', '/content/new']], [], [], []],
    'app_content_show' => [['id'], ['_controller' => 'App\\Controller\\ContentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/content']], [], [], []],
    'app_content_edit' => [['id'], ['_controller' => 'App\\Controller\\ContentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/content']], [], [], []],
    'app_content_delete' => [['id'], ['_controller' => 'App\\Controller\\ContentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/content']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_media' => [[], ['_controller' => 'App\\Controller\\MediaController::index'], [], [['text', '/library']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_reset_password' => [['token'], ['_controller' => 'App\\Controller\\UserController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/user/reset-password']], [], [], []],
    'file_manager' => [[], ['_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::indexAction'], [], [['text', '/manager/']], [], [], []],
    'file_manager_rename' => [['fileName'], ['_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::renameFileAction'], [], [['variable', '/', '[^/]++', 'fileName', true], ['text', '/manager/rename']], [], [], []],
    'file_manager_upload' => [[], ['_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::uploadFileAction'], [], [['text', '/manager/upload/']], [], [], []],
    'file_manager_file' => [['fileName'], ['_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::binaryFileResponseAction'], [], [['variable', '/', '[^/]++', 'fileName', true], ['text', '/manager/file']], [], [], []],
    'file_manager_delete' => [[], ['_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::deleteAction'], [], [['text', '/manager/delete/']], [], [], []],
];
