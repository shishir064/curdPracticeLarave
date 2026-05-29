<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';

    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'role',
        'dob',
    ];

    public function user()
    {
        return $this->BelongsTo (User::class);
    }
}
// general keeping
// book keeping
