<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Laravel\Facades\Image;


trait CommonFunctions
{

    public function ImageUpload($file, $path, int $width = 1920, int $height = 1080)
    {
        if (! $file->isValid()) {
            throw new \Exception('File upload failed.');
        }

      //  $filename = uniqid().'.'.$file->getClientOriginalExtension();

        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        // Read image using Intervention v3
        $image = Image::read($file->getRealPath());

        // Resize (maintain aspect ratio)
        $image->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        // Encode and save
        Storage::disk('public')->put($path . '/' . $filename, $image->encode());

        // Return public URL (ex: /storage/hotel/restaurants/categories/abc123.jpg)
        return $path . '/' . $filename;
       // return Storage::url($path . '/' . $filename);

    }

    public function FileUpload($file, $path)
    {
        if (! $file->isValid()) {
            throw new \Exception('File upload failed.');
        }

        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        // Store file in the given path inside storage/app/public
        $file->storeAs($path, $filename, 'public');

        // Return the public path for access
        return $path . '/' . $filename;
    }


//    public function FileUpload($file, $path)
//    {
//        if (! $file->isValid()) {
//            throw new \Exception('File upload failed.');
//        }
//
//        //  $filename = uniqid().'.'.$file->getClientOriginalExtension();
//
//        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
//
//        // Read image using Intervention v3
//        $image = Image::read($file->getRealPath());
//
//        // Resize (maintain aspect ratio)
////        $image->resize($width, $height, function ($constraint) {
////            $constraint->aspectRatio();
////            $constraint->upsize();
////        });
//
//        // Encode and save
//        Storage::disk('public')->put($path . '/' . $filename, $image->encode());
//
//        // Return public URL (ex: /storage/hotel/restaurants/categories/abc123.jpg)
//        return $path . '/' . $filename;
//        // return Storage::url($path . '/' . $filename);
//
//    }



    public function ImageDelete($path)
    {
        if (empty($path)) {
            \Log::warning('ImageDelete called with null or empty path');
            return;
        }


        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }

}
