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
        Schema::create('group_users', function (Blueprint $table) {
            $table->id();
            $table->string('status',25); // Approve || Pending
            $table->string('role', 25); // Admin || Member
            $table->string('token', 1024)->nullable(); // Token
            $table->timestamp('token_expire_date')->nullable(); // Token expire date
            $table->timestamp('token_used')->nullable(); // Token used
            $table->foreignId('user_id')->constrained('users'); // User
            $table->foreignId('group_id')->constrained('groups'); // Group
            $table->foreignId('created_by')->constrained('users'); // Created_by
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_users');
    }
};
