<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('season');
            $table->string('promo_link');
            $table->string('image_url')->nullable();
            $table->text('descripion');
            $table->dateTime('creation_year');
            $table->enum('repeeted', ['repeeted','nonrepeeted']);
            $table->enum('sequence', ['dayly','weekly','monthly','non'])->nullable();
            $table->dateTime('valid_from');
            $table->dateTime('valid_to');
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
        Schema::dropIfExists('programs');
    }
}
