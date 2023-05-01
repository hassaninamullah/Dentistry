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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBIgInteger('agent_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('nick_name')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('telephone')->nullable();
            $table->date('dob');
            $table->date('anniversary')->nullable();
            $table->string('address');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('occupation')->nullable();
            $table->string('ktn')->nullable();
            $table->string('passport_number')->nullable();
            $table->date('passport_valid_from')->nullable();
            $table->date('passport_valid_till')->nullable();
            $table->string('passport_country')->nullable();
            $table->date('client_due_date')->nullable();
            $table->boolean('isClient')->default(1);
            $table->boolean('isActive')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('agent_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
