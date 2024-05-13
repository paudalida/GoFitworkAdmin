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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 30);
            $table->string('middlename', 30)->nullable();
            $table->string('lastname', 30);
            $table->string('extname', 10)->nullable();
            //$table->integer('phone_number')->nullable();
            $table->string('email')->unique();
            $table->string('barangay', 50);
            //$table->date('birthdate');
            $table->string('gender', 30)->nullable();
            $table->string('occupation', 50);
            $table->date('start_by');
            //$table->date('due_date');
            $table->string('reason', 50)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
