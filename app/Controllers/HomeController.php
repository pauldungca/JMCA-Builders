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

    public function projects()
    {
        $data = [
            'title' => 'Projects - JMCA Builders',
            'activePage' => 'projects'
        ];

        return view('home/projects', $data);
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
}
