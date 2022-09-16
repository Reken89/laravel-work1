<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Applications;

class ApplicationsController extends Controller
{
    public function users_table(){
        
        //Подключаем шаблон представления
        return view('users');
        
    }
    
    public function add_applications(Request $request){
        
        //Проверяем существует ли картинка
        if($request->hasFile('image')){
        $image = $request->file('image');

        //Получим путь и укажем куда сохранить файл
        $path = $image->store('');
        $link = asset("storage/$path");
        }
        
        //Получаем name и email авторизованного пользователя
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        
        //Получаем тему и сообщение
        $topic = $request->input('topic');
        $message = $request->input('message');
        

        //Выполняем запись в БД
        
        //Проверяем когда была отправлена последняя заявка конкретнвм пользователем
        $date1 = new Applications;
        $date1 = $date1->data($email);
        
        //Получаем сегодняшнюю дату
        $date2 = date("Y-m-d H:i:s");
        
        //Если сегодня пользователь не отправлял заявок, разрешаем запись в БД
        
        if($date2>$date1){
        
        $applications = new Applications();
        $applications->fill([
            'topic' => $topic,
            'message' => $message,
            'name' => $name,
            'email' => $email,
            'link' => $link,
            'condition' => 0,
            ]);
       $applications->save();
       
        }
       
       //Редирект
       $info = "Заявка отправлена";
           
       return response()->redirectToRoute('user');
       return view('user', ['info' => $info]);
        
    }
}
