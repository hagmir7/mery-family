<?php

namespace App;
class ImageHelper
{
    public static function isLargeImage($imageUrl)
    {
        list($width, $height) = getimagesize(public_path($imageUrl));
        return $width >= 500 && $height >= 500;
    }
}
