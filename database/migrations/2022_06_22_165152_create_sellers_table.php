<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('fantasyName', 50);
            $table->string('corporateName', 50)->unique();
            // $table->string('cnpj', 14)->unique();
            $table->string('cnpj',);
            $table->string('nameLogin', 30)->unique();
            $table->string('email')->unique();
            $table->string('password');
            // $table->decimal('deliveryDistance', 2,1);
            $table->string('deliveryDistance');
            $table->string('phone', 12)->unique();

            // endereço provisóriamente nessa classe
            $table->string('cep');
            // $table->string('cep', 8)->unique();
            $table->string('street', 30);
            $table->string('number', 10);
            $table->string('complement', 30);
            $table->string('city', 30);
            $table->string('district', 30);
            $table->string('state', 2);

            $table->timestamp('email_verified_at')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('sellers');
    }
}
