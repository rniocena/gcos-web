<?php

class MasterlistController extends BaseController {

    public function index()
    {
        return View::make('masterlist/list');
    }

    public function getLocales($local)
    {
        return View::make('masterlist/members', [
            'local' => $local
        ]);
    }

    public function getProfile($member)
    {
        return View::make('masterlist/profile', [
            'member' => $member
        ]);
    }
}
