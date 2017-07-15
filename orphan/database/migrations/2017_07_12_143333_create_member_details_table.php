<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('year');
            $table->text('month');
            $table->float('present_day');
            $table->float('membr_salary')->nullable();
            $table->text('salary');
            $table->text('membr_sal_date');
            $table->integer('mebmr_id')->unsigned();
            $table->timestamps();

             $table->foreign('mebmr_id')
            ->references('id')->on('members')
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
        Schema::dropIfExists('member_details');
    }
}
