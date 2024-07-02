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
            $table->foreignId('category_id')->nullable()->constrained('categories','id')->cascadeOnDelete();
            $table->string('name'); // اسم المنتج باللغة الافتراضية
            $table->string('name_ar')->nullable(); // اسم المنتج باللغة العربية
            $table->text('description')->nullable(); // وصف المنتج باللغة الافتراضية
            $table->text('description_ar')->nullable(); // وصف المنتج باللغة العربية
            $table->decimal('price', 8, 2); // سعر المنتج
            $table->string('image')->default('Default Product.png'); // صورة المنتج
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
