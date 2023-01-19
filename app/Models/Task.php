<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Task extends Model
{
    use HasFactory, softDeletes;
    
    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'project_id', 'user_id'
    ];
    
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
