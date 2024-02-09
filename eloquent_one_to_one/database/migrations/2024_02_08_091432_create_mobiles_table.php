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
        Schema::create('mobiles', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->timestamps();
            $table->unsignedBigInteger('customer_id'); //column create foreign key ko save karne ki liya
            $table->foreign('customer_id')->references('id')->on('customers');//ab foreign key banaya
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobiles');
    }
};
