<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_type_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_home_type');
            $table->string('image');
            $table->string('title');
            $table->string('description');
            $table->longText('content');
            $table->longText('information');
            $table->string('slug');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

            $table->foreign('id_home_type')
                  ->references('id')
                  ->on('home_types')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_type_details');
    }
};
