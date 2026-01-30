<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Laravel\Facades\Image;
use PhpOffice\PhpWord\IOFactory;
use setasign\Fpdi\Fpdi;


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

    public function FileUpload($file, $path, float $width = 1920, float $height = 1080)
    {
        if (! $file->isValid()) {
            throw new \Exception('File upload failed.');
        }

        $ext = $file->getClientOriginalExtension();

        if ($ext === 'pdf') {
           // $this->validatePdfSize($file); // enforce letter width & height ≤ 11"
        } elseif ($ext === 'docx') {
           // $this->validateDocxSize($file); // optional: just max size, or approximate letter height
        } else {
            throw new \Exception("Unsupported file type. Only PDF and DOCX allowed.");
        }

        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        // Store file in the given path inside storage/app/public
        $file->storeAs($path, $filename, 'public');

        // Return the public path for access
        return $path . '/' . $filename;
    }

    /**
     * PDF validation: width 21.59cm, height ≤ 27.94cm
     */
//    protected function validatePdfSize(UploadedFile $file)
//    {
//        $pdf = new Fpdi();
//
//        $pageCount = $pdf->setSourceFile($file->getRealPath());
//
//        for ($i = 1; $i <= $pageCount; $i++) {
//            $tpl = $pdf->importPage($i);
//            $size = $pdf->getTemplateSize($tpl);
//
//            // Size in points (1 pt = 0.352778 mm)
//            $widthCm  = $size['width'] * 0.0352778;
//            $heightCm = $size['height'] * 0.0352778;
//
//            if (round($widthCm, 2) !== 21.59 || $heightCm > 27.94) {
//                throw new \Exception("PDF page size must be 21.59 cm width and height ≤ 27.94 cm (Letter size). Page: $i");
//            }
//        }
//    }



    protected function validateDocxSize(UploadedFile $file)
    {
        $phpWord = IOFactory::load($file->getRealPath());
        foreach ($phpWord->getSections() as $section) {
            $size = $section->getPageSize();
            $widthCm = $size->getWidth() / 567; // approximate points → cm
            $heightCm = $size->getHeight() / 567;

            if (round($widthCm, 2) !== 21.59 || $heightCm > 27.94) {
                throw new \Exception("DOCX page size must be 21.59cm width and height ≤ 27.94cm.");
            }
        }
    }




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
