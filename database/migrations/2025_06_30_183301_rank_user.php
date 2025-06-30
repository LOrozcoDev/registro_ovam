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
        Schema::create('rank_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("rank_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("academy_id");
            $table->date("aquired_date");
            $table->boolean("isCurrent")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
