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
    {   Schema::disableForeignKeyConstraints();
        Schema::create('pos', function (Blueprint $table) {
            $table->id();
            $table->string('num');
            $table->string('nom');
            $table->string('adress');
            $table->string('etat');
            $table->timestamps();
            $table->foreignId('rapport_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
      
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pos');
    }
};
