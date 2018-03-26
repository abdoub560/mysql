<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmobiliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immobiliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string("type",20);
            $table->string("description",255);
            $table->double("prix");
            $table->boolean("v/l");
            $table->unsignedInteger("id_categorie");
            $table->timestamps();
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
        Schema::dropIfExists('immobiliers');
    }
}
