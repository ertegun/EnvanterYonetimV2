<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SuperTransactionForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('super_transactions', function (Blueprint $table) {
            $table->foreign('admin_id')->references('id')->on('super_admins');
            $table->foreign('type_id')->references('id')->on('super_transaction_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('super_transactions', function (Blueprint $table) {
            $table->dropForeign(['admin_id','type_id']);
        });
    }
}
