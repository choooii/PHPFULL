<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // * migration 파일 생성
    // : php artisan make:migration [마이그레이션 이름]
    // ex) php artisan make:migration create_board_table

    // * migration 실행 : up() method
    // : php artisan migrate
    // migrations 폴더 안의 모든 파일을 실행하니 주의

    // * migration 리셋 : down() method
    // : php artisan migrate:reset
    // migrations 폴더 안의 모든 파일을 실행하니 주의

    // * migration 롤백
    // : php artisan migrate:rollback
    // 가장 마지막에 실행한 migration 내용을 롤백

    // 시더: 초기 데이터 생성
    
    // 팩토리: 더미 데이터 생성

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // 글번호, 제목, 내용, 작성일, 수정일, 삭제일, 삭제여부
            $table->id('bno'); // big_int, pk, auto_increment
            $table->char('category', 1)->index(); // char(1), not null, index추가
            $table->string('btitle', 100); // varchar(100), not null
            $table->string('bcontents', 4000); //varchar(100), not null
            $table->timestamps(); // created_at, update_at 자동 생성, nullable
            $table->timestamp('deleted_at')->nullable();
            $table->char('deleted_flg', 1)->default('0'); // char(1), default '0', not null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
