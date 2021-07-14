<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Sort;

class SortController extends Controller 

{


function index()
    {
    	$sorts = Sort::where('gender', '=', 'male')->get();
    	$pings = Sort::where('gender', '=', 'female')->get();
        return view('sort',compact('sorts','pings'));
 
    }


}

?>