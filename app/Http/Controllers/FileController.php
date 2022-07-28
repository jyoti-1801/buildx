<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use App\Models\User;
use App\Models\Document;
use App\Models\Photo;
use App\Models\ImportFolder;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;


class FileController extends Controller
{
     protected $user;
 
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function document_index()
    {
        return $this->user->document()->get();
    }

      public function document_store(Request $request)
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
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new document
        $docs = $this->user->document()->create([
            'title' => $request->title,
            'parent' => $request->parent,
            'sub_vendor' => $request->sub_vendor,
            'owner' => $request->owner
        ]);

        //Document created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Document Folder created successfully',
            'data' => $docs
        ], Response::HTTP_OK);
    }


       public function photo_index()
    {
        return $this->user->photo()->get();
    }

      public function photo_store(Request $request)
    {
        $data = $request->only('title','sub_vendor','owner');

        $validator = Validator::make($data, [
            'title' => 'required|string',
            'sub_vendor' => 'nullable',
            'owner' => 'nullable'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new Photo
        $img = $this->user->photo()->create([
            'title' => $request->title,
            'sub_vendor' => $request->sub_vendor,
            'owner' => $request->owner
        ]);

        //Photo created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Photo Folder created successfully',
            'data' => $img
        ], Response::HTTP_OK);
    }


     public function destroy(Photo $photo)
    {
        $photo->delete();

        return response()->json([
            'success' => true,
            'message' => 'Photo deleted successfully'
        ], Response::HTTP_OK);
    
    }
     

       public function import_folder_index()
    {
        return $this->user->import_folder()->get();
    }

      public function import_folder_store(Request $request)
    {
        $data = $request->only('source','project_mgmt','files','messaging','financial');

        $validator = Validator::make($data, [
            'source' => 'required',
            'project_mgmt' => 'nullable',
            'files' => 'nullable',
            'messaging' => 'nullable',
            'financial' => 'nullable'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new Folder import
        $imp = $this->user->import_folder()->create([
            'source' => $request->source,
            'project_mgmt' => $request->project_mgmt,
            'files' => $request->files,
            'messaging' => $request->messaging,
            'financial' => $request->financial
        ]);

        //Folder import created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Folder import successfully',
            'data' => $imp
        ], Response::HTTP_OK);
    }


      public function video_index()
    {
        return $this->user->video()->get();
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
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new video
        $video = $this->user->video()->create([
            'title' => $request->title,
            'parent' => $request->parent,
            'sub_vendor' => $request->sub_vendor,
            'owner' => $request->owner
        ]);

        //video created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Video Folder created successfully',
            'data' => $video
        ], Response::HTTP_OK);
    }


}
