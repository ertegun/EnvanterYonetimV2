<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperResetPasswordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_reset_password', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->unsignedBigInteger('admin_id');
            $table->string('created_by_IP');
            $table->timestamp('expired_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('super_reset_password');
    }
}
