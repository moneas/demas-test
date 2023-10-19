<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users()
    {
        // TASK: fix this by adding a parameter
        return $this->hasManyThrough(Comment::class, Task::class, 'users_id');
    }
}
