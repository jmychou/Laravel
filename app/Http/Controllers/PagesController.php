<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	function index(){

		$data['name']='jmy';
		$data['age']=20;

		return view('test.about',$data);
	}
}
