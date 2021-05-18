<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Superresetforeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('super_reset_password', function (Blueprint $table) {
            $table->foreign('admin_id')->references('id')->on('super_admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('super_reset_password', function (Blueprint $table) {
            $table->dropForeign(['admin_id']);
        });
    }
}
