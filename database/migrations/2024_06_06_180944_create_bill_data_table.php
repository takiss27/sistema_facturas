<?php

use App\Models\Bill;
use App\Models\Payment;
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
        Schema::create('bill_data', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Bill::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Payment::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_data');
    }
};
