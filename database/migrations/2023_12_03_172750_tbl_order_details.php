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
        Schema::create('tbl_order_details', function (Blueprint $table) {
            $table->bigIncrements('order_details_id');
            $table->integer('order_id');
             $table->integer('room_id');
              $table->string('room_name');
               $table->float('room_price');
               $table->date('checkin');
               $table->date('checkout');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_order_details');
    }
};
