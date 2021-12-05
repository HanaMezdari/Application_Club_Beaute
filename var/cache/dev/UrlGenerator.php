<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'calendar_index' => [[], ['_controller' => 'App\\Controller\\CalendarController::index'], [], [['text', '/calendar/']], [], []],
    'calendar_new' => [[], ['_controller' => 'App\\Controller\\CalendarController::new'], [], [['text', '/calendar/new']], [], []],
    'calendar_show' => [['id'], ['_controller' => 'App\\Controller\\CalendarController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/calendar']], [], []],
    'calendar_edit' => [['id'], ['_controller' => 'App\\Controller\\CalendarController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/calendar']], [], []],
    'calendar_delete' => [['id'], ['_controller' => 'App\\Controller\\CalendarController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/calendar']], [], []],
    'calendarviolette_index' => [[], ['_controller' => 'App\\Controller\\CalendarvioletteController::index'], [], [['text', '/calendarviolette/']], [], []],
    'calendarviolette_new' => [[], ['_controller' => 'App\\Controller\\CalendarvioletteController::new'], [], [['text', '/calendarviolette/new']], [], []],
    'calendarviolette_show' => [['id'], ['_controller' => 'App\\Controller\\CalendarvioletteController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/calendarviolette']], [], []],
    'calendarviolette_edit' => [['id'], ['_controller' => 'App\\Controller\\CalendarvioletteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/calendarviolette']], [], []],
    'calendarviolette_delete' => [['id'], ['_controller' => 'App\\Controller\\CalendarvioletteController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/calendarviolette']], [], []],
    'centresdebeaute' => [[], ['_controller' => 'App\\Controller\\CentresdebeauteController::index'], [], [['text', '/centresdebeaute']], [], []],
    'centresdebeaute_show' => [['id'], ['_controller' => 'App\\Controller\\CentresdebeauteController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/centresdebeaute']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
    'Fleur' => [[], ['_controller' => 'App\\Controller\\Fleurdelys\\FleurdelysController::index'], [], [['text', '/Fleur']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'Lilia' => [[], ['_controller' => 'App\\Controller\\Liliabenaziza\\LiliabenazizaController::index'], [], [['text', '/Lilia']], [], []],
    'Mahassen' => [[], ['_controller' => 'App\\Controller\\Mahassen\\MahassenController::index'], [], [['text', '/Mahassen']], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/main']], [], []],
    'mainviolette' => [[], ['_controller' => 'App\\Controller\\MainvioletteController::index'], [], [['text', '/mainviolette']], [], []],
    'offremariage' => [[], ['_controller' => 'App\\Controller\\OffremariageController::index'], [], [['text', '/offremariage']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegisterController::index'], [], [['text', '/inscription']], [], []],
    'reservationlilia_index' => [[], ['_controller' => 'App\\Controller\\ReservationliliaController::index'], [], [['text', '/reservationlilia/']], [], []],
    'reservationlilia_new' => [[], ['_controller' => 'App\\Controller\\ReservationliliaController::new'], [], [['text', '/reservationlilia/new']], [], []],
    'reservationlilia_show' => [['id'], ['_controller' => 'App\\Controller\\ReservationliliaController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reservationlilia']], [], []],
    'reservationlilia_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationliliaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/reservationlilia']], [], []],
    'reservationlilia_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationliliaController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reservationlilia']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], []],
    'servicefleurdelys' => [[], ['_controller' => 'App\\Controller\\ServicefleurdelysController::index'], [], [['text', '/servicefleurdelys']], [], []],
    'servicelilia' => [[], ['_controller' => 'App\\Controller\\ServiceliliaController::index'], [], [['text', '/servicelilia']], [], []],
    'servicemahassen' => [[], ['_controller' => 'App\\Controller\\ServicemahassenController::index'], [], [['text', '/servicemahassen']], [], []],
    'services' => [[], ['_controller' => 'App\\Controller\\ServicesController::index'], [], [['text', '/services']], [], []],
    'serviceviolette' => [[], ['_controller' => 'App\\Controller\\ServicevioletteController::index'], [], [['text', '/serviceviolette']], [], []],
    'Violette' => [[], ['_controller' => 'App\\Controller\\Violette\\VioletteController::index'], [], [['text', '/Violette']], [], []],
];
