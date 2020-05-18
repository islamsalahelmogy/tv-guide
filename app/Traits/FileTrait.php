<?php

namespace App\Traits;

use Image;
use File;
use Illuminate\Support\Str;


trait FileTrait
{

    public static function uploadFile($file, $stringPath)
    {
            if (!file_exists(getcwd() . '/' . $stringPath)) {
                if (!file_exists(getcwd() . '/' . $stringPath)) {
                    mkdir(getcwd() . '/' . $stringPath, 0777, true);
                }
            }

            $image = $file;
            $imageName = Str::uuid()->toString() . '.' . $image->getClientOriginalExtension();
            $imageLocation = getcwd() . '/' . $stringPath . '/';
            $image->move($imageLocation, $imageName);
            if (!$image) {
                return false;
            }
            return $imageName;
    }
}
