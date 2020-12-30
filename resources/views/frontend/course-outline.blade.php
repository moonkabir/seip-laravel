@include('frontend.include.common')
<div class="col-9">
    <div class="professional page_wrapper" style="width:815px">
        <h2 class="event_title">Courses Outline</h2>
        <table style="width: 100%;" border="1" align="left">
            <tbody>
                
                @foreach($courseOutlines as $courseOutline)
                <tr>
                    <td>{{$courseOutline->name}}</td>
                    <td><a href="{{asset($courseOutline->file)}}" target="_blank"><img style="float: right;" title="Download PDF" src="{{asset('assets/img/pdf-icon.png')}}" alt="" width="138" height="38"></a></td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</body>

</html>