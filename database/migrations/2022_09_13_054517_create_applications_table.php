<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();              
            $table->string('topic');              //Тема
            $table->string('message');            //Сообщение
            $table->string('name', 100);          //Имя
            $table->string('email');              //Email 
            $table->string('link');               //Ссылка на файл
            $table->string('condition');          //Состояние заявки (расмотрена или нет)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
