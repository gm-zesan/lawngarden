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
            $table->string('name')->unique();
            
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('sub_category_id')->constrained('sub_categories');
            $table->foreignId('unit_id')->constrained('units');
        
            $table->string('code')->unique();
            $table->string('model')->nullable();
            $table->integer('stock_amount')->default(0);
            $table->integer('regular_price')->default(0);
            $table->integer('selling_price')->default(0);
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->longText('islamic_reference')->nullable();
            $table->longText('scientific_reference')->nullable();
            $table->decimal('discount', 8, 2)->nullable();
            $table->text('image')->nullable();
            $table->integer('hit_count')->default(0);
            $table->integer('sales_count')->default(0);
            $table->tinyInteger('featured_status')->default(0);
            $table->boolean('special_offer')->default(false);
            $table->tinyInteger('status')->default(1);
            

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
