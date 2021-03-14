<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name','is_stuff'];
    protected $hidden = ['created_at','updated_at','is_staff'];

    public function roleUsers()
    {
        // return $this->hasMany(User::class,'role_id','id');
        return $this->hasMany(User::class);
    }

}
