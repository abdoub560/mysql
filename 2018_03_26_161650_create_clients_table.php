<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string("username",15)->nullable(false);
            $table->string("phone",15)->nullable(false);
            $table->float("rating")->default(0);
            $table->string("email",25)->nullable(false);
            $table->string("src_image",100);
            $table->string("password",20)->nullable(false);
            $table->integer("position")->default(0);
            $table->unique(['username','email','phone']);


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
        Schema::dropIfExists('clients');
    }
}
