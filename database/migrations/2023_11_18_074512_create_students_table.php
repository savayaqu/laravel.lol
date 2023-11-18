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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('surname', 64);
            $table->string('name', 64);
            $table->string('patronymic', 255)->nullable();
            $table->date('birth');
            $table->integer('height');
            $table->decimal('weight', 6, 3);
            $table->boolean('sex')->default(false);
            $table->string('phone')->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
