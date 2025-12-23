<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home/index');
    }

    public function projects()
{
    $json = file_get_contents(FCPATH . 'assets/data/projects.json');
    $data['projects'] = json_decode($json, true);

    return view('projects', $data);
}
}
