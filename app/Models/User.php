<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'user_id';
    
    protected $fillable = [
        'user_name',
        'user_gmail',
        'user_google_id',
        'user_picture',
        'password',
        'user_pronounce',
        'user_phone',
        'user_token',
        'user_api_token',
        'created_at',
        'updated_at'
    ];
    
    public function Todo()
    {
        return $this->hasMany('App\Models\Todo','user_id','user_id');
    }
}
