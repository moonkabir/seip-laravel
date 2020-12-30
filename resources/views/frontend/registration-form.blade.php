<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="POST" action="{{url('/user-add')}}" enctype="multipart/form-data">
                    {{ method_field('POST') }}
                    @csrf
                    <h3>Choose Course Preference:</h3>
                    <div class="d-flex justify-content-between">
                        <div>
                            <label>First Preference<span>*</span>:</label>
                            <select name="FirstCourse">
                                <option value="">Select Course</option>
                                @foreach($courses as $course)
                                <option value="{{$course->name}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                            <span class="error">@error('FirstCourse'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Second Preference<span>*</span>:</label>
                            <select name="SecondCourse">
                                <option value="">Select Course</option>
                                @foreach($courses as $course)
                                <option value="{{$course->name}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                            <span class="error">@error('SecondCourse'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Third Preference<span>*</span>:</label>
                            <select name="ThirdCourse">
                                <option value="">Select Course</option>
                                @foreach($courses as $course)
                                <option value="{{$course->name}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                            <span class="error">@error('ThirdCourse'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <h3>Personal Information:</h3>
                    <div class="d-flex justify-content-between">
                        <div>
                            <label>Name<span>*</span>:</label>
                            <input name="name" type="text">
                            <span class="error">@error('name'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Father Name<span>*</span>:</label>
                            <input name="fatherName" type="text">
                            <span class="error">@error('fatherName'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Mother Name<span>*</span>:</label>
                            <input name="motherName" type="text">
                            <span class="error">@error('motherName'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>Gender:<span>*</span></label>
                            <select name="gender" id="gender" class="input-text">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="another">Another</option>
                            </select>
                            <span class="error">@error('gender'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Ethnic Group:<span>*</span></label>
                            <select name="ethnic_group" id="ethnic_group" class="input-text">
                                <option value="" selected="selected">Select Ethnic Group</option>
                                <option value="Armenian community of Dhaka">Armenian community of Dhaka</option>
                                <option value="Armenians in Bangladesh">Armenians in Bangladesh</option>
                                <option value="Bagdi caste">Bagdi caste</option>
                                <option value="Bom people">Bom people</option>
                                <option value="Bede people">Bede people</option>
                                <option value="Bedia (Muslim caste)">Bedia (Muslim caste)</option>
                                <option value="Bengali Hindus">Bengali Hindus</option>
                                <option value="Bengali Muslims">Bengali Muslims</option>
                                <option value="Bengali people">Bengali people</option>
                                <option value="Bihari Muslims">Bihari Muslims</option>
                                <option value="Bihari people">Bihari people</option>
                                <option value="Buno people">Buno people</option>
                                <option value="Chak people">Chak people</option>
                                <option value="Chakma people">Chakma people</option>
                                <option value="Chinese people in Bangladesh">Chinese people in Bangladesh</option>
                                <option value="Dhanuk">Dhanuk</option>
                                <option value="Garo people">Garo people</option>
                                <option value="Indians in Bangladesh">Indians in Bangladesh</option>
                                <option value="Indigenous peoples in Bangladesh">Indigenous peoples in Bangladesh</option>
                                <option value="Jumma people">Jumma people</option>
                                <option value="Kan (tribe)">Kan (tribe)</option>
                                <option value="Khasi people">Khasi people</option>
                                <option value="Khumi people">Khumi people</option>
                                <option value="Khyang people">Khyang people</option>
                                <option value="Kuki Inpi">Kuki Inpi</option>
                                <option value="Kuki people">Kuki people</option>
                                <option value="Kurukh people">Kurukh people</option>
                                <option value="Lushei tribe">Lushei tribe</option>
                                <option value="Mahle people">Mahle people</option>
                                <option value="Maimal">Maimal</option>
                                <option value="Mustafa Majid">Mustafa Majid</option>
                                <option value="Mal Muslim">Mal Muslim</option>
                                <option value="Marma people">Marma people</option>
                                <option value="Mro people">Mro people</option>
                                <option value="Munda people">Munda people</option>
                                <option value="Murang people">Murang people</option>
                                <option value="Naulak">Naulak</option>
                                <option value="Nepalis in Bangladesh">Nepalis in Bangladesh</option>
                                <option value="Pankho people">Pankho people</option>
                                <option value="Rakhine people, Bangladesh">Rakhine people, Bangladesh</option>
                                <option value="Rohingya people">Rohingya people</option>
                                <option value="Santhal people">Santhal people</option>
                                <option value="Stranded Pakistanis">Stranded Pakistanis</option>
                                <option value="Tanchangya people">Tanchangya people</option>
                                <option value="Thadou people">Thadou people</option>
                                <option value="Template:Tribes of Bangladesh">Template:Tribes of Bangladesh</option>
                                <option value="Tripuri people">Tripuri people</option>
                                <option value="Vaiphei people">Vaiphei people</option>
                                <option value="Zo people">Zo people</option>
                                <option value="Zomi nationalism">Zomi nationalism</option>
                            </select>
                            <span class="error">@error('ethnic_group'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Religion:<span>*</span></label>
                            <select name="religion" id="religion" class="input-text">
                                <option value="">Select Religion</option>
                                <option value="Islam">Islam</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Christianity">Christianity</option>
                            </select>
                            <span class="error">@error('religion'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>National ID/ Birth ID:<span>*</span></label>
                            <input name="nid" type="number">
                            <span class="error">@error('nid'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Date of Birth:<span>*</span></label>
                            <input name="birthday" type="date">
                            <span class="error">@error('birthday'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>Mobile:<span>*</span></label>
                            <input name="mobileNumber" type="number">
                            <span class="error">@error('mobileNumber'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Email:<span>*</span></label>
                            <input name="email" type="email">
                            <span class="error">@error('email'){{$message}}@enderror</span>
                        </div>
                        <div class="d-flex mt-45">
                            <label>Is Employed?<span>*</span></label>
                            <input type="radio" name="employee" value="yes" onclick="show_company_info('yes')">Yes
                            <input type="radio" name="employee" value="no" onclick="show_company_info('no')">No
                            <span class="error">@error('employee'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div id="company_info" class="mt-30 justify-content-between">
                        <div>
                            <label>Monthly Income:</label>
                            <input name="income" type="number">
                            <span class="error">@error('income'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Company Name:</label>
                            <input name="companyName" type="text">
                            <span class="error">@error('companyName'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Designation:</label>
                            <input name="designation" type="text">
                            <span class="error">@error('designation'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <h3>Present Address:</h3>
                    <div>
                        <label>Address:<span>*</span></label>
                        <input name="preAddress" class="full-width" type="text">
                        <span class="error">@error('preAddress'){{$message}}@enderror</span>
                    </div>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>City:<span>*</span></label>
                            <input name="preCity" type="text">
                            <span class="error">@error('preCity'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Post Code:<span>*</span></label>
                            <input name="prePostCode" type="number">
                            <span class="error">@error('prePostCode'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>Division:<span>*</span></label>
                            <select name="preDivision" id="pre_division">
                                <option value="" selected="selected">Select Division</option>
                                <option value="4">Barisal</option>
                                <option value="1">Chittagong</option>
                                <option value="6">Dhaka</option>
                                <option value="3">Khulna</option>
                                <option value="2">Rajshahi</option>
                                <option value="7">Rangpur</option>
                                <option value="5">Sylhet</option>
                                <option value="7">Mymensingh</option>
                            </select>
                            <span class="error">@error('preDivision'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>District:<span>*</span></label>
                            <select name="preDistrict" id="pre_district">
                            </select>
                            <span class="error">@error('preDistrict'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Sub-District:<span>*</span></label>
                            <select name="preSubDistrict" id="pre_sub_district">
                            </select>
                            <span class="error">@error('preSubDistrict'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <h3>Permanent Address:</h3>
                    <div>
                        <label>Address:<span>*</span></label>
                        <input name="perAddress" class="full-width" type="text">
                        <span class="error">@error('perAddress'){{$message}}@enderror</span>
                    </div>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>City:<span>*</span></label>
                            <input name="perCity" type="text">
                            <span class="error">@error('perCity'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Post Code:<span>*</span></label>
                            <input name="perPostCode" type="number">
                            <span class="error">@error('perPostCode'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>Division:<span>*</span></label>
                            <select name="perDivision" id="per_division">
                                <option value="" selected="selected">Select Division</option>
                                <option value="4">Barisal</option>
                                <option value="1">Chittagong</option>
                                <option value="6">Dhaka</option>
                                <option value="3">Khulna</option>
                                <option value="2">Rajshahi</option>
                                <option value="7">Rangpur</option>
                                <option value="5">Sylhet</option>
                                <option value="7">Mymensingh</option>
                            </select>
                            <span class="error">@error('perDivision'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>District:<span>*</span></label>
                            <select name="perDistrict" id="per_district">
                            </select>
                            <span class="error">@error('perDistrict'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Sub-District:<span>*</span></label>
                            <select name="perSubDistrict" id="per_sub_district">
                            </select>
                            <span class="error">@error('perSubDistrict'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <h3>Highest Academic Achievement:</h3>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>Level of Education:<span>*</span></label>
                            <input name="education" type="text">
                            <span class="error">@error('education'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Institute:<span>*</span></label>
                            <input name="institute" type="text">
                            <span class="error">@error('institute'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>Subject:<span>*</span></label>
                            <input name="subject" type="text">
                            <span class="error">@error('subject'){{$message}}@enderror</span>
                        </div>
                        <div>
                            <label>Year:<span>*</span></label>
                            <input name="year" type="number">
                            <span class="error">@error('year'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <h3>Photo:</h3>
                    <div class="input_holder">
                        <input name="file" type="file"><br>
                        <span>Image size should be 300x300 (Max 100KB) in JPG Format </span>
                        <span class="error">@error('file'){{$message}}@enderror</span>
                    </div>
                    <!-- <h3>Security:</h3>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>Type the code:<span>*</span></label>
                            <input name="code" type="text">
                            <span class="error">@error('code'){{$message}}@enderror</span>
                        </div>
                        <div class="mt-30">
                            <img src="http://seip.bitm.org.bd/captcha/1606645987.6277.jpg" width="120" height="35" alt="recapth-code">
                        </div>
                        <a href="javascript:void(0)" id="new_captcha" style="float: left; margin-top: 50px;">
                            <img src="http://seip.bitm.org.bd/assets/images/refresh.gif" alt="Reload" title="Reload new code">
                        </a>
                    </div> -->
                    <div class="d-flex justify-content-center mt-30">
                        <!-- <button type="submit">Reset</button> -->
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/index.js')}}"></script>
</body>

</html>