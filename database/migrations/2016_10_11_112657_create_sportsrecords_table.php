<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportsrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sportsrecords', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emotion');
            $table->text('content');
            $table->string('format');
            $table->string('duration');
            $table->timestamps();
            $table->timestamp('published_at')->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sportsrecords');
    }
}
