<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\subsrcibe_user;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subsrcibe_user', function (Blueprint $table) {
            $table->id('AccountNo');
            $table->string('email')->unique();
            $table->string('password')->unique();
            $table->integer('PreviousBill');
            $table->integer('CurrentBill');
            $table->integer('Wattage');
            $table->string('Status');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subsrcibe_user');
    }
};
