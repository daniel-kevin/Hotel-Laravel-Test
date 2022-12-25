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
        if(!Schema::hasTable('room_type')){
            Schema::create('room_type', function (Blueprint $table) {
                $table->id();
                $table->integer('id');
                $table->string('name');
                $table->tinyInteger('bed_qty');
                $table->integer('price');
                $table->integer('price_agent');
                $table->text('facilities');
                $table->tinyInteger('total_room');
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
        Schema::dropIfExists('room_type');
    }
};
