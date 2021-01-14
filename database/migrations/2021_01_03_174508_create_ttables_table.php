<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTtablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttables', function (Blueprint $table) {
            $table->id();
            $table->string('Receiver_name');
            $table->unsignedInteger('Bcurrent_bal');
            $table->unsignedInteger('credit');
            $table->unsignedInteger('transfer_money');
            $table->unsignedInteger('Acurrent_bal');
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
        Schema::dropIfExists('ttables');
    }
}
