<?php

namespace Tutoriator\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageTutoriatorController extends Controller
{


    public function index()
    {
        return view('tutoriator::page');
    }
}
