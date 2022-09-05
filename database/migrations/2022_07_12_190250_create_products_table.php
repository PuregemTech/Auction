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
            $table->string('user_id');
            $table->string('name');
            $table->string('condition');
            $table->string('category');
            $table->string('category_name');
            $table->string('cover_image');
            $table->string('uniqueId');
            $table->longText('description');
            $table->string('starting_date')->nullable();
            $table->string('ending_date')->nullable();
            $table->string('ended_bid')->nullable();
            $table->string('price');
            $table->string('bid')->nullable();;
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
