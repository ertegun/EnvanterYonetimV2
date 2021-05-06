<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();//ID
            $table->string('user_name');//Kullanıcı Adı
            $table->string('password');//Şifre
            $table->unsignedBigInteger('role_id');//Yetki Türü (Admin / Yetkili / Kullanıcı)
            $table->unsignedBigInteger('title_id');//Ünvan
            $table->unsignedBigInteger('department_id');//Departman
            $table->unsignedBigInteger('sector_id');//Bölüm (Departmana bağlı)
            $table->string('name');// Ad Soyad
            $table->string('email');//Email
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
