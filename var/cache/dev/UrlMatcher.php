<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendar/new' => [[['_route' => 'calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendarviolette' => [[['_route' => 'calendarviolette_index', '_controller' => 'App\\Controller\\CalendarvioletteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendarviolette/new' => [[['_route' => 'calendarviolette_new', '_controller' => 'App\\Controller\\CalendarvioletteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/centresdebeaute' => [[['_route' => 'centresdebeaute', '_controller' => 'App\\Controller\\CentresdebeauteController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/Fleur' => [[['_route' => 'Fleur', '_controller' => 'App\\Controller\\Fleurdelys\\FleurdelysController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/Lilia' => [[['_route' => 'Lilia', '_controller' => 'App\\Controller\\Liliabenaziza\\LiliabenazizaController::index'], null, null, null, false, false, null]],
        '/Mahassen' => [[['_route' => 'Mahassen', '_controller' => 'App\\Controller\\Mahassen\\MahassenController::index'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/mainviolette' => [[['_route' => 'mainviolette', '_controller' => 'App\\Controller\\MainvioletteController::index'], null, null, null, false, false, null]],
        '/offremariage' => [[['_route' => 'offremariage', '_controller' => 'App\\Controller\\OffremariageController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/reservationlilia' => [[['_route' => 'reservationlilia_index', '_controller' => 'App\\Controller\\ReservationliliaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservationlilia/new' => [[['_route' => 'reservationlilia_new', '_controller' => 'App\\Controller\\ReservationliliaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/servicefleurdelys' => [[['_route' => 'servicefleurdelys', '_controller' => 'App\\Controller\\ServicefleurdelysController::index'], null, null, null, false, false, null]],
        '/servicelilia' => [[['_route' => 'servicelilia', '_controller' => 'App\\Controller\\ServiceliliaController::index'], null, null, null, false, false, null]],
        '/servicemahassen' => [[['_route' => 'servicemahassen', '_controller' => 'App\\Controller\\ServicemahassenController::index'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'services', '_controller' => 'App\\Controller\\ServicesController::index'], null, null, null, false, false, null]],
        '/serviceviolette' => [[['_route' => 'serviceviolette', '_controller' => 'App\\Controller\\ServicevioletteController::index'], null, null, null, false, false, null]],
        '/Violette' => [[['_route' => 'Violette', '_controller' => 'App\\Controller\\Violette\\VioletteController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/c(?'
                    .'|alendar(?'
                        .'|/([^/]++)(?'
                            .'|(*:196)'
                            .'|/edit(*:209)'
                            .'|(*:217)'
                        .')'
                        .'|violette/([^/]++)(?'
                            .'|(*:246)'
                            .'|/edit(*:259)'
                            .'|(*:267)'
                        .')'
                    .')'
                    .'|entresdebeaute/([^/]++)(*:300)'
                .')'
                .'|/reservationlilia/([^/]++)(?'
                    .'|(*:338)'
                    .'|/edit(*:351)'
                    .'|(*:359)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        217 => [[['_route' => 'calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        246 => [[['_route' => 'calendarviolette_show', '_controller' => 'App\\Controller\\CalendarvioletteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        259 => [[['_route' => 'calendarviolette_edit', '_controller' => 'App\\Controller\\CalendarvioletteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        267 => [[['_route' => 'calendarviolette_delete', '_controller' => 'App\\Controller\\CalendarvioletteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        300 => [[['_route' => 'centresdebeaute_show', '_controller' => 'App\\Controller\\CentresdebeauteController::show'], ['id'], null, null, false, true, null]],
        338 => [[['_route' => 'reservationlilia_show', '_controller' => 'App\\Controller\\ReservationliliaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        351 => [[['_route' => 'reservationlilia_edit', '_controller' => 'App\\Controller\\ReservationliliaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        359 => [
            [['_route' => 'reservationlilia_delete', '_controller' => 'App\\Controller\\ReservationliliaController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
