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
        Schema::create('t_shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('star', 3, 2, true)->default(0);
            $table->unsignedSmallInteger('sheet');
            $table->unsignedTinyInteger('cell')->default(0)->comment('個室フラグ 0:個室なし/1:個室あり');
            $table->unsignedTinyInteger('charter')->default(0)->comment('貸し切りフラグ 0:貸し切り不可/1:貸し切り可');
            $table->unsignedTinyInteger('smoke')->default(0)->comment('喫煙可否 0:喫煙不可/1:喫煙可');
            $table->unsignedTinyInteger('park')->default(0)->comment('駐車場 0:なし/1:あり');
            $table->string('tell');

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
        Schema::dropIfExists('t_shops');
    }
};
