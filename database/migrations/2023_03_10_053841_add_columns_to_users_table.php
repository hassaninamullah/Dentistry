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
        Schema::table('users', function (Blueprint $table) {
            $table->date('dob')->default('1995-07-27')->after('role');
            $table->string('time_zone')->default('GMT-6')->after('role');
            $table->string('address')->default('1600 Pennsylvania Avenue NW, Washington, DC 20500, United States')->after('role');
            $table->string('ssn')->default('32423423422')->after('role');
            $table->date('hire_date')->default('1995-07-27')->after('role');
            $table->unsignedInteger('commission_rate')->default(1)->after('role');
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
            $table->dropColumn(['dob','time_zone','address','ssn','hire_date','commission_rate']);
        });
    }
};
