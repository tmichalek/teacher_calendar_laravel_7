<?php

namespace App\Http\Controllers\Students;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class YoungerStudentController extends Controller
{
    public function index()
    {
        return view('main.Younger');
    }
}
