<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDischi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dischi', function (Blueprint $table) {
            $table->id();
            $table->string('author', 50);
            $table->year('year');
            $table->enum('genre', ['pop', 'rock']);
            $table->string('img_url', 256)->nullable(false);
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
        Schema::dropIfExists('dischi');
    }
}
