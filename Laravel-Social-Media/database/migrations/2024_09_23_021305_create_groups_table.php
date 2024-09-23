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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255); // Group name
            $table->string('slug', 255); // Group slug - means group url
            $table->string('cover_path', 1024)->nullable(); // Group cover
            $table->string('thumbnail_path', 1024)->nullable(); // Group thumbnail
            $table->boolean('auto-approval')->default(true); // Auto-approval
            $table->text('about')->nullable(); // Group description
            $table->foreignId('user_id')->constrained('users'); // Group creator
            $table->timestamp('deleted_at')->nullable(); // Deleted_at
            $table->foreignId('deleted_by')->nullable()->constrained('users'); // Deleted_by
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
