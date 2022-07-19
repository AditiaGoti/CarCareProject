<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCustomerBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_customer_booking', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('Tempat',100);
            $table->string('type',100);
            $table->integer('price')->unsigned;
            $table->string('durasi',100);
            $table->integer('totalharga')->unsigned;
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
        Schema::dropIfExists('table_customer_booking');
    }
}
