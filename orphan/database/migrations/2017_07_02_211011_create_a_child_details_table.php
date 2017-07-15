<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAChildDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_child_details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('ac_address');
            $table->text('ac_school');
            $table->text('ac_perform');
            $table->text('ac_height');
            $table->text('ac_weight');
            $table->text('ac_hopital');
            $table->text('ac_meetingdate');
            $table->text('ac_meetingplace');
            $table->integer('c_id')->unsigned();
            $table->timestamps();

            
            $table->foreign('c_id')
            ->references('id')->on('children')
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
        Schema::dropIfExists('a_child_details');
    }
}
