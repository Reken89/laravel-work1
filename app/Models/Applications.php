<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;
    
        protected $fillable = [
        'topic',
        'message',
        'name',
        'email',
        'link',
        'condition'
    ];
    
        public function data($email){
            
            $data = \DB::table('applications')->where('email', $email)->max('created_at');
            
            # Если в БД нет заявок у пользователя, присваиваем значение переменной NO
            if($data == FALSE){
                $data = "no";
            }
            
            return $data;
            
        }
        
}
