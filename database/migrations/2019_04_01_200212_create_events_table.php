<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->smallInteger('event_type');
            $table->text('description')->nullable();
            $table->text('host')->nullable()->comment('Name of the person who host the event.');
            $table->text('title');
            $table->string('time', 10)->nullable()->comment('Time of starting of events carried over for more than one day');
            $table->dateTime('start_date')->comment('Date when the event starts');
            $table->dateTime('end_date')->nullable()->comment('if present, the date which the event end');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
