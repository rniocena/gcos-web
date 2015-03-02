<?php

class AttendanceController extends BaseController {

    public function index()
    {
        return View::make('attendance/list');
    }

    public function getLocales($local, $attendance = null)
    {
        return View::make('attendance/lokal-list', [
            'local' => $local,

        ]);
    }

    public function getAttendance($local, $attendance)
    {
        return View::make('attendance/lokal-attendance', [
            'local' => $local,
            'attendance' => $attendance
        ]);
    }

}
