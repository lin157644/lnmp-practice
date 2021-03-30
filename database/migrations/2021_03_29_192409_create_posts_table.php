<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 新增一個'posts'的資料表
        Schema::create('posts', function (Blueprint $table) {
            // (預設)每筆資料的獨特編號
            $table->bigIncrements('id');
            // 標題: 文字少(string)
            $table->string('title');
            // 內文: 文字多(text)
            $table->text('content');
            // (預設)時間戳記-紀錄時間資料
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
}
