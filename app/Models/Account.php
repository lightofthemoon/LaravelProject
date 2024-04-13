<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    public function role()
    {
        return $this->belongsTo(Role::class, 'id');
    }
    protected $table = 'account'; 
    protected $primaryKey = 'id'; 
    public $timestamps = false;
}
