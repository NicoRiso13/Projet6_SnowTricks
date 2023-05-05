<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/commentary' => [[['_route' => 'app_commentary_index', '_controller' => 'App\\Controller\\CommentaryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\HomeController::home'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/medias/new' => [[['_route' => 'app_medias_new', '_controller' => 'App\\Controller\\MediasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tricks' => [[['_route' => 'app_trick_index', '_controller' => 'App\\Controller\\TricksController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tricks/new' => [[['_route' => 'app_trick_new', '_controller' => 'App\\Controller\\TricksController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/commentary/([^/]++)(?'
                    .'|(*:30)'
                .')'
                .'|/medias/([^/]++)(?'
                    .'|(*:57)'
                    .'|/edit(*:69)'
                    .'|(*:76)'
                .')'
                .'|/tricks/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:111)'
                        .'|delete(*:125)'
                    .')'
                    .'|(*:134)'
                .')'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:179)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:215)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:246)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:285)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:326)'
                    .'|wdt/([^/]++)(*:346)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:392)'
                            .'|router(*:406)'
                            .'|exception(?'
                                .'|(*:426)'
                                .'|\\.css(*:439)'
                            .')'
                        .')'
                        .'|(*:449)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [
            [['_route' => 'app_commentary_show', '_controller' => 'App\\Controller\\CommentaryController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_commentary_delete', '_controller' => 'App\\Controller\\CommentaryController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        57 => [[['_route' => 'app_medias_show', '_controller' => 'App\\Controller\\MediasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        69 => [[['_route' => 'app_medias_edit', '_controller' => 'App\\Controller\\MediasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        76 => [[['_route' => 'app_medias_delete', '_controller' => 'App\\Controller\\MediasController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        111 => [[['_route' => 'app_trick_edit', '_controller' => 'App\\Controller\\TricksController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        125 => [[['_route' => 'app_trick_delete', '_controller' => 'App\\Controller\\TricksController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        134 => [[['_route' => 'app_trick_show', '_controller' => 'App\\Controller\\TricksController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        179 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        215 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        246 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        285 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        326 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        346 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        392 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        406 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        426 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        439 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        449 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
