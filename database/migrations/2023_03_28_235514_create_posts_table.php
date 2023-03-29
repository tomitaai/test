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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('material'); //素材ファイル
            $table->integer('mimetype'); //素材ファイルのタイプ 1or2
            $table->string('event_name'); //イベント名
			$table->datetime('shooting_date'); //撮影日
            $table->integer('pubrequest'); //掲載の希望
            $table->bigInteger('user_id'); //Add:user_id
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
        Schema::dropIfExists('posts');
    }
};
