<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('psychotherapies')) {
            Schema::create('psychotherapies', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('patient_id');
                $table->unsignedBigInteger('therapist_id');
                $table->string('pack');
                // Add other fields as needed
                $table->timestamps();
    
                $table->foreign('patient_id')->references('id')->on('users');
                $table->foreign('therapist_id')->references('id')->on('therapists');
            });
        }
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psychotherapies');
    }
};
