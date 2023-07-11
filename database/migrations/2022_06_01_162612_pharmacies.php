<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pharmacies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $pharmacy) {
            $pharmacy->id();
            $pharmacy->string('name');
            $pharmacy->string('dr');
            $pharmacy->string('email')->unique();
            $pharmacy->timestamp('email_verified_at')->nullable();
            $pharmacy->string('mdp');
            $pharmacy->integer('patente');
            $pharmacy->string('adresse');
            $pharmacy->string('ville');
            $pharmacy->integer('num');
            $pharmacy->string('quartier');
            $pharmacy->integer('cp');
            $pharmacy->string('rc');
            $pharmacy->rememberToken();
            $pharmacy->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
