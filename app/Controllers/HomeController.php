<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home - JMCA Builders',
            'activePage' => 'home'
        ];

        return view('home/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us - JMCA Builders',
            'activePage' => 'about'
        ];

        return view('home/about', $data);
    }

    public function team()
    {
        $data = [
            'title' => 'Our Team - JMCA Builders',
            'activePage' => 'team'
        ];

        return view('home/team', $data);
    }

    // public function projects()
    // {
    //     $data = [
    //         'title' => 'Projects - JMCA Builders',
    //         'activePage' => 'projects'
    //     ];

    //     return view('home/projects', $data);
    // }


    public function projects()
{
    $jsonPath = FCPATH . 'assets/data/projects.json';
    $projects = [];

    if (file_exists($jsonPath)) {
        $projects = json_decode(file_get_contents($jsonPath), true) ?? [];
    }

    return view('home/projects', [
        'title'      => 'Projects - JMCA Builders',
        'activePage' => 'projects',
        'projects'   => $projects
    ]);
}

    public function services()
    {
        $data = [
            'title' => 'Services - JMCA Builders',
            'activePage' => 'services'
        ];

        return view('home/services', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us - JMCA Builders',
            'activePage' => 'contact'
        ];

        return view('home/contact', $data);
    }

    public function request()
    {
        $data = [
            'title' => 'Request - JMCA Builders',
            'activePage' => 'request'
        ];

        return view('home/request', $data);
    }

}
