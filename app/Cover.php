<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
    protected $fillable = [
        'original', 'purple', 'mockup_1', 'mockup_2', 'mockup_3'
    ];
}
