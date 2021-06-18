<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lname');
            $table->integer('role');
            $table->string('phone');
            $table->string('state');
            $table->string('district');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(array('lname'));
            $table->dropColumn(array('role'));
            $table->dropColumn(array('phone'));
            $table->dropColumn(array('state'));
            $table->dropColumn(array('district'));
            $table->dropColumn(array('address'));
        });
    }
}
