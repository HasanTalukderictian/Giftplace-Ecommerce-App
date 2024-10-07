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
        Schema::create('midbanner', function (Blueprint $table) {
            $table->id();
            $table->string('Category');
            $table->integer('totalCategory');
            $table->string('producttype');
            $table->integer('totalproduct');
            $table->text('description');
            $table->srting('image')->nullable();
            $table->timestamps();

            // Composite unique index for category and product_type
            $table->unique(['Category', 'producttype', 'totalCategory', 'totalproduct', 'description']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('midbanner');
    }
};
