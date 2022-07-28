<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Video;
use App\Models\ImportFolder;
use Illuminate\Support\Facades\Validator;
use DB, Hash, Setting, Auth, Exception, Enveditor;
use Illuminate\Support\Facades\Response;
use File;
use ZipArchive;
use Illuminate\Support\Facades\Schema;


class VideoController extends Controller
{

 
     public function index(Request $request)
    {
       
         $docs = Video::latest()->paginate(5);
          $folder = Video::find($request->video_id);
           $table = 'videos';
           Schema::getColumnListing($table);
        return view('files.videos.index',compact('docs','folder','table'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

      public function video_store(Request $request)
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
            return redirect()->route('videos')->with(['error','Not Save']);
        }

        //Request is valid, create new document
        $docs = Video::create([
            
            'title' => $request->title,
            'parent' => $request->parent,
            'sub_vendor' => $request->sub_vendor,
            'owner' => $request->owner
        ]);

        //Document created, return success response

        return redirect()->route('videos')->with('success','Document Folder created successfully');
    }

/*
     public function destroy(Document $document)
    {
        $document->delete();

        return redirect()->route('documents')->with('success','Document Folder Deleted successfully');
    
    }*/

        public function destroy(Request $request) {

       /* abort_if(Gate::denies('client_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');*/

        try {

            DB::begintransaction();

            $document = Video::find($request->video_id);
            
            if(!$document) {

                throw new Exception(('document not found'), 101);                
            }

            if($document->delete()) {

                DB::commit();


                return redirect()->route('videos')->with('success',' document Deleted Success !');   

            } 
            
            throw new Exception(('document delete failed'));
            
        } catch(Exception $e){

            DB::rollback();

            return redirect()->back()->with('error','Failed to Delete document !');

        }       
         
    }



    public function videoFolderView(Request $request) {
       
        
             $folder = Video::find($request->video_id);

            return view('files.videos.index')->with('folder' , $folder); 
    }

     public function download()
    {
        $path = public_path('document.zip');
        $fileName = 'document_files.zip';

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
        Video::truncate();  
    } 

/*
     public function table()  
    {   

       $table = 'documents';
    return DB::getSchemaBuilder()->getColumnListing($table);
   }*/
}
