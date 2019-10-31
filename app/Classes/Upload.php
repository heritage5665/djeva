<?php

namespace App\Classes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Filesystem\Filesystem;


class Upload
{
    private $request;
    public function __construct()
    { }
    public function uploadFile(Request $request, $fileName, $type = 'img')
    {
        if ($request->hasFile($fileName)) {
            // Get filename with extension
            $filenameWithExt = $request->file($fileName)->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file($fileName)->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $request->file($fileName)->storeAs('public/' . $type . "/" . $fileName, $fileNameToStore);
            return $fileNameToStore;
        } else {
            return false;
        }
    }
    public function downloadFile($type = 'audio', $fileName, $folder)
    {
        if (Storage::exists('public/' . $type . '/' . $folder . '/' . $fileName)) {
            Storage::download('public/' . $type . '/' . $folder . '/' . $fileName);
            return 'downloaded';
        }

        return null;
    }
    public function deleteFile($type = "audio", $fileName, $folder)
    {
        if (Storage::exists('public/' . $type . "/" . $folder . "/" . $fileName)) {
            Storage::delete('public/' . $type . "/" . $folder . "/" . $fileName);
            return true;
        }
        return false;
    }
}
