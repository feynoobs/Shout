<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MManagePage extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'title',
        'is_sidemenu',
    ];
}
