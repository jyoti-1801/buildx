<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\LabourRate;
use App\Models\businessDetails;
use DB, Hash, Setting, Auth, Exception, Enveditor;
use Illuminate\Support\Facades\Validator;


class EstimateController extends Controller
{

    public function index()
    {
        
        return view('estimate.estimate_desktop');

    }

    public function quote_index(Request $request)
    {
        $quotes = Quote::latest()->paginate(5);
    
        return view('admin.quotes.index',compact('quotes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
       
    

        return view('admin.quotes.create', compact('quotes'));
    }

    public function store(StoreDoctorRequest $request)
    {
  
     $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'email' => 'required',
            'speciality' => 'required',
            'about' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Doctor::create($input);
    
        return redirect()->route('admin.quotes.index')->with('success',' Doctor Added Success !');
    }

    public function edit(Request $request)
    {
        abort_if(Gate::denies('doctor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

      
        $doctor = Doctor::find($request->doctor_id);

       // dd($doctor);

        return view('admin.quotes.edit', compact('doctor'));
    }


      public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->name = $request->input('name');
        //$clinic->image = $request->input('image');
        $doctor->email = $request->input('email');
        $doctor->about = $request->input('about');
        $doctor->speciality = $request->input('speciality');
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $doctor['image'] = "$profileImage";
        }

        $doctor->update();
       // return redirect(route('admin.client.index'))->with('status','Client Updated Successfully');
        return redirect()->route('admin.quotes.index')->with('success',' Doctor Updated Success !');
      
    }

       /* if ($request->input('image', false)) {
            if (!$doctor->image || $request->input('image') !== $doctor->image->file_name) {
                $doctor->addMedia(storage_path('tmp/uploads/' . $request->input('image')))->toMediaCollection('image');
            }
        } elseif ($doctor->image) {
            $doctor->image->delete();
        }
*/

    public function show(Doctor $doctor)
    {
        abort_if(Gate::denies('doctor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$quotes->load('services');
     $quotes = Doctor::All();

        return view('admin.quotes.show', compact('quotes'));
    }

    public function destroy(Request $request) {

         abort_if(Gate::denies('doctor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {

            DB::begintransaction();

            $doctor = \App\Doctor::find($request->doctor_id);
            
            if(!$doctor) {

                throw new Exception(('doctor not found'), 101);                
            }

            if($doctor->delete()) {

                DB::commit();


                return redirect()->route('admin.doctor.index')->with('error','Failed to Delete Doctor !');

            } 
            
            throw new Exception(('doctor delete failed'));
            
        } catch(Exception $e){

            DB::rollback();

            return redirect()->back()->with('success',' Doctor Deleted Success !');


        }       
         
    }


   public function estimate()
    {   
      
        $labour = LabourRate::all();
        return view('estimate.estimate',compact('labour'));

    }


  /*public function estimate_edit($id)
    {
        $labour = LabourRate::find($id);
        return view('estimate.estimate', compact('labour'));
    }*/


 

        public function estimate_store(Request $request)
    {
        dd($request->all());
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
            return redirect()->route('estimate')->with(['error','Not Save']);
        }

        //Request is valid, create new BLabour Rates
        $labour = LabourRate::create([
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
         return redirect()->route('estimate')->with('success','Estimate Added Successfully');
    }


    /*  public function estimate_edit(Request $request) {

        try {

            $labour = LabourRate::find($request->labour_id);

            if(!$labour) { 

                throw new Exception(('labour not found'), 101);
            }

          

            return view('estimate.estimate')
                  
                    ->with('labour', $labour);
                    
            
        } catch(Exception $e) {

            return redirect()->route('estimate')->with('flash_error', $e->getMessage());
        }
    
    }
    */

 /* public function estimate_edit($id)
    {
        $user = AdminClients::find($id);
        return view('admin.client.edit', compact('user'));
    }


     public function estimate_update(Request $request)
    {
        $labour = LabourRate::find($id);
        $labour->site_supervisor= $request->input('site_supervisor');
            $labour->labourer =  $request->input('labourer');
            $labour->general_builder =  $request->input('general_builder');
            $labour->ground_worker = $request->input('ground_worker');
            $labour->ground_worker_excavator_dumper = $request->input('ground_worker_excavator_dumper');
            $labour->carpenter =  $request->input('carpenter');
            $labour->bricklayer = $request->input('bricklayer');
            $labour->bricklaying_gang =  $request->input('bricklaying_gang');
            $labour->plasterer =  $request->input('plasterer');
            $labour->plumber =  $request->pinput('lumber');
            $labour->electrician =  $request->input('electrician');
            $labour->decorator = $request->input('decorator');
            $labour->roofer = $request->rinput('roofer');
            $labour->ceramic_porcelain_tiler= $request->input('ceramic_porcelain_tiler');
        $labour->update();
       // return redirect(route('admin.client.index'))->with('status','Client Updated Successfully');
        return redirect(route('emirate',['labour_id' => $labour->id]))->with('status','Labour Updated Successfully');
      
    }*/
    
}
