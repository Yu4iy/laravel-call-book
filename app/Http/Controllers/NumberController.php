<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Number;
class NumberController extends Controller
{
    public function index(){

		$numbers = Number::all();
		// dump($numbers);

		 return view('number-page', compact('numbers'));
	 }
}
