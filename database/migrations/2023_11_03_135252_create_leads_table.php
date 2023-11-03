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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('account');
            $table->float('revenue')->nullable();
            $table->string('stage');
            $table->string('owner');
            $table->float('probability')->nullable();
            $table->string('trend')->nullable();
            $table->json('files')->nullable();
            $table->string('type');
            $table->string('lead_source');
            $table->date('close_date')->nullable();
            $table->float('forecasted_revenue')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamp('updated_at')->useCurrent();
            $table->string('created_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
