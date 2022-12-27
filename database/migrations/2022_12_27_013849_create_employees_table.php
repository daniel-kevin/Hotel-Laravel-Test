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
        if(!Schema::hasTable('employee')){            
            Schema::create('employee', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('address');
                $table->string('phone');
                $table->text('password');
                $table->string('username');
                $table->string('shift');
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
        Schema::dropIfExists('employee');
    }
};
