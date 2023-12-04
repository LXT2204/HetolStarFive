<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_room', function (Blueprint $table) {
            $table->Increments('room_id');
            $table->string('room_name');
            $table->integer('category_id');
            $table->text('room_desc');
            $table->text('room_content');
            $table->float('room_price');
            $table->string('room_image');
            $table->integer('room_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_room');
    }
};