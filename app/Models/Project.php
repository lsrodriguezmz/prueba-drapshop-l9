<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Project extends Model
{
    use HasFactory, softDeletes;
    
    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'client_id'
    ];
    
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
