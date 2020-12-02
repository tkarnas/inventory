<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 255);
            $table->string('serial_number', 50)->nullable();
            $table->integer('imei')->nullable();
            $table->integer('stock');
            $table->decimal('price', 8, 2)->nullable();
            $table->integer('sap_number')->nullable();
            $table->string('image_url', 255)->nullable();


            /* Spaja sa tablicom "Categories"*/
            $table->foreignId('category_id')->constrained();
            /* Spaja sa tablicom "Companies" */
            $table->foreignId('company_id')->constrained();
            /* Spaja sa tablicom "Brands" */
            $table->foreignId('brand_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
