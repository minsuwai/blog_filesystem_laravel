<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

class Blog
{
    public static function all()
    {
        $blogs = [];
        $files = File::files(resource_path('blogs'));
        foreach ($files as $file) {
            $blogs[] = $file->getContents();
        }
        return $blogs;
    }

    public static function find($filename)
    {
        $blog = file_get_contents(resource_path('/blogs/'.$filename.'.html'));

        return $blog;
    }
}