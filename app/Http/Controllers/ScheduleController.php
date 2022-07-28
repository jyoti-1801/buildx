<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Phase;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;


class ScheduleController extends Controller
{
     protected $user;
 
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    
    public function index()
    {
        return $this->user->schedule()->get();
    }

    public function store(Request $request)
    {
        $data = $request->only('title', 'display_color', 'start_date', 'work_days', 'assignees', 'end_date', 'hourly_start_time', 'hourly_end_time','remainder', 'predecessor_name', 'predecessor_type','predecessor_lag', 'schedule_phase','schedule_tag', 'subs_vendors', 'all_notes', 'internal_notes','sub_notes','owner_notes','file');

        $validator = Validator::make($data, [
            'title' => 'required|string',
            'display_color' => 'required',
            'start_date' => 'required',
            'work_days' => 'required',
            'assignees' => 'required',
            'end_date' => 'required',
            'remainder' => 'required',
            'predecessor_name' => 'required',
            'predecessor_type' => 'required',
            'predecessor_lag' => 'required',
            'schedule_phase' => 'required',
            'schedule_tag' => 'required',
            'subs_vendors' => 'required',
            'all_notes' => 'required',
            'internal_notes' => 'required',
            'sub_notes' => 'required',
            'owner_notes' => 'required',
            'file' => 'required'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new schedule
        $schedule = $this->user->schedule()->create([
            'title' => $request->title,
            'display_color' => $request->display_color,
            'start_date' => $request->start_date,
            'work_days' => $request->work_days,
            'assignees' => $request->assignees,
            'end_date' => $request->end_date,
            'hourly_start_time' => $request->hourly_start_time,
            'hourly_end_time' => $request->hourly_end_time,
            'remainder' => $request->remainder,
            'predecessor_name' => $request->predecessor_name,
            'predecessor_type' => $request->predecessor_type,
            'predecessor_lag' => $request->predecessor_lag,
            'schedule_phase' => $request->schedule_phase,
            'schedule_tag' => $request->schedule_tag,
            'subs_vendors' => $request->subs_vendors,
            'all_notes' => $request->all_notes,
            'internal_notes' => $request->internal_notes,
            'sub_notes' => $request->sub_notes,
            'owner_notes' => $request->owner_notes,
            'file' => $request->file
        ]);

        //Schedule created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Schedule created successfully',
            'data' => $schedule
        ], Response::HTTP_OK);
    }



     public function show($id)
    {
        $schedule = $this->user->schedule()->find($id);
    
        if (!$schedule) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, schedule not found.'
            ], 400);
        }
    
        return $schedule;
    }



   public function update(Request $request, Schedule $schedule)
    {
        //Validate data
        $data = $request->only('title', 'display_color', 'start_date', 'work_days', 'assignees', 'end_date', 'hourly_start_time', 'hourly_end_time','remainder', 'predecessor_name', 'predecessor_type','predecessor_lag', 'schedule_phase','schedule_tag', 'subs_vendors', 'all_notes', 'internal_notes','sub_notes','owner_notes','file');

        $validator = Validator::make($data, [
            'title' => 'required|string',
            'display_color' => 'required',
            'start_date' => 'required',
            'work_days' => 'required',
            'assignees' => 'required',
            'end_date' => 'required',
            'remainder' => 'required',
            'predecessor_name' => 'required',
            'predecessor_type' => 'required',
            'predecessor_lag' => 'required',
            'schedule_phase' => 'required',
            'schedule_tag' => 'required',
            'subs_vendors' => 'required',
            'all_notes' => 'required',
            'internal_notes' => 'required',
            'sub_notes' => 'required',
            'owner_notes' => 'required',
            'file' => 'required'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, update schedule
        $schedule = $schedule->update([
            'title' => $request->title,
            'display_color' => $request->display_color,
            'start_date' => $request->start_date,
            'work_days' => $request->work_days,
            'assignees' => $request->assignees,
            'end_date' => $request->end_date,
            'hourly_start_time' => $request->hourly_start_time,
            'hourly_end_time' => $request->hourly_end_time,
            'remainder' => $request->remainder,
            'predecessor_name' => $request->predecessor_name,
            'predecessor_type' => $request->predecessor_type,
            'predecessor_lag' => $request->predecessor_lag,
            'schedule_phase' => $request->schedule_phase,
            'schedule_tag' => $request->schedule_tag,
            'subs_vendors' => $request->subs_vendors,
            'all_notes' => $request->all_notes,
            'internal_notes' => $request->internal_notes,
            'sub_notes' => $request->sub_notes,
            'owner_notes' => $request->owner_notes,
            'file' => $request->file
        ]);

        //Schedule updated, return success response
        return response()->json([
            'success' => true,
            'message' => 'Schedule updated successfully',
            'data' => $schedule
        ], Response::HTTP_OK);
    }

    
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return response()->json([
            'success' => true,
            'message' => 'Schedule deleted successfully'
        ], Response::HTTP_OK);
    
    }


    public function search($title)
    {
        $result = Schedule::where('title', 'LIKE', '%'. $title. '%')->get();
        if(count($result)){
         return Response()->json($result);
        }
        else
        {
        return response()->json(['Result' => 'No Data not found'], 404);
      }
    }


    public function index_phase()
    {
        return $this->user->phase()->get();
    }
    

     public function phase_store(Request $request)
    {
        $data = $request->only('phase_name', 'display_order', 'phase_color');

        $validator = Validator::make($data, [
            'phase_name' => 'required|string',
            'display_order' => 'required',
            'phase_color' => 'required'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new phase
        $phase = $this->user->phase()->create([
            'phase_name' => $request->phase_name,
            'display_order' => $request->display_order,
            'phase_color' => $request->phase_color
        ]);

        //Phase created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Phase created successfully',
            'data' => $phase
        ], Response::HTTP_OK);
    }


    

}
