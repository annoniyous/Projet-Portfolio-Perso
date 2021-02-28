<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioimgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolioimgs', function (Blueprint $table) {
            $table->id();
            $table->string('src',2000);
            $table->string('name',2000);
            $table->string('p',2000);
            $table->string('href',2000);
            $table->string('filter',1000);
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
        Schema::dropIfExists('portfolioimgs');
    }
}
