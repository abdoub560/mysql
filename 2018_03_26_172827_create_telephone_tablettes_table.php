<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelephoneTablettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telephone_tablettes', function (Blueprint $table) {
            $table->increments('id');
            $table->string("type",20);
            $table->string("description",255);
            $table->string("marque",25);
            $table->double("prix");
            $table->string("color",15);
            $table->float("ram");
            $table->float("cam_avant");
            $table->float("cam_arriere");
            $table->String("cpu",15);
            $table->float("rom");
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
        Schema::dropIfExists('telephone_tablettes');
    }
}
