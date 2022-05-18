<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'postText',
    ];

    public static function createSlug($originalString)
    {
        $baseSlug = Str::of($originalString)->slug('-');
        $slug = $baseSlug;
        $_i = 1;
        while (self::where('slug', $slug)->first()) {
            $slug = "$baseSlug.$_i";
            $_i++;
        }
        return $slug;
    }
}
