<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'lesson';
    protected $primaryKey = 'id';
    public function course()
    {
        return $this->belongsTo(
            Course::class,
            'courseId',
            'id',
        );
    }
    public $timestamp = false;
}
