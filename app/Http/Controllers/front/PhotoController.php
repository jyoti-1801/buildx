<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Photo;
use App\Models\ImportFolder;
use Illuminate\Support\Facades\Validator;
use DB, Hash, Setting, Auth, Exception, Enveditor;
use Illuminate\Support\Facades\Response;
use File;
use ZipArchive;
use Illuminate\Support\Facades\Schema;


class PhotoController extends Controller
{

 
     public function index(Request $request)
    {
       
         $docs = Photo::latest()->paginate(5);
          $folder = Photo::find($request->photo_id);
           $table = 'photos';
           Schema::getColumnListing($table);
        return view('files.photos.index',compact('docs','folder','table'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

      public function photo_store(Request $request)
    {
        $data = $request->only('title', 'parent','sub_vendor','owner');

        $validator = Validator::make($data, [
            'title' => 'required|string',
            'parent' => 'required|string',
            'sub_vendor' => 'nullable|string',
            'owner' => 'nullable|string'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return redirect()->route('photos')->with(['error','Not Save']);
        }

        //Request is valid, create new Photo
        $docs = Photo::create([
            
            'title' => $request->title,
            'parent' => $request->parent,
            'sub_vendor' => $request->sub_vendor,
            'owner' => $request->owner
        ]);

        //Photo created, return success response

        return redirect()->route('Photos')->with('success','Photo Folder created successfully');
    }

/*
     public function destroy(Photo $Photo)
    {
        $Photo->delete();

        return redirect()->route('Photos')->with('success','Photo Folder Deleted successfully');
    
    }*/

        public function destroy(Request $request) {

       /* abort_if(Gate::denies('client_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');*/

        try {

            DB::begintransaction();

            $photo = Photo::find($request->photo_id);
            
            if(!$photo) {

                throw new Exception(('Photo not found'), 101);                
            }

            if($Photo->delete()) {

                DB::commit();


                return redirect()->route('photos')->with('success',' Photo Deleted Success !');   

            } 
            
            throw new Exception(('Photo delete failed'));
            
        } catch(Exception $e){

            DB::rollback();

            return redirect()->back()->with('error','Failed to Delete Photo !');

        }       
         
    }



    public function photoFolderView(Request $request) {
       
        
             $folder = Photo::find($request->photo_id);

            return view('files.Photos.index')->with('folder' , $folder); 
    }

     public function download()
    {
        $path = public_path('photo.zip');
        $fileName = 'photo_files.zip';

        return Response::download($path, $fileName, ['Content-Type: application/zip']);
    }
    

    public function downloadZip()
    {
        $zip = new ZipArchive;

        $fileName = 'my-images.zip';

        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE) {
            
            $files = File::files(public_path('images'));

            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }

            $zip->close();
        }

        return response()->download(public_path($fileName));
    }


     public function delete()  
    {  
        Photo::truncate();  
    } 

/*
     public function table()  
    {   

       $table = 'Photos';
    return DB::getSchemaBuilder()->getColumnListing($table);
   }*/
}
