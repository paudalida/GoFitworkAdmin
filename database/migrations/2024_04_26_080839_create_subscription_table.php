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
        Schema::create('subscription', function (Blueprint $table) {
            $table->id();

            // shift data from enquires database table
            $table->string('firstname', 30);
            $table->string('middlename', 30)->nullable();
            $table->string('lastname', 30);
            $table->string('extname', 10)->nullable();
            $table->string('email')->unique();
            $table->string('barangay', 50);
            $table->string('gender', 30)->nullable();
            $table->string('occupation', 50);
            $table->string('reason', 50)->nullable();

            // subscription data
            $table->decimal('subscription_fee', 10, 2);
            //$table->date('payment_date');
            $table->string('payment_status');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status');
            $table->timestamps(); // date for payment date and member-since-date?
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription');
    }
};
