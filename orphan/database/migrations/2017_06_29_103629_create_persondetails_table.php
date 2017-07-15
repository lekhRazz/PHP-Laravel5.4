<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersondetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persondetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parent_img');
            $table->string('Parent_occ');
            $table->string('parent_saving');
            $table->float('parent_family');
            $table->string('status');
            $table->string('sex');
            $table->string('ctznshp_img');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users')
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
        Schema::dropIfExists('persondetails');
    }
}
