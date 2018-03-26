<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVettementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vettements', function (Blueprint $table) {
            $table->increments('id');
            $table->string("type",20);
            $table->string("description",255);
            $table->string("marque",25);
            $table->double("prix");
            $table->string("color",15);
            $table->string("h/f",10);
            $table->string("age",20);
            $table->string("taille",8);
            $table->timestamps();
            $table->unsignedInteger("id_categorie");
            $table->foreign("id_categorie")->references("id")->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vettements');
    }
}
