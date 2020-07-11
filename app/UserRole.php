<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    //

    public function roles() {
        return $this->belongsToMany(UserRole::class);
    }

    protected $fillable = [
        'user_id', 'user_role_id',
    ];
}
