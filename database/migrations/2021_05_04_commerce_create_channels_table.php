<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelsTable extends Migration
{
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
           $table->increments('id');

           $table->string('name');
           $table->string('slug');
           $table->boolean('is_active')->default(true);

           $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('channels');
    }
}
