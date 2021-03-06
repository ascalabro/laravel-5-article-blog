<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()
        {
            $name = "Angelo Scalabroni";
            $people = \App\User::all();
            return view('pages.about', compact('name', 'people'));
        }

        public function contact()
        {
            return view('pages.contact');
        }

}
