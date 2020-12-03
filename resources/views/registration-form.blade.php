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
                <form method="POST" action="{{url('/user-add')}}">
                    {{ method_field('POST') }}
                    @csrf
                    <h3>Choose Course Preference:</h3>
                    <div class="d-flex justify-content-between">
                        <div>
                            <label>First Preference<span>*</span>:</label>
                            <select name="FirstCourse">
                                <option value="">Select Course</option>
                                <option value="Web App Develop- PHP">Web App Develop- PHP</option>
                                <option value="Web App Develop-Dot Net">Web App Develop-Dot Net</option>
                                <option value="Affiliate Marketing">Affiliate Marketing</option>
                                <option value="English &amp; business Communication">English &amp; business Communication</option>
                                <option value="Server Administration &amp; Cloud Management">Server Administration &amp; Cloud Management</option>
                                <option value="IT support Technical">IT support Technical</option>
                                <option value="IT Sales">IT Sales</option>
                                <option value="Customer Support &amp; Service">Customer Support &amp; Service</option>
                                <option value="Practical SEO">Practical SEO</option>
                                <option value="Web design">Web design</option>
                                <option value="Graphics &amp; Web UI design">Graphics &amp; Web UI design</option>
                                <option value="Mobile App Develop">Mobile App Develop</option>
                                <option value="Digital Marketing Course">Digital Marketing Course</option>
                            </select>
                        </div>
                        <div>
                            <label>Second Preference<span>*</span>:</label>
                            <select name="SecondCourse">
                                <option value="">Select Course</option>
                                <option value="Web App Develop- PHP">Web App Develop- PHP</option>
                                <option value="Web App Develop-Dot Net">Web App Develop-Dot Net</option>
                                <option value="Affiliate Marketing">Affiliate Marketing</option>
                                <option value="English &amp; business Communication">English &amp; business Communication</option>
                                <option value="Server Administration &amp; Cloud Management">Server Administration &amp; Cloud Management</option>
                                <option value="IT support Technical">IT support Technical</option>
                                <option value="IT Sales">IT Sales</option>
                                <option value="Customer Support &amp; Service">Customer Support &amp; Service</option>
                                <option value="Practical SEO">Practical SEO</option>
                                <option value="Web design">Web design</option>
                                <option value="Graphics &amp; Web UI design">Graphics &amp; Web UI design</option>
                                <option value="Mobile App Develop">Mobile App Develop</option>
                                <option value="Digital Marketing Course">Digital Marketing Course</option>
                            </select>
                        </div>
                        <div>
                            <label>Third Preference<span>*</span>:</label>
                            <select name="ThirdCourse">
                                <option value="">Select Course</option>
                                <option value="Web App Develop- PHP">Web App Develop- PHP</option>
                                <option value="Web App Develop-Dot Net">Web App Develop-Dot Net</option>
                                <option value="Affiliate Marketing">Affiliate Marketing</option>
                                <option value="English &amp; business Communication">English &amp; business Communication</option>
                                <option value="Server Administration &amp; Cloud Management">Server Administration &amp; Cloud Management</option>
                                <option value="IT support Technical">IT support Technical</option>
                                <option value="IT Sales">IT Sales</option>
                                <option value="Customer Support &amp; Service">Customer Support &amp; Service</option>
                                <option value="Practical SEO">Practical SEO</option>
                                <option value="Web design">Web design</option>
                                <option value="Graphics &amp; Web UI design">Graphics &amp; Web UI design</option>
                                <option value="Mobile App Develop">Mobile App Develop</option>
                                <option value="Digital Marketing Course">Digital Marketing Course</option>
                            </select>
                        </div>
                    </div>
                    <h3>Personal Information:</h3>
                    <div class="d-flex justify-content-between">
                        <div>
                            <label>Name<span>*</span>:</label>
                            <input name="name" type="text">
                        </div>
                        <div>
                            <label>Father Name<span>*</span>:</label>
                            <input name="fatherName" type="text">
                        </div>
                        <div>
                            <label>Mother Name<span>*</span>:</label>
                            <input name="motherName" type="text">
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
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>National ID:<span>*</span></label>
                            <input name="nid" type="number">
                        </div>
                        <div>
                            <label>Date of Birth:<span>*</span></label>
                            <input name="birthday" type="date">
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>Mobile:<span>*</span></label>
                            <input name="mobileNumber" type="number">
                        </div>
                        <div>
                            <label>Email:<span>*</span></label>
                            <input name="email" type="email">
                        </div>
                        <div>
                            <label>Is Employed?</label>
                            <select name="employed">
                                <option value="" selected="selected">Select</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>Monthly Income:</label>
                            <input name="income" type="number">
                        </div>
                        <div>
                            <label>Company Name:</label>
                            <input name="companyName" type="text">
                        </div>
                        <div>
                            <label>Designation:</label>
                            <input name="designation" type="text">
                        </div>
                    </div>
                    <h3>Present Address:</h3>
                    <div>
                        <label>Address:<span>*</span></label>
                        <input name="preAddress" class="full-width" type="text">
                    </div>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>City:<span>*</span></label>
                            <input name="preCity" type="text">
                        </div>
                        <div>
                            <label>Post Code:<span>*</span></label>
                            <input name="prePostCode" type="number">
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>Division:<span>*</span></label>
                            <select name="preDivision">
                                <option value="" selected="selected">Select Division</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                        <div>
                            <label>District:<span>*</span></label>
                            <select name="preDistrict">
                                <option value="0" selected="selected">Select District</option>
                                <option value="bagerhat">bagerhat</option>
                                <option value="Bandarban">Bandarban</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Bhola">Bhola</option>
                                <option value="Bogra">Bogra</option>
                                <option value="Borguna">Borguna</option>
                                <option value="Brahmanbaria">Brahmanbaria</option>
                                <option value="Chaainawabganj">Chaainawabganj</option>
                                <option value="Chandpur">Chandpur</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Chuadanga">Chuadanga</option>
                                <option value="Comilla">Comilla</option>
                                <option value="Cox'sBazar">Cox'sBazar</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Faridpur">Faridpur</option>
                                <option value="Feni">Feni</option>
                                <option value="Gaibandha">Gaibandha</option>
                                <option value="Gazipur">Gazipur</option>
                                <option value="Gopalganj">Gopalganj</option>
                                <option value="Habiganj">Habiganj</option>
                                <option value="Jamalpur">Jamalpur</option>
                                <option value="Jessore">Jessore</option>
                                <option value="Jhalkati">Jhalkati</option>
                                <option value="Jhenaidah">Jhenaidah</option>
                                <option value="Joypurhat">Joypurhat</option>
                                <option value="Khagrachari">Khagrachari</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Kishoreganj">Kishoreganj</option>
                                <option value="Kurigram">Kurigram</option>
                                <option value="Kushtia">Kushtia</option>
                                <option value="Lakshmipur">Lakshmipur</option>
                                <option value="Lalmonirhat">Lalmonirhat</option>
                                <option value="Madaripur">Madaripur</option>
                                <option value="Magura">Magura</option>
                                <option value="Manikganj">Manikganj</option>
                                <option value="Maulivibazar">Maulivibazar</option>
                                <option value="Maulivibazar">Meherpur</option>
                                <option value="Munshiganj">Munshiganj</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Naogaon">Naogaon</option>
                                <option value="Narail">Narail</option>
                                <option value="Narayanganj">Narayanganj</option>
                                <option value="Narsingdi">Narsingdi</option>
                                <option value="Natore">Natore</option>
                                <option value="Netrakona">Netrakona</option>
                                <option value="Nilphamari">Nilphamari</option>
                                <option value="Noakhali">Noakhali</option>
                                <option value="Pabna">Pabna</option>
                                <option value="Panchagarh">Panchagarh</option>
                                <option value="Patuakhali">Patuakhali</option>
                                <option value="Pirojgonj">Pirojgonj</option>
                                <option value="Rajbari">Rajbari</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Satkhira">Satkhira</option>
                                <option value="Shariatpur">Shariatpur</option>
                                <option value="Sherpur">Sherpur</option>
                                <option value="Sirajganj">Sirajganj</option>
                                <option value="Sunamganj">Sunamganj</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Tangail">Tangail</option>
                                <option value="Thakurgaon">Thakurgaon</option>
                            </select>
                        </div>
                        <div>
                            <label>Sub-District:<span>*</span></label>
                            <select name="preSubDistrict">
                                <option value="" selected="selected">Select Upazila</option>
                                <option value="Agailjhara">Agailjhara</option>
                                <option value="Babuganj">Babuganj</option>
                                <option value="Bakerganj">Bakerganj</option>
                                <option value="Banaripara">Banaripara</option>
                                <option value="Barisal Sadar">Barisal Sadar</option>
                                <option value="Gaurnadi">Gaurnadi</option>
                                <option value="Hizla">Hizla</option>
                                <option value="Mehendiganj">Mehendiganj</option>
                                <option value="Muladi">Muladi</option>
                                <option value="Wazirpur">Wazirpur</option>
                            </select>
                        </div>
                    </div>
                    <h3>Permanent Address:</h3>
                    <div>
                        <label>Address:<span>*</span></label>
                        <input name="perAddress" class="full-width" type="text">
                    </div>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>City:<span>*</span></label>
                            <input name="perCity" type="text">
                        </div>
                        <div>
                            <label>Post Code:<span>*</span></label>
                            <input name="perPostCode" type="number">
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>Division:<span>*</span></label>
                            <select name="perDivision">
                                <option value="" selected="selected">Select Division</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                        <div>
                            <label>District:<span>*</span></label>
                            <select name="perDistrict">
                                <option value="0" selected="selected">Select District</option>
                                <option value="bagerhat">bagerhat</option>
                                <option value="Bandarban">Bandarban</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Bhola">Bhola</option>
                                <option value="Bogra">Bogra</option>
                                <option value="Borguna">Borguna</option>
                                <option value="Brahmanbaria">Brahmanbaria</option>
                                <option value="Chaainawabganj">Chaainawabganj</option>
                                <option value="Chandpur">Chandpur</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Chuadanga">Chuadanga</option>
                                <option value="Comilla">Comilla</option>
                                <option value="Cox'sBazar">Cox'sBazar</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Faridpur">Faridpur</option>
                                <option value="Feni">Feni</option>
                                <option value="Gaibandha">Gaibandha</option>
                                <option value="Gazipur">Gazipur</option>
                                <option value="Gopalganj">Gopalganj</option>
                                <option value="Habiganj">Habiganj</option>
                                <option value="Jamalpur">Jamalpur</option>
                                <option value="Jessore">Jessore</option>
                                <option value="Jhalkati">Jhalkati</option>
                                <option value="Jhenaidah">Jhenaidah</option>
                                <option value="Joypurhat">Joypurhat</option>
                                <option value="Khagrachari">Khagrachari</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Kishoreganj">Kishoreganj</option>
                                <option value="Kurigram">Kurigram</option>
                                <option value="Kushtia">Kushtia</option>
                                <option value="Lakshmipur">Lakshmipur</option>
                                <option value="Lalmonirhat">Lalmonirhat</option>
                                <option value="Madaripur">Madaripur</option>
                                <option value="Magura">Magura</option>
                                <option value="Manikganj">Manikganj</option>
                                <option value="Maulivibazar">Maulivibazar</option>
                                <option value="Maulivibazar">Meherpur</option>
                                <option value="Munshiganj">Munshiganj</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Naogaon">Naogaon</option>
                                <option value="Narail">Narail</option>
                                <option value="Narayanganj">Narayanganj</option>
                                <option value="Narsingdi">Narsingdi</option>
                                <option value="Natore">Natore</option>
                                <option value="Netrakona">Netrakona</option>
                                <option value="Nilphamari">Nilphamari</option>
                                <option value="Noakhali">Noakhali</option>
                                <option value="Pabna">Pabna</option>
                                <option value="Panchagarh">Panchagarh</option>
                                <option value="Patuakhali">Patuakhali</option>
                                <option value="Pirojgonj">Pirojgonj</option>
                                <option value="Rajbari">Rajbari</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Satkhira">Satkhira</option>
                                <option value="Shariatpur">Shariatpur</option>
                                <option value="Sherpur">Sherpur</option>
                                <option value="Sirajganj">Sirajganj</option>
                                <option value="Sunamganj">Sunamganj</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Tangail">Tangail</option>
                                <option value="Thakurgaon">Thakurgaon</option>
                            </select>
                        </div>
                        <div>
                            <label>Sub-District:<span>*</span></label>
                            <select name="perSubDistrict">
                                <option value="" selected="selected">Select Upazila</option>
                                <option value="Agailjhara">Agailjhara</option>
                                <option value="Babuganj">Babuganj</option>
                                <option value="Bakerganj">Bakerganj</option>
                                <option value="Banaripara">Banaripara</option>
                                <option value="Barisal Sadar">Barisal Sadar</option>
                                <option value="Gaurnadi">Gaurnadi</option>
                                <option value="Hizla">Hizla</option>
                                <option value="Mehendiganj">Mehendiganj</option>
                                <option value="Muladi">Muladi</option>
                                <option value="Wazirpur">Wazirpur</option>
                            </select>
                        </div>
                    </div>
                    <h3>Highest Academic Achievement:</h3>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>Level of Education:<span>*</span></label>
                            <input name="education" type="text">
                        </div>
                        <div>
                            <label>Institute:<span>*</span></label>
                            <input name="institute" type="text">
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>Subject:<span>*</span></label>
                            <input name="subject" type="text">
                        </div>
                        <div>
                            <label>Year:<span>*</span></label>
                            <input name="year" type="number">
                        </div>
                    </div>
                    <h3>Photo:</h3>
                    <div class="input_holder">
                        <input name="file" type="file"><br>
                        <span>Image size should be 300x300 (Max 100KB) in JPG Format </span>
                    </div>
                    <h3>Security:</h3>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>Type the code:<span>*</span></label>
                            <input name="code" type="text">
                        </div>
                        <div class="mt-30">
                            <img src="http://seip.bitm.org.bd/captcha/1606645987.6277.jpg" width="120" height="35" alt="recapth-code">
                        </div>
                        <a href="javascript:void(0)" id="new_captcha" style="float: left; margin-top: 50px;">
                            <img src="http://seip.bitm.org.bd/assets/images/refresh.gif" alt="Reload" title="Reload new code">
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mt-30">
                        <button type="submit">Reset</button>
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>