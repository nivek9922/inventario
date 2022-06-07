<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre')->nullable(false);
            $table->string('referencia')->nullable(false);
            $table->integer('precio')->nullable(false);
            $table->string('categoria')->nullable(false);
            $table->integer('peso', )->nullable(false);
            $table->integer('stock')->default(0)->nullable(false);

            
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
        Schema::dropIfExists('producto');
    }
};
