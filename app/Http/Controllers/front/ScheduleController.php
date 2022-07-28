<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ScheduleDemo;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
      public function index()
    {
        return view('schedule.demo');

    }


     public function demoStore(Request $request)
    {
//dd($request->all());

        $request->validate([
            'fname' => 'required',
            'phone' => 'required',
            'compnay' => 'required',
            'email' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);

         $input = $request->all();

        ScheduleDemo::create($input);
     
        return redirect()->route('schedule.demo')->with('success',' We Will Get Back soon !');
    }

}
