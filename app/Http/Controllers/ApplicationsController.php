<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function users_table(){
        
        //Подключаем шаблон представления
        return view('users');
        
    }
    
    public function add_applications(){
        
    }
}
