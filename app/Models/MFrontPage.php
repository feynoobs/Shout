<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MFrontPage extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'title',
        'description',
        'ogp_type',
        'is_index',
    ];
}
