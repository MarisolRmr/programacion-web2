<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('imagen');
            //Agregamos el usuario asociado al post de publicación: Una relación User- Post
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            //onDelete (cascade) significa que si un usuario se elimina, se eliminan sus Post de publicaciones


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
