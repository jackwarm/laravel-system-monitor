<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	private $ServerName = "Server Monitor";
	/* 	
	 *	This function is used to verify that the page was redirected from the
	 *	http://macrophage.cieply.com/ authentication method
	 */	
	protected function macroPhageAuthentication(Request $request) {
		$today = date("m/d/Y");
		$currentAuth = md5($this->ServerName.";".$today);
		$myAuthorization = $request->session()->get("myAuthorization");		
		if (!$myAuthorization) {
			$myAuthorization = $request->input('x');
		}
		if ($currentAuth != $myAuthorization) {
			return(redirect("http://macrophage.cieply.com"));			
		}		
		$request->session()->put("myAuthorization",$myAuthorization);
		return(null);
	}
}
