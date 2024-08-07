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
        // <input type="text" name="branch">
        // <input type="text" name="item">
        // <input type="text" name="purpose">
        // <input type="text" name="requestor">
        // <input type="number" name="quantity">
        // <input type="date" name="date_received">
        // <input type="date" name="status">
        Schema::create('marketings', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('item');
            $table->string('purpose');
            $table->string('requestor');
            $table->integer('quantity');
            $table->string('status');
            $table->timestamp('date_received');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketings');
    }
};
