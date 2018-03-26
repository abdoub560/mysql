<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {

            $table->increments('id');
            $table->string("type",20);
            $table->string("description",255);
            $table->integer("vittese");
            $table->float("poids");
            $table->string("marque",25);
            $table->dateTime("date_fabrication");
            $table->string("color",15);
            $table->double("prix");
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
        Schema::dropIfExists('vehicules');
    }
}
