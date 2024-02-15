<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // 'num', 
    //     'title', 
    //     'description', 
    //     'url', 
    //     'parent_id'

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('main_menus', function (Blueprint $table) {
            $table->id();
            $table->integer('num');
            $table->string('title');
            $table->string('description')->nullable();
            $table->foreignId('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('main_menus')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_menus');
    }
};
