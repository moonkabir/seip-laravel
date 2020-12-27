<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeipRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seipregistrations', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->bigIncrements('id')->primary();
            $table->string('FirstCourse');
            $table->string('SecondCourse');
            $table->string('ThirdCourse');
            $table->string('name');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('gender');
            $table->string('ethnic_group');
            $table->string('religion');
            $table->bigInteger('nid');
            $table->date('birthday');
            $table->bigInteger('mobileNumber');
            $table->string('email', 250)->unique();
            $table->string('employee')->nullable();
            $table->integer('income')->nullable();
            $table->string('companyName')->nullable();
            $table->string('designation')->nullable();
            $table->string('preAddress');
            $table->string('preCity');
            $table->integer('prePostCode');
            $table->string('preDivision');
            $table->string('preDistrict');
            $table->string('preSubDistrict');
            $table->string('perAddress');
            $table->string('perCity');
            $table->integer('perPostCode');
            $table->string('perDivision');
            $table->string('perDistrict');
            $table->string('perSubDistrict');
            $table->string('education');
            $table->string('institute');
            $table->string('subject');
            $table->integer('year');
            $table->string('file');
            $table->string('code');
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
        Schema::dropIfExists('seipregistrations');
    }
}
