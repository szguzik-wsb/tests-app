<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return 'Pierwsza strona';
    }

    public function show() {
//        fgdafg
        $array = [
            1,2,3,4,'a',5
        ];
        dd($array);
    }
}
