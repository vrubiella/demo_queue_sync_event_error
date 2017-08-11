<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('domain',128);
            $table->string('authorization',128)->nullable();

            $table->enum('status',['10','20','30','40','50'])->default('10');

            $table->enum('type',['master','stage'])->default('master');

            //Farem un "Cluster Manager"?
            $table->string('cluster')->default('0001');

            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at');
            $table->unsignedInteger('deleted_at')->nullable();

            $table->unique('domain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apps');
    }
}
