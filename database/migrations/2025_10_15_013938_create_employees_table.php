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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('profile')->nullable();
            $table->string('family_name');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('nationality');
            $table->string('ethnicity'); // үндэс угсаа
            $table->string('gender');
            $table->date('birth_date');
            $table->date('date_of_employment'); // ажилд орсон өдөр
            $table->string('registration_number');
            $table->text('address');
            $table->text('temp_address')->nullable();
            $table->string('phone_number');
            $table->string('taxpayer_number')->nullable();
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('account_bank_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('occupation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
