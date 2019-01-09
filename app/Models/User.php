<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User;
class User extends Model
{
    protected $table = 'admins';
    /**
     * 用户列表
     * @param string $username
     * @return mixed
     */
    public function getList(string $username = '', int $pagesize = 10) {
        return self::when($username, function ($query) use ($username) {
            $query->where('username', 'like', "%{$username}%");
        })->paginate($pagesize);
    }

}
