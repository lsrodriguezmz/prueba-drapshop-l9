<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Client extends Model
{
    use HasFactory, softDeletes;
    
    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];
    
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
