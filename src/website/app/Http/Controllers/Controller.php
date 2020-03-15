<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param int $code
     * @param null $data
     * @param null $meta
     * @param int $status
     *
     * API response format
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiResponse ($status = true, $data = null, $meta = null, $code = 200) {
        return response()->json([
            'status' => $status,
            'meta' => $meta,
            'data' => $data,
        ], $code);
    }

    /**
     * @param $path
     * @param $file
     * @param $old_image
     *
     * @return file_name
     */
    public function uploadImage($file, $old_image = null) 
    {
        try {
            $fileName = null;
            $extension  = $file->getClientOriginalExtension();
            $fileName   = uniqid().'_'.time().'_'.date('Ymd').'.'.$extension;
            $uploadDir  = config('app.upload_images_path');
            $file->storeAs($uploadDir, $fileName, config('filesystems.public_disk'));
            if ($old_image) {
                \Storage::disk(config('filesystems.public_disk'))->delete($uploadDir.$old_image);
            }
            return $fileName;
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return null;
        }
    }
}
