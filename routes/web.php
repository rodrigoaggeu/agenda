<?php

use Illuminate\Support\Facades\Route;

/*
| ------------------------------------------------- -------------------------
| Rotas da Web
| ------------------------------------------------- -------------------------
|
| Aqui é onde você pode registrar rotas da web para seu aplicativo. Estes
| rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo ótimo!
|
*/

Route::get('/', function () {
    return view('welcome');
});
