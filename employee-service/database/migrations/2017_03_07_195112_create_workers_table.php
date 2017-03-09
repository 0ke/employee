<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('companies_id')->unsigned();
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->boolean('free');
            $table->string('dates_available');
            $table->string('dates_unavailable');
            $table->string('working_hours_week');
            $table->string('working_hours_weekend');
            $table->decimal('unit_price');
            $table->string('location');
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
        Schema::dropIfExists('workers');
    }
}
