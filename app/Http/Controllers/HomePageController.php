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
    	$countOnline = 0;
		$users = User::all();
		foreach ($users as $user) {
			if (Cache::has('is_online' . $user->id)) {
				$countOnline++;
			}
		}
		return dd($countOnline);
		return view('welcome',compact('countOnline'));
    }
}
