<?php

    namespace App\Http\Controllers\Tutoriator;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class TutoriatorController extends Controller
    {


        public function index() {


            return view('tutoriator.example');

        }
    }
