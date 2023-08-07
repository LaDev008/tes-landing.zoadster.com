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
        Schema::table('comment_winners', function (Blueprint $table) {
            $table->unsignedBigInteger('site_event_id')->nullable();
            $table->foreign('site_event_id')->references('id')->on('site_events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comment_winners', function (Blueprint $table) {
            $table->dropForeign(['site_event_id']);
            $table->dropColumn('site_event_id');
        });
    }
};
