<?php

namespace App\Controllers;


use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;


class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
