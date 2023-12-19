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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('address');
            $table->date('ship_date');
            $table->date('arrival_date')->nullable();
            $table->date('payment_date');
            $table->foreignId('payment_method')->constrained('payment_methods', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tracking_number');
            $table->string('status');
            $table->double('total_amount');
            $table->foreignId('shipment_id')->constrained('shipments', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
