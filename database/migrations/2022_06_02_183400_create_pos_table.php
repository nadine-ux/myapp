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
            $table->string('Nom_POS');
            $table->string('Adresse');
            $table->string('Statut');
            $table->bigInteger('telephone');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            /*$table->unsignedBigInteger('vendeur_id');
            $table->foreign('vendeur_id')->references('id')->on('vendeurs');
            $table->unsignedBigInteger('localisation_id');

            $table->foreign('localisation_id')->references('id')->on('localisations');*/
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
        Schema::dropIfExists('pos');
    }
};
