<?php
// app/Models/ExternalPost.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];
}
