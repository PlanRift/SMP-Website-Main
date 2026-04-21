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
        // 1. Rename activities table to blogs
        if (Schema::hasTable('activities') && !Schema::hasTable('blogs')) {
            Schema::rename('activities', 'blogs');
        }

        // 2. Drop posts table if it exists
        Schema::dropIfExists('posts');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('blogs') && !Schema::hasTable('activities')) {
            Schema::rename('blogs', 'activities');
        }
        
        // Note: We won't restore the dropped posts table as it was unused and data loss is expected.
    }
};
