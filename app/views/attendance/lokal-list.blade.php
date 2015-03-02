@extends('includes.layout')

@section('content')

    <div class="main">
        <div class="non-shortable-content">
            <br>
            <h1>Locale of <?=$local?></h1>
            <h6>Showing attendance from <?=$local?></h6>
            <input type="button" class="float_r add_attendance" value="Add Attendance" />
        </div>

        <div class="shortable-content">
            <br>
            <div class="box _100">
                <div class="box-content">
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable" id="dynamic">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>No. of Present</th>
                            <th>No. of Late</th>
                            <th>No. of Absent</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="{{action('AttendanceController@getAttendance', ['local' => $local, 'attendance' => 'attendance'])}}">Date 1</a></td>
                            <td>kland</td>
                            <td>daadda</td>
                            <td>dadada</td>
                            <td>adafdada</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--SHORTABLECONTENT-ENDS-->

    </div><!--MAIN ENDS-->

@stop
