<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->bigIncrements('id')->notnullable();
            $table->string('nome')->notnullable();
            $table->string('quantidade')->nullable();
            $table->timestamp('data')->nullable();
            $table->float('preço')->nullable();
            $table->text('local');
            $table->integer('em_stock')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('inventario');
    }
}
