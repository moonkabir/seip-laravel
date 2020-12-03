<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeipregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seipregistrations', function (Blueprint $table) {
            $table->bigIncrements('id');
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
            $table->string('email', 190)->unique();
            $table->string('employed');
            $table->integer('income');
            $table->string('companyName');
            $table->string('designation');
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
