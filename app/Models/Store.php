<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    protected $fillable = ['name', 'max_users', 'status'];

    public function users()
    {
        return $this->hasMany(User::class, 'store_id');
    }
}