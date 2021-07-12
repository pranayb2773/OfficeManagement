<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitelinks extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'icon', 'url', 'params', 'parentId', 'active'
    ];
}
