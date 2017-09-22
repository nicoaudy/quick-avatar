<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;

    protected $fillable = ['path', 'user_id'];

    public function user()
    {
        return $this->belongsTo(Image::class);
    }

    public function path()
    {
        return config('image.path.relative') . $this->path;
    }
}
