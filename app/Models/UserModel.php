<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    // protected $table                = 'donasi';
    protected $primaryKey           = 'id';
    protected $allowedFields = ['username', 'email', 'password_hash', 'user_created_at'];
}
