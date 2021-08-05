<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function Task()
    {
        return $this->hasMany('App\Models\Task');
    }
    protected $fillable = [
            'title',
            'content',
            'person_in_charge',
        ];
}
