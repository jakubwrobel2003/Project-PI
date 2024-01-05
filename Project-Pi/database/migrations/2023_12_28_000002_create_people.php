<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        
        Schema::create('people', function (Blueprint $table) {
            $table->ID();
            $table->string('name');
            $table->string('lastname');
            $table->string('nr_phone');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('people');
    }
}
?>