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
        Schema::create(
            'academy_user',
            function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger("academy_id");
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('martial_id');
                $table->unsignedBigInteger('rank_id');
                $table->boolean("isStudent")->default(false);
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_user');
    }
};
