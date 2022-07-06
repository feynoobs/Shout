<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_shop_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('sort');
            $table->dateTime('created_at')->useCurrent();

            $table->unique(['shop_id', 'sort']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_shop_images');
    }
};
