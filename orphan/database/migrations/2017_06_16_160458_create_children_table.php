<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->text('cname');
            $table->float('cage');
            $table->text('sex');
            $table->text('education');
            $table->text('health');
            $table->integer('person_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
           /* $table->integer('persondtl_id')->unsigned();*/
            $table->integer('status')->default(1);
            $table->string('cimage');
            $table->text('refphone');
            $table->string('refimage');
            $table->timestamps();

            $table->foreign('person_id')
            ->references('id')->on('people')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

           /* $table->foreign('persondtl_id')
            ->references('id')->on('persondetails')
            ->onDelete('cascade');*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('children');
    }
}
