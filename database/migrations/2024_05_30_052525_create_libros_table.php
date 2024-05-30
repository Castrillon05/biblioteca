<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('isbn')->unique();
            $table->date('fecha_publicacion');
            $table->integer('cantidad_disponible');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
