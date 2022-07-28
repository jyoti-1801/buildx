<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\LabourRate;
use App\Models\businessDetails;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;


class EstimatesController extends Controller
{
    protected $user;
 
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function quote_index()
    {
        return $this->user->quote()->get();
    }

      public function quote_store(Request $request)
    {
        $data = $request->only('title');

        $validator = Validator::make($data, [
            'title' => 'required|string'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new quote
        $quote = $this->user->quote()->create([
            'title' => $request->title
        ]);

        //Quote created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Quote created successfully',
            'data' => $quote
        ], Response::HTTP_OK);
    }


    // Business Details


    public function business_index()
    {
        return $this->user->businessDetails()->get();
    }

      public function business_store(Request $request)
    {
        $data = $request->only('contact_name', 'business_name', 'email', 'phone_no', 'address_1', 'address_2', 'city', 'country', 'postcode','vat','vat_no', 'company_logo', 'default_insurance_note', 'default_notes','default_additional_notes');

        $validator = Validator::make($data, [
            'contact_name' => 'required|string',
            'business_name' => 'required|string',
            'email' => 'required|string',
            'phone_no' => 'required|string',
            'address_1' => 'required|string',
            'address_2' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'postcode' => 'required|string',
            'vat' => 'required|string',
            'vat_no' => 'required|string',
            'company_logo' => 'required|string'
            /*'default_insurance_note' => 'required|string',
            'default_notes' => 'required|string',
            'default_additional_notes' => 'required|string'*/
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new Business Details
        $business = $this->user->businessDetails()->create([
            'contact_name' => $request->contact_name,
            'business_name' => $request->business_name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'city' => $request->city,
            'country' => $request->country,
            'postcode' => $request->postcode,
            'vat' => $request->vat,
            'vat_no' => $request->vat_no,
            'company_logo' => $request->company_logo,
            'default_insurance_note' => $request->default_insurance_note,
            'default_notes' => $request->default_notes,
            'default_additional_notes' => $request->default_additional_notes
        ]);

        //Business Details created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Business Details created successfully',
            'data' => $business
        ], Response::HTTP_OK);
    }



     // Labour Rates


    public function labour_index()
    {
        return $this->user->labour()->get();
    }

      public function labour_store(Request $request)
    {
        $data = $request->only('site_supervisor', 'labourer', 'general_builder', 'ground_worker', 'ground_worker_excavator_dumper', 'carpenter', 'bricklayer', 'bricklaying_gang', 'plasterer','plumber','electrician', 'decorator', 'roofer', 'ceramic_porcelain_tiler');

        $validator = Validator::make($data, [
            'site_supervisor' => 'nullable|integer',
            'labourer' => 'nullable|integer',
            'general_builder' => 'nullable|integer',
            'ground_worker' => 'nullable|integer',
            'ground_worker_excavator_dumper' => 'nullable|integer',
            'carpenter' => 'nullable|integer',
            'bricklayer' => 'nullable|integer',
            'bricklaying_gang' => 'nullable|integer',
            'plasterer' => 'nullable|integer',
            'plumber' => 'nullable|integer',
            'electrician' => 'nullable|integer',
            'decorator' => 'nullable|integer',
            'roofer' => 'nullable|integer',
            'ceramic_porcelain_tiler' => 'nullable|integer'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new BLabour Rates
        $labour = $this->user->labour()->create([
            'site_supervisor' => $request->site_supervisor,
            'labourer' => $request->labourer,
            'general_builder' => $request->general_builder,
            'ground_worker' => $request->ground_worker,
            'ground_worker_excavator_dumper' => $request->ground_worker_excavator_dumper,
            'carpenter' => $request->carpenter,
            'bricklayer' => $request->bricklayer,
            'bricklaying_gang' => $request->bricklaying_gang,
            'plasterer' => $request->plasterer,
            'plumber' => $request->plumber,
            'electrician' => $request->electrician,
            'decorator' => $request->decorator,
            'roofer' => $request->roofer,
            'ceramic_porcelain_tiler' => $request->ceramic_porcelain_tiler
        ]);

        //Labour Rates created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Labour Rate created successfully',
            'data' => $labour
        ], Response::HTTP_OK);
    }

    

            public function invite_view()
        {
            return view('users.invite');
        }


    public function process_invites(Request $request)
    {

    $validator = Validator::make($request->all(), [
        'email' => 'required|email|unique:users,email'
    ]);
    $validator->after(function ($validator) use ($request) {
        if (Invite::where('email', $request->input('email'))->exists()) {
            $validator->errors()->add('email', 'There exists an invite with this email!');
        }
    });
    if ($validator->fails()) {
        return redirect(route('invite_view'))
            ->withErrors($validator)
            ->withInput();
    }
    do {
        $token = Str::random(20);
    } while (Invite::where('token', $token)->first());
    Invite::create([
        'token' => $token,
        'email' => $request->input('email')
    ]);
    $url = URL::temporarySignedRoute(
 
        'registration', now()->addMinutes(300), ['token' => $token]
    );
   
    return redirect('/users')->with('success', 'The Invite has been sent successfully');
     }




}
