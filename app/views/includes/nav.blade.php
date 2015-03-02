<nav>
    <ul>
        <li>
            <a href="{{ action('HomeController@index'); }}" class="@if (Request::segment(1) == '') current @endif" title="Dashboard">
                <i class="icon-map-marker"></i>
                Dashboard
            </a>
        </li>

        <li>
            <a href="{{ action('AttendanceController@index'); }}" class="@if (Request::segment(1) == 'attendance' || Request::segment(1) == 'show-attendance') current @endif" title="Attendance">
                <i class="icon-edit"></i>
                Attendance
            </a>
        </li>

        <li>
            <a href="{{ action('MasterlistController@index'); }}" class="@if (Request::segment(1) == 'masterlist') current @endif" title="Masterlist">
                <i class="icon-random"></i>
                Masterlist
            </a>
        </li>

        <li>
            <a href="{{ action('MeetingsController@index'); }}" class="@if (Request::segment(1) == 'meetings') current @endif" title="Meetings">
                <i class="icon-cogs"></i>
                Meetings
            </a>
        </li>
    </ul>
</nav><!--NAV ENDS HERE-->

@if (Request::segment(1) == 'attendance' || Request::segment(1) == 'show-attendance')

    <aside>

        <div class="user">
            D1 GCOS Locales
        </div>

        <aside>

            <div class="user">
                D1 GCOS Locale
            </div>

            <ul id="main-nav">

                <li><a href="{{action('AttendanceController@getLocales', ['local' => 'Adelaide'])}}" <?=(Request::segment(2) == 'Adelaide') ? 'style="color: #00b6f3"' : ''?>> Adelaide </a></li>
                <li><a href="{{action('AttendanceController@getLocales', ['local' => 'Auckland'])}}" <?=(Request::segment(2) == 'Auckland') ? 'style="color: #00b6f3"' : ''?>> Auckland </a></li>
                <li><a href="{{action('AttendanceController@getLocales', ['local' => 'Brisbane'])}}" <?=(Request::segment(2) == 'Brisbane') ? 'style="color: #00b6f3"' : ''?>> Brisbane </a></li>
                <li><a href="{{action('AttendanceController@getLocales', ['local' => 'Christchurch'])}}" <?=(Request::segment(2) == 'Christchurch') ? 'style="color: #00b6f3"' : ''?>> Christchurch </a></li>
                <li><a href="{{action('AttendanceController@getLocales', ['local' => 'Darwin'])}}" <?=(Request::segment(2) == 'Darwin') ? 'style="color: #00b6f3"' : ''?>> Darwin </a></li>
                <li><a href="{{action('AttendanceController@getLocales', ['local' => 'Guam'])}}" <?=(Request::segment(2) == 'Guam') ? 'style="color: #00b6f3"' : ''?>> Guam </a></li>
                <li><a href="{{action('AttendanceController@getLocales', ['local' => 'Kingaroy'])}}" <?=(Request::segment(2) == 'Kingaroy') ? 'style="color: #00b6f3"' : ''?>> Kingaroy </a></li>
                <li><a href="{{action('AttendanceController@getLocales', ['local' => 'Melbourne'])}}" <?=(Request::segment(2) == 'Melbourne') ? 'style="color: #00b6f3"' : ''?>> Melbourne </a></li>
                <li><a href="{{action('AttendanceController@getLocales', ['local' => 'Perth'])}}" <?=(Request::segment(2) == 'Perth') ? 'style="color: #00b6f3"' : ''?>> Perth </a></li>
                <li><a href="{{action('AttendanceController@getLocales', ['local' => 'Saipan'])}}" <?=(Request::segment(2) == 'Saipan') ? 'style="color: #00b6f3"' : ''?>> Saipan </a></li>
                <li><a href="{{action('AttendanceController@getLocales', ['local' => 'Sydney'])}}" <?=(Request::segment(2) == 'Sydney') ? 'style="color: #00b6f3"' : ''?>> Sydney </a></li>

            </ul>
        </aside>

    </aside>
@endif

@if (Request::segment(1) == 'masterlist')

    <aside>

        <div class="user">
            D1 GCOS Locales
        </div>

        <aside>

            <div class="user">
                D1 GCOS Locale
            </div>

            <ul id="main-nav">

                <li><a href="{{action('MasterlistController@getLocales', ['local' => 'Adelaide'])}}" <?=(Request::segment(2) == 'Adelaide') ? 'style="color: #00b6f3"' : ''?>> Adelaide </a></li>
                <li><a href="{{action('MasterlistController@getLocales', ['local' => 'Auckland'])}}" <?=(Request::segment(2) == 'Auckland') ? 'style="color: #00b6f3"' : ''?>> Auckland </a></li>
                <li><a href="{{action('MasterlistController@getLocales', ['local' => 'Brisbane'])}}" <?=(Request::segment(2) == 'Brisbane') ? 'style="color: #00b6f3"' : ''?>> Brisbane </a></li>
                <li><a href="{{action('MasterlistController@getLocales', ['local' => 'Christchurch'])}}" <?=(Request::segment(2) == 'Christchurch') ? 'style="color: #00b6f3"' : ''?>> Christchurch </a></li>
                <li><a href="{{action('MasterlistController@getLocales', ['local' => 'Darwin'])}}" <?=(Request::segment(2) == 'Darwin') ? 'style="color: #00b6f3"' : ''?>> Darwin </a></li>
                <li><a href="{{action('MasterlistController@getLocales', ['local' => 'Guam'])}}" <?=(Request::segment(2) == 'Guam') ? 'style="color: #00b6f3"' : ''?>> Guam </a></li>
                <li><a href="{{action('MasterlistController@getLocales', ['local' => 'Kingaroy'])}}" <?=(Request::segment(2) == 'Kingaroy') ? 'style="color: #00b6f3"' : ''?>> Kingaroy </a></li>
                <li><a href="{{action('MasterlistController@getLocales', ['local' => 'Melbourne'])}}" <?=(Request::segment(2) == 'Melbourne') ? 'style="color: #00b6f3"' : ''?>> Melbourne </a></li>
                <li><a href="{{action('MasterlistController@getLocales', ['local' => 'Perth'])}}" <?=(Request::segment(2) == 'Perth') ? 'style="color: #00b6f3"' : ''?>> Perth </a></li>
                <li><a href="{{action('MasterlistController@getLocales', ['local' => 'Saipan'])}}" <?=(Request::segment(2) == 'Saipan') ? 'style="color: #00b6f3"' : ''?>> Saipan </a></li>
                <li><a href="{{action('MasterlistController@getLocales', ['local' => 'Sydney'])}}" <?=(Request::segment(2) == 'Sydney') ? 'style="color: #00b6f3"' : ''?>> Sydney </a></li>

            </ul>
        </aside>

    </aside><!--ASIDE ENDS HERE-->
@endif
