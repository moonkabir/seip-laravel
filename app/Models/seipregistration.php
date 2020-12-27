<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seipregistration extends Model
{
    use HasFactory;
    protected $fillable = [
        'FirstCourse',
        'SecondCourse',
        'ThirdCourse',
        'name',
        'fatherName',
        'motherName',
        'gender',
        'ethnic_group',
        'religion',
        'nid',
        'birthday',
        'mobileNumber',
        'email',
        'employed',
        'income',
        'companyName',
        'designation',
        'preAddress',
        'preCity',
        'prePostCode',
        'preDivision',
        'preDistrict',
        'preSubDistrict',
        'perAddress',
        'perCity',
        'perPostCode',
        'perDivision',
        'perDistrict',
        'perSubDistrict',
        'education',
        'institute',
        'subject',
        'year',
        'file',
        // 'code',
    ];
}
