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
        if(!Schema::hasTable('guest')){
            Schema::create('guest', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('address');
                $table->string('phone',[13]);
                $table->string('email');
                $table->string('country');
                $table->date('birthdate');
                $table->string('password');
                $table->string('username');
                $table->string('gender');      
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest');
    }
};
