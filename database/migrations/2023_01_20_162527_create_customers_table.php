<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->date('start');
            $table->date('end');
            $table->bigInteger('bill no');
            $table->bigInteger('water');
            $table->bigInteger('vat');
            $table->bigInteger('charge');
            $table->bigInteger('total');
            $table->bigInteger('miscellaneous');
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
        Schema::dropIfExists('customers');
    }
};
