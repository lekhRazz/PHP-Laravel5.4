<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaitingChildDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waiting_child_details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('wc_school');
            $table->text('wc_perform');
            $table->text('wc_height');
            $table->text('wc_weight');
            $table->text('wc_bgroup');
            $table->text('wc_hopital');
            $table->text('wc_remark')->nullable();
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
        Schema::dropIfExists('waiting_child_details');
    }
}
