<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
    	return view('backend.Employee.allEmployee');
    }
    public  function create()
    {
        return view('backend.Employee.createEmployee');
    }
}
