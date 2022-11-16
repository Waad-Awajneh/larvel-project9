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
        Schema::create('populars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("catgeory")->nullable();
            $table->text("title")->nullable();
            $table->text("date")->nullable();
            $table->text("comments")->nullable();
            $table->text("cover")->nullable();
            $table->text("desc")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('populars');
    }
};