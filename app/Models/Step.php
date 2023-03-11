<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $table = 'step';
    protected $primaryKey = 'step_id';
    
    protected $fillable = [
        'step_name',
        'todo_id',
        'step_detail',
        'step_status',
        'created_at',
        'updated_at'
    ];

    public function Todo()
    {
        return $this->belongsTo('App\Models\Todo','todo_id','todo_id');
    }
}
