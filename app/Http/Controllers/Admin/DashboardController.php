<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Faculty;

class DashboardController extends Controller
{
    public function index(){
		
    	// Query thuần
    	//$faculty = DB::select("SELECT *FROM faculty");
    	//
    	

    	// Query builder
    	$faculty = DB::table('faculty')->get();

    	// ORM
    	$faculty = Faculty::all();
    	
    	return view('pages.dashboard',[
    		'data'	=> $faculty
    	]);
    }
}
