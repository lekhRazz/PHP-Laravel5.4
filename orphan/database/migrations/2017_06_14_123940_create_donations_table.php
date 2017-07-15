<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('bank_name');
            $table->string('d_date');
            $table->float('damount');
            $table->integer('donator_id')->unsigned();
            $table->string('voucher')->nullable();
            $table->timestamps();



            $table->foreign('donator_id')
            ->references('id')->on('donators')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
