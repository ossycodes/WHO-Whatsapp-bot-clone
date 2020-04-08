<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covidcases', function (Blueprint $table) {
            $table->id();

            $table->string('country');
            $table->string('country_code');
            $table->integer('confirmed')->nullable();
            $table->integer('deaths')->nullable();
            $table->integer('recovered')->nullable();
            
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
        Schema::dropIfExists('covidcases');
    }
}
