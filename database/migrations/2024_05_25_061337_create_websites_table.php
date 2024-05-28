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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->integer('domain');
            $table->integer('web_hosting');
            $table->integer('web_page');
            $table->integer('email');
            $table->integer('ssl');
            $table->integer('enquiry_form');
            $table->integer('security_backup');
            $table->integer('hd_quality_images');
            $table->integer('content_writing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
