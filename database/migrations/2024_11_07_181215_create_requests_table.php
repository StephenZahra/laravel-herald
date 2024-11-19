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
        Schema::create('requests', function (Blueprint $table) {
            //Primary Key
            $table->bigIncrements('id');

            //Strings
            $table->string('name');
            $table->string('unique_name');
            $table->string('type');
            $table->string('url', 2048)->nullable();

            //Temporal
            $table->timestamps();

            //Foreign Keys
            $table->foreignId('folder_id')->nullable()->constrained('folders')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
