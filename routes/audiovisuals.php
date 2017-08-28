<?php
/**
 * Audiovisuales
 */

Route::get('/', [
    'as'   => 'audiovisuales.index',
    'uses' => function () {
        return view('audiovisuals.example');
    },
]);
Route::group(['prefix' => 'autenticacion'], function () {
    $controller = "\\App\\Container\\Audiovisuals\\Src\\Controllers\\";
    Route::get('index', [
        'uses' => $controller . 'UsuarioAudiovisualesController@index',
        'as'   => 'audiovisuales.autenticacion.index',
    ]);
    Route::get('data', [
        'uses' => $controller . 'AdministradorController@data',
        'as'   => 'administrador.data',
    ]);
    Route::get('all/{id}', [
        'uses' => $controller . 'AdministradorController@all',
        'as'   => 'administrador.all',
    ]);
    Route::post('store', [
        'uses' => $controller . 'AdministradorController@store',
        'as'   => 'administrador.store',
    ]);
    Route::delete('delete/{id?}', [
        'uses' => $controller . 'AdministradorController@destroy',
        'as'   => 'administrador.destroy',
    ])->where(['id' => '[0-9]+']);
});
// RUTAS FUNCIONARIO
Route::group(['prefix' => 'funcionario'], function () {
    $controller = "\\App\\Container\\Audiovisuals\\Src\\Controllers\\";
    //ruta para vista reservar Articulos
    Route::get('index', [
        'uses' => $controller . 'FuncionarioController@reserva',
        'as'   => 'audiovisuales.reservas.articulos.index',
    ]);
    //ruta para crear reserva articulos
	Route::post('Store', [
		'uses' => $controller . 'FuncionarioController@store',
		'as'   => 'reservaArticulo.store',
	]);
	//ruta para crear funcionario
	Route::post('CrearFuncionario', [
		'uses' => $controller . 'FuncionarioController@storePrograma',
		'as'   => 'crearFuncionarioPrograma.storePrograma',
	]);

    Route::get('data', [
        'uses' => $controller . 'FuncionarioController@data',
        'as'   => 'funcionario.data',
    ]);
    Route::get('reserva', [
        'uses' => $controller . 'FuncionarioController@reserva',
        'as'   => 'funcionario.reserva',
    ]);
    Route::get('all/{id}', [
        'uses' => $controller . 'FuncionarioController@all',
        'as'   => 'funcionario.all',
    ]);
    Route::get('modal', [
        'uses' => $controller . 'FuncionarioController@modal',
        'as'   => 'funcionario.modal',
    ]);
    Route::post('store', [
        'uses' => $controller . 'FuncionarioController@store',
        'as'   => 'funcionario.store',
    ]);

    Route::delete('delete/{id?}', [
        'uses' => $controller . 'FuncionarioController@destroy',
        'as'   => 'funcionario.destroy',
    ])->where(['id' => '[0-9]+']);
});
// RUTAS ADMINISTRADOR
Route::group(['prefix' => 'administrador'], function () {
    $controller = "\\App\\Container\\Audiovisuals\\Src\\Controllers\\";
    Route::get('index', [
        'uses' => $controller . 'AdministradorController@index',
        'as'   => 'audiovisuales.administrador.index',
    ]);
    Route::get('data', [
        'uses' => $controller . 'AdministradorController@data',
        'as'   => 'administrador.data',
    ]);
    Route::get('all/{id}', [
        'uses' => $controller . 'AdministradorController@all',
        'as'   => 'administrador.all',
    ]);
    Route::post('store', [
        'uses' => $controller . 'AdministradorController@store',
        'as'   => 'administrador.store',
    ]);
    Route::delete('delete/{id?}', [
        'uses' => $controller . 'AdministradorController@destroy',
        'as'   => 'administrador.destroy',
    ])->where(['id' => '[0-9]+']);

    Route::get('edit/{id?}', [
        'uses' => $controller . 'AdministradorController@edit',
        'as'   => 'administrador.edit',
    ])->where(['id' => '[0-9]+']);
    Route::post('update/{id?}', [
        'uses' => $controller . 'AdministradorController@update',
        'as'   => 'administrador.update',
    ])->where(['id' => '[0-9]+']);
});
// RUTAS SUPERADMIN
Route::group(['prefix' => 'superAdmin'], function () {
    $controller = "\\App\\Container\\Audiovisuals\\Src\\Controllers\\";
    //GESTION ARTICULO
    Route::get('index', [
        'uses' => $controller . 'ArticuloController@index',
        'as'   => 'audiovisuales.articulo.index',
    ]);
    Route::post('stores', [
        'uses' => $controller . 'ArticuloController@storeTipoArt',
        'as'   => 'tipoArticulos.store',
    ]);

    Route::post('articles/check_unique', [
        'uses' => $controller . 'ArticuloController@ajaxUniqueTipoArt',
        'as'   => 'tipoArticulo.validar',

    ]);
    Route::post('store', [
        'uses' => $controller . 'ArticuloController@storeKit',
        'as'   => 'kit.store',

    ]);
    Route::post('kits/check_unique', [
        'uses' => $controller . 'ArticuloController@ajaxUniqueKit',
        'as'   => 'kit.validar',

    ]);

    Route::post('storeArticulo', [
        'uses' => $controller . 'ArticuloController@storeArticulos',
        'as'   => 'articulo.store',

    ]);
    Route::get('listar', [
        'uses' => $controller . 'ArticuloController@data',
        'as'   => 'listarArticulo.data',
    ]);


});

//RUTAS FUNCIONES ADMINISTRADPR
Route::group(['prefix' => 'adminView'], function () {
    $controller = "\\App\\Container\\Audiovisuals\\Src\\Controllers\\";
    Route::get('index', [
        'uses' => $controller . 'AdminviewController@index',
        'as'   => 'audiovisuales.adminview.index',
    ]);
    Route::get('data', [
        'uses' => $controller . 'AdminviewController@data',
        'as'   => 'adminview.data',
    ]);
    Route::get('all/{id}', [
        'uses' => $controller . 'AdminviewController@all',
        'as'   => 'adminview.all',
    ]);
    Route::post('store', [
        'uses' => $controller . 'AdminviewController@store',
        'as'   => 'adminview.store',
    ]);
    Route::delete('delete/{id?}', [
        'uses' => $controller . 'AdminviewController@destroy',
        'as'   => 'adminview.destroy',
    ])->where(['id' => '[0-9]+']);
});
