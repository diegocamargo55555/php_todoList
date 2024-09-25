<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("tasks", function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("user_id");
            $table->string("task_name", 60);
            $table->string("description");
            $table->boolean("status");
            $table->foreign("user_id")->references("id")->on("user");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("table_tasks");
    }
};
