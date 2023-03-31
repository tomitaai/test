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
        Schema::create('mailmasters', function (Blueprint $table) {
            $table->id();
            $table->string('mail_name'); //通知の種類
            $table->string('title'); //タイトル
			$table->text('body'); //本文（メール本文のテンプレートを定義したbladeファイル名）
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
        Schema::dropIfExists('mailmasters');
    }
};
