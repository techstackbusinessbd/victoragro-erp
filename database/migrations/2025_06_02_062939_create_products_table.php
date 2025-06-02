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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('code')->unique();
            $table->string('name_en');
            $table->string('name_bn')->nullable();
            $table->string('scientific_name')->nullable();
            $table->string('manufacture_company')->nullable();

            // Foreign Keys
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('type_id')->constrained()->onDelete('cascade');
            $table->string('size')->nullable();
            $table->foreignId('unit_id')->constrained()->onDelete('cascade');
            $table->integer('pack_qty')->nullable();
            $table->foreignId('pack_type_id')->constrained()->onDelete('cascade');
            $table->string('pack_size')->nullable();

            $table->string('image')->nullable();

            $table->decimal('price', 10, 2)->default(0.00);
            $table->decimal('commission', 5, 2)->default(0.00); // percent
            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
