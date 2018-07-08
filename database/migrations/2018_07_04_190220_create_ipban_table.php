<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_ban', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip',50);
            $table->timestamp('time_from');
            $table->timestamp('time_till');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ip_ban_table');
    }
}
