<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string("body",255);

            $table->timestamps();
            $table->unsignedInteger("id_client");
            $table->unsignedInteger("id_annonce");
            $table->foreign("id_client")->references("id")->on('clients');
            $table->foreign("id_annonce")->references("id")->on('annonces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
