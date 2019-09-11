<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('modules', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->after('id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modules', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropCulomn('user_id');
        });
    }
}
