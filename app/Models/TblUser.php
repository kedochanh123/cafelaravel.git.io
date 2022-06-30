<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblUser extends Model
{
    use HasFactory;
    static $TABLE_NAME = 'tbl_users';

    /**
     * @var array đây là mảng chứa các trường ghi lại khi thực hiện xóa bản ghi
     * -> đây là cơ chế giúp laravel khi xóa bản ghi thì update time vào trường thời gian xóa của record đó chứ không xóa vật lý nso đi
     */
    protected $dates = [
        'deleted_at'
    ];

    protected $fillable = [
        'id',
        'user_name',
        'email',
        'password',
        'tel',
        'birthday',
        'role',
    ];

    protected $hidden = [
        'deleted_at',
        'password'
    ];
}
