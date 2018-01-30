<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageTargets extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'generated_id', 'name', 'width', 'metadata', 'fbx_file'
    ];

    public static function findByGeneratedID($generatedID)
    {
        return static::where('generated_id', $generatedID)->first();
    }
}
