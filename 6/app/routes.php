 <?php

    $router->get('', 'PagesController@home');
    $router->get('about', 'PagesController@about');

    $router->get('turnos', 'TurnosController@index');
    $router->get('turnos/create', 'TurnosController@create');
    
    //$router->post('turnos/save', 'TurnosController@save');
    $router->post('turnos/validate', 'TurnosController@validate');
    $router->post('turnos/validateM', 'TurnosController@validateM');
    $router->get('turnos/ficha', 'TurnosController@showTurno');
    $router->get('turnos/eliminar','TurnosController@eliminar');
    $router->get('not_found', 'ProjectController@notFound');
    $router->get('internal_error', 'ProjectController@internalError');
    $router->get('turnos/delete','TurnosController@delete');
    $router->get('turnos/modificar','TurnosController@modificar');


