<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->integer('house_id');
            $table->integer('user_id');
            $table->integer('flat_id');
            $table->string('flat_name');
            $table->string('flat_price');
            $table->datetime('bookingdate');
            $table->integer('emargencyContactnumber');
            $table->string('bookingdetails')->nullable();
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('bookings');
    }
}
