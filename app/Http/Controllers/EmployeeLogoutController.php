<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeLogoutController extends Controller
{
    public function index(Request $request){

    	$request->session()->flush();
    	//$request->session()->forget('logged');

    	return redirect()->route('employee.login');

    }
}
