<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\HomeController::home'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/tricks' => [[['_route' => 'app_tricks_index', '_controller' => 'App\\Controller\\TricksController::index'], null, ['GET' => 0], null, true, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/tricks/(?'
                    .'|([^/]++)(*:26)'
                    .'|new(*:36)'
                    .'|([^/]++)(?'
                        .'|/edit(*:59)'
                        .'|(*:66)'
                    .')'
                .')'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:111)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:147)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:178)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:217)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:258)'
                    .'|wdt/([^/]++)(*:278)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:324)'
                            .'|router(*:338)'
                            .'|exception(?'
                                .'|(*:358)'
                                .'|\\.css(*:371)'
                            .')'
                        .')'
                        .'|(*:381)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'app_tricks_show', '_controller' => 'App\\Controller\\TricksController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        36 => [[['_route' => 'app_tricks_new', '_controller' => 'App\\Controller\\TricksController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        59 => [[['_route' => 'app_tricks_edit', '_controller' => 'App\\Controller\\TricksController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        66 => [[['_route' => 'app_tricks_delete', '_controller' => 'App\\Controller\\TricksController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        111 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        147 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        178 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        217 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        258 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        278 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        324 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        338 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        358 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        371 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        381 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
