<?php namespace Modules\Sample\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class SampleController extends Controller {
	
	public function index()
	{
		return view('sample::index');
	}
	
}