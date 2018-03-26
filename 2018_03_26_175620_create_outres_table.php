<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outres', function (Blueprint $table) {
            $table->increments('id');
            $table->string("type",20);
            $table->string("description",255);
            $table->double("prix");
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
        Schema::dropIfExists('outres');
    }
}
