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
        Schema::create('t_casts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthday')->nullable();
            $table->unsignedTinyInteger('tall')->nullable();
            $table->unsignedTinyInteger('bust')->nullable();
            $table->unsignedTinyInteger('waist')->nullable();
            $table->unsignedTinyInteger('blood')->nullable();
            $table->unsignedTinyInteger('cup')->nullable();
            $table->unsignedBigInteger('sort');

            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_casts');
    }
};
