<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;

class LocalizationController extends Controller {
	
   public function create(Request $request) {
      //set’s application’s locale
	  $currentLang = $request->get('lang');
	  
	  $request->session()->put('currentLang',$currentLang);
	  
      return redirect()->back();
   }
}