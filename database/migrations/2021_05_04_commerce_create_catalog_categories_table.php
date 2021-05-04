<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('catalog_categories', function (Blueprint $table) {
           $table->increments('id');

           $table->bigInteger('parent_id');
           $table->integer('level');

           $table->string('name');
           $table->string('slug');
           $table->boolean('is_active')->default(true);

           $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('catalog_categories');
    }
}
