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
        Schema::table("users", function(Blueprint $table) {
            $table->enum("role",['guest','editor','admin'])->after("remember_token")->default("guest");
            $table->text("img")->after("role")->default("");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns("role");
        Schema::dropColumns("img");
    }
};
