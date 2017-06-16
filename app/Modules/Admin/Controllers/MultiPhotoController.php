<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Photo;


use App\Repositories\Eloquent\UploadRepository;
use App\Repositories\PhotoRepository;

class MultiPhotoController extends Controller
{
    protected $up_photos;
    protected $photo;

    public function __construct(UploadRepository $up_photos, PhotoRepository $photo){
        $this->up_photos = $up_photos;
        $this->photo = $photo;
    }
    public function getIndex()
    {
        $inst = $this->photo->all();
        return view('Admin::pages.multi-photo.index', compact('inst'));
    }

    public function getCreate()
    {
        return view('Admin::pages.multi-photo.create');
    }

    public function postCreate(Request $request)
    {
         $input = $request->all();
         $response = $this->up_photos->upload($input);
         return $response;
    }

    public function destroy($id)
    {
        $response = $this->up_photos->delete($id);
        if(!$response->getData()->error){
            return redirect()->route('')
        }
    }
}
