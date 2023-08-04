<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Member', function($table){
            $table->increments('id')->unsigned();
            $table->string('name', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone_num')->nullable();
        });

        Schema::create('Capture', function($table){
            $table->increments('id')->unsigned();
            $table->integer('member_id');
            $table->string('date_time');
            $table->string('location', 100);
        });

        Schema::create('Bird', function($table){
            $table->increments('id')->unsigned();
            $table->string('species', 50);
            $table->string('description', 100);
        });
/*
        DB::table('HelloWorld')->insert([
            ['name' => 'Pete'],
            ['name' => 'Frank'],
            ['name' => 'Billy'],
        ]);
*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
        Schema::dropIfExists('capture');
        Schema::dropIfExists('bird');
    }
};
