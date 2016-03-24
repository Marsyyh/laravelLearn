<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary',function(Blueprint $table){
            $table->increments('id');
            $table->integer('userId');
            $table->foreign('userId')
            ->references('id')->on('user')
            ->onDelete('cascade');
            $table->timestamp('updated_at');
            $table->decimal('sum',8,2);
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('salary');
    }
}
