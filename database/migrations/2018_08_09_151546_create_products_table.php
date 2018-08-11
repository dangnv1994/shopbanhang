<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catalog_id');
            $table->string('name');
            $table->decimal('price', 15,4);
            $table->text('content');
            $table->unsignedInteger('discount');
            $table->string('image_link');
            $table->text('image_list');
            $table->unsignedInteger('created');
            $table->unsignedInteger('view');
            $table->timestamp('created_at')->nullable();
            $table->rememberToken()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('products');
    }
}
