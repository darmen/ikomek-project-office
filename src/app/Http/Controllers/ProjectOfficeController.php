<?php

namespace Darmen\IKomekProjectOffice\app\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectOfficeController extends Controller
{
    public function index()
    {
        return view('project-office::index');
    }

    public function category()
    {
        return view('project-office::category');
    }

    public function project()
    {
        return view('project-office::project');
    }
}
