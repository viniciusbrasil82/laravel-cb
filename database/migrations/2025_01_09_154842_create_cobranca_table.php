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
        Schema::create('cobranca', function (Blueprint $table) {
            $table->id();
            $table->integer('cliente_id');      
            $table->integer('contrato_id');      
            $table->integer('tipo');            
            //$table->string('documento')->unique();
            $table->float('valor');
            $table->float('multa');
            $table->integer('status');
            //$table->string('status');
            //$table->timestamp('email_verified_at')->nullable();
            //$table->string('password');

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
        Schema::dropIfExists('cobranca');
    }
};
