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
        '/calendarfleur' => [[['_route' => 'calendarfleur_index', '_controller' => 'App\\Controller\\CalendarfleurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendarfleur/new' => [[['_route' => 'calendarfleur_new', '_controller' => 'App\\Controller\\CalendarfleurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendarmahassen' => [[['_route' => 'calendarmahassen_index', '_controller' => 'App\\Controller\\CalendarmahassenController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendarmahassen/new' => [[['_route' => 'calendarmahassen_new', '_controller' => 'App\\Controller\\CalendarmahassenController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendarviolette' => [[['_route' => 'calendarviolette_index', '_controller' => 'App\\Controller\\CalendarvioletteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendarviolette/new' => [[['_route' => 'calendarviolette_new', '_controller' => 'App\\Controller\\CalendarvioletteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/centresdebeaute' => [[['_route' => 'centresdebeaute', '_controller' => 'App\\Controller\\CentresdebeauteController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/Fleur' => [[['_route' => 'Fleur', '_controller' => 'App\\Controller\\Fleurdelys\\FleurdelysController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/Lilia' => [[['_route' => 'Lilia', '_controller' => 'App\\Controller\\Liliabenaziza\\LiliabenazizaController::index'], null, null, null, false, false, null]],
        '/Mahassen' => [[['_route' => 'Mahassen', '_controller' => 'App\\Controller\\Mahassen\\MahassenController::index'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/mainfleur' => [[['_route' => 'mainfleur', '_controller' => 'App\\Controller\\MainfleurController::index'], null, null, null, false, false, null]],
        '/mainmahassen' => [[['_route' => 'mainmahassen', '_controller' => 'App\\Controller\\MainmahassenController::index'], null, null, null, false, false, null]],
        '/mainviolette' => [[['_route' => 'mainviolette', '_controller' => 'App\\Controller\\MainvioletteController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/reservationfleur' => [[['_route' => 'reservationfleur_index', '_controller' => 'App\\Controller\\ReservationfleurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservationfleur/new' => [[['_route' => 'reservationfleur_new', '_controller' => 'App\\Controller\\ReservationfleurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservationlilia' => [[['_route' => 'reservationlilia_index', '_controller' => 'App\\Controller\\ReservationliliaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservationlilia/new' => [[['_route' => 'reservationlilia_new', '_controller' => 'App\\Controller\\ReservationliliaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservationmahassen' => [[['_route' => 'reservationmahassen_index', '_controller' => 'App\\Controller\\ReservationmahassenController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservationmahassen/new' => [[['_route' => 'reservationmahassen_new', '_controller' => 'App\\Controller\\ReservationmahassenController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservationviolette' => [[['_route' => 'reservationviolette_index', '_controller' => 'App\\Controller\\ReservationvioletteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservationviolette/new' => [[['_route' => 'reservationviolette_new', '_controller' => 'App\\Controller\\ReservationvioletteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                        .'|fleur/([^/]++)(?'
                            .'|(*:243)'
                            .'|/edit(*:256)'
                            .'|(*:264)'
                        .')'
                        .'|mahassen/([^/]++)(?'
                            .'|(*:293)'
                            .'|/edit(*:306)'
                            .'|(*:314)'
                        .')'
                        .'|violette/([^/]++)(?'
                            .'|(*:343)'
                            .'|/edit(*:356)'
                            .'|(*:364)'
                        .')'
                    .')'
                    .'|entresdebeaute/([^/]++)(*:397)'
                .')'
                .'|/home/([^/]++)(*:420)'
                .'|/reservation(?'
                    .'|fleur/([^/]++)(?'
                        .'|(*:460)'
                        .'|/edit(*:473)'
                        .'|(*:481)'
                    .')'
                    .'|lilia/([^/]++)(?'
                        .'|(*:507)'
                        .'|/edit(*:520)'
                        .'|(*:528)'
                    .')'
                    .'|mahassen/([^/]++)(?'
                        .'|(*:557)'
                        .'|/edit(*:570)'
                        .'|(*:578)'
                    .')'
                    .'|violette/([^/]++)(?'
                        .'|(*:607)'
                        .'|/edit(*:620)'
                        .'|(*:628)'
                    .')'
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
        243 => [[['_route' => 'calendarfleur_show', '_controller' => 'App\\Controller\\CalendarfleurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'calendarfleur_edit', '_controller' => 'App\\Controller\\CalendarfleurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'calendarfleur_delete', '_controller' => 'App\\Controller\\CalendarfleurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        293 => [[['_route' => 'calendarmahassen_show', '_controller' => 'App\\Controller\\CalendarmahassenController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        306 => [[['_route' => 'calendarmahassen_edit', '_controller' => 'App\\Controller\\CalendarmahassenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        314 => [[['_route' => 'calendarmahassen_delete', '_controller' => 'App\\Controller\\CalendarmahassenController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        343 => [[['_route' => 'calendarviolette_show', '_controller' => 'App\\Controller\\CalendarvioletteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'calendarviolette_edit', '_controller' => 'App\\Controller\\CalendarvioletteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'calendarviolette_delete', '_controller' => 'App\\Controller\\CalendarvioletteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        397 => [[['_route' => 'centresdebeaute_show', '_controller' => 'App\\Controller\\CentresdebeauteController::show'], ['id'], null, null, false, true, null]],
        420 => [[['_route' => 'home_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null]],
        460 => [[['_route' => 'reservationfleur_show', '_controller' => 'App\\Controller\\ReservationfleurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        473 => [[['_route' => 'reservationfleur_edit', '_controller' => 'App\\Controller\\ReservationfleurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        481 => [[['_route' => 'reservationfleur_delete', '_controller' => 'App\\Controller\\ReservationfleurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        507 => [[['_route' => 'reservationlilia_show', '_controller' => 'App\\Controller\\ReservationliliaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        520 => [[['_route' => 'reservationlilia_edit', '_controller' => 'App\\Controller\\ReservationliliaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        528 => [[['_route' => 'reservationlilia_delete', '_controller' => 'App\\Controller\\ReservationliliaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        557 => [[['_route' => 'reservationmahassen_show', '_controller' => 'App\\Controller\\ReservationmahassenController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        570 => [[['_route' => 'reservationmahassen_edit', '_controller' => 'App\\Controller\\ReservationmahassenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        578 => [[['_route' => 'reservationmahassen_delete', '_controller' => 'App\\Controller\\ReservationmahassenController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        607 => [[['_route' => 'reservationviolette_show', '_controller' => 'App\\Controller\\ReservationvioletteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        620 => [[['_route' => 'reservationviolette_edit', '_controller' => 'App\\Controller\\ReservationvioletteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        628 => [
            [['_route' => 'reservationviolette_delete', '_controller' => 'App\\Controller\\ReservationvioletteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
