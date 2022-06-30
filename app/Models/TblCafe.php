<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblCafe extends Model
{
    use HasFactory;
    protected $table = 'tbl_cafe';

    protected $dates = [
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        'typeName',
        'describe',
        'price',
        'image',
        'image',
    ];

    protected $hidden = [
        'deleted_at',
    ];
}
