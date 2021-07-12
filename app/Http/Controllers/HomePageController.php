<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Cache;
use Carbon\Carbon;

class HomePageController extends Controller
{
    public function homepage()
    {
    	$attendOnline = 0;
    	$cateringOnline = 0;
		$users = User::all();
		foreach ($users as $user) {
			if (Cache::has('Attendance_online' . $user->id)) {
				$attendOnline++;
			}
			elseif(Cache::has('Catering_online' . $user->id)){
				$cateringOnline++;
			}
		}
		return view('welcome',compact('attendOnline','cateringOnline'));
    }
}
