<?php

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
            $table->string('client_id',64);

            $table->integer('product_type');
            $table->integer('plan_type')->default(0);

            $table->unsignedInteger('plan_type_selected_at')->default(0);

            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at');
            $table->unsignedInteger('deleted_at')->nullable();

            $table->unsignedInteger('started_at')->nullable();
            $table->unsignedInteger('last_payment_at')->nullable();
            $table->unsignedInteger('expired_at')->nullable();
            $table->unsignedInteger('expires_at')->nullable();


//            $table->foreign('product_type')
//                ->references('id')->on('product_types')
//                ->onDelete('cascade');
//
//            $table->foreign('plan_type')
//                ->references('id')->on('plan_types')
//                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
