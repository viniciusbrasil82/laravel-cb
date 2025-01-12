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
        Schema::create('cobranca_tipo', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');            
            //$table->string('documento')->unique();
            //$table->float('valor');
            //$table->float('multa');
            //$table->int('status');
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
        Schema::dropIfExists('cobranca_tipo');
    }
};
