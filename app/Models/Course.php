<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'course';
    protected $primaryKey = 'id';
    protected $foreignKey = 'categoryId';
    public function category()
    {
        return $this->belongsTo(
            Category::class,
            'categoryId',
            'id',
        );
    }
    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
    public function teacher()
    {
        return $this->belongsTo(
            Teacher::class,
            'teacherId',
            'id'
        );
    }
    
    public $timestamp = true;
}
