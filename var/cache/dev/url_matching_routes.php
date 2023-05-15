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
        '/password/forget_password' => [[['_route' => 'app_forget_password', '_controller' => 'App\\Controller\\PasswordController::forgetPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
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
                .'|/commentary/([^/]++)(*:27)'
                .'|/medias/([^/]++)(?'
                    .'|(*:53)'
                    .'|/edit(*:65)'
                    .'|(*:72)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:116)'
                .'|/tricks/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:151)'
                        .'|delete(*:165)'
                    .')'
                    .'|(*:174)'
                .')'
                .'|/user/([^/]++)/(?'
                    .'|account(*:208)'
                    .'|edit_account(*:228)'
                    .'|reset(*:241)'
                .')'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:286)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:322)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:353)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:392)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:433)'
                    .'|wdt/([^/]++)(*:453)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:499)'
                            .'|router(*:513)'
                            .'|exception(?'
                                .'|(*:533)'
                                .'|\\.css(*:546)'
                            .')'
                        .')'
                        .'|(*:556)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'app_commentary_show', '_controller' => 'App\\Controller\\CommentaryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        53 => [[['_route' => 'app_medias_show', '_controller' => 'App\\Controller\\MediasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        65 => [[['_route' => 'app_medias_edit', '_controller' => 'App\\Controller\\MediasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        72 => [[['_route' => 'app_medias_delete', '_controller' => 'App\\Controller\\MediasController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        116 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        151 => [[['_route' => 'app_trick_edit', '_controller' => 'App\\Controller\\TricksController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        165 => [[['_route' => 'app_trick_delete', '_controller' => 'App\\Controller\\TricksController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        174 => [[['_route' => 'app_trick_show', '_controller' => 'App\\Controller\\TricksController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        208 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        228 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        241 => [[['_route' => 'app_user_reset_password', '_controller' => 'App\\Controller\\UserController::resetPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        286 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        353 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        392 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        433 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        453 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        499 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        513 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        533 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        546 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        556 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
