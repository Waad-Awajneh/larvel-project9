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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText("para1")->nullable();
            $table->longText("para2")->nullable();
            $table->longText("para3")->nullable();
            $table->string('time');
            $table->string('authorName');
            $table->string('title');
            $table->string('popular')->default("no");
            $table->string('PaidContent')->default("no");
            $table->foreignId('catgeory_id')->constrained()->onDelete('cascade');

            $table->string('cover');
            $table->string('authorImg')->nullable();
            $table->string('descb')->nullable();
            $table->foreignId('detail_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heroes');
    }
};