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
        Schema::create('media_files', function (Blueprint $table) {
            $table->id(); // AUTO_INCREMENT PRIMARY KEY
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('file_type', 50);         // e.g. image, video
            $table->string('mime_type', 100);        // e.g. image/png
            $table->string('file_extension', 10);    // e.g. .jpg
            $table->bigInteger('file_size');         // in bytes
            $table->text('file_url');                // file location (S3/local)

            // $table->foreignId('uploaded_by')->constrained('users')->onDelete('cascade');
            // $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');

            $table->timestamp('uploaded_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            // $table->timestamp('deleted_at')->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_files');
    }
};
