<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\carddetail;
use App\qualification;


class searchmemberController extends Controller
{
    public function search()
    {
        return view('search');
    }

    public function result(Request $request)
    {
    	$searchterm = $request->input('search');
        $output="";

        $posts = DB::select("SELECT * FROM carddetails where name LIKE '$searchterm%'");

		return response($posts);
    }
}
