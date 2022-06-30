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

        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->boolean('Etat');
            $table->date('Date_rapport');
            $table->text('description');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            /*$table->unsignedBigInteger('pos_id')->nullable();
            $table->foreign('pdv_id')->references('id')->on('pdvs');*/

            $table->foreignId('pos_id')->nullable()
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            /*$table->foreignId('user_id')->nullable()
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');*/


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
        Schema::dropIfExists('rapports');
    }
};
