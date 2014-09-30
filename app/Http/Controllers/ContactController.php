<?php namespace Wiler\Http\Controllers;

use Illuminate\Routing\Controller;

class ContactController extends Controller {

	//
  public function index()
  {
    return view('pages.frontend.contact');
  }

}
