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
                <form>
                    <h3>Choose Course Preference:</h3>
                    <div class="d-flex justify-content-between">
                        <div>
                            <label>First Preference<span>*</span>:</label>
                            <select>
                                <option value="">Select Course</option>
                                <option value="2">Web App Develop- PHP</option>
                                <option value="8">Web App Develop-Dot Net</option>
                                <option value="1">Affiliate Marketing</option>
                                <option value="13">English &amp; business Communication</option>
                                <option value="12">Server Administration &amp; Cloud Management</option>
                                <option value="11">IT support Technical</option>
                                <option value="10">IT Sales</option>
                                <option value="9">Customer Support &amp; Service</option>
                                <option value="7">Practical SEO</option>
                                <option value="6">Web design</option>
                                <option value="5">Graphics &amp; Web UI design</option>
                                <option value="4">Mobile App Develop</option>
                                <option value="3">Digital Marketing Course</option>
                            </select>
                        </div>
                        <div>
                            <label>Second Preference<span>*</span>:</label>
                            <select>
                                <option value="">Select Course</option>
                                <option value="2">Web App Develop- PHP</option>
                                <option value="8">Web App Develop-Dot Net</option>
                                <option value="1">Affiliate Marketing</option>
                                <option value="13">English &amp; business Communication</option>
                                <option value="12">Server Administration &amp; Cloud Management</option>
                                <option value="11">IT support Technical</option>
                                <option value="10">IT Sales</option>
                                <option value="9">Customer Support &amp; Service</option>
                                <option value="7">Practical SEO</option>
                                <option value="6">Web design</option>
                                <option value="5">Graphics &amp; Web UI design</option>
                                <option value="4">Mobile App Develop</option>
                                <option value="3">Digital Marketing Course</option>
                            </select>
                        </div>
                        <div>
                            <label>Third Preference<span>*</span>:</label>
                            <select>
                                <option value="">Select Course</option>
                                <option value="2">Web App Develop- PHP</option>
                                <option value="8">Web App Develop-Dot Net</option>
                                <option value="1">Affiliate Marketing</option>
                                <option value="13">English &amp; business Communication</option>
                                <option value="12">Server Administration &amp; Cloud Management</option>
                                <option value="11">IT support Technical</option>
                                <option value="10">IT Sales</option>
                                <option value="9">Customer Support &amp; Service</option>
                                <option value="7">Practical SEO</option>
                                <option value="6">Web design</option>
                                <option value="5">Graphics &amp; Web UI design</option>
                                <option value="4">Mobile App Develop</option>
                                <option value="3">Digital Marketing Course</option>
                            </select>
                        </div>
                    </div>
                    <h3>Personal Information:</h3>
                    <div class="d-flex justify-content-between">
                        <div>
                            <label>Name<span>*</span>:</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Father Name<span>*</span>:</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Mother Name<span>*</span>:</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>Gender:<span>*</span></label>
                            <select name="gender" id="gender" class="input-text">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
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
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>National ID:<span>*</span></label>
                            <input type="text">
                        </div>
                        <div>
                            <label>National ID:<span>*</span></label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Date of Birth:<span>*</span></label>
                            <input type="date">
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>Mobile:<span>*</span></label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Email:<span>*</span></label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="d-flex mt-30">
                        <label>Is Employed?</label>
                        <input type="radio" value="yes">
                        <h6>Yes</h6>
                        <input type="radio" value="no">
                        <h6>No</h6>
                    </div>
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>Monthly Income:</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Company Name:</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Designation:</label>
                            <input type="text">
                        </div>
                    </div>
                    <h3>Present Address:</h3>
                    <div>
                        <label>Address:<span>*</span></label>
                        <input class="full-width" type="text">
                    </div>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>City:<span>*</span></label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Post Code:<span>*</span></label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>Division:<span>*</span></label>
                            <select>
                                <option value="" selected="selected">Select Division</option>
                                <option value="5">Barisal</option>
                                <option value="2">Chittagong</option>
                                <option value="1">Dhaka</option>
                                <option value="3">Khulna</option>
                                <option value="6">Rajshahi</option>
                                <option value="7">Rangpur</option>
                                <option value="4">Sylhet</option>
                            </select>
                        </div>
                        <div>
                            <label>District:<span>*</span></label>
                            <select>
                                <option value="0" selected="selected">Select District</option>
                                <option value="30">bagerhat</option>
                                <option value="19">Bandarban</option>
                                <option value="43">Barisal</option>
                                <option value="45">Bhola</option>
                                <option value="49">Bogra</option>
                                <option value="44">Borguna</option>
                                <option value="20">Brahmanbaria</option>
                                <option value="50">Chaainawabganj</option>
                                <option value="21">Chandpur</option>
                                <option value="18">Chittagong</option>
                                <option value="31">Chuadanga</option>
                                <option value="22">Comilla</option>
                                <option value="23">Cox'sBazar</option>
                                <option value="1">Dhaka</option>
                                <option value="58">Dinajpur</option>
                                <option value="2">Faridpur</option>
                                <option value="24">Feni</option>
                                <option value="59">Gaibandha</option>
                                <option value="3">Gazipur</option>
                                <option value="4">Gopalganj</option>
                                <option value="40">Habiganj</option>
                                <option value="5">Jamalpur</option>
                                <option value="32">Jessore</option>
                                <option value="46">Jhalkati</option>
                                <option value="33">Jhenaidah</option>
                                <option value="51">Joypurhat</option>
                                <option value="25">Khagrachari</option>
                                <option value="29">Khulna</option>
                                <option value="6">Kishoreganj</option>
                                <option value="60">Kurigram</option>
                                <option value="34">Kushtia</option>
                                <option value="26">Lakshmipur</option>
                                <option value="61">Lalmonirhat</option>
                                <option value="7">Madaripur</option>
                                <option value="35">Magura</option>
                                <option value="8">Manikganj</option>
                                <option value="41">Maulivibazar</option>
                                <option value="36">Meherpur</option>
                                <option value="9">Munshiganj</option>
                                <option value="10">Mymensingh</option>
                                <option value="52">Naogaon</option>
                                <option value="37">Narail</option>
                                <option value="11">Narayanganj</option>
                                <option value="12">Narsingdi</option>
                                <option value="53">Natore</option>
                                <option value="13">Netrakona</option>
                                <option value="62">Nilphamari</option>
                                <option value="27">Noakhali</option>
                                <option value="54">Pabna</option>
                                <option value="63">Panchagarh</option>
                                <option value="47">Patuakhali</option>
                                <option value="48">Pirojgonj</option>
                                <option value="14">Rajbari</option>
                                <option value="55">Rajshahi</option>
                                <option value="28">Rangamati</option>
                                <option value="57">Rangpur</option>
                                <option value="38">Satkhira</option>
                                <option value="15">Shariatpur</option>
                                <option value="16">Sherpur</option>
                                <option value="56">Sirajganj</option>
                                <option value="42">Sunamganj</option>
                                <option value="39">Sylhet</option>
                                <option value="17">Tangail</option>
                                <option value="64">Thakurgaon</option>
                            </select>
                        </div>
                        <div>
                            <label>Sub-District:<span>*</span></label>
                            <select>
                                <option value="0" selected="selected">Select Upazila</option>
                                <option value="341">Agailjhara</option>
                                <option value="342">Babuganj</option>
                                <option value="343">Bakerganj</option>
                                <option value="344">Banaripara</option>
                                <option value="347">Barisal Sadar</option>
                                <option value="345">Gaurnadi</option>
                                <option value="346">Hizla</option>
                                <option value="348">Mehendiganj</option>
                                <option value="349">Muladi</option>
                                <option value="350">Wazirpur</option>
                            </select>
                        </div>
                    </div>
                    <h3>Permanent Address:</h3>
                    <div>
                        <label>Address:<span>*</span></label>
                        <input class="full-width" type="text">
                    </div>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>City:<span>*</span></label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Post Code:<span>*</span></label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-between">
                        <div>
                            <label>Division:<span>*</span></label>
                            <select>
                                <option value="" selected="selected">Select Division</option>
                                <option value="5">Barisal</option>
                                <option value="2">Chittagong</option>
                                <option value="1">Dhaka</option>
                                <option value="3">Khulna</option>
                                <option value="6">Rajshahi</option>
                                <option value="7">Rangpur</option>
                                <option value="4">Sylhet</option>
                            </select>
                        </div>
                        <div>
                            <label>District:<span>*</span></label>
                            <select>
                                <option value="0" selected="selected">Select District</option>
                                <option value="30">bagerhat</option>
                                <option value="19">Bandarban</option>
                                <option value="43">Barisal</option>
                                <option value="45">Bhola</option>
                                <option value="49">Bogra</option>
                                <option value="44">Borguna</option>
                                <option value="20">Brahmanbaria</option>
                                <option value="50">Chaainawabganj</option>
                                <option value="21">Chandpur</option>
                                <option value="18">Chittagong</option>
                                <option value="31">Chuadanga</option>
                                <option value="22">Comilla</option>
                                <option value="23">Cox'sBazar</option>
                                <option value="1">Dhaka</option>
                                <option value="58">Dinajpur</option>
                                <option value="2">Faridpur</option>
                                <option value="24">Feni</option>
                                <option value="59">Gaibandha</option>
                                <option value="3">Gazipur</option>
                                <option value="4">Gopalganj</option>
                                <option value="40">Habiganj</option>
                                <option value="5">Jamalpur</option>
                                <option value="32">Jessore</option>
                                <option value="46">Jhalkati</option>
                                <option value="33">Jhenaidah</option>
                                <option value="51">Joypurhat</option>
                                <option value="25">Khagrachari</option>
                                <option value="29">Khulna</option>
                                <option value="6">Kishoreganj</option>
                                <option value="60">Kurigram</option>
                                <option value="34">Kushtia</option>
                                <option value="26">Lakshmipur</option>
                                <option value="61">Lalmonirhat</option>
                                <option value="7">Madaripur</option>
                                <option value="35">Magura</option>
                                <option value="8">Manikganj</option>
                                <option value="41">Maulivibazar</option>
                                <option value="36">Meherpur</option>
                                <option value="9">Munshiganj</option>
                                <option value="10">Mymensingh</option>
                                <option value="52">Naogaon</option>
                                <option value="37">Narail</option>
                                <option value="11">Narayanganj</option>
                                <option value="12">Narsingdi</option>
                                <option value="53">Natore</option>
                                <option value="13">Netrakona</option>
                                <option value="62">Nilphamari</option>
                                <option value="27">Noakhali</option>
                                <option value="54">Pabna</option>
                                <option value="63">Panchagarh</option>
                                <option value="47">Patuakhali</option>
                                <option value="48">Pirojgonj</option>
                                <option value="14">Rajbari</option>
                                <option value="55">Rajshahi</option>
                                <option value="28">Rangamati</option>
                                <option value="57">Rangpur</option>
                                <option value="38">Satkhira</option>
                                <option value="15">Shariatpur</option>
                                <option value="16">Sherpur</option>
                                <option value="56">Sirajganj</option>
                                <option value="42">Sunamganj</option>
                                <option value="39">Sylhet</option>
                                <option value="17">Tangail</option>
                                <option value="64">Thakurgaon</option>
                            </select>
                        </div>
                        <div>
                            <label>Sub-District:<span>*</span></label>
                            <select>
                                <option value="0" selected="selected">Select Upazila</option>
                                <option value="341">Agailjhara</option>
                                <option value="342">Babuganj</option>
                                <option value="343">Bakerganj</option>
                                <option value="344">Banaripara</option>
                                <option value="347">Barisal Sadar</option>
                                <option value="345">Gaurnadi</option>
                                <option value="346">Hizla</option>
                                <option value="348">Mehendiganj</option>
                                <option value="349">Muladi</option>
                                <option value="350">Wazirpur</option>
                            </select>
                        </div>
                    </div>
                    <h3>Highest Academic Achievement:</h3>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>Level of Education:<span>*</span></label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Institute:<span>*</span></label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>Subject:<span>*</span></label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Year:<span>*</span></label>
                            <input type="text">
                        </div>
                    </div>
                    <h3>Photo:</h3>
                    <div class="input_holder">
                        <input type="file"><br>
                        <span>Image size should be 300x300 (Max 100KB) in JPG Format </span>
                    </div>
                    <h3>Security:</h3>
                    <div class="d-flex mt-30 justify-content-start">
                        <div class="mr-30">
                            <label>Type the code:<span>*</span></label>
                            <input type="text">
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