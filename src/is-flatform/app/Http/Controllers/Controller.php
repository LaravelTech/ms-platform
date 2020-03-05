<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadImage($file) 
    {
        try {
            $fileName = null;
            $extension  = $file->getClientOriginalExtension();
            $fileName   = uniqid().'_'.time().'_'.date('Ymd').'.'.$extension;
            $uploadDir  = config('app.upload_images_path');
            $file->storeAs($uploadDir, $fileName, config('filesystems.public_disk'));
            return $fileName;
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            flash('Error!', ['name' => 'insert error'])->error();
            return;
        }
    }
}
