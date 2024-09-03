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
        Schema::create('client_websites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('domain_price')->nullable();
            $table->integer('domain_duration')->nullable();
            $table->integer('web_hosting_price')->nullable();
            $table->integer('web_hosting_duration')->nullable();
            $table->integer('web_pages_price')->nullable();
            $table->integer('web_pages_quantity')->nullable();
            $table->integer('emails_price')->nullable();
            $table->integer('emails_quantity')->nullable();
            $table->integer('ssl_certificate_price')->nullable();
            $table->integer('inquiry_form_price')->nullable();
            $table->integer('security_backup_price')->nullable();
            $table->integer('hd_quality_images_price')->nullable();
            $table->integer('content_writing_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_websites');
    }
};
