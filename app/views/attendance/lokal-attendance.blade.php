@extends('includes.layout')

@section('content')

    <div class="main">
        <div class="non-shortable-content">
            <br>
            <h1>Locale of <?=$local?></h1>
            <h6>Showing attendance from start date - end date</h6>
        </div>

        <div class="shortable-content">
            <br>
            <div class="box _100">
                <div class="box-content">
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable" id="dynamic">
                        <thead>
                        <tr>
                            <th>Members</th>
                            <th>PM</th>
                            <th>WS</th>
                            <th>TG</th>
                            <th>Meeting</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Date 1</td>
                            <td>kland</td>
                            <td>daadda</td>
                            <td>dadada</td>
                            <td>adafdada</td>
                            <td>Edit</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--SHORTABLECONTENT-ENDS-->

    </div><!--MAIN ENDS-->

@stop