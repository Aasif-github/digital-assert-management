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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name', 100);
            $table->text('project_long_description')->nullable();
            $table->string('project_short_description', 255)->nullable();
            $table->string('language', 50)->nullable();
            $table->date('year_of_publish')->nullable();

            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');

            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
