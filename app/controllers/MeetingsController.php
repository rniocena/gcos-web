<?php

class MeetingsController extends BaseController {

    public function index()
    {
        return View::make('meeting/list');
    }

}
