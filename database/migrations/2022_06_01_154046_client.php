<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $client) {
            $client->id();
            $client->string('name');
            $client->date('Bdate');
            $client->string('email')->unique();
            $client->timestamp('email_verified_at')->nullable();
            $client->string('mdp');
            $client->integer('cin');
            $client->string('adresse');
            $client->string('ville');
            $client->integer('num');
            $client->string('quartier');
            $client->integer('cp');
            $client->rememberToken();
            $client->timestamps();
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
