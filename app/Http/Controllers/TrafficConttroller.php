<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Frequency;
use DB;
use Cookie;
class TrafficConttroller extends Controller
{
	public function body(Request $request){
		$cookiename = $request->cookie('days');
		$Frequency = DB::table('frequencies')->groupBy('route')->get();
		return    view('interfaces.body',compact('Frequency','cookiename'));
	}

	public function submit(){
		return Frequency::submit();
	}
	public function setCookie(Request $request){
		$cookie = $request->input('days');
		$create = Cookie::queue(Cookie::make('daysName',$cookie,60));
		if ($create) {
			return json_encode(['success'=>true]);
		}else{
			return json_encode(['error'=>false]);
		}
	}

	public function routeDetails($id){
		$details = Frequency::where('route',$id)->get();
		return view('interfaces.details',compact('details'));
	}
}
