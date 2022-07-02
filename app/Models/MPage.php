<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MPage extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'title',
        'description',
        'ogp_type',
        'ogp_is_original_image',
        'is_index',
        'is_follow'
    ];
}
