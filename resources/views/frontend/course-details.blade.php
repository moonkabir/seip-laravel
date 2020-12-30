@include('frontend.include.common')
<div class="col-9">
    <h2>Course Wise Details </h2>
    <table border="1">
        <tbody>
            <tr>
                <td><h6>Name of Course</h6></td>
                <td class="w-150"><h6>Prerequisite</h6></td>
                <td class="w-300"><h6>Expected Benefits to the Sector</h6></td>
                <td><h6>Job Placement</h6></td>
            </tr>
            @foreach($courseDetails as $courseDetail)
            <tr class="course-details">
                <td><h6>{{$courseDetail->name}}</h6></td>
                <td>{{$courseDetail->prerequisite}}</td>
                <td>{!!$courseDetail->benefits!!}</td>
                <td>{{$courseDetail->jobPlacement}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</body>

</html>