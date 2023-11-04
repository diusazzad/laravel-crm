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
        Schema::create('user_full_infos', function (Blueprint $table) {
            $table->id();
            $table->string('call_notes');
            $table->datetime('call_date_time');
            $table->timestamps();
            $table->unsignedBigInteger('contact_id');

            $table->foreignId('lead_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_full_infos');
    }
};
