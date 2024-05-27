<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    private function pathToImage($imageName)
    {
        // Construct the full path to the image within the storage directory
        $path = storage_path("app/public/images/{$imageName}");

        // Check if the image exists; if not, return a 404 response
        if (!Storage::exists("public/images/{$imageName}")) {
            abort(404);
        }

        return $path;
    }

    /**
     * Display the specified image.
     *
     * @param  string  $imageName
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function show($imageName)
    {
        $path = $this->pathToImage($imageName);
        // Return the image as a response
        return response()->file($path);
    }
}
