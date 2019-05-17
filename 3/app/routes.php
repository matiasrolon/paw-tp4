 <?php

    $router->get('', 'PagesController@home');
    $router->get('about', 'PagesController@about');

    $router->get('turnos', 'TurnosController@index');
    $router->get('turnos/create', 'TurnosController@create');
    //$router->get('turnos/create/turnoReservado', 'TurnosController@turnoReservado');
    //$router->get('turnos/create/camposErroneos', 'TurnosController@camposErroneos($CampoErroneo)');
    //$router->post('turnos/save', 'TurnosController@save');
    $router->post('turnos/validate', 'TurnosController@validate');

    $router->get('not_found', 'ProjectController@notFound');
    $router->get('internal_error', 'ProjectController@internalError');
