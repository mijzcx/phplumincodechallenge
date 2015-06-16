<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    
    protected $table = 'users';
    
    protected $fillable = [
        'username',
        'password'
    ];
    
    protected $hidden = ['password'];
    
    public function setPasswordAttribute($value) {
        $salt = 'salty salt';
        $this->attributes['password'] = md5($salt.$value);
    }
    
}