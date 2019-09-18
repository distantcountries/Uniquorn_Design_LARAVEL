<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('author');
            $table->text('other_content')->nullable();
            $table->string('original_cover');
            $table->string('purple_cover');
            $table->string('mockup_1')->nullable();
            $table->string('mockup_2')->nullable();
            $table->string('mockup_3')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('covers');
    }
}
