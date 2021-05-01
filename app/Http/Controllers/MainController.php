<?php


namespace App\Http\Controllers;

use App\Models\Users;

class MainController extends Controller
{
    public function index(){

        $name = (new Users())->getName();
        return view('news.hello', ['name' => $name]);

    }
}
