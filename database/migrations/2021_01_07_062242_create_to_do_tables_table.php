<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToDoTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_do_table', function(Blueprint $table){
            $table -> increments('id');
            $table -> string('tittle');
            $table -> string('description');
            $table -> date('start_date');
            $table -> date('end_date');
            $table -> timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('to_do_tables');
    }
}
