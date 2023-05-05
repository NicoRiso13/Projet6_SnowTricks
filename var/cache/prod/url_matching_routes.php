<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/commentary' => [[['_route' => 'app_commentary_index', '_controller' => 'App\\Controller\\CommentaryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentary/new' => [[['_route' => 'app_commentary_new', '_controller' => 'App\\Controller\\CommentaryController::new'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\HomeController::home'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/medias/new' => [[['_route' => 'app_medias_new', '_controller' => 'App\\Controller\\MediasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tricks' => [[['_route' => 'app_trick_index', '_controller' => 'App\\Controller\\TricksController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/tricks/(?'
                    .'|([^/]++)(*:103)'
                    .'|new(*:114)'
                    .'|([^/]++)(?'
                        .'|/edit(*:138)'
                        .'|(*:146)'
                    .')'
                .')'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:192)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:228)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:259)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:298)'
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
        103 => [[['_route' => 'app_trick_show', '_controller' => 'App\\Controller\\TricksController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        114 => [[['_route' => 'app_trick_new', '_controller' => 'App\\Controller\\TricksController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        138 => [[['_route' => 'app_trick_edit', '_controller' => 'App\\Controller\\TricksController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        146 => [[['_route' => 'app_trick_delete', '_controller' => 'App\\Controller\\TricksController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        192 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        228 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        259 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        298 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
