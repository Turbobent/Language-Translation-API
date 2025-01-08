<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('source_language_id');
            $table->unsignedBigInteger('target_language_id');
            $table->text('source_text');
            $table->text('translated_text');
            $table->timestamps();

            $table->foreign('source_language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->foreign('target_language_id')->references('id')->on('languages')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
