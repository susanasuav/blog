<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    //comando php artisan make:model -p
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//para subir las migraciones php artisan migrate:reset
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')-> nullable();//por defecto no es nulo el campo
            $table->string('image')->nullable();//hay que poner nullable para dar esa posibilidad
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//para hacer un rollback: php artisan migrate:rollback 
    {
        Schema::dropIfExists('categories');
    }
}
