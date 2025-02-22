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
        Schema::create('folders', function (Blueprint $table) {
            //Primary Key
            $table->bigIncrements('id');

            //Strings
            $table->string('name');
            $table->string('unique_name');

            //Integers
            $table->unsignedBigInteger('position');

            //Temporal
            $table->timestamps();
        });
    }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
       Schema::dropIfExists('folders');
   }
};
