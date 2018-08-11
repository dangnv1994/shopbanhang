<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('status');
            $table->integer('user_id');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_phone');
            $table->decimal('amount', 15,4);
            $table->string('payment');
            $table->string('security');
            $table->string('message');
            $table->text('payment_info');
            $table->unsignedInteger('created');
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
       Schema::dropIfExists('transactions');
    }
}
