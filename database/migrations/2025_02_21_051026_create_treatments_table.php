<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->text('notes')->nullable();
            $table->foreignId('patient_id')->constrained('patients')->cascadeOnDelete();
            $table->unsignedInteger('price')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('treatments');
    }
};
