<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Request;
use Auth;
use App\User;
class Frequency extends Model
{
    protected $fillable = ['userId','departurePoint','arrivalPoint','route','frequency','monday','tuesday','wednesday','thursday','friday','saturday','sunday','startTime','endTime','description'];

    public static function Submit(){
    	$startPoint  = trim(Request::input('departurePoint'));
    	$endPoint = trim(Request::input('arrivalPoint'));
    	$route = trim(Request::input('route'));
    	// $frequency = trim(Request::input('frequency'));
    	$monday    = trim(Request::input('monday'));
		$tuesday = trim(Request::input('tuesday'));
		$wednesday = trim(Request::input('wednesday'));
		$thursday = trim(Request::input('thursday'));
		$friday = trim(Request::input('friday'));
		$saturday = trim(Request::input('saturday'));
		$sunday = trim(Request::input('sunday'));
		$startTime =trim(Request::input('startTime'));
		$endTime = trim(Request::input('endTime'));
		$description = trim(Request::input('description'));

		if (Auth::check()) {
			$userId = Auth::user()->id;
		}else{
			$userId = 0;
		}

		$data = array(
					'departurePoint'=>$startPoint,
					'arrivalPoint'=>$endPoint,
					'route'=>$route,
					'monday'=> $monday,
					'tuesday'=> $tuesday,
					'wednesday'=> $wednesday,
					'thursday'=> $thursday,
					'friday'=> $friday,
					'saturday'=> $saturday,
					'sunday'=> $sunday,
					'startTime'=>$startTime,
					'endTime'=>$endTime,
					'description'=>$description
				);

$save = Frequency::create($data);
if ($save) 
	{
    	return json_encode(['success'=>'Informationn have been saved successfully']);
    }  else
    {
    	return json_encode(['error'=>'Error occured while saving the information. Please try again']);
    } 

}
}
