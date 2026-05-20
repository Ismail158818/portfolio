<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        // No migration needed for MongoDB
        // Schema is defined in DigitalItem.php -> $fillable
    }

    public function down(): void
    {
        // No action needed
    }
};