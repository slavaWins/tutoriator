<?php


namespace Tutoriator\Library;


use Illuminate\Support\Facades\Route;

class TutoriatorRoute
{

    public static function routes()
    {
        Route::get('/example/tutoriator', [\Tutoriator\Http\Controllers\PageTutoriatorController::class, 'index']);
    }

}
