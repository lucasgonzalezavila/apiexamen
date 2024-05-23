<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;

class students extends Model{
    protected $fillable = [
        'id',
        'name',
        'email',
    ];
    use HasFactory;

    public function Course(){
        return $this->hasMany(course::class);
    }
}
