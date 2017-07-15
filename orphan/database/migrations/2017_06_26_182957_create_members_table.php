<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('membrimg');
            $table->text('membr_name');
            $table->text('member_post');
            $table->text('membr_email')->nullable();
            $table->text('membr_addr');
            $table->text('membr_phone');
            $table->text('sex');
            $table->text('membr_exprnc');
            $table->text('membr_qulifi');
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
        Schema::dropIfExists('members');
    }
}
